  <?php $this->extends = "partials.main";?>
  <?php ob_start(); $this->currentSection = "main-content";?>

   <div class="card radius-10 mt-5">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Supplier Account</h5>
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
                          <a class="dropdown-item" href="<?php echo esc(BASE_URL);?>/supplier-new"
                            >Add new Supplier</a
                          >
                        </li>
                     
                      </ul>
                    </div>
              </div>
          <hr/>
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table id="example2" class="table align-middle mb-0 mt-2  text-center">
                  <thead class="table-light">
                    <tr>
                      <th>No.</th>
                      <th>Supplier</th>
                      <th>Email</th>             
                      <th>Contact Person</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; if(!empty($supplier)):?>
                        <?php foreach($supplier as $suppliers):?>
                    <tr>
                      <td><?=$no?></td>
                      <td><?=$suppliers->supplier?></td>
                      <td><?=$suppliers->email?></td>
                      <td><?=$suppliers->contact_person?></td>
                      <td>
                         <div class="d-flex order-actions justify-content-center">
                          <a href="<?php echo esc(BASE_URL);?>/supplier/profile/<?php echo esc($suppliers->id);?>" class=""
                            ><i class="bx bx-show text-success"></i
                          ></a>
                        </div>
                      </td>
                    </tr>
                     <?php $no++; endforeach?>
                      <?php endif ?>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        


  <?php $this->sections["$this->currentSection"] = ob_get_clean();