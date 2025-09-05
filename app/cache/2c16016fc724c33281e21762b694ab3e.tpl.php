<!DOCTYPE html>
<html lang="en" class="dark-theme">
  <!-- Mirrored from codervent.com/syndron/demo/vertical/auth-basic-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 03:58:38 GMT -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="<?=BASE_URL?>/assets/images/dotslogo.png" type="image/png" />
    <!--plugins-->
    <link href="<?=BASE_URL?>/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link
      href="<?=BASE_URL?>/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
      rel="stylesheet"
    />
    <link
      href="<?=BASE_URL?>/assets/plugins/metismenu/css/metisMenu.min.css"
      rel="stylesheet"
    />
    <!-- loader-->
    <link href="<?=BASE_URL?>/assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?=BASE_URL?>/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?=BASE_URL?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=BASE_URL?>/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap"
      rel="stylesheet"
    />
    <link href="<?=BASE_URL?>/assets/css/app.css" rel="stylesheet" />
    <link href="<?=BASE_URL?>/assets/css/icons.css" rel="stylesheet" />
    <title><?php echo esc($title);?></title>
  </head>

  <body class="bg-dark" >
    <!--wrapper-->
    <div class="wrapper">
      <div
        class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0"
      >

    <?php echo $this->sections["main-content"];?>

      </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="<?=BASE_URL?>/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?=BASE_URL?>/assets/js/jquery.min.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

    <script src="<?=BASE_URL?>/assets/js/index.js"></script>
    <!--app JS-->
    <script src="<?=BASE_URL?>/assets/js/app.js"></script>
    <!--Password show & hide js -->
    <script>
      $(document).ready(function () {
        $("#show_hide_password a").on("click", function (event) {
          event.preventDefault();
          if ($("#show_hide_password input").attr("type") == "text") {
            $("#show_hide_password input").attr("type", "password");
            $("#show_hide_password i").addClass("bx-hide");
            $("#show_hide_password i").removeClass("bx-show");
          } else if (
            $("#show_hide_password input").attr("type") == "password"
          ) {
            $("#show_hide_password input").attr("type", "text");
            $("#show_hide_password i").removeClass("bx-hide");
            $("#show_hide_password i").addClass("bx-show");
          }
        });
      });
    </script>
    <!--app JS-->
    <script src="<?=BASE_URL?>/assets/js/app.js"></script>
  </body>

  <!-- Mirrored from codervent.com/syndron/demo/vertical/auth-basic-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 03:58:38 GMT -->
</html>
