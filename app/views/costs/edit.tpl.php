  @extends("partials.main")
  @section("main-content")
	
<div class="row mt-5">
					<div class="col-xl-6 mx-auto">
						<div class="card mb-5">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add New Cost</h5>
							</div>
							<div class="card-body p-4">
								<form method="POST" enctype="multipart/form-data" id="myForm" class="row g-3 needs-validation" novalidate>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Product Code</label>
										<input name="pcode" type="text" class="form-control" id="bsValidation1" placeholder="Product Code" value="<?=oldValue('pcode',$product->pcode)?>" readonly>
										<?=showError($errors,'pcode')?>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Cost Name</label>
										<input name="p_name" type="text" class="form-control" id="bsValidation2" placeholder="Product Name" value="<?=oldValue('p_name',$product->p_name)?>" required>
										<?=showError($errors,'p_name')?>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Description</label>
										<input name="description" type="text" class="form-control" id="bsValidation3" placeholder="Description" required value="<?=oldValue('description',$product->description)?>">
											<?=showError($errors,'description')?>
										<div class="invalid-feedback">
											Please choose a Description.
										  </div>
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Cost</label>
										<input name="cost" type="text" class="form-control" id="bsValidation3" placeholder="Cost" value="<?=oldValue('cost',$product->cost)?>" required>
											<?=showError($errors,'cost')?>
										<div class="invalid-feedback">
											Please choose a Cost.
										  </div>
									</div>

									<div class="col-md-12">
										<label for="bsValidation9" class="form-label">Category</label>
										<input type="text" name="" value="Indirect" class="form-control" readonly>
									</div>
										
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4" id="submitBtn" disabled>Submit</button>
											<button type="reset" class="btn btn-light px-4"><a href="{{BASE_URL}}/product/profile/{{$product->id}}">Back</a></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
                @endsection