  @extends("partials.main")
  @section("main-content")
			
<div class="card radius-10 mt-5">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Raw Items Account</h5>
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
                          <a class="dropdown-item" href="{{BASE_URL}}/items-new"
                            >Add new Raw Items</a
                          >
                        </li>
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
                      <th>Pcode</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Cost</th>
                      <th>Re-order</th>
                      <!-- <th>Category</th> -->
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $no = 1;if(!empty($items_raw)):?>
            <?php foreach($items_raw as $row):?>
                    <tr>
                      <td><?=$no?></td>
                      <!-- <td><a href="">
                      <img class="radius-10" src="<?=crop($row->image)?>" style="width=50%;max-width:50px;height=100%;max-height:100px;" >
                      </td> -->
                      <td><?=$row->pcode?></td>
                      <td><?=$row->p_name?></td>
                      <td><?=$row->description?></td>
                      <td><?=$row->cost?></td>
                      <td><?=$row->re_order?></td>
                      <!-- <td><?php if(($row->category) != 0):?>
                      	<div class="d-flex align-items-center text-success">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>POS</span>
											  </div>
                        <?php else:?>
                        <div class="d-flex align-items-center text-danger">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Raw POS</span>
											</div>
                      <?php endif ?>
                      </td> -->
                      <td>
                        <div class="d-flex justify-content-center order-actions">
                          <a href="{{BASE_URL}}/items/profile/{{$row->id}}" class=""
                            ><i class="bx bx-show text-success"></i
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
    

  @endsection