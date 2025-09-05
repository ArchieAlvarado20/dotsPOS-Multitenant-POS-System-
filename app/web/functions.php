<?php

spl_autoload_register(function($className){

	$file = '../app/models/'. str_replace('\\', '/', $className).'.php';
	if(file_exists($file))
		require $file;
	else
		echo 'Class file not found: '.$file;
});

function redirect(string $path):void 
{
	header("Location: ".BASE_URL."/$path");
	die();
}

function dd(mixed $data, bool $stop = false):void 
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
	if($stop)
		die();
}

function esc(?string $str):?string 
{
	return htmlspecialchars($str);
}

function showError(array $errors, string $key, string $mode = 'one'):string
{
	if(!empty($errors[$key])){

		if($mode == 'all')
			return '<div class="text-danger"><small><i>'.(implode('<br>', $errors[$key])).'</i></small></div>';
		else
			return '<div class="text-danger"><small><i>'.esc($errors[$key][0]).'</i></small></div>';
	}

	return '';
}

function oldValue(string $key, string $default = '',string $method = 'post'):?string
{
	$data = ($method == 'post') ? $_POST:$_GET;
	if(!empty($data[$key]))
		return $data[$key];

	return $default;
}

function oldChecked(string $key, string $value, string $default = '',string $method = 'post'):?string
{
	$data = ($method == 'post') ? $_POST:$_GET;
	if(!empty($data[$key])){

		if($data[$key] == $value)
		return ' checked ';
	}

	return '';
}

function oldSelect(string $key, string $value, string $default = '',string $method = 'post'):?string
{
	$data = ($method == 'post') ? $_POST:$_GET;
	if(!empty($data[$key])){

		if($data[$key] == $value)
		return ' selected ';
	}

	return '';
}

function flashMessage(string $msg = '',string $to = 'delete', string $bg = 'warning', string $mode = 'success',bool $delete = false):string|bool
{
	$ses = new \Auth\Session;

	if(!empty($msg))
	{
		$ses->set('flash',$msg);
		$ses->set('flashMode',$mode);
        $ses->set('bgColor',$bg);
         $ses->set('delete',$to);
		return true;
	}else{

		$msg = $ses->get('flash');
		if(empty($msg)) return '';
		
		if($delete)
			$ses->remove('flash');

		return '<div class="alert border-0 text-center bg-'.$ses->get('bgColor').' alert-'.$ses->get('flashMode').'">'.$msg.'</div>';
	}

	return '';
}

function uploadImage(){
        $folder = "upload/";
          if(!file_exists($folder)){
            mkdir($folder,0777,true);
          }
          $ext = strtolower(pathinfo($_POST['image']['name'],PATHINFO_EXTENSION));
          $destination = $folder . generate_filename($ext);
          move_uploaded_file($_POST['image']['tmp_name'], $destination);
            $_POST['image'] = $destination;
}

function crop($filename,$size = 400, $type = 'product'){

    $ext = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
    $cropped_file = preg_replace("/\.$ext$/", "_cropped.".$ext, $filename);  
    $cropped_file = str_replace(".".$ext, "_cropped.".$ext, $filename);
    
    if(file_exists($cropped_file))
    {
        return $cropped_file;
    }
    //if file to cropped does not exist
    if(!file_exists($filename)){
        if($type == "male"){
            return 'assets/img/user_male.jpg';
        }else
        if($type == "female"){
            return 'assets/img/female.jpg';
        }else
        {
            return 'assets/img/no_image.jpg';
        }
    }
    
    //create image resource...
    switch ($ext){
                case 'jpg':
                case 'jpeg':
                    $src_image = imagecreatefromjpeg($filename);
                break;
                case 'gif':
                    $src_image = imagecreatefromgif($filename);
                break;
                case 'png':
                    $src_image = imagecreatefrompng($filename);
                break;
                default;
                    return $filename;
                break;
    }
  
    //assign values...
    $dst_x = 0;
    $dst_y = 0;
    $dst_w = (int)$size;
    $dst_h = (int)$size;

    $original_width = imagesx($src_image);
    $original_height = imagesy($src_image);
    if($original_width < $original_height){
        $src_x = 0;
        $src_y = ($original_height - $original_width) / 2;
        $src_w = $original_width;
        $src_h = $original_width;
    }else{
        $src_y = 0;
        $src_x = ($original_width - $original_height) / 2;
        $src_w = $original_height;
        $src_h = $original_height;
    }
     //set crop params...
    $dst_image = imagecreatetruecolor((int)$size,(int)$size);
    imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
    //save final image...
    switch ($ext){
        case 'jpg' :
        case 'jpeg' :
            imagejpeg($dst_image,$cropped_file);
        break;
        case 'gif' :
            imagegif($dst_image,$cropped_file);
        break;
        case 'png' :
            imagepng($dst_image,$cropped_file);
        break;
        default;
            return $filename;
        break;
        }
    
    imagedestroy($dst_image);
    imagedestroy($src_image);

    return $cropped_file;
}
  function generate_filename($ext = "jpg" || "jpeg" || "png" || "gif"){
        return hash("sha1",rand(1000, 999999999))."_".rand(1000,9999).".".$ext;
}
