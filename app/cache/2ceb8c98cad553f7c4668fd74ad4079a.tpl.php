  <?php $this->extends = "partials.main";?>
  <?php ob_start(); $this->currentSection = "main-content";?>
	
<div class="row mt-5">
					<div class="col-xl-6 mx-auto">
						<div class="card mb-5">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add New Product</h5>
							</div>
							<div class="card-body p-4">
								<form method="POST" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Product Code</label>
										<input name="pcode" type="text" class="form-control" id="bsValidation1" placeholder="Product Code" value="PC-<?php echo esc( $beta );?>" readonly>
										<?=showError($errors,'pcode')?>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Product Name</label>
										<input name="p_name" type="text" class="form-control" id="bsValidation2" placeholder="Product Name" value="<?=oldValue('p_name')?>" required>
										<?=showError($errors,'p_name')?>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Description</label>
										<input name="description" type="text" class="form-control" id="bsValidation3" placeholder="Description" required value="<?=oldValue('description')?>">
											<?=showError($errors,'description')?>
										<div class="invalid-feedback">
											Please choose a Description.
										  </div>
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Price</label>
										<input name="price" type="text" class="form-control" id="bsValidation3" placeholder="Price" value="<?=oldValue('price')?>" required>
											<?=showError($errors,'price')?>
										<div class="invalid-feedback">
											Please choose a Price.
										  </div>
									</div>

									<div class="col-md-12">
										<label for="bsValidation9" class="form-label">Category</label>
										<select id="bsValidation9" class="form-select" required name="category">
											<option value="" selected hidden>--Select--</option>
											<option <?=oldSelect('category', '11')?> value="11" >Small</option>
											<option <?=oldSelect('category', '22')?> value="22" >Medium</option>
											<option <?=oldSelect('category', '33')?> value="33" >Large</option>
											<option <?=oldSelect('category', '44')?> value="44" >Addons</option>
										</select>
										<?=showError($errors,'category')?>
										<div class="invalid-feedback">
										   Please select a valid Category.
										</div>
									</div>
									
									<div class="mb-3">
										<label for="inputProductDescription" class="form-label">Product Images</label>
										<input id="" class="form-control" id="bsValidation5" type="file" name="image" placeholder="Image" required>
										<div class="invalid-feedback">
										   Please select a valid Image.
										</div>
									</div>
										
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Submit</button>
											<button type="reset" class="btn btn-light px-4"><a href="<?php echo esc(BASE_URL);?>/product">Back</a></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
                <?php $this->sections["$this->currentSection"] = ob_get_clean();