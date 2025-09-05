  <?php $this->extends = "partials.main";?>
  <?php ob_start(); $this->currentSection = "main-content";?>
<div class="alert alert-info bg-info mt-5 text-dark">
    <span><strong>Note:</strong> This is the Cancel Sales page, where you can cancel a transaction by specifying the admin who voided the item, the requesting cashier, and the reason for cancellation.</span><br />
    <span>The cancelled item will be moved directly to the Cancelled Sales page.</span><br />
    <span>Please note that this feature is currently in the testing and development phase.</span>
</div>


<div class="row mt-5 justify-content-center">
					<div class="col-xl-5">
						<div class="card mb-5">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Transaction Details</h5>
							</div>
							<div class="card-body p-4">
								<form method="" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Transaction No.</label>
										<input name="" type="text" class="form-control" id="bsValidation1" placeholder="" value="<?php echo esc( $sales->transno );?>" readonly>
									</div>

									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Product Code</label>
										<input name="" type="text" class="form-control" id="bsValidation2" placeholder="" value="<?php echo esc($sales->pcode);?>" readonly>
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Description</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" readonly value="<?php echo esc($sales->description);?>">
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Price</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="<?php echo esc($sales->price);?>" readonly>
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Quantity</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="<?php echo esc($sales->qty);?>" readonly>
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Total</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="<?php echo esc($sales->total);?>" readonly>
									</div>
									
									<div class="col-md-12 mb-3">
										<label for="bsValidation3" class="form-label">Date Purchased</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="<?php echo esc($sales->sdate);?>" readonly>
									</div>
								</form>
							</div>
						</div>
					</div>
						<div class="col-xl-5">
						<div class="card mb-5">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Cancelation Details</h5>
							</div>
							<div class="card-body p-4">
								<form method="POST" class="row g-3 needs-validation" novalidate>
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Void by Admin</label>
										<select name="void_by" type="text" class="form-select" id="bsValidation3" 
										placeholder="" required>
											<?php foreach($admin as $row): ?>
  											<option value="" hidden>-- Select Admin --</option>
											<option  <?=oldSelect('void_by', '<?php echo esc($row->first_name);?>')?> value="<?php echo esc($row->first_name);?>"><?php echo esc($row->first_name);?></option>
										    <?php endforeach ?>
										</select>
										<div class="invalid-feedback">
											Please choose an Admin.
										  </div>
										
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Void Requested By</label>
										<select name="cancel_request" type="text" class="form-select" id="bsValidation3" 
										placeholder="" required>
											<?php foreach($cashier as $row): ?>
  											<option value="" hidden>-- Select Cashier --</option>
											<option  <?=oldSelect('cancel_request','<?php echo esc($row->first_name);?>')?>  value="<?php echo esc($row->first_name);?>"><?php echo esc($row->first_name);?></option>
										    <?php endforeach ?>
										</select>
										<div class="invalid-feedback">
											Please choose an Cashier.
										  </div>
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Reason to Void</label>
										<select id="bsValidation3" class="form-select" required name="reason">
											<option value="" hidden>--Select Reason--</option>
											<option <?=oldSelect('reason', 'Return')?> value="Return" >Return</option>
											<option <?=oldSelect('reason', 'Exchange')?> value="Exchange" >Exchange</option>
											<option <?=oldSelect('reason', 'Damage')?> value="Damage" >Damage</option>
											<option <?=oldSelect('reason', 'Expired')?> value="Expired" >Expired</option>
										</select>
										<div class="invalid-feedback">
										   Please choose Reason.
										</div>
									</div>
										
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Submit</button>
											<a href="<?php echo esc(BASE_URL);?>/sales/daily-sales" class="btn btn-light px-4">Back</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
                <?php $this->sections["$this->currentSection"] = ob_get_clean();