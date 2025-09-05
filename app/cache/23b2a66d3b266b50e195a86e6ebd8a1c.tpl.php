  <?php $this->extends = "partials.main";?>
  <?php ob_start(); $this->currentSection = "main-content";?>

        <div class="alert alert-info bg-info mt-5 text-dark">
            <span><strong>Note:</strong> This is the Daily Sales page, where you can track sales by cashier and date range.</span><br />
            <span>It also allows you to filter cup counts and sales by cup size.</span><br />
            <span>Please note that this feature is currently in the testing and development phase.</span>
        </div>  

    <div class="card">
       <div class="card-body">
    <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Daily Sales</h5>
                </div>
                 <div class="dropdown ms-auto">
                  <?php foreach($todaySales as $count) : ?>
                        <h5>P <?php echo esc($count->total ?? 0);?></h5>
                  <?php endforeach ?>
                  </div>
              </div>
              <form action="" method="post">
                  <div class="row d-flex">
                        <div class="col-md-2">
                   <label for="bsValidation1" class="form-label">Cashier</label>
                        <select name="cashier" id="" class="form-control">
                             <?php foreach($cashier as $row): ?>
                                <option value="" selected hidden>--Select Cashier--</option>
                                <option value="<?php echo esc($row->first_name);?>"><?php echo esc($row->first_name);?></option>
                             <?php endforeach ?>
                        </select>
             
                          </div>
                          <div class="col-md-4">
                            <label for="bsValidation1" class="form-label">Date Start</label>
                            <input name="start" type="date" class="form-control" id="bsValidation1" placeholder="First Name" value="<?php echo esc($s ??  date('Y-m-d') );?>" required>
                          </div>
                              <div class="col-md-4">
                            <label for="bsValidation1" class="form-label">Date End</label>
                            <input name="end" type="date" class="form-control" id="bsValidation1" placeholder="First Name" value="<?php echo esc($e ??  date('Y-m-d') );?>" required>
                          </div>
                            <div class="col-md-2">
                            <label for="bsValidation1" class="form-label">Action</label>
                            <button class="btn bg-info text-dark form-control border-dark" name="submit">Filter</button>
                          </div>
              </div>
              </form>
            
              <!-- cups count -->
              <div class="row d-flex">
                <div class="col-md-2 mt-1">
										<label for="bsValidation1" class="form-label">Small(12oz)</label>
                    <?php foreach($small as $row): ?>
							 <input type="text" class="form-control" value="<?php echo esc($row->total ?? '0');?> " readonly>
                    <?php endforeach ?>
									</div>
                  <div class="col-md-2 mt-1">
										<label for="bsValidation1" class="form-label">Small Cups</label>
                      <?php foreach($smallCup as $row): ?>
											 <input type="text" class="form-control" value="<?php echo esc($row->qty ?? '0');?>" readonly>
                       <?php endforeach ?>
									</div>
                      <div class="col-md-2 mt-1">
										<label for="bsValidation1" class="form-label">Medium(16oz)</label>
                      <?php foreach($medium as $row): ?>
										 <input type="text" class="form-control"  value="<?php echo esc($row->total ?? '0');?>" readonly>
                     <?php endforeach ?>
									</div>
                    <div class="col-md-2 mt-1">
										<label for="bsValidation1" class="form-label">Medium Cups</label>
                     <?php foreach($mediumCup as $row): ?>
							          	 <input type="text" class="form-control" value="<?php echo esc($row->qty ?? '0');?>" readonly>
                           <?php endforeach ?>
									</div>
                  <div class="col-md-2 mt-1">
										<label for="bsValidation1" class="form-label">Large(22oz)</label>
                     <?php foreach($large as $row): ?>
											 <input type="text" class="form-control"  value="<?php echo esc($row->total ?? '0');?>" readonly>
                    <?php endforeach ?>
									</div>
                  <div class="col-md-2 mt-1">
										<label for="bsValidation1" class="form-label">Large Cups</label>
                     <?php foreach($largeCup as $row): ?>
											 <input type="text" class="form-control" value="<?php echo esc($row->qty ?? '0');?>" readonly>
                       <?php endforeach ?>
									</div>
              </div>
									
								
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
                      <th>Trans No.</th>
                      <th>Product</th>
                      <th>Description</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Total</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Cashier</th>
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
                      <td><?php echo esc($row->p_name);?></td>
                      <td><?php echo esc($row->description);?></td>
                      <td><?php echo esc($row->qty);?></td>
                      <td><?php echo esc($row->price);?></td>
                      <td><?php echo esc($row->total);?></td>
                      <td><?php echo esc($row->sdate);?></td>
                      <td><?php echo esc($row->stime);?></td>
                      <td><?php echo esc($row->first_name);?></td>
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
                        <div class="d-flex order-actions">
                       
                          <a href="<?php echo esc(BASE_URL);?>/sales/cancel-sales/<?php echo esc($row->id);?>" class="ms-4"
                            ><i class="bx bx-arrow-to-right text-danger" title="Cancel Transaction"></i
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