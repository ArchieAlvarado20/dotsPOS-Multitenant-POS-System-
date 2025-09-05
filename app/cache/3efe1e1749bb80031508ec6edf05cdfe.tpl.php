<!DOCTYPE html>
<html lang="en" class="dark-theme">
  <!-- Mirrored from codervent.com/syndron/demo/vertical/auth-basic-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 03:58:38 GMT -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="<?=BASE_URL?>/assets/images/dotspos.png" type="image/png" />
    <!--plugins-->
    <link href="<?=BASE_URL?>/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link
      href="<?=BASE_URL?>/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
      rel="stylesheet"
    />
    <!-- fancy File Upload -->
     <link
      href="assets/plugins/fancy-file-uploader/fancy_fileupload.css"
      rel="stylesheet"
    />
    <link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
    <link
      href="<?=BASE_URL?>/assets/plugins/metismenu/css/metisMenu.min.css"
      rel="stylesheet"
    />
    <!-- loader-->
    <link href="<?=BASE_URL?>/assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?=BASE_URL?>/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?=BASE_URL?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=BASE_URL?>/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap"
      rel="stylesheet"
    />
    <link href="<?=BASE_URL?>/assets/css/app.css" rel="stylesheet" />
    <link href="<?=BASE_URL?>/assets/css/icons.css" rel="stylesheet" />
       <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/header-colors.css" />
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/table.css" />
    <title><?php echo esc($title);?></title>
  </head>
<style>
  .table-responsive{
    scrollbar-width: none;
  }
  .pagination{
    margin-top: 10px;
    margin-bottom: 5px;
  }
  .dataTables_filter{
 text-align: end;
  }
