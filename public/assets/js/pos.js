var PRODUCTS = [];
var ITEMS = [];
var BARCODE = false;
var GTOTAL = 0;
var TOTAL = 0;
var CHANGE = 0;
var AMOUNT = 0;
var COUNT = 0;
var TABLE = 0;
var TAKE = "";

var main_input = document.querySelector(".js-search");

function arrowR_command() {
  const arrowR = document.querySelector(".arrowR");
  const arrowL = document.querySelector(".arrowL");
  const items = document.querySelector(".items");
  const product = document.querySelector(".product");
  items.style.display = "none";
  arrowR.style.display = "none";

  product.style.display = "block";
  arrowL.style.display = "block";
}

function arrowL_command() {
  const arrowR = document.querySelector(".arrowR");
  const arrowL = document.querySelector(".arrowL");
  const items = document.querySelector(".items");
  const product = document.querySelector(".product");
  product.style.display = "none";
  arrowL.style.display = "none";

  items.style.display = "block";
  arrowR.style.display = "block";
}

function search_item(e) {
  var text = e.target.value.trim();

  var data = {};
  data.data_type = "search";
  data.text = text;
  send_data(data);
}

function send_data(data) {
  var ajax = new XMLHttpRequest();
  ajax.open("POST", "pos/ajax-pos", true);

  // Add authorization header if needed
  ajax.setRequestHeader("Authorization", "Bearer YOUR_TOKEN_HERE");
  ajax.setRequestHeader("Content-Type", "application/json"); // or other type as needed

  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      if (ajax.status == 200) {
        if (ajax.responseText.trim() != "") {
          handle_result(ajax.responseText);
        } else if (BARCODE) {
          swal.fire({
            title: "No Item",
            text: "That item was not found!",
            icon: "error",
            confirmButtonText: "Okay",
          });
          main_input.value = "";
        }
      } else if (ajax.status == 401) {
        console.log("Unauthorized: Invalid or missing credentials.");
        // Optional: prompt for login or retry
      } else {
        console.log(
          "An error occurred. Err Code:" +
            ajax.status +
            " Err Message:" +
            ajax.statusText
        );
        console.log(ajax);
      }
    }
  };

  ajax.send(JSON.stringify(data));
}

function handle_result(result) {
  console.log(result);
  var obj = JSON.parse(result);
  // console.log(obj);
  if (typeof obj != "undifined") {
    //valid json
    if (obj.data_type == "search") {
      var mydiv = document.querySelector(".js-products");
      mydiv.innerHTML = "";
      PRODUCTS = [];
      // console.log(mydiv);
      if (obj.data != "") {
        PRODUCTS = obj.data;
        for (var i = 0; i < obj.data.length; i++) {
          mydiv.innerHTML += product_html(obj.data[i], i);
        }

        if (BARCODE && PRODUCTS.length == 1) {
          add_item_from_index(0);
        }
      }
    }
  }
}
function product_html(data, index) {
  return `<img index="${index}" src="${data.image}" alt="Items" class="raw-items m-0 p-1">`;
}

function item_html(data, index) {
  return `
           <div class="product-card">
            <div class="column-one col-sm-4">
                <img src="${data.image}">
                <div class="column-two">
                    <div class="column-two-2">
                        <div class="description">${data.description}</div>
                        <button onclick="clear_item(${index})" class="close-button"><i class="fa fa-times"></i></button>
                    </div>
                   
                    <div class="column-three">
                    <h6 class="price">₱&nbsp;${data.price}</h6>
                    <h6 class="total">₱&nbsp;${(data.price * data.qty).toFixed(
                      2
                    )}</h6>
                    </div>
                    <div class="column-four">
                        <button index="${index}"onclick="change_qty('down', event)" class="btn btn-sm input-group-text bg-dark text-white border-primary text-center col-sm-2 minus">-</button>
                        <input index="${index}" onblur="change_qty('input', event)"  accesskey="v" onclick="this.select()" type="number" class="form-control text-center text-sm text-white border-primary col-sm-6" style="width:100px" value="${
    data.qty
  }">
                        <button index="${index}"onclick="change_qty('up', event)" class="btn btn-sm input-group-text bg-dark text-white border-primary text-center col-sm-2 plus">+</button>
                </div>
                </div>
            </div>
    </div>


                                `;
}
function add_item_from_index(index) {
  //check if item exists
  for (var i = ITEMS.length - 1; i >= 0; i--) {
    if (ITEMS[i].id == PRODUCTS[index].id) {
      ITEMS[i].qty += 1;
      refresh_items_display();
      return;
    }
  }
  var temp = PRODUCTS[index];
  temp.qty = 1;

  ITEMS.push(temp);
  // console.log(ITEMS);

  refresh_items_display();
}

