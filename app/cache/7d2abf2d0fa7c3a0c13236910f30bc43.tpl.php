<?php $this->extends = "auth.main";?>

<?php ob_start(); $this->currentSection = "main-content";?>
<div class="row mt-5">
	<div class="col-xl-5 mx-auto">
						<div class="card mb-5">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add New User</h5>
							</div>
							<div class="card-body p-4">
								<form method="" id="myForm" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate >
									<div class="col-md-12">
										<label for="bsValidation1" class="form-label">Position</label>
										<div class="d-flex align-items-center gap-3">
											<div class="form-check">
												<input name="role" type="radio" class="form-check-input" id="bsValidation6"  required <?=oldChecked('role','Admin')?> value="Admin">
												<label class="form-check-label" for="bsValidation6" >Admin</label>
											  </div>
											  <div class="form-check">
												<input name="role" type="radio" class="form-check-input" id="bsValidation7" <?=oldChecked('role','Cashier')?> value="Cashier" required>
												<label class="form-check-label" for="bsValidation7">Cashier</label>
											  </div>
										</div>
							
									</div>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">First Name</label>
										<input name="first_name" type="text" class="form-control" id="bsValidation1" placeholder="First Name" value="" required>
							
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Last Name</label>
										<input name="last_name" type="text" class="form-control" id="bsValidation2" placeholder="Last Name" value="<?=oldValue('last_name')?>" required>
								
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Phone</label>
										<input name="phone" type="text" class="form-control" id="bsValidation3" placeholder="Phone" value="<?=oldValue('phone')?>" required>
							
										<div class="invalid-feedback">
											Please choose a username.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation4" class="form-label">Email</label>
										<input name="email" type="email" class="form-control" id="bsValidation4" placeholder="Email" value="<?=oldValue('email')?>" required>
					
										<div class="invalid-feedback">
											Please provide a valid email.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation5" class="form-label">Password</label>
										<input value="<?=oldValue('password')?>" name="password" type="password" class="form-control" id="bsValidation5" placeholder="Password" required>
					
										<div class="invalid-feedback">
											Please choose a password.
										</div>
									</div>
										<div class="col-md-12">
										<label for="bsValidation5" class="form-label">Confirm Password</label>
										<input value="<?=oldValue('confirm_password')?>" name="confirm_password" type="password" class="form-control" id="bsValidation5" placeholder="Password" required>
										<div class="invalid-feedback">
											Please choose a password.
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-flex align-items-center gap-3">
											<div class="form-check">
												<input name="gender" type="radio" class="form-check-input" id="bsValidation6"   <?=oldChecked('gender','Male')?> value="Male" required>
												<label class="form-check-label" for="bsValidation6" >Male</label>
											  </div>
											  <div class="form-check">
												<input name="gender" type="radio" class="form-check-input" id="bsValidation7" <?=oldChecked('gender','Female')?> value="Female" required>
												<label class="form-check-label" for="bsValidation7">Female</label>
											  </div>
										</div>
										
									</div>
	
									<div class="col-md-12">
										<label for="bsValidation13" class="form-label">Address</label>
										<textarea name="address" class="form-control" id="bsValidation13" placeholder="Address ..." rows="3" required><?=oldValue('address')?></textarea>
									
										<div class="invalid-feedback">
											Please enter a valid address.
										</div>
									</div>
										<div class="col-md-12">
										<label for="bsValidation5" class="form-label">image</label>
										<input value="<?=oldValue('image')?>" name="image" type="file" class="form-control" id="bsValidation5" placeholder="Image" required>
								
										<div class="invalid-feedback">
											Please choose an Image.
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="form-check">
											<input name="verify_status" class="form-check-input" type="checkbox" id="bsValidation14" <?=oldChecked('verify_status','1')?> value="1">
											<label class="form-check-label" for="bsValidation14">Activate</label>
											<div class="invalid-feedback">
												Wait!!!
											  </div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<!-- <button type="" id="submitBtn" class="btn btn-primary px-4">Submit</button> -->
											<button type="reset" class="btn btn-light px-4"><a href="/login">Back</a></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
</div>
<?php $this->sections["$this->currentSection"] = ob_get_clean();
