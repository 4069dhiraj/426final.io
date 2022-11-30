<!DOCTYPE html>
  <!--
    Project Assignment
    
    Starting Page of Pat's of henderson
    Team: Beijing to KTM
    Author: Sunn yi
    Date: 10/15/2022   

    Filename: makepay.php
   -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
      body {
        font-family: Arial;
        font-size: 17px;
        background: #3e0110;
        padding: 0px;
      }

      * {
        box-sizing: border-box;
      }

      .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
      }

      .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
      }

      .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
      }

      .col-75 {
        -ms-flex: 75%; /* IE10 */
        flex: 75%;
      }

      .col-25,
      .col-50,
      .col-75 {
        padding: 0 16px;
      }

      .container {
        background: white;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
      }

      input[type='text'] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }
.header {
       padding: 30px;
       text-align: center;
       background-image: url('home_gumbo.jpg');
       background-repeat:no-repeat; 
       background-size: cover;
       background-attachment: fixed;
       width:auto;
       background-position: 100%;
       color:aliceblue;    
      font: 20px Arial,bold sans-serif;
 }

.header h1 {
  font-size: 50px;
  font-family: "Brush Script MT",cursive;
  border: none;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: rgb(9, 0, 0);
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  border: none;
  text-decoration: none;
}
.subnav {
  float: left;
  overflow: hidden;
}
.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: rgb(233, 38, 38);
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: rgb(139, 26, 26);
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: rgb(126, 66, 66);
  color: black;
}

.subnav:hover .subnav-content {
  display: block;

}

/* Change color on hover */
.topnav a:hover {
  background-color:rgb(233, 38, 38) ;
  color: black;
}
.footer {
  padding: 20px;
  text-align: center;
  color: white;
  font-family: "Brush Script MT",cursive;
  background: rgb(0, 12, 0);
  margin: 0px;
  }

label {
        margin-bottom: 10px;
        display: block;
      }

      .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
      }

      .btn {
        background-color: #51070e;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
      }

      .btn:hover {
        background-color: #45a049;
      }

      a {
        color: #2196f3;
      }

      hr {
        border: 1px solid lightgrey;
      }

      span.price {
        float: right;
        color: grey;
      }

      /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
      @media (max-width: 800px) {
        .row {
          flex-direction: column-reverse;
        }
        .col-25 {
          margin-bottom: 20px;
        }
      }
    </style>
  </head>
  <body>
    <a href="index.php" style="text-decoration: none;"><div class="header">
      <div style="border: 3px solid #460202; filter:drop-shadow(12px 22px 800px rgb(14, 14, 0)); backdrop-filter: blur(4px);">
        <h1 >LA PLAQUE</h1>
        <h4>LOUISIANA'S FLAVOR</h3></div>
    </div></a>
  
  
  
  <div class="topnav">
      <a href="index.php">HOME</a>
      <a href="menu.php">MENU</a>
      <div class="subnav">
       <button class="subnavbtn">ABOUT<i class="fa fa-caret-down"></i></button>
       <div class="subnav-content">
           <a href="awards.php">AWARDS</a>
           <a href="contact.php">CONTACT</a>
       </div>
       </div>
      <a href="Order.php" style="float:right">ORDERS</a>
      <a href="booking.php" style="float:right">BOOKING</a>
      <?php
            if (isset($_SESSION['email'])){
        ?>
            <a href="./admin.php">ADMIN PANEL</a>
            <a href="./logout.php" class="nav-btn">LOGOUT</a>
        <?php
            } else{
        ?>
            <a href="./login.php" class="nav-btn">LOGIN</a>
        <?php
            }
        ?>
   </div>
   <hr style="margin:0px; border:4px solid rgb(122, 51, 4);">

    <h1 style="text-align: center; color:aliceblue">PAYMENT</h1>
    <p style="text-align: center; color:aliceblue">PLEASE PROVIDE YOUR DETAILS</p>
    <div class="row">
      <div class="col-75">
        <div class="container">
          <form action="/action_page.php">
            <div class="row">
              <div class="col-50">
                <h3>Billing Address</h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input
                  type="text"
                  id="fname"
                  name="firstname"
                  placeholder="John M. Doe"
                />
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input
                  type="text"
                  id="email"
                  name="email"
                  placeholder="john@example.com"
                />
                <label for="adr"
                  ><i class="fa fa-address-card-o"></i> Address</label
                >
                <input
                  type="text"
                  id="adr"
                  name="address"
                  placeholder="542 W. 15th Street"
                />
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input
                  type="text"
                  id="city"
                  name="city"
                  placeholder="New York"
                />

                <div class="row">
                  <div class="col-50">
                    <label for="state">State</label>
                    <input
                      type="text"
                      id="state"
                      name="state"
                      placeholder="NY"
                    />
                  </div>
                  <div class="col-50">
                    <label for="zip">Zip</label>
                    <input
                      type="text"
                      id="zip"
                      name="zip"
                      placeholder="10001"
                    />
                  </div>
                </div>
              </div>

              <div class="col-50">
                <h3>Payment</h3>
                <label for="fname">Accepted Cards</label>
                <div class="icon-container">
                  <i class="fa fa-cc-visa" style="color: navy"></i>
                  <i class="fa fa-cc-amex" style="color: blue"></i>
                  <i class="fa fa-cc-mastercard" style="color: red"></i>
                  <i class="fa fa-cc-discover" style="color: orange"></i>
                </div>
                <label for="cname">Name on Card</label>
                <input
                  type="text"
                  id="cname"
                  name="cardname"
                  placeholder="John More Doe"
                  required
                />
                <label for="ccnum">Credit card number</label>
                <input
                  type="text"
                  id="ccnum"
                  name="cardnumber"
                  placeholder="1111-2222-3333-4444"
                  required
                />
                <label for="expmonth">Exp Month</label>
                <input
                  type="text"
                  id="expmonth"
                  name="expmonth"
                  placeholder="September"
                  required
                />
                <div class="row">
                  <div class="col-50">
                    <label for="expyear">Exp Year</label>
                    <input
                      type="text"
                      id="expyear"
                      name="expyear"
                      placeholder="2018"
                    />
                  </div>
                  <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352" />
                  </div>
                </div>
              </div>
            </div>
            <label>
              <input type="checkbox" checked="checked" name="sameadr" />
              Shipping address same as billing
            </label>
            <input
              type="button"
              value="Continue to checkout"
              class="btn"
              onclick="msg()"
            />
          </form>
          <div class="footer">
            <p><strong>  LA PLAQUE </strong>    &#9743    4205 Ryan St, Lake Charles   &nbsp   70605  &#9743   337-555-2188 </p> 
               </div>
         
  </body>
</html>