</style>
  <body>
    <!--wrapper-->
    <div class="wrapper">
      <div
        class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0"
      >

    <!--sidebar wrapper -->
      <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div>
            <img
              src="<?php echo esc(BASE_URL);?>/assets/images/dotsPOS.png"
              class="logo-icon"
              alt="logo icon"
            />
          </div>
          <div>
            <h4 class="logo-text text-info"><?php echo esc(APP_NAME);?></h4>
          </div>
          <div class="toggle-icon ms-auto">
            <i class="bx bx-align-justify"></i>
          </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
            <a href="<?php echo esc(BASE_URL);?>/home">
              <div class="parent-icon"><i class="bx bx-line-chart"></i></div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>

           <?php $subpage = $URL[0] ?? '';?>
              <li  class="<?php echo esc($subpage == 'sales' ? 'mm-active':'');?>">
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bx bx-dollar"></i></div>
              <div class="menu-title">Sales</div>
            </a>
            <ul>
                <?php $subpage = $URL[1] ?? '';?>
              <li class="<?php echo esc($subpage == 'daily-sales' ? 'mm-active':'');?>
              <?php echo esc($subpage == 'cancel-sales' ? 'mm-active':'');?>">
                <a href="<?php echo esc(BASE_URL);?>/sales/daily-sales"
                  ><i class="bx bx-radio-circle"></i>Daily Sales</a
                >
              </li>
                <?php $subpage = $URL[1] ?? '';?>
              <li class="<?php echo esc($subpage == 'cancel-details' ? 'mm-active':'');?>">
                <a href="<?php echo esc(BASE_URL);?>/sales/cancelled-items"
                  ><i class="bx bx-radio-circle"></i>Cancelled Sales</a
                >
              </li>
              <li>
                <a href="<?php echo esc(BASE_URL);?>/sales/top-selling"
                  ><i class="bx bx-radio-circle"></i>Top Selling</a
                >
              </li>
            </ul>
          </li>
                 <?php $subpage = $URL[0] ?? '';?>
             <li class="<?php echo esc($subpage == 'costs' ? 'mm-active':'');?>">
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bx bx-money"></i></div>
              <div class="menu-title">Cost</div>
            </a>
            <ul>
              <li>
                <a href="<?php echo esc(BASE_URL);?>/costs/daily-costs"
                  ><i class="bx bx-radio-circle"></i>Daily Costs</a
                >
              </li>
              <li class="<?php echo esc($subpage == 'costs' ? 'mm-active':'');?>">
                <a href="<?php echo esc(BASE_URL);?>/costs/items-indirect"
                  ><i class="bx bx-radio-circle"></i>Items(Indirect) </a
                >
              </li>
              <li>
                <a href="<?php echo esc(BASE_URL);?>/costs/billing"
                  ><i class="bx bx-radio-circle"></i>Billing Indirect/Costs</a
                >
              </li>
            </ul>
             </li>

            
             <?php $subpage = $URL[0] ?? '';?>
              <li  class="<?php echo esc($subpage == 'items-new' ? 'mm-active':'');?>
                          <?php echo esc($subpage == 'items' ? 'mm-active':'');?>">
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bx bx-cart "></i></div>
              <div class="menu-title">Stocks</div>
            </a>
            <ul>
              <li>
                <a href="<?php echo esc(BASE_URL);?>/inventory"
                  ><i class="bx bx-radio-circle"></i>Inventory</a
                >
              </li>
              <li class="<?=$subpage == 'items-new' ? 'mm-active':''?>
                          <?=$subpage == 'items' ? 'mm-active':''?>">
                <a href="<?php echo esc(BASE_URL);?>/items-raw"
                  ><i class="bx bx-radio-circle"></i>Items(Raw POS) </a
                >
              </li>
              <li>
                <a href="<?php echo esc(BASE_URL);?>/supplier-main"
                  ><i class="bx bx-radio-circle"></i>Main Storage</a
                >
              </li>
                 <li>
                <a href="<?php echo esc(BASE_URL);?>/main-sub"
                  ><i class="bx bx-radio-circle"></i>Sub Storage</a
                >
              </li>
                 <li>
                <a href="<?php echo esc(BASE_URL);?>/return-main"
                  ><i class="bx bx-radio-circle"></i>Return</a
                >
              </li>
            </ul>
             </li>
            <?php $subpage = $URL[0] ?? '';?>
              <li  class="<?=$subpage == 'product-new' ? 'mm-active':''?>
                          <?=$subpage == 'product' ? 'mm-active':''?>">
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bx bx-cookie"></i></div>
              <div class="menu-title">Products</div>
            </a>
            <ul>
              <li class="<?=$subpage == 'product-new' ? 'mm-active':''?>
                          <?=$subpage == 'product' ? 'mm-active':''?>">
                <a href="<?php echo esc(BASE_URL);?>/product"
                  ><i class="bx bx-radio-circle"></i>Items(POS) </a
                >
              </li>
            </ul>
             </li>

               <?php $subpage = $URL[0] ?? '';?>
                <li class="<?php echo esc($subpage == 'supplier-new' ? 'mm-active':'');?>
                <?php echo esc($subpage == 'supplier' ? 'mm-active':'');?>">
            <a href="<?php echo esc(BASE_URL);?>/supplier">
              <div class="parent-icon"><i class="bx bx-box"></i></div>
              <div class="menu-title">Supplier</div>
            </a>
          </li>
          
           <?php $subpage = $URL[0] ?? '';?>
           <li class="<?=$subpage == 'user-new' ? 'mm-active':''?> 
                      <?=$subpage == 'user-profile' ? 'mm-active':''?>
                      <?=$subpage == 'user-edit' ? 'mm-active':''?>">
            <a href="<?php echo esc(BASE_URL);?>/user">
              <div class="parent-icon"><i class="bx bx-user"></i></div>
              <div class="menu-title">User Account</div>
            </a>
          </li>

               <li>
            <a href="<?=BASE_URL?>/logout">
              <div class="parent-icon"><i class="bx bx-arrow-to-left"></i></div>
              <div class="menu-title">Logout</div>
            </a>
          </li>
      </div> 
      <!--end sidebar wrapper -->

       <!--start header -->
      <header>
        <div class="topbar d-flex align-items-center">
          <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-menu"><i class="bx bx-menu"></i></div>

            <div
              class="position-relative search-bar d-lg-block d-none"
              data-bs-toggle="modal"
              data-bs-target="#SearchModal"
            >
              <input
                class="form-control px-5"
                disabled
                type="search"
                placeholder="Search"
              />
              <span
                class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"
                ><i class="bx bx-search"></i
              ></span>
            </div>
            <div class="top-menu ms-auto">
              <ul class="navbar-nav align-items-center gap-1">
                <li
                  class="nav-item mobile-search-icon d-flex d-lg-none"
                  data-bs-toggle="modal"
                  data-bs-target="#SearchModal"
                >
                  <a class="nav-link" href="avascript:;"
                    ><i class="bx bx-search"></i>
                  </a>
                </li>
                <li
                  class="nav-item dropdown dropdown-laungauge d-none d-sm-flex"
                >
                  <a
                    class="nav-link dropdown-toggle dropdown-toggle-nocaret d-none"
                    href="avascript:;"
                    data-bs-toggle="dropdown"
                    ><img src="../assets/images/county/02.png" width="22" alt="" />
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a
                        class="dropdown-item d-flex align-items-center py-2"
                        href="javascript:;"
                        ><img
                          src="../assets/images/county/01.png"
                          width="20"
                          alt=""
                        /><span class="ms-2">English</span></a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item d-flex align-items-center py-2"
                        href="javascript:;"
                        ><img
                          src="assets/images/county/02.png"
                          width="20"
                          alt=""
                        /><span class="ms-2">Catalan</span></a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item d-flex align-items-center py-2"
                        href="javascript:;"
                        ><img
                          src="assets/images/county/03.png"
                          width="20"
                          alt=""
                        /><span class="ms-2">French</span></a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item d-flex align-items-center py-2"
                        href="javascript:;"
                        ><img
                          src="assets/images/county/04.png"
                          width="20"
                          alt=""
                        /><span class="ms-2">Belize</span></a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item d-flex align-items-center py-2"
                        href="javascript:;"
                        ><img
                          src="assets/images/county/05.png"
                          width="20"
                          alt=""
                        /><span class="ms-2">Colombia</span></a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item d-flex align-items-center py-2"
                        href="javascript:;"
                        ><img
                          src="assets/images/county/06.png"
                          width="20"
                          alt=""
                        /><span class="ms-2">Spanish</span></a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item d-flex align-items-center py-2"
                        href="javascript:;"
                        ><img
                          src="assets/images/county/07.png"
                          width="20"
                          alt=""
                        /><span class="ms-2">Georgian</span></a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item d-flex align-items-center py-2"
                        href="javascript:;"
                        ><img
                          src="assets/images/county/08.png"
                          width="20"
                          alt=""
                        /><span class="ms-2">Hindi</span></a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item dark-mode d-none d-sm-flex">
                  <a class="nav-link dark-mode-icon d-none" href="javascript:;"
                    ><i class="bx bx-moon"></i>
                  </a>
                </li>

                <li class="nav-item dropdown dropdown-app">
                  <a
                    class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                    data-bs-toggle="dropdown"
                    href="javascript:;"
                    ><i class="bx bx-grid-alt"></i
                  ></a>
                  <div class="dropdown-menu dropdown-menu-end p-0">
                    <div class="app-container p-2 my-2">
                      <div
                        class="row gx-0 gy-2 row-cols-3 justify-content-center p-2"
                      >
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/slack.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Slack</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/behance.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Behance</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/google-drive.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Dribble</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/outlook.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Outlook</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/github.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">GitHub</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/stack-overflow.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Stack</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/figma.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Stack</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/twitter.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Twitter</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/google-calendar.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Calendar</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/spotify.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Spotify</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/google-photos.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Photos</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/pinterest.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Photos</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/linkedin.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">linkedin</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/dribble.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Dribble</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/youtube.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">YouTube</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/google.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">News</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/envato.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Envato</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img
                                  src="assets/images/app/safari.png"
                                  width="30"
                                  alt=""
                                />
                              </div>
                              <div class="app-name">
                                <p class="mb-0 mt-1">Safari</p>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                  
                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown dropdown-large">
                  <a
                    class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                    href="#"
                    data-bs-toggle="dropdown"
                    ><span class="alert-count">7</span>
                    <i class="bx bx-bell"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;">
                      <div class="msg-header">
                        <p class="msg-header-title">Notifications</p>
                        <p class="msg-header-badge">8 New</p>
                      </div>
                    </a>
                    <div class="header-notifications-list">
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="user-online">
                            <img
                              src="assets/images/avatars/avatar-1.png"
                              class="msg-avatar"
                              alt="user avatar"
                            />
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">
                              Daisy Anderson<span class="msg-time float-end"
                                >5 sec ago</span
                              >
                            </h6>
                            <p class="msg-info">The standard chunk of lorem</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify bg-light-danger text-danger">
                            dc
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">
                              New Orders
                              <span class="msg-time float-end">2 min ago</span>
                            </h6>
                            <p class="msg-info">You have recived new orders</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="user-online">
                            <img
                              src="assets/images/avatars/avatar-2.png"
                              class="msg-avatar"
                              alt="user avatar"
                            />
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">
                              Althea Cabardo
                              <span class="msg-time float-end">14 sec ago</span>
                            </h6>
                            <p class="msg-info">
                              Many desktop publishing packages
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify bg-light-success text-success">
                            <img
                              src="assets/images/app/outlook.png"
                              width="25"
                              alt="user avatar"
                            />
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">
                              Account Created<span class="msg-time float-end"
                                >28 min ago</span
                              >
                            </h6>
                            <p class="msg-info">
                              Successfully created new email
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify bg-light-info text-info">Ss</div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">
                              New Product Approved
                              <span class="msg-time float-end">2 hrs ago</span>
                            </h6>
                            <p class="msg-info">
                              Your new product has approved
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="user-online">
                            <img
                              src="assets/images/avatars/avatar-4.png"
                              class="msg-avatar"
                              alt="user avatar"
                            />
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">
                              Katherine Pechon
                              <span class="msg-time float-end">15 min ago</span>
                            </h6>
                            <p class="msg-info">
                              Making this the first true generator
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify bg-light-success text-success">
                            <i class="bx bx-check-square"></i>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">
                              Your item is shipped
                              <span class="msg-time float-end">5 hrs ago</span>
                            </h6>
                            <p class="msg-info">
                              Successfully shipped your item
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify bg-light-primary">
                            <img
                              src="assets/images/app/github.png"
                              width="25"
                              alt="user avatar"
                            />
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">
                              New 24 authors<span class="msg-time float-end"
                                >1 day ago</span
                              >
                            </h6>
                            <p class="msg-info">
                              24 new authors joined last week
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="user-online">
                            <img
                              src="assets/images/avatars/avatar-8.png"
                              class="msg-avatar"
                              alt="user avatar"
                            />
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">
                              Peter Costanzo
                              <span class="msg-time float-end">6 hrs ago</span>
                            </h6>
                            <p class="msg-info">
                              It was popularised in the 1960s
                            </p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <a href="javascript:;">
                      <div class="text-center msg-footer">
                        <button class="btn btn-primary w-100">
                          View All Notifications
                        </button>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-large">
                  <a
                    class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <span class="alert-count">8</span>
                    <i class="bx bx-shopping-bag"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;">
                      <div class="msg-header">
                        <p class="msg-header-title">My Cart</p>
                        <p class="msg-header-badge">10 Items</p>
                      </div>
                    </a>
                    <div class="header-message-list">
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center gap-3">
                          <div class="position-relative">
                            <div class="cart-product rounded-circle bg-light">
                              <img
                                src="assets/images/products/11.png"
                                class=""
                                alt="product image"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="cart-product-title mb-0">
                              Men White T-Shirt
                            </h6>
                            <p class="cart-product-price mb-0">1 X $29.00</p>
                          </div>
                          <div class="">
                            <p class="cart-price mb-0">$250</p>
                          </div>
                          <div class="cart-product-cancel">
                            <i class="bx bx-x"></i>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center gap-3">
                          <div class="position-relative">
                            <div class="cart-product rounded-circle bg-light">
                              <img
                                src="assets/images/products/02.png"
                                class=""
                                alt="product image"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="cart-product-title mb-0">
                              Men White T-Shirt
                            </h6>
                            <p class="cart-product-price mb-0">1 X $29.00</p>
                          </div>
                          <div class="">
                            <p class="cart-price mb-0">$250</p>
                          </div>
                          <div class="cart-product-cancel">
                            <i class="bx bx-x"></i>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center gap-3">
                          <div class="position-relative">
                            <div class="cart-product rounded-circle bg-light">
                              <img
                                src="assets/images/products/03.png"
                                class=""
                                alt="product image"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="cart-product-title mb-0">
                              Men White T-Shirt
                            </h6>
                            <p class="cart-product-price mb-0">1 X $29.00</p>
                          </div>
                          <div class="">
                            <p class="cart-price mb-0">$250</p>
                          </div>
                          <div class="cart-product-cancel">
                            <i class="bx bx-x"></i>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center gap-3">
                          <div class="position-relative">
                            <div class="cart-product rounded-circle bg-light">
                              <img
                                src="assets/images/products/04.png"
                                class=""
                                alt="product image"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="cart-product-title mb-0">
                              Men White T-Shirt
                            </h6>
                            <p class="cart-product-price mb-0">1 X $29.00</p>
                          </div>
                          <div class="">
                            <p class="cart-price mb-0">$250</p>
                          </div>
                          <div class="cart-product-cancel">
                            <i class="bx bx-x"></i>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center gap-3">
                          <div class="position-relative">
                            <div class="cart-product rounded-circle bg-light">
                              <img
                                src="assets/images/products/05.png"
                                class=""
                                alt="product image"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="cart-product-title mb-0">
                              Men White T-Shirt
                            </h6>
                            <p class="cart-product-price mb-0">1 X $29.00</p>
                          </div>
                          <div class="">
                            <p class="cart-price mb-0">$250</p>
                          </div>
                          <div class="cart-product-cancel">
                            <i class="bx bx-x"></i>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center gap-3">
                          <div class="position-relative">
                            <div class="cart-product rounded-circle bg-light">
                              <img
                                src="assets/images/products/06.png"
                                class=""
                                alt="product image"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="cart-product-title mb-0">
                              Men White T-Shirt
                            </h6>
                            <p class="cart-product-price mb-0">1 X $29.00</p>
                          </div>
                          <div class="">
                            <p class="cart-price mb-0">$250</p>
                          </div>
                          <div class="cart-product-cancel">
                            <i class="bx bx-x"></i>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center gap-3">
                          <div class="position-relative">
                            <div class="cart-product rounded-circle bg-light">
                              <img
                                src="assets/images/products/07.png"
                                class=""
                                alt="product image"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="cart-product-title mb-0">
                              Men White T-Shirt
                            </h6>
                            <p class="cart-product-price mb-0">1 X $29.00</p>
                          </div>
                          <div class="">
                            <p class="cart-price mb-0">$250</p>
                          </div>
                          <div class="cart-product-cancel">
                            <i class="bx bx-x"></i>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center gap-3">
                          <div class="position-relative">
                            <div class="cart-product rounded-circle bg-light">
                              <img
                                src="assets/images/products/08.png"
                                class=""
                                alt="product image"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="cart-product-title mb-0">
                              Men White T-Shirt
                            </h6>
                            <p class="cart-product-price mb-0">1 X $29.00</p>
                          </div>
                          <div class="">
                            <p class="cart-price mb-0">$250</p>
                          </div>
                          <div class="cart-product-cancel">
                            <i class="bx bx-x"></i>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center gap-3">
                          <div class="position-relative">
                            <div class="cart-product rounded-circle bg-light">
                              <img
                                src="assets/images/products/09.png"
                                class=""
                                alt="product image"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="cart-product-title mb-0">
                              Men White T-Shirt
                            </h6>
                            <p class="cart-product-price mb-0">1 X $29.00</p>
                          </div>
                          <div class="">
                            <p class="cart-price mb-0">$250</p>
                          </div>
                          <div class="cart-product-cancel">
                            <i class="bx bx-x"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                    <a href="javascript:;">
                      <div class="text-center msg-footer">
                        <div
                          class="d-flex align-items-center justify-content-between mb-3"
                        >
                          <h5 class="mb-0">Total</h5>
                          <h5 class="mb-0 ms-auto">$489.00</h5>
                        </div>
                        <button class="btn btn-primary w-100">Checkout</button>
                      </div>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="user-box dropdown px-3">
              <a
                class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="<?php echo esc(BASE_URL);?>/<?php echo esc($user->image);?>"
                  class="user-img"
                  alt="user avatar"
                />
                <div class="user-info">
                  <p class="user-name mb-0"><?php echo esc($user->first_name);?></p>
                  <p class="designattion mb-0"><?php echo esc($user->role);?></p>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="<?php echo esc(BASE_URL);?>/user-profile/<?php echo esc($user->id);?>"
                    ><i class="bx bx-user fs-5"></i><span>Profile</span></a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:;"
                    ><i class="bx bx-cog fs-5"></i><span>Settings</span></a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:;"
                    ><i class="bx bx-home-circle fs-5"></i
                    ><span>Dashboard</span></a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:;"
                    ><i class="bx bx-dollar-circle fs-5"></i
                    ><span>Earnings</span></a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:;"
                    ><i class="bx bx-download fs-5"></i
                    ><span>Downloads</span></a
                  >
                </li>
                <li>
                  <div class="dropdown-divider mb-0"></div>
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="logout"
                    ><i class="bx bx-log-out-circle"></i><span>Logout</span></a
                  >
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!--end header -->
    <div class="page-wrapper w-100">
        <div class="page-content">

        <?php echo $this->sections["main-content"];?>

        </div>
    </div>
      <footer class="page-footer">
        <p class="mb-0">Copyright © 2025. All right reserved.</p>
      </footer>
    
    <!-- Bootstrap JS -->
    <script src="<?=BASE_URL?>/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?=BASE_URL?>/assets/js/jquery.min.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

    <!-- File Upload -->
    <script src="assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>

    <script src="<?=BASE_URL?>/assets/js/index.js"></script>
    <!--app JS-->
    <script src="<?=BASE_URL?>/assets/js/app.js"></script>
    <!-- Table -->
     <script src="<?=BASE_URL?>/assets/js/table.js"></script>
         <!-- POS -->
     <script src="<?=BASE_URL?>/assets/js/pos.js"></script>
    <!--Password show & hide js -->
    <script>
      $(document).ready(function () {
        $("#show_hide_password a").on("click", function (event) {
          event.preventDefault();
          if ($("#show_hide_password input").attr("type") == "text") {
            $("#show_hide_password input").attr("type", "password");
            $("#show_hide_password i").addClass("bx-hide");
            $("#show_hide_password i").removeClass("bx-show");
          } else if (
            $("#show_hide_password input").attr("type") == "password"
          ) {
            $("#show_hide_password input").attr("type", "text");
            $("#show_hide_password i").removeClass("bx-hide");
            $("#show_hide_password i").addClass("bx-show");
          }
        });
      });
    </script>
        <script>
      $(document).ready(function () {
        var table = $("#example2").DataTable({
          lengthChange: false,
          buttons: ["copy", "excel", "pdf", "print"],
           language: {
          search: "_INPUT_",
          searchPlaceholder: "Search here...",
        },
        });

        table
          .buttons()
          .container()
          .appendTo("#example2_wrapper .col-md-6:eq(0)");
      });
    </script>
    	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function () {
			  'use strict'
	
			  // Fetch all the forms we want to apply custom Bootstrap validation styles to
			  var forms = document.querySelectorAll('.needs-validation')
	
			  // Loop over them and prevent submission
			  Array.prototype.slice.call(forms)
				.forEach(function (form) {
				  form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
					  event.preventDefault()
					  event.stopPropagation()
					}
	
					form.classList.add('was-validated')
				  }, false)
				})
			})()
	</script>
  	<script>
		$('#fancy-file-upload').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 1000000
		});
	</script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	</script>
  <script>
	const form = document.getElementById('myForm');
  const submitBtn = document.getElementById('submitBtn');
