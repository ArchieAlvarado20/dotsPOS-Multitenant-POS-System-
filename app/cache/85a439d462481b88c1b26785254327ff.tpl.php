  <?php $this->extends = "partials.main";?>
  <?php ob_start(); $this->currentSection = "main-content";?>
		<div class="alert alert-info bg-info mt-5 text-dark">
    <span><strong>Note:</strong> This page displays all indirect costs.</span><br />
    <span>Please note that this feature is currently in the testing and development phase.</span>
</div>

<div class="card radius-10 mt-5">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Billing/Indirect Costs</h5>
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
                          <a class="dropdown-item" href="javascript:;"
                            >Add new Indirect Cost</a
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
                            >Coming up!</a
                          >
                        </li> -->
                      </ul>
                    </div>
              </div>
              <hr />
              <div class="table-responsive">
                <table class="table align-middle mb-0 mt-2 text-center" id="example2">
                  <thead class="table-light">
                    <tr>
                      <th>No.</th>
                      <th>Reference No.</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Quanity</th>
                      <th>Cost</th>
                       <th>Total</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $no = 1;if(!empty($billing)):?>
            <?php foreach($billing as $row):?>
                    <tr>
                      <td><?=$no?></td>
                      <td><?=$row->refno?></td>
                      <td><?=$row->p_name?></td>
                      <td><?=$row->description?></td>
                      <td><?=$row->qty?></td>
                      <td><?=$row->cost?></td>
                      <td><?=$row->total?></td>
                      <td><?=$row->stock_at?></td>
                      <td><?=$row->rtime?></td>
                      <td><?php if(($row->direct) == 'Direct'):?>
                      	<div class="d-flex align-items-center text-success">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>POS</span>
											  </div>
                        <?php else:?>
                        <div class="d-flex align-items-center text-danger">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Indirect</span>
											</div>
                      <?php endif ?>
                      </td>
                      <td>
                        <div class="d-flex order-actions">
                          <a href="javascript:;" class=""
                            ><i class="bx bx-edit text-success"></i
                          ></a>
                          <a href="javascript:;" class="ms-4"
                            ><i class="bx bx-trash text-danger"></i
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