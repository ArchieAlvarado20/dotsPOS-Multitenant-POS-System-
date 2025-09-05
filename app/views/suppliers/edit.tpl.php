  @extends("partials.main")
  @section("main-content")
	
<div class="row mt-5">
					<div class="col-xl-6 mx-auto">
						<div class="card mb-5">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add New Supplier</h5>
							</div>
							<div class="card-body p-4">
								<form method="post" class="row g-3 needs-validation" id="myForm" novalidate>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Supplier</label>
										<input name="supplier" type="text" class="form-control" id="bsValidation1" placeholder="Supplier" value="{{oldValue('supplier',$row->supplier)}}" required>
										<?=showError($errors,'supplier')?>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Email</label>
										<input name="email" type="email" class="form-control" id="bsValidation2" placeholder="Email" value="{{oldValue('email',$row->email)}}" required>
											<?=showError($errors,'email')?>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Phone</label>
										<input name="phone" type="text" class="form-control" id="bsValidation3" placeholder="Phone" value="{{oldValue('phone',$row->phone)}}" required>
										<?=showError($errors,'phone')?>
										<div class="invalid-feedback">
											Please choose a username.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation4" class="form-label">Contact Person</label>
										<input name="contact_person" type="text" class="form-control" id="bsValidation4" placeholder="Contact Person" value="{{oldValue('contact_person',$row->contact_person)}}" required>
											<?=showError($errors,'contact_person')?>
										<div class="invalid-feedback">
											Please provide a valid email.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation13" class="form-label">Address</label>
										<textarea name="address" class="form-control" id="bsValidation13" placeholder="Address ..." rows="3" required>{{oldValue('address',$row->address)}}</textarea>
											<?=showError($errors,'address')?>
										<div class="invalid-feedback">
											Please enter a valid address.
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4" id="submitBtn" disabled>Submit</button>
											<button type="reset" class="btn btn-light px-4"><a href="{{BASE_URL}}/supplier/profile/{{$row->id}}">Back</a></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                @endsection