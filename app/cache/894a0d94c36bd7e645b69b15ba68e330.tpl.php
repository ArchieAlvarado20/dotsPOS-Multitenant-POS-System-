  <?php $this->extends = "partials.main";?>
  <?php ob_start(); $this->currentSection = "main-content";?>
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
                      <td><?php echo esc($no);?></td>
                      <td><?php echo esc($row->transno);?></td>
                      <td><?php echo esc($row->description);?></td>
                      <td><?php echo esc($row->qty);?></td>
                      <td><?php echo esc($row->price);?></td>
                      <td><?php echo esc($row->total);?></td>
                      <td><?php echo esc($row->sdate);?></td>
                      <td><?php echo esc($row->stime);?></td>
                      <td><?php echo esc($row->cancel_request);?></td>
                      <td><?php echo esc($row->void_by);?></td>
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
                          <a href="<?php echo esc(BASE_URL);?>/sales/cancel-details/<?php echo esc($row->id);?>" class=""
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
    
  

    
  <?php $this->sections["$this->currentSection"] = ob_get_clean();