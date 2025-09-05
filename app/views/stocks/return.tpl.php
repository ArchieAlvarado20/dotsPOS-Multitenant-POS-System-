  @extends("partials.main")
  @section("main-content")
  
          <div class="card radius-10 mt-5">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Stocks Withdrawal History(Sub-Storage)</h5>
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
                      <th>Withdrawn No.</th>
                      <th>Product code</th>
                      <th>Description</th>
                      <th>Approved by Admin</th>
                      <th>Return Request</th>
                      <th>Purchased at</th>
                      <th>Return at</th>
                      <th>Return Quantity</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $no = 1; if(!empty($stocks)):?>
            <?php foreach($stocks as $row):?>
                    <tr class="text-center">
                      <td><?=$no?></td>
                      <td><?=$row->transno?></td>
                      <td><?=$row->pcode?></td>
                      <td><?=$row->description?></td>
                        <td><?=$row->void_by?></td>
                       <td><?=$row->cancel_request?></td>
                       <td><?=$row->sdate?></td>
                        <td><?=$row->date?></td>
                        <td><?=$row->c_qty?> out of <?=$row->t_qty?></td>
                      <td>
                        <div class="d-flex order-actions">
                          <a href="javascript:;" class="ms-4"
                            ><i class="bx bx-show text-danger"></i
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
    
  

  @endsection