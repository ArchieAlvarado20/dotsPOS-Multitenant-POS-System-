<?php $this->extends = "POS.main";?>
<?php ob_start(); $this->currentSection = "main-content";?>
             <div class="alert alert-info bg-info mt-5 text-dark">
                    <span><strong>Note:</strong> This is the POS system for the cashier. When you punch an item, it will automatically be recorded in the Daily Sales on the Admin Panel.</span><br />
                    <span>The receipt page is currently in development.</span><br />
                    <span>We are still in the testing and development phase.</span><br />

              </div>

    <div class="container-fluid">
        <div class="items">
            <div class="row">
                <div class="input-group">
                    <input onkeypress="check_for_enter_key(event)" value="" oninput="search_item(event)"  type="text"  accesskey="z" class="form-control ms-3 js-search border-none mb-3" onclick="this.select()" placeholder="Search product" aria-label="Username" autofocus>
                    <span class="text-light" ><i onclick="arrowR_command()" class="arrowR text-xl text-danger bx bx-arrow-to-right mb-3"></i></span>
                </div>
                <div class="js-products" onclick="add_item(event)">
                </div>
            </div>  
        </div>
        <div class="product">
            <div class="product-navbar">
                <i onclick="arrowL_command()" class="arrowL text-danger fas fa-solid fa-arrow-left me-2 mt-2 fw-bold bx bx-arrow-to-left"></i>
                <h4 class="items-title">ITEMS:</h4>
                <h4 class="js-items-count">0</h4>
                <h5 class="date"><?= date('F j, Y')?></h5>
                <h5 class="time" id="clock"></h5> 
            </div>
            <div class="js-items"></div>
            <div class="col-sm-12 p-3">
                <div class="row"><button onclick="show_modal('payment-modal')" accesskey="x" class="col-sm-12 btn btn-success mb-2 float-end p-4">Check-out</button></div> 
                <div class="row"><button onclick="clear_all()" class="col-sm-12 btn btn-warning mb-2 me-5 p-4">Clear-all</button></div>
                <!-- <div class="row"><button onclick="raw_pos()" class="col-sm-12 btn btn-primary p-4">RAW-POS</button></div> -->
            </div>            
        </div>
    </div>

     <!--payment-modal start-->
     <div role="close-button" onclick="hide_modal(event,'payment-modal')" class="js-payment-modal d-none">
         <div class="main-payment-modal" >
            <div class="row-sm-12 d-flex">
              <h3 class="payment-title">PAYMENT</h3>
            </div>
            <div class="row d-flex">
               <p class="col text-left text-white mt-1">SUB-TOTAL:</p>
               <h3 class="js-gtotal_mod col text-right text-success"></h3>
            </div>
            <div class="row d-flex mb-3">
                <p class="col text-left text-white mt-1">PAYMENT:</p>
                        <input onkeyup ="enter_checkout(event)" class="js-payment-input form-control col text-white" type="number"  placeholder="Enter amount" name="" id="js-payment">
            </div>
            <div class="row d-flex mb-3">
                <p class="col text-left text-white mt-1">DINE:</p>
                    <select class="js-take form-control bg-dark col text-white" id="js-take" type="text" name="">
                        <option value="Cups" selected>Cups</option>
                        <option value="Bag">Bag</option>
                    </select>
            </div>
            <div class="row d-flex mb-3">
                        <p class="col text-left text-white mt-1">NUMBER:</p>
                        <input onkeyup="check_chekout(e)" class="js-table form-control col text-white" type="number" id="js-table " placeholder="Enter Table Number" name="">
            </div>      
                <button role="close-button" onclick="checkout(event)" class="col-md-3 btn btn-primary mb-1 mt-1 js-render w-100">Render</button>          
            </div>
    </div>
            <!--change-modal start-->
     <div role="close-button"  onclick="{hide_modal(event,'change');rendered_success()}" class="js-change-modal d-none">
            <div class="main-change-modal">
                <div class="col-sm-12">
                   <h3 class="ms-2 text-primary col text-center mb-3">CHANGE</h3>
                </div>
                <div class="row d-flex">
                    <p class="col text-left text-white mt-1 fw-bold">TOTAL:</p>
                    <h4 class="js-gtotal_change col text-center text-success fw-bold"></h4>
                </div>
                <div class="row d-flex">
                     <p class="col text-left text-white mt-1 fw-bold">PAYMENT:</p>
                     <h4 class="js-payment-result col text-center text-success fw-bold"></h4>
                </div>
              <div class="row d-flex mb-2">
                <p class="col text-left text-white mt-1 fw-bold">CHANGE:</p>
                <h4 class="js-change text-primary text-center col"></h4>
              </div>
              <div class="close-change-modal">
                   <button class="js-change-modal-close btn btn-primary" role="close-button"  onclick="{hide_modal(event,'change');rendered_success()}">Transaction Complete</button>
              </div>
                   
            </div>
      </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

        </div>
    </div>
     
    <?php $this->sections["$this->currentSection"] = ob_get_clean();