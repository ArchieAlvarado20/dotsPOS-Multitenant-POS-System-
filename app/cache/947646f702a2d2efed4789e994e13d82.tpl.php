  <?php $this->extends = "partials.main";?>
  <?php ob_start(); $this->currentSection = "main-content";?>
			<div class="alert alert-info bg-info mt-5 text-dark">
          <span><strong>Note:</strong> This is the Indirect Costs page. It displays non-storable items such as utility bills, one-time-use materials, and employee salaries.</span><br />
          <span>You can also add a new indirect cost item by clicking the (<strong>...</strong>) button below.</span><br />
          <span>Please note that this feature is currently in the testing and development phase.</span>
      </div>

<div class="card radius-10">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Indirect Costs and Billing</h5>
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
                          <a class="dropdown-item" href="<?php echo esc(BASE_URL);?>/costs/indirect-new"
                            >Add new Indirect Items</a
                          >
                        </li>
                        
                      </ul>
                    </div>
              </div>
              <hr />
              <div class="table-responsive">
                <table class="table align-middle mb-0 mt-2 text-center" id="example2">
                  <thead class="table-light">
                    <tr>
                      <th>No.</th>
                      <th>Pcode</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Cost</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $no = 1;if(!empty($costs)):?>
            <?php foreach($costs as $row):?>
                    <tr>
                      <td><?=$no?></td>
                      <td><?=$row->pcode?></td>
                      <td><?=$row->p_name?></td>
                      <td><?=$row->description?></td>
                      <td><?=$row->cost?></td>
                      <td ><?php if(($row->category) != 1):?>
                      	<div class="justify-item-center text-success">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>POS</span>
											  </div>
                        <?php else:?>
                        <div class="justify-item-center text-danger" >	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Indirect</span>
											</div>
                      <?php endif ?>
                      </td>
                      <td>
                        <div class="d-flex order-actions justify-content-center">
                          <!-- <a href="javascript:;" class=""
                            ><i class="bx bx-edit text-success"></i
                          ></a> -->
                          <a href="<?php echo esc(BASE_URL);?>/costs/profile/<?php echo esc($row->id);?>" class="ms-4"
                            ><i class="bx bx-show text-danger"></i
                          ></a>
                        </div>
                      </td>
                    </tr>
                       <?php $no++;endforeach ?>
            <?php endif?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    

  <?php $this->sections["$this->currentSection"] = ob_get_clean();