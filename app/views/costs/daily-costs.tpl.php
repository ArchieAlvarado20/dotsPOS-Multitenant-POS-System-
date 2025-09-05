  @extends("partials.main")
  @section("main-content")
<div class="alert alert-info bg-info mt-5 text-dark">
    <span><strong>Note:</strong> This is the Daily Costs page, where you can filter and record both Direct and Indirect Costs.</span><br />
    <span><strong>Direct Costs</strong> refer to items that can be stored and tracked as critical when they reach their reorder level.</span><br />
    <span><strong>Indirect Costs</strong> include non-storable items such as utility bills, one-time-use materials, or employee salaries.</span><br />
    <span>Recording all your expenses here helps ensure a more accurate sales report.</span><br />
    <span>Please note that this feature is currently in the testing and development phase.</span>
</div>

    <div class="card">
       <div class="card-body">
    <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Daily Costs</h5>
                </div>
                 <div class="dropdown ms-auto">
                  @for($todayCosts as $count) : @endphp
                        <h5>P {{$count->total ?? 0}}</h5>
                  @endfor
                  </div>
              </div>
              <form action="" method="post">
                  <div class="row d-flex">
                        <div class="col-md-2">
                   <label for="bsValidation1" class="form-label">Category</label>
                        <select name="direct" id="" class="form-control">
                                <option value="" hidden>--Select Category--</option>
                                <option <?=oldSelect('direct','Direct')?> value="Direct">Direct</option>
                                <option <?=oldSelect('direct','Indirect')?> value="Indirect">Indirect</option>
                        </select>
             
                          </div>
                          <div class="col-md-4">
                            <label for="bsValidation1" class="form-label">Date Start</label>
                            <input name="start" type="date" class="form-control" id="bsValidation1" value="{{$s ??  date('Y-m-d') }}" required>
                          </div>
                              <div class="col-md-4">
                            <label for="bsValidation1" class="form-label">Date End</label>
                            <input name="end" type="date" class="form-control" id="bsValidation1" value="{{$e ??  date('Y-m-d') }}" required>
                          </div>
                            <div class="col-md-2">
                            <label for="bsValidation1" class="form-label">Action</label>
                            <button class="btn bg-info text-dark form-control border-dark" name="submit">Filter</button>
                          </div>
              </div>
              </form>
            
              <!-- cups count -->
             
									
								
       </div>
              <hr />
    </div>
    <div class="card radius-10 mt-3">
            <div class="card-body">
              
              <div class="table-responsive">
               <table class="table align-middle mb-0 mt-2 text-center" id="example2">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Reference no.</th>
                      <th>Product</th>
                      <th>Description</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Total</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Cashier</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php  $no = 1 @endphp
                    @if(!empty($costs)):@endphp
                    @for($costs as $row):@endphp
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$row->refno}}</td>
                      <td>{{$row->p_name}}</td>
                      <td>{{$row->description}}</td>
                      <td>{{$row->qty}}</td>
                      <td>{{$row->cost}}</td>
                      <td>{{$row->total}}</td>
                      <td>{{$row->stock_at}}</td>
                      <td>{{$row->rtime}}</td>
                      <td>{{$row->stock_by}}</td>
                      <td><?php if(($row->direct) == 'Direct'):?>
                      	<div class="d-flex align-items-center text-success">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Direct</span>
											  </div>
                         <?php else:?>
                           	<div class="d-flex align-items-center text-danger">	
                              <i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                              <span>Indirect</span>
                            </div>
                      <?php endif ?>
                      </td>
                    </tr>
                     
                    @php $no++; @endphp @endfor
                  @endif
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
    
  

    
  @endsection