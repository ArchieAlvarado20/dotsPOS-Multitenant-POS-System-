  @extends("partials.main")
  @section("main-content")
<div class="alert alert-info bg-info mt-5 text-dark">
    <span><strong>Note:</strong> This is the Cancelled Sales page, where you can monitor all cancelled transactions.</span><br />
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
                      <th>Trans No.</th>
                      <th>Description</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Total</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Cancel Request</th>
                      <th>Void by Admin</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; if(!empty($sales)):?>
                    <?php foreach($sales as $row):?>
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$row->transno}}</td>
                      <td>{{$row->description}}</td>
                      <td>{{$row->qty}}</td>
                      <td>{{$row->price}}</td>
                      <td>{{$row->total}}</td>
                      <td>{{$row->sdate}}</td>
                      <td>{{$row->stime}}</td>
                      <td>{{$row->cancel_request}}</td>
                      <td>{{$row->void_by}}</td>
                      <td><?php if(($row->status) == 'Sold'):?>
                      	<div class="d-flex align-items-center text-success">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Sold</span>
											  </div>
                        <?php elseif(($row->status) == 'Cancelled'):?>
                        <div class="d-flex align-items-center text-danger">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Cancelled</span>
											</div>
                      <?php endif ?>
                      </td>
                       <td>
                        <div class="d-flex order-actions justify-content-center">
                          <a href="{{BASE_URL}}/sales/cancel-details/{{$row->id}}" class=""
                            ><i class="bx bx-show text-success"></i
                          ></a>
                        
                        </div>
                      </td>
                    </tr>
                     
                    <?php $no++; endforeach ?>
                  <?php endif ?>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
    
  

    
  @endsection