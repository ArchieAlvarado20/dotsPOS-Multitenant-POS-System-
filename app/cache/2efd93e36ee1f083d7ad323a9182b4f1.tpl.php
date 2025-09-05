<?php $this->extends = "partials.main";?>
<?php ob_start(); $this->currentSection = "main-content";?>
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 mt-5">
					
					<div class="breadcrumb-title pe-3 user_profile cursor-pointer"><a href="<?php echo esc(BASE_URL);?>/product"><i class="bx bx-cookie pe-2"></i>Product Profile</a></div>
			
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
                        <li class="">
                          <a class="dropdown-item" href="<?php echo esc(BASE_URL);?>/product/edit/<?php echo esc($product->id);?>"
                            >Edit Profile</a
                          >
                        </li>
                          <a class="dropdown-item" href="<?php echo esc(BASE_URL);?>/product/delete/<?php echo esc($product->id);?>" onclick="return confirm('Are you sure you want to delete this Account?')"
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

				
				<div class="container full_profile">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
                                   
										<div class="d-flex flex-column align-items-center text-center">
											<img src="<?php echo esc(BASE_URL);?>/<?php echo esc($product->image);?>" alt="Admin" class="rounded-10 radius-10 p-1" style="width:100px; height:100px;object-fit: cover;border-radius:10%"> 
											<div class="mt-3">
												<h4><?php echo esc($product->p_name);?></h4>
												<p><?php echo esc($product->pcode);?></p>
												<?php $category = [
														11 => 'Small',
														22 => 'Medium',
														33 => 'Large',
														44 => 'Addons'
												];?>
												
												<button class="btn btn-primary">
												<?php echo esc($category[$product->category] ?? 'Unlisted');?>
												</button>
												<button class="btn btn-outline-warning">POS</button>
											</div>
										</div>
										<hr class="my-4" />
										<!-- <ul class="list-group list-group-flush">
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
												<span class="text-secondary">https://codervent.com</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
												<span class="text-secondary">codervent</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
												<span class="text-secondary">@codervent</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
												<span class="text-secondary">codervent</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
												<span class="text-secondary">codervent</span>
											</li>
										</ul> -->
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card profile">
									<div class="card-body">
										<div class="breadcrumb-title pe-3 user_profile cursor-pointer mb-3"><i class="bx bx-cookie pe-2"></i>Product Description</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Product Code</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<h6><?php echo esc($product->pcode);?></h6>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Product Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<h6><?php echo esc($product->p_name);?></h6>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Product Description</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<h6 class="mb-0"><?php echo esc($product->description );?></h6>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Price</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<h6 class="mb-0"><?php echo esc($product->price);?></h6>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Size</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<h6><?php echo esc($category[$product->category]);?></h6>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="row">
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">
												<h5 class="d-flex align-items-center mb-3">Performance Status</h5>
												<p>Total Job Days</p>
												<div class="progress mb-3" style="height: 5px">
													<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p>Total Days Absent</p>
												<div class="progress mb-3" style="height: 5px">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p>One Page</p>
												<div class="progress mb-3" style="height: 5px">
													<div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p>Mobile Template</p>
												<div class="progress mb-3" style="height: 5px">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p>Backend API</p>
												<div class="progress" style="height: 5px">
													<div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			

<?php $this->sections["$this->currentSection"] = ob_get_clean();