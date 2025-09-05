  <?php $this->extends = "partials.main";?>
  <?php ob_start(); $this->currentSection = "main-content";?>

          <div class="card radius-10 mt-5">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Inventory</h5>
                </div>
                <!-- <div class="font-22 ms-auto">
                  <i class="bx bx-dots-horizontal-rounded"></i>
                </div> -->
              </div>
              <hr />
              <div class="table-responsive">
                <table class="table align-middle mb-0 mt-2" id="example2">
                  <thead class="table-light">
                    <tr class="text-center">
                      <th>No.</th>
                      <th>Pcode</th>
                      <th>Product Name</th>
                      <th>Description</th>
                      <th>Cost</th>
                      <th>Actual Stock</th>
                      <th>Re-order Level</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $no = 1; if(!empty($inventory)):?>
            <?php foreach($inventory as $row):?>
                    <tr class="text-center">
                      <td><?=$no?></td>
                      <td><?=$row->pcode?></td>
                      <td><?=$row->p_name?></td>
                      <td><?=$row->description?></td>
                       <td><?=$row->cost?></td>
                      <td><?=$row->qty?></td>
                       <td><?=$row->re_order?></td>
                           <td><?php if(($row->status) == 0):?>
                      	<div class="d-flex justify-content-center text-success">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Full Stocks</span>
											  </div>
                        <?php else:?>
                        <div class="d-flex justify-content-center text-danger">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Critical</span>
											</div>
                      <?php endif ?>
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