// Store original data when the page loads
const originalData = new FormData(form);

function isFormChanged() {
  const currentData = new FormData(form);

  for (let [key, value] of currentData.entries()) {
    if (value !== originalData.get(key)) {
      return true; // May nabago
    }
  }

  return false; // Walang nabago
}

// Check on input/change
form.addEventListener('input', () => {
  submitBtn.disabled = !isFormChanged();
   submitBtn.textContent = 'Submit'
});
form.addEventListener('change', () => {
  submitBtn.disabled = !isFormChanged();
  submitBtn.textContent = 'Submit'
});

form.addEventListener('submit', () => {
  submitBtn.disabled = true;
  submitBtn.textContent = 'Submitting...'; // optional: change label
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.dropdown-menu').forEach(function (dropdown) {
        dropdown.addEventListener('click', function (e) {
            e.stopPropagation(); 
        });
    });
});
</script>
<!-- <script>
   $(document).ready(function () {
      // Load saved theme
      const savedTheme = localStorage.getItem("theme");

      if (savedTheme === "dark") {
        $("html").attr("class", "dark-theme");
        $(".dark-mode-icon i").attr("class", "bx bx-sun");
      } else {
        $("html").attr("class", "light-theme");
        $(".dark-mode-icon i").attr("class", "bx bx-moon");
      }

      // Toggle theme
      $(".dark-mode").on("click", function () {
        if ($(".dark-mode-icon i").attr("class") == "bx bx-sun") {
          $(".dark-mode-icon i").attr("class", "bx bx-moon");
          $("html").attr("class", "light-theme");
          localStorage.setItem("theme", "light");
        } else {
          $(".dark-mode-icon i").attr("class", "bx bx-sun");
          $("html").attr("class", "dark-theme");
          localStorage.setItem("theme", "dark");
        }
      });
    });
</script> -->
<script>
  const imageFile = document.querySelector(".img"),
      inputBox = document.querySelector(".file")

      inputBox.addEventListener('change', function(){
        imageFile.src = window.URL.createObjectURL(this.file[0])
      })
</script>
  </body>

  <!-- Mirrored from codervent.com/syndron/demo/vertical/auth-basic-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 03:58:38 GMT -->
</html>
