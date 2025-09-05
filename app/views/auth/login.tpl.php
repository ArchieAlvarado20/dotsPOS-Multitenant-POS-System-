@extends("auth.main")

@section('main-content')

        <div class="container">
          <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            <div class="col mx-auto">
              <div class="alert alert-primary">
                  <span><strong>Note:</strong> This is a Community Multitenant POS System that you can use for free.</span><br />
                  <span>We are currently in the testing and development phase.</span><br />
                  <span>You can log in using the following demo accounts:</span><br />
                  <strong>ADMIN:</strong> admin@dotspos.com &nbsp; <strong>PASS:</strong> 1234<br />
                  <strong>CASHIER:</strong> cashier@dotspos.com &nbsp; <strong>PASS:</strong> 1234
              </div>
              <div class="card mb-0" style="background-color: #080707ff;">
                <div class="card-body">
                  <div class="p-4">
                    <div class="mb-3 text-center">
                      <img
                        src="<?=BASE_URL?>/assets/images/dotsPOS.png"
                        width="125"
                        alt=""
                      />
                    </div>
                    <div class="text-center mb-4">
                      <h3 class="text-info">{{APP_NAME}}</h3>
                      <p class="mb-0 text-white">Multitenant POS System</p>
                     
                    </div>
                    <div class="form-body">
                      <form class="row g-3" method="post">
                        <div class="col-12">
                          <label for="inputEmailAddress" class="form-label"
                            >Email</label
                          >
                          <input
                          value="<?= oldValue('email');?>"
                            name="email"
                            type="email"
                            class="form-control bg-light"
                            id="inputEmailAddress"
                            placeholder="jhon@example.com"
                          />
                  
                        </div>
                        <div class="col-12">
                          <label for="inputChoosePassword" class="form-label"
                            >Password</label
                          >
                          <div class="input-group" id="show_hide_password">
                            <input
                             name="password"
                              type="password"
                              class="form-control border-end-0 bg-light"
                              id="inputChoosePassword"
                              placeholder="Enter Password"
                            />
                            <a
                              href="javascript:;"
                              class="input-group-text bg-transparent"
                              ><i class="bx bx-hide"></i
                            ></a>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-check form-switch">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="flexSwitchCheckChecked"
                            />
                            <label
                              class="form-check-label"
                              for="flexSwitchCheckChecked"
                              >Remember Me</label
                            >
                          </div>
                        </div>
                        <div class="col-md-6 text-end">
                          <a href="forgot"
                            >Forgot Password ?</a
                          >
                        </div>
                        <div class="col-12">
                          <div class="d-grid">
                            <button type="submit" class="btn btn-warning">
                              Sign in
                            </button>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="text-center">
                            <p class="mb-0">
                              Don't have an account yet?
                              <a href="signup">Sign up here</a>
                            </p>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="login-separater text-center mb-5" >
                      <span style="background-color: #080707ff;">OR SIGN IN WITH</span>
                      <hr />
                    </div>
                    <div class="list-inline contacts-social text-center">
                      <a
                        href="javascript:;"
                        class="list-inline-item bg-facebook text-white border-0 rounded-3"
                        ><i class="bx bxl-facebook"></i
                      ></a>
                      <a
                        href="javascript:;"
                        class="list-inline-item bg-twitter text-white border-0 rounded-3"
                        ><i class="bx bxl-twitter"></i
                      ></a>
                      <a
                        href="javascript:;"
                        class="list-inline-item bg-google text-white border-0 rounded-3"
                        ><i class="bx bxl-google"></i
                      ></a>
                      <a
                        href="javascript:;"
                        class="list-inline-item bg-linkedin text-white border-0 rounded-3"
                        ><i class="bx bxl-linkedin"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end row-->
        </div>

        @endsection