function add_item(e) {
  if (e.target.tagName == "IMG") {
    var index = e.target.getAttribute("index");

    add_item_from_index(index);
  }
}
// fot the badge
function refresh_items_display() {
  var item_count = document.querySelector(".js-items-count");
  item_count.innerHTML = ITEMS.length;

  var items_div = document.querySelector(".js-items");
  items_div.innerHTML = "";
  var grand_total = 0;
  var count = 0;

  for (var i = ITEMS.length - 1; i >= 0; i--) {
    items_div.innerHTML += item_html(ITEMS[i], i);
    grand_total += ITEMS[i].qty * ITEMS[i].price;
    count += ITEMS[i].qty;
  }

  var gtotal_div = document.querySelector(".js-gtotal");
  gtotal_div.innerHTML = "" + grand_total.toFixed(2);
  GTOTAL = grand_total;

  var gtotal_mod = document.querySelector(".js-gtotal_mod");
  gtotal_mod.innerHTML = grand_total.toFixed(2);

  var gtotal_mod = document.querySelector(".js-gtotal_change");
  gtotal_mod.innerHTML = grand_total.toFixed(2);

  COUNT = count;
}
function change_qty(direction, e) {
  var index = e.currentTarget.getAttribute("index");

  if (direction == "up") {
    ITEMS[index].qty += 1;
  } else if (direction == "down") {
    ITEMS[index].qty -= 1;
  } else {
    ITEMS[index].qty = parseInt(e.currentTarget.value);
  }

  //make sure its not less than 1
  if (ITEMS[index].qty < 1) {
    ITEMS[index].qty = 1;
  }
  refresh_items_display();
}

function check_for_enter_key(e) {
  if (e.keyCode == 13) {
    BARCODE = true;
    search_item(e);
  }
}

function enter_checkout(e) {
  if (e.keyCode == 13) {
    mydiv.querySelector(".js-render").focus();
  }
}

function show_modal(modal) {
  if (modal == "payment-modal") {
    if (ITEMS.length == 0) {
      swal.fire({
        title: "Empty Cart",
        text: "Please put an item into the cart",
        icon: "error",
        confirmButtonText: "Okay",
      });
      return;
    }
    var mydiv = document.querySelector(".js-payment-modal");
    mydiv.classList.remove("d-none");

    mydiv.querySelector(".js-payment-input").value = "";
    mydiv.querySelector(".js-payment-input").focus();

    mydiv.querySelector(".js-table").value = "";
    mydiv.querySelector(".js-take").value = "Cups";
  } else if (modal == "change") {
    // if(ITEMS.length == 0){
    //     // alert("Please put an item into the cart");
    //     // return;
    // }
    var mydiv = document.querySelector(".js-change-modal");
    mydiv.classList.remove("d-none");

    // mydiv.querySelector(".js-change-input").value = CHANGE;

    var change = document.querySelector(".js-change");
    change.innerHTML = CHANGE.toFixed(2);
    mydiv.querySelector(".js-change-modal-close").focus();

    var amount = document.querySelector(".js-payment-result");
    amount.innerHTML = AMOUNT.toFixed(2);
  }
}

function hide_modal(e, modal) {
  if (e == true || e.target.getAttribute("role") == "close-button") {
    if (modal == "payment-modal") {
      var mydiv = document.querySelector(".js-payment-modal");
      mydiv.classList.add("d-none");
    } else if (modal == "change") {
      var mydiv = document.querySelector(".js-change-modal");
      mydiv.classList.add("d-none");
    }
    refresh_items_display();
  }
}

