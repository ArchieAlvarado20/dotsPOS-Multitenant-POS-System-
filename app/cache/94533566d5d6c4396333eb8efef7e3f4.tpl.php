  <?php $this->extends = "partials.main";?>
  <?php ob_start(); $this->currentSection = "main-content";?>

          <div class="card radius-10 mt-5">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Main Storage</h5>
                </div>
                <div class="font-22 ms-auto">
                  <i class="bx bx-dots-horizontal-rounded"></i>
                </div>
              </div>
              <hr />
              <div class="table-responsive">
                <table class="table align-middle mb-0 mt-2" id="example2">
                  <thead class="table-light">
                    <tr class="text-center">
                      <th>No.</th>
                      <th>Reference</th>
                      <th>Product code</th>
                      <th>Product Name</th>
                      <th>Description</th>
                      <th>Quantity</th>
                      <th>Cost</th>
                      <th>Stocked by</th>
                      <th>Stocked at</th>
                      <th>Stocked time</th>
                       <th>Supplier</th>
                       <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $no = 1; if(!empty($stocks)):?>
            <?php foreach($stocks as $row):?>
                    <tr class="text-center">
                      <td><?=$no?></td>
                      <td><?=$row->refno?></td>
                      <td><?=$row->pcode?></td>
                      <td><?=$row->p_name?></td>
                      <td><?=$row->description?></td>
                        <td><?=$row->qty?></td>
                       <td><?=$row->cost?></td>
                        <td><?=$row->stock_by?></td>
                       <td><?=$row->stock_at?></td>
                        <td><?=$row->rtime?></td>
                         <td><?=$row->supplier?></td>
                           <td><?php if(($row->direct) == 'Direct'):?>
                      	<div class="d-flex align-items-center text-success">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Direct</span>
											  </div>
                        <?php else:?>
                        <div class="d-flex align-items-center text-danger">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Indirect</span>
											</div>
                      <?php endif ?>
                      </td>
                      <td>
                        <div class="d-flex justify-content-center order-actions">
                          <a href="javascript:;" class="ms-4"
                            ><i class="bx bx-arrow-to-right text-danger"></i
                          ></a>
                        </div>
                      </td>
                    </tr>
                       <?php $no++; endforeach ?>
            <?php endif?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    
  

  <?php $this->sections["$this->currentSection"] = ob_get_clean();