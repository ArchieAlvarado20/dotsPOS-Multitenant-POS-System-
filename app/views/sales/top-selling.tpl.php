  @extends("partials.main")
  @section("main-content")
	<div class="alert alert-info bg-info mt-5 text-dark">
    <span><strong>Note:</strong> This page shows the top 5 best-selling products.</span><br />
    <span>Please note that this feature is currently in the testing and development phase.</span>
</div>

    <div class="card radius-10">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Daily Sales</h5>
                </div>
                     
              </div>
              <hr />
              <div class="table-responsive">
               <table class="table align-middle mb-0 mt-2 text-center" id="example2">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Image</th>
                       <th>Name</th>
                      <th>Description</th>
                      <th>Orders</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; if(!empty($sales)):?>
                    <?php foreach($sales as $row):?>
                    <tr>
                      <td>{{$no}}</td>
                      <td><a href="">
                      <img class="radius-10" src="{{BASE_URL}}/<?=crop($row->image)?>" style="width:50%;max-width:50px;height:100%;max-height:100px;" >
                      </td>
                      <td>{{$row->p_name}}</td>
                      <td>{{$row->description}}</td>
                      <td>{{$row->view}}</td>
                    </tr>
                     
                    <?php $no++; endforeach ?>
                  <?php endif ?>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
    
  

    
  @endsection