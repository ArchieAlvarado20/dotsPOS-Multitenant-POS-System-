  @extends("partials.main")
  @section("main-content")

               <div class="alert alert-info bg-info mt-5 text-dark">
                  <span><strong>Note:</strong> This is the Dashboard that displays the analytics and graphs of your store.</span><br />
                  <span>We are currently in the testing and development phase.</span><br />
              </div>

                <div class="card radius-10 w-100  col-xl-12">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div>
                      <h5 class="mb-1">Store Metrics</h5>
                      <p class="mb-0 font-13 text-secondary">
                        <i class="bx bxs-calendar"></i>in last 30 days revenue
                      </p>
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
                            >Action</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:;"
                            >Another action</a
                          >
                        </li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:;"
                            >Something else here</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="row row-cols-1 row-cols-sm-3 mt-4">
                    <div class="col">
                      <div>
                        <p class="mb-0 text-secondary">Revenue</p>
                        <h4 class="my-1">$4805</h4>
                        <p class="mb-0 font-13 text-success">
                          <i class="bx bxs-up-arrow align-middle"></i>$1458
                          Since last month
                        </p>
                      </div>
                    </div>
                    <div class="col">
                      <div>
                        <p class="mb-0 text-secondary">Total Customers</p>
                        <h4 class="my-1">8.4K</h4>
                        <p class="mb-0 font-13 text-success">
                          <i class="bx bxs-up-arrow align-middle"></i>12.3%
                          Since last month
                        </p>
                      </div>
                    </div>
                    <div class="col">
                      <div>
                        <p class="mb-0 text-secondary">Store Visitors</p>
                        <h4 class="my-1">59K</h4>
                        <p class="mb-0 font-13 text-danger">
                          <i class="bx bxs-down-arrow align-middle"></i>2.4%
                          Since last month
                        </p>
                      </div>
                    </div>
                  </div>
                  <div id="chart4"></div>
                </div>
              </div>
            </div>

        @endsection