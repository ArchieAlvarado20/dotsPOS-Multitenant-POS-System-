  @extends("partials.main")
  @section("main-content")

          <div class="card radius-10 mt-5">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Product</h5>
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
                          <a class="dropdown-item" href="{{BASE_URL}}/product-new"
                            >Add new Product</a
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
                      <th>Product Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $no = 1; if(!empty($products)):?>
            <?php foreach($products as $product):?>
                    <tr>
                      <td><?=$no?></td>
                      <!-- <td><a href="">
                      <img class="radius-10" src="<?=crop($product->image)?>" style="width:50%;max-width:50px;height:100%;max-height:100px;" >
                      </td> -->
                      <td><?=$product->pcode?></td>
                      <td><?=$product->p_name?></td>
                      <td><?=$product->description?></td>
                      <td>&#8369 <?=$product->price?></td>
                      <td>
                        <div class="align-items-center text-success">	
												<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>POS</span>
											  </div>
                      </td>
                      <td>
                        <div class="d-flex justify-content-center order-actions">
                          <a href="{{BASE_URL}}/product/profile/{{$product->id}}" class=""
                            ><i class="bx bx-show text-success"></i
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