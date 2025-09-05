@extends("partials.main")
@section("main-content")

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 mt-5">
				<div class="breadcrumb-title pe-3 user_profile cursor-pointer"><a href="{{BASE_URL}}/user"><i class="bx bx-user pe-2"></i>User Profile</a></div>
				
				 <div class="dropdown ms-auto">
                      <a
                        class="dropdown-toggle dropdown-toggle-nocaret"
                        href="#"
                        data-bs-toggle="dropdown"
                      >
                        <i
                          class="bx bx-dots-horizontal-rounded font-22 text-option"
                        ></i>
                      </a>
                      <ul class="dropdown-menu">
                         <li>
                       
                        </li>
                        <li class="edit_btn">
                          <button class="dropdown-item" href=""
                            >Edit Profile</button
                          >
                        </li>
                          <a class="dropdown-item" href="javascript:;"
                            >Delete Account</a
                          >
                        </li>
                        <!-- <li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:;"
                            >Coming upsss!</a
                          >
                        </li> -->
                      </ul>
                    </div>
				</div>
				<!--end breadcrumb-->
					<div class="col-xl-6 mx-auto">
						<div class="card mb-5">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add New User</h5>
							</div>
							<div class="card-body p-4">
								<form method="POST" enctype="multipart/form-data" class="row g-3 needs-validation " id="myForm" novalidate >
									<div class="col-md-12">
										<label for="bsValidation1" class="form-label">Position</label>
										
										<div class="d-flex align-items-center gap-3">
											<div class="form-check" name="role">
												<input name="role" type="radio" class="form-check-input" id="bsValidation6"  <?=oldChecked('role','Admin'), $users->role == 'Admin' ? 'checked' : '' ?> value="Admin">
												<label class="form-check-label" for="bsValidation6" >Admin</label>
											  </div>
											  <div class="form-check">
												<input name="role" type="radio" class="form-check-input" id="bsValidation7"  <?=oldChecked('role','Cashier') , $users->role == 'Cashier' ? 'checked' : ''?> value="Cashier" >
												<label class="form-check-label" for="bsValidation7">Cashier</label>
											  </div>
										</div>
										 <?=showError($errors,'role')?> 
									</div>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">First Name</label>
										<input name="first_name" type="text" class="form-control" id="bsValidation1" placeholder="First Name" value="{{oldValue('first_name',$users->first_name)}}" required>
							 <?=showError($errors,'first_name')?> 
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Last Name</label>
										<input name="last_name" type="text" class="form-control" id="bsValidation2" placeholder="Last Name" value="{{oldValue('last_name',$users->last_name)}}" required>
										 <?=showError($errors,'last_name')?> 
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Phone</label>
										<input name="phone" type="text" class="form-control" id="bsValidation3" placeholder="Phone" value="{{oldValue('phone',$users->phone)}}" required>
										 <?=showError($errors,'phone')?> 
										<div class="invalid-feedback">
											Please choose a username.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation4" class="form-label">Email</label>
										<input name="email" type="email" class="form-control" id="bsValidation4" placeholder="Email" value="{{oldValue('email',$users->email)}}" required>
										 <?=showError($errors,'email')?> 
										<div class="invalid-feedback">
											Please provide a valid email.
										  </div>
									</div>
									<div class="col-md-12">
										<div class="d-flex align-items-center gap-3">
											<div class="form-check">
												<input name="gender" type="radio" class="form-check-input" id="bsValidation6" <?=oldChecked('gender','Male'),$users->gender == 'Male' ? 'checked' : ''?> value="Male">
												<label class="form-check-label" for="bsValidation6" >Male</label>
											  </div>
											  <div class="form-check">
												<input name="gender" type="radio" class="form-check-input" id="bsValidation7" <?=oldChecked('gender','Female') , $users->gender == 'Female' ? 'checked' : ''?> value="Female">
												<label class="form-check-label" for="bsValidation7">Female</label>
											  </div>
										</div>
										 <?=showError($errors,'gender')?> 
									</div>
	
									<div class="col-md-12">
										<label for="bsValidation13" class="form-label">Address</label>
										<textarea name="address" class="form-control" id="bsValidation13" placeholder="Address ..." rows="3" required>{{oldValue('address',$users->address)}}</textarea>
										 <?=showError($errors,'address')?> 
										<div class="invalid-feedback">
											Please enter a valid address.
										</div>
									</div>
										<div class="col-md-12">
										<label for="" class="form-label">image</label>
										<div class="row">
											<div class="col-10">
											<input  name="image" type="file" class="form-control col-6 .img" id="" placeholder="Image">
											</div>

										<div class="col-2">
											<center><img class="rounded me-lg-2 mx-auto .file" src="../{{$users->image}}" alt=""  style="width:100%;max-width:100px;height:100%;max-height:100px;"></center>
										</div>
										</div>
										 <?=showError($errors,'image')?> 
										<div class="invalid-feedback">
											Please choose an Image.
										</div>
										
									</div>
									
									<div class="col-md-12">
										<div class="form-check">
											<input type="hidden" name="verify_status" value="0">
											<input name="verify_status" class="form-check-input" type="checkbox" id="bsValidation14" <?=oldChecked('verify_status','1') ,$users->verify_status == 1 ? 'checked' : ''?> value="1">
											<label class="form-check-label" for="bsValidation14">Activate</label>
											<div class="invalid-feedback">
												Wait!!!
											  </div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4 " id="submitBtn" disabled>Submit</button>
											<button type="reset" class="btn btn-light px-4"><a href="{{BASE_URL}}/user-profile/{{$users->id}}">Back</a></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

			

@endsection