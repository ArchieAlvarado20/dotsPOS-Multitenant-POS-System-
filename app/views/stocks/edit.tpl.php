  @extends("partials.main")
  @section("main-content")
	
<div class="row mt-5">
					<div class="col-xl-6 mx-auto">
						<div class="card mb-5">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add New Raw Item</h5>
							</div>
							<div class="card-body p-4">
								<form method="POST" enctype="multipart/form-data" id="myForm" class="row g-3 needs-validation" novalidate>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Items Code</label>
										<input name="pcode" type="text" class="form-control" id="bsValidation1" placeholder="Item Code" value="{{$row->pcode}}" readonly>
										<?=showError($errors,'pcode')?>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Items Name</label>
										<input name="p_name" type="text" class="form-control" id="bsValidation2" placeholder="Item Name" value="{{oldValue('p_name',$row->p_name)}}" required>
										<?=showError($errors,'p_name')?>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Description</label>
										<input name="description" type="text" class="form-control" id="bsValidation3" placeholder="Description" required value="<?=oldValue('description',$row->description)?>">
											<?=showError($errors,'description')?>
										<div class="invalid-feedback">
											Please choose a Description.
										  </div>
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Cost</label>
										<input name="cost" type="text" class="form-control" id="bsValidation3" placeholder="Cost" value="<?=oldValue('cost',$row->cost)?>" required>
											<?=showError($errors,'cost')?>
										<div class="invalid-feedback">
											Please choose a Price.
										  </div>
									</div>

									<div class="col-md-12">
										<label for="bsValidation9" class="form-label">Category</label>
									<input type="text" class="form-control" name="category" value="{{$row->category == 0 ? 'Direct' : 'Indeirect'}}" readonly>
									</div>
									
								<div class="col-md-12">
										<label for="" class="form-label">Image</label>
										<div class="row">
											<div class="col-10">
											<input  name="image" type="file" class="form-control col-6" id="" placeholder="Image">
											</div>

										<div class="col-2">
											<center><img class="rounded me-lg-2 mx-auto" src="{{BASE_URL}}/{{$row->image}}" alt=""  style="width:100%;max-width:100px;height:100%;max-height:100px;"></center>
										</div>
										</div>
										 <?=showError($errors,'image')?> 
										<div class="invalid-feedback">
											Please choose an Image.
										</div>
										
									</div>
										
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4" id="submitBtn" disabled>Submit</button>
											<button type="reset" class="btn btn-light px-4"><a href="{{BASE_URL}}/items/profile/{{$row->id}}">Back</a></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
                @endsection