function checkout(e) {
  var amount = e.currentTarget.parentNode
    .querySelector(".js-payment-input")
    .value.trim();
  var table = e.currentTarget.parentNode
    .querySelector(".js-table")
    .value.trim();
  var take = e.currentTarget.parentNode.querySelector(".js-take").value.trim();

  if (amount == "") {
    swal.fire({
      title: "No amount entered",
      icon: "error",
      confirmButtonText: "Okay",
    });
    return;
  }

  amount = parseFloat(amount);
  if (amount < GTOTAL) {
    swal.fire({
      title: "Please enter right amount",
      icon: "error",
      confirmButtonText: "Okay",
    });
    return;
  }

  CHANGE = amount - GTOTAL;
  AMOUNT = amount;
  TABLE = table;
  TAKE = take;
  // CHANGE = CHANGE.toFixed(2);

  hide_modal(true, "payment-modal");
  show_modal("change");

  //remove unwanted information
  var ITEM_NEW = [];
  for (var i = 0; i < ITEMS.length; i++) {
    var tmp = {};
    tmp.id = ITEMS[i]["id"];
    tmp.qty = ITEMS[i]["qty"];
    tmp.description = ITEMS[i]["description"];

    ITEM_NEW.push(tmp);
  }

  //send cart data through ajax
  send_data({
    data_type: "checkout",
    text: ITEM_NEW,
  });
  //open receipt page
  print_receipt({
    company: "Idats Store",
    amount: amount,
    take: TAKE,
    table: TABLE,
    change: CHANGE,
    gtotal: GTOTAL,
    count: COUNT,
    data: ITEMS,
  });
  //clear items
  // (ITEMS = []), refresh_items_display();

  //reload products
  send_data({
    data_type: "search",
    text: "",
  });
}

function print_receipt(obj) {
  var vars = JSON.stringify(obj);

  RECEIPT_WINDOW = window.open(
    "index.php?pg=print&vars=" + vars,
    "printpage",
    "width=100px;"
  );

  setTimeout(close_receipt_window, 1000);
}

function close_receipt_window() {
  RECEIPT_WINDOW.close();
}

send_data({
  data_type: "search",
  text: "",
});

function clear_all() {
  if (ITEMS < 1) {
    swal.fire({
      title: "Theres no item into the cart",
      icon: "error",
      confirmButtonText: "Okay",
    });
  } else if (
    Swal.fire({
      title: "Removing Item",
      text: "Are you sure you want to remove all this item?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, remove this item!",
    }).then((result) => {
      if (result.isConfirmed) {
        ITEMS = [];
        refresh_items_display();
        Swal.fire("Deleted!", "The item has been removed.", "success");
      }
    })
  )
    return;
}

function clear_item(index) {
  ITEMS.splice(index, 1);
  refresh_items_display();

  // Swal.fire({
  // title: 'Removing Item',
  // text: "Are you sure you want to remove this item?",
  // icon: 'warning',
  // showCancelButton: true,
  // confirmButtonColor: '#3085d6',
  // cancelButtonColor: '#d33',
  // confirmButtonText: 'Yes, remove this item!'
  // }).then((result) => {
  // if (result.isConfirmed) {
  //     ITEMS.splice(index, 1);
  //     refresh_items_display();
  //     Swal.fire(
  //     'Deleted!',
  //     'The item has been removed.',
  //     'success'
  //     )
  // }
  // });
  return;
}

function rendered_success() {
  Swal.fire("Success", "Transaction Completed", "success");
  ITEMS = [];
  refresh_items_display();
  main_input.value = "";
  window.location.reload();
}
function raw_pos() {
  if (ITEMS.length > 0) {
    swal.fire({
      title: "Not Empty Cart",
      text: "Please remove all the item from the cart before proceeding to raw-pos",
      icon: "error",
      confirmButtonText: "Okay",
    });
    return;
  } else if (ITEMS.length == 0) {
    Swal.fire({
      title: "RAW-POS",
      text: "Are you sure you want to access raw-pos?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, I want to proceed!",
    }).then((result) => {
      if (result.isConfirmed) {
        setTimeout(function () {
          window.top.location = "index.php?pg=raw-pos";
        }, 2000);
        Swal.fire(
          "Welcome to RAW-POS!",
          "Successfully access raw-pos",
          "success"
        );
      }
    });
  }
}

function logout() {
  if (ITEMS.length > 0) {
    swal.fire({
      title: "Not Empty Cart",
      text: "Please remove all the item from the cart before logging-out",
      icon: "error",
      confirmButtonText: "Okay",
    });
    return;
  } else if (ITEMS.length == 0) {
    Swal.fire({
      title: "Logout",
      text: "Are you sure you want to logout?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#36032e",
      cancelButtonColor: "#36032e",
      confirmButtonText: "Yes, I want to logout!",
    }).then((result) => {
      if (result.isConfirmed) {
        setTimeout(function () {
          window.top.location = "index.php?pg=logout";
        }, 2000);
        Swal.fire("Logging-out...!", "Successfully Logged-out", "success");
      }
    });
  }
}
//select all in input by click
$(function () {
  $(document).on("click", "input[type=number]", function () {
    this.select();
  });
});
