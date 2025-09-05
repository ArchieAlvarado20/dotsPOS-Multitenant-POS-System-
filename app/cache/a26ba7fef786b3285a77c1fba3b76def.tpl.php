  <?php $this->extends = "partials.main";?>
  <?php ob_start(); $this->currentSection = "main-content";?>
	          <div class="alert alert-info bg-info text-dark mt-5">
                <span><strong>Note:</strong> This is the User Page where you can add an Admin or a Cashier account.</span><br />
                <span>We are currently in the testing and development phase.</span><br />
                <span>Click the three dots (<strong>...</strong>) to add a new user.</span><br />
            </div>


          <div class="card radius-10 ">

            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Users Account</h5>
                </div>
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
                          <hr class="dropdown-divider" />
                        </li>
                        <li>
                          <a class="dropdown-item" href="<?php echo esc(BASE_URL);?>/user-new"
                            >Add new user</a
                          >
                        </li>
                        <!-- <li>
                          <a class="dropdown-item" href="javascript:;"
                            >Coming up!</a
                          >
                        </li>
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
              <hr />
              <div class="table-responsive">
                <table class="table align-middle mb-0 mt-2  text-center" id="example2">
                  <thead class="table-light">
                    <tr>
                      <th>No.</th>
                      <!-- <th>Image</th> -->
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $no = 1; ?>
                 <?php if(!empty($users)):?>
                   <?php foreach($users as $row):?>
                    <tr  class="text-center">
                      <td><?php echo esc($no);?></td>
                      <!-- <td>
                      <img class="radius-10" src="<?php echo esc(crop($row->image));?>" style="width:50px; height:50px;object-fit: cover;border-radius:10%">
                      </td> -->
                      <td><?php echo esc($row->first_name);?></td>
                      <td><?php echo esc($row->last_name);?></td>
                      <td><?php echo esc($row->email);?></td>
                      <td><?php echo esc(ucfirst($row->role));?></td>
                      <td> <?php if(($row->verify_status) == 1):?>
                      	<div class="d-flex justify-content-center text-success">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Active</span>
											  </div>
                        <?php else: ?>
                        <div class="d-flex justify-content-center text-danger">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>De-activated</span>
											</div>
                      <?php endif ?>
                      </td>
                      <td>
                        <div class="d-flex order-actions justify-content-center">
                          <a href="<?php echo esc(BASE_URL);?>/user-profile/<?php echo esc($row->id);?>" class="ms-4"
                            ><i class="bx bx-show text-success"></i
                          ></a>
                        </div>
                      </td>
                    </tr>
                       <?php $no++; ?>
                       <?php endforeach ?>
                      <?php endif ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  <?php $this->sections["$this->currentSection"] = ob_get_clean();