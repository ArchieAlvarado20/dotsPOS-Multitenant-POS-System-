<!DOCTYPE html>
<html lang="en" class="dark-theme">
  <!-- Mirrored from codervent.com/syndron/demo/vertical/auth-basic-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 03:58:38 GMT -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="<?=BASE_URL?>/assets/images/dotsPOS.png" type="image/png" />
    <!--plugins-->
    <link href="<?=BASE_URL?>/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link
      href="<?=BASE_URL?>/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
      rel="stylesheet"
    />
    <!-- fancy File Upload -->
     <link
      href="<?=BASE_URL?>assets/plugins/fancy-file-uploader/fancy_fileupload.css"
      rel="stylesheet"
    />
    <link href="<?=BASE_URL?>assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
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
      <!-- sweet-alert -->
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
    <link href="<?=BASE_URL?>/assets/css/app.css" rel="stylesheet" />
    <link href="<?=BASE_URL?>/assets/css/icons.css" rel="stylesheet" />
       <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/header-colors.css" />
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/table.css" />

   
    <title>{{$title}}</title>
  </head>
<style>
  .table-responsive{
    scrollbar-width: none;
  }
  .pagination{
    margin-top: 10px;
    margin-bottom: 5px;
  }
     /* @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:wght@300;400;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Orbitron:wght@500&family=Oswald:wght@200..700&family=Pacifico&family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Vollkorn:ital,wght@0,400;0,600;1,400;1,500&family=Young+Serif&display=swap'); */

        body {
  background-color: black;
}
.navbar-container {
  display: flex;
  max-width: 100vw;
  width: 100%;
}
.user-info {
  flex: 2;
}
.user-image {
  width: 40px;
  height: 40px;
  border-radius: 50%;
}
.user-name {
  font-family: "Oswald", sans-serif;
  font-optical-sizing: auto;
  font-weight: bold;
  font-style: normal;
  color: white;
  margin-left: 2px;
  font-size: larger;
}
.dropdown-menu {
  background-color: black;
  color: white;
  text-align: center;
}
.dropdown-item {
  color: white;
}
.dropdown-item:hover {
  background-color: rgb(44, 42, 42);
  color: white;
}
.app-name {
  display: flex;
  flex: 8;
  justify-content: center;
}
.logo-image {
  width: 40px;
  height: 40px;
}
.appName {
  color: gold;
  margin-top: 10px;
}
.arrowL {
  display: none;
}
.arrowR {
  display: none;
}
.total-amount {
  flex: 2;
  justify-items: end;
  margin-right: 10px;
  margin-top: 10px;
}
.js-gtotal {
  font-family: "Orbitron", sans-serif;
  font-weight: bolder;
  color: darkgreen;
}
.container-fluid {
  display: flex;
}
.items {
  flex: 6;
}
.product {
  flex: 6;
}
.js-products {
  display: flex;
  flex-wrap: wrap;
  margin-left: auto;
}
.product-navbar {
  display: flex;
}
.items-title {
  display: flex;
  flex: 1;
  color: red;
}
.js-items-count {
  flex: 1;
  color: red;
  padding-left: 10px;
}
.date {
  flex: 8;
  color: red;
  text-align: end;
  padding-right: 10px;
}
.time {
  flex: 2;
  color: red;
}
.js-items {
  background-color: black;
  display: flex;
  flex-direction: column-reverse;
}
.transaction-button {
  margin: 10px;
}
.raw-items {
  display: block;
  max-height: 15rem;
  max-width: 15rem;
  border-radius: 10px;
}
.product-card {
  position: relative;
  display: flex;
  margin: 1rem;
  border: 0.5px solid darkgray;
  background-color: black;
  border-radius: 10px;
  margin: 10px;
}
.column-one {
  flex: 2;
  display: flex;
}
.product-card img {
  width: 100px;
  height: 100px;
  border-radius: 5px;
  margin: 10px;
}
.column-two {
  flex: 10;
}
.column-two-2 {
  display: flex;
  justify-content: center;
}
.description {
  flex: 11;
  text-align: center;
  color: white;
  font-weight: bold;
  margin-top: 5px;
  max-height: 75px;
}
.close-button {
  flex: 1;
  border: none;
  border-radius: 50%;
  color: red;
  background-color: black;
  max-width: 40px;
  max-height: 40px;
}
.column-three {
  display: flex;
  margin: 10px;
  justify-content: center;
}
.price {
  flex: 6;
  text-align: center;
}
.total {
  flex: 6;
  text-align: center;
}
.column-four {
  display: flex;
  justify-content: center;
  margin-bottom: 5px;
}
.minus {
  max-width: 40px;
}
.plus {
  max-width: 40px;
}
.js-payment-modal {
  justify-content: center;
  background-color: #000000aa;
  width: 100vw;
  height: 10000rem;
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: 2;
  padding-top: 100px;
}
.main-payment-modal {
  background-color: rgb(36, 35, 35);
  animation: appear 0.5s;
  border-radius: 10px;
  max-width: 340px;
  max-height: 340px;
  padding: 20px;
  margin: auto;
  margin-top: 50px;
  backdrop-filter: blur(10px);
  color: white;
  opacity: 80%;
}
.payment-title {
  color: red;
  text-align: center;
  width: 320px;
}
.js-gtotal_mod {
  font-family: "Orbitron", sans-serif;
  font-weight: bolder;
}
.js-change-modal {
  justify-content: center;
  background-color: #000000aa;
  width: 100vw;
  height: 5000rem;
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: 2;
  padding-top: 100px;
}
.main-change-modal {
  background-color: rgb(36, 35, 35);
  animation: appear 0.5s;
  border-radius: 10px;
  max-width: 340px;
  max-height: 340px;
  padding: 20px;
  margin: auto;
  margin-top: 50px;
  backdrop-filter: blur(10px);
  color: white;
  opacity: 80%;
}
.js-gtotal_change {
  font-weight: bolder;
  font-family: "Orbitron", sans-serif;
}
.js-payment-result {
  font-weight: bolder;
  font-family: "Orbitron", sans-serif;
}
.js-change {
  font-weight: bolder;
  font-family: "Orbitron", sans-serif;
}
.close-change-modal {
  text-align: center;
}
@media screen and (max-width: 1560px) {
  .raw-items {
    max-height: 13rem;
    max-width: 13rem;
  }
}
@media screen and (max-width: 1470px) {
  .date {
    flex: 7;
  }
}
@media screen and (max-width: 1368px) {
  .raw-items {
    max-height: 12rem;
    max-width: 12rem;
  }
}
@media screen and (max-width: 1360px) {
  .date {
    flex: 6;
  }
}
@media screen and (max-width: 1272px) {
  .raw-items {
    max-height: 11rem;
    max-width: 11rem;
  }
}
@media screen and (max-width: 1245px) {
  .date {
    flex: 5;
  }
}
@media screen and (max-width: 1130px) {
  .date {
    flex: 4;
  }
  .items {
    width: 120px;
  }
  .card-body {
    padding-left: 2rem;
  }
}
@media screen and (max-width: 1080px) {
  .raw-items {
    max-height: 10rem;
    max-width: 10rem;
  }
}
@media screen and (max-width: 1012px) {
  .date {
    flex: 3;
  }
  .raw-items {
    max-height: 9rem;
    max-width: 9rem;
  }
  .js-products{
    margin-left: 10px;
  }
  .js-search{
    margin-right: 10px;
  }
  .items .products{
    margin-top: -100px;
  }
}
@media screen and (max-width: 920px) {
  .raw-items {
    max-height: 8rem;
    max-width: 8rem;
  }
  .date {
    display: none;
  }
  .time {
    text-align: end;
  }
  .items-title {
    justify-content: end;
  }
}
@media screen and (max-width: 790px) {
  .raw-items {
    max-height: 7rem;
    max-width: 7rem;
  }
  .date {
    display: none;
  }
  .time {
    text-align: end;
  }
}
@media screen and (max-width: 720px) {
  .raw-items {
    max-height: 6rem;
    max-width: 6rem;
  }
  .items {
    width: 100px;
  }
  .column-one-items {
    padding: 0;
    margin-top: 10px;
  }
  .card-body {
    padding: 0;
    margin: -10px;
  }
  .card {
    margin-bottom: 1rem;
  }
  .js-items {
    background-color: black;
  }
}
@media screen and (max-width: 690px) {
  .pos {
    display: none;
  }
  .items {
    width: 90px;
  }
  .card-body {
    padding-left: 0;
  }
}
@media screen and (max-width: 600px) {
  .raw-items {
    max-height: 5rem;
    max-width: 5rem;
  }
}
@media screen and (max-width: 552px) {
  .time {
    display: none;
  }
  .js-items-count {
    text-align: start;
  }
  .raw-items {
    max-height: 4.5rem;
    max-width: 4.5rem;
  }
  .column-four {
    padding-right: 5px;
  }
  .items-title {
    justify-content: end;
  }
}
@media screen and (max-width: 553px) {
  .raw-items {
    max-height: 9rem;
    max-width: 9rem;
  }
  .arrowR {
    display: block;
  }
  .product {
    display: none;
  }
  .app-name {
    display: none;
  }
  
}
@media screen and (max-width: 460px) {
  .raw-items {
    max-height: 8rem;
    max-width: 8rem;
  }
  .arrowR {
    display: block;
  }
  .product {
    display: none;
  }
  .app-name {
    display: none;
  }
  .page-wrapper{
    margin-top: -5px;
  }
}
@media screen and (max-width: 405px) {
  .raw-items {
    max-height: 6rem;
    max-width: 6rem;
  }
  .arrowR {
    display: block;
  }
  .items-title {
    text-align: end;
    justify-content: end;
  }
  .product-card {
    display: flex;
    margin-bottom: 1rem;
    border: 0.5px solid darkgray;
    background-color: black;
    border-radius: 10px;
    margin: 10px;
  }
  .column-one {
    display: flex;
  }
  .product-card img {
    flex: 1;
    width: 100px;
    height: 100px;
    border-radius: 5px;
    margin-top: 5px;
    margin-left: 5px;
  }
  .column-two-2 {
    display: flex;
    justify-content: center;
  }
  .description {
    text-align: center;
    flex: 2;
    color: white;
    font-weight: bold;
    margin-top: 5px;
    max-height: 75px;
  }
  .close-button {
    flex: 2;
    border: none;
    border-radius: 50%;
    color: red;
    background-color: black;
    max-width: 40px;
    max-height: 40px;
  }
  .column-three {
    display: flex;
    justify-content: center;
  }
  .price {
    flex: 6;
    text-align: center;
  }
  .total {
    flex: 6;
    text-align: center;
  }
  .column-four {
    display: flex;
    justify-content: center;
    margin-bottom: 5px;
  }
}
    .sidebar-wrapper{
        display: none;
    }
      .mobile-toggle-menu{
    display: none;
  }
  .navbar-nav{
    display: none;
  }
    @media screen and (min-width: 1024px) {
  .topbar {
    left: 0;
  }
    .page-footer {
    left: 0;
  }
  .input-group{
    margin-left: -100px;
  }
  .js-products {
    margin-left: -50px;
  }

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
              src="{{BASE_URL}}/assets/images/dotsPOS.png"
              class="logo-icon"
              alt="logo icon"
            />
          </div>
          <div>
            <h4 class="logo-text text-info">{{APP_NAME}}</h4>
          </div>
          <div class="toggle-icon ms-auto">
            <i class="bx bx-align-justify"></i>
          </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
            <a href="{{BASE_URL}}/home">
              <div class="parent-icon"><i class="bx bx-line-chart"></i></div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bx bx-dollar"></i></div>
              <div class="menu-title">Sales</div>
            </a>
            <ul>
              <li>
                <a href="{{BASE_URL}}/daily-sales"
                  ><i class="bx bx-radio-circle"></i>Daily Sales</a
                >
              </li>
              <li>
                <a href="{{BASE_URL}}/cancelled-items"
                  ><i class="bx bx-radio-circle"></i>Cancelled Items</a
                >
              </li>
              <li>
                <a href="{{BASE_URL}}/top-selling"
                  ><i class="bx bx-radio-circle"></i>Top Selling</a
                >
              </li>
            </ul>
          </li>

             <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bx bx-money"></i></div>
              <div class="menu-title">Cost</div>
            </a>
            <ul>
              <li>
                <a href="{{BASE_URL}}/daily-costs"
                  ><i class="bx bx-radio-circle"></i>Daily Costs</a
                >
              </li>
              <li>
                <a href="{{BASE_URL}}/items-indirect"
                  ><i class="bx bx-radio-circle"></i>Items(Indirect) </a
                >
              </li>
              <li>
                <a href="{{BASE_URL}}/billing"
                  ><i class="bx bx-radio-circle"></i>Billing Indirect/Costs</a
                >
              </li>
            </ul>
             </li>

            
             @php $subpage = $URL[0] ?? '';@endphp
              <li  class="{{$subpage == 'items-new' ? 'mm-active':''}}
                          {{$subpage == 'items' ? 'mm-active':''}}">
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bx bx-cart "></i></div>
              <div class="menu-title">Stocks</div>
            </a>
            <ul>
              <li>
                <a href="{{BASE_URL}}/inventory"
                  ><i class="bx bx-radio-circle"></i>Inventory</a
                >
              </li>
              <li class="<?=$subpage == 'items-new' ? 'mm-active':''?>
                          <?=$subpage == 'items' ? 'mm-active':''?>">
                <a href="{{BASE_URL}}/items-raw"
                  ><i class="bx bx-radio-circle"></i>Items(Raw POS) </a
                >
              </li>
              <li>
                <a href="{{BASE_URL}}/supplier-main"
                  ><i class="bx bx-radio-circle"></i>Main Storage</a
                >
              </li>
                 <li>
                <a href="{{BASE_URL}}/main-sub"
                  ><i class="bx bx-radio-circle"></i>Sub Storage</a
                >
              </li>
                 <li>
                <a href="{{BASE_URL}}/return-main"
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
                <a href="{{BASE_URL}}/product"
                  ><i class="bx bx-radio-circle"></i>Items(POS) </a
                >
              </li>
            </ul>
             </li>

               @php $subpage = $URL[0] ?? '';@endphp
                <li class="{{$subpage == 'supplier-new' ? 'mm-active':''}}
                {{$subpage == 'supplier' ? 'mm-active':''}}">
            <a href="{{BASE_URL}}/supplier">
              <div class="parent-icon"><i class="bx bx-box"></i></div>
              <div class="menu-title">Supplier</div>
            </a>
          </li>
          
           <?php $subpage = $URL[0] ?? '';?>
           <li class="<?=$subpage == 'user-new' ? 'mm-active':''?> 
                      <?=$subpage == 'user-profile' ? 'mm-active':''?>
                      <?=$subpage == 'user-edit' ? 'mm-active':''?>">
            <a href="{{BASE_URL}}/user">
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

            <!-- <div
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
            </div> -->
             <div>
            <img
              src="{{BASE_URL}}/assets/images/dotsPOS.png"
              class="logo-icon me--5"
              alt="logo icon"
              width="125"
            />
          </div>
            <h3 class="text-info mt-1">{{APP_NAME}}</h3>
          
            
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
                    class="nav-link dropdown-toggle dropdown-toggle-nocaret"
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
                  <a class="nav-link dark-mode-icon" href="javascript:;"
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
                      <!--end row-->
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
              <h3 class="js-gtotal justify-content-end">0</h3>
            <div class="user-box dropdown px-3">
              <a
                class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="{{BASE_URL}}/{{$user->image}}"
                  class="user-img"
                  alt="user avatar"
                />
                <div class="user-info">
                  <p class="user-name mb-0">{{$user->first_name}}</p>
                  <p class="designattion mb-0">{{$user->role}}</p>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:;"
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
                <li >
                  <a type="button"
                    class="dropdown-item d-flex align-items-center"
                    href="{{BASE_URL}}/logout" onclick=""
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

@yield("main-content")

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
    <!-- <script src="<?=BASE_URL?>/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script> -->
    <script src="<?=BASE_URL?>/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?=BASE_URL?>/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>


    <!-- sweet-alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="<?=BASE_URL?>/assets/js/index.js"></script>
    <!--app JS-->
    <script src="<?=BASE_URL?>/assets/js/app.js"></script>
    <!-- Table -->
     <script src="<?=BASE_URL?>/assets/js/table.js"></script>
         <!-- POS -->
     <script src="<?=BASE_URL?>/assets/js/pos.js"></script>
    <!--Password show & hide js -->
  </body>
</html>




