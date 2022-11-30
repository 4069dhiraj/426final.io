<!DOCTYPE html>
  <!--
    Project Assignment
    
    Starting Page of Pat's of henderson
    Team: Beijing to KTM
    Author: Sunn yi
    Date: 10/15/2022   

    Filename: Order.php
   -->
<html>
	<head>
		<title>La Plaque</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
    * {
        box-sizing: border-box;
		font-size: 14px;
    }
	body {
		background:  #3e0110;
		font-family: Arial;
  		padding: 0px;
		height: 100%;
	}
    /* Header/Blog Title */
	.header{
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
	border:none;
    text-decoration: none;
    }

    /* Change color on hover */
    .topnav a:hover {
	background-color: rgb(233, 38, 38);
    color: black;
    }


    /* Add a card effect for articles */
    .card {
	background-color: rgb(248, 239, 239);
    font-size: larger;
    font-display: auto;
	width: 100%;
    font-weight: 300;
    padding: 20px;
    margin-top: 20px;
    }
    /* Footer */
    .footer {
	padding: 20px;
    text-align: center;
    color: white;
	font-family: "Brush Script MT",cursive;
    background: rgb(0, 12, 0);
    margin: 0px;
    }
    /*subnavigation setting*/
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
	background-color: rgb(253, 121, 121);
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
    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
    .topnav a {
        float: none;
        width: 100%;
    }
    }
    form {
		display: -webkit-flex;
		display: flex;
		-webkit-flex-flow: row wrap;
		flex-flow: row wrap;
		} 

    fieldset {
		background-color: rgb(130, 24, 24);
		-webkit-flex: 1 1 300px;
		flex: 1 1 300px; 
		margin: 10px;  
		}


    input:focus, select:focus, textarea:focus{
        background: rgb(179, 99, 99);
    }
    #nameBox:focus:valid, #phoneBox:focus:valid{
        background: rgb(243, 187, 187) url(rb_okay.png) no-repeat right;
    }
    #nameBox:focus:invalid, #phoneBox:focus:invalid{
        background: rgb(255,230,230) url(rb_warning.png) no-repeat right;
    }

    legend {
    color: rgb(248, 229, 229);
    background-color: rgb(4, 115, 80);
    }

    label {
    display: inline-block;
    width: auto;
    }
    input[type="submit"] {
    height: 50px;
    width: 300px;
    }
    button{
        height: 50px;
        width: 300px;
    }

    input#sizeBox {
    width: auto;
    }
	
	.hid {
		overflow: hidden;
	}
	.left {
		float: left;
	}
	.box_head{
	position: relative;
    margin: 0;
    height: 50px;
    font-size: 30px;
    font-weight: 400;
    color: #f9eaea;
    border-top: 1px solid #e0e0e0;
  }
  .box_head span{
  position: absolute;
    top: -20px;
    left: 372px;
    height: 40px;
    width: 482px;
    line-height: 40px;
    text-align: center;
    display: block;
    background-color: #f86c6c;
	font-size: 30px;
	}
	#box {
		width:1240px auto;
		margin: 20px auto;
	}
	#box ul {
		margin-right: -14px;
		overflow: hidden;
	}
	#box li {
		width: 26em;
		float: left;
		margin: 14px;
		padding: 24px 0 20px;
		background: rgb(244, 220, 220);
		text-align: center;
		position: relative;
		cursor: pointer;
		
	}
	
	.pro_name {
		display: block;
		text-overflow: ellipsis;
		white-space: nowrap;
		overflow: hidden;
		font-weight: 400;
	}
	.pro_name a {
		color: rgb(233, 84, 84);
	}
	.pro_price {
		color: #ff6700;
		margin: 10px;
		display: none;
	}
	.pro_rank {
		color: #757575;
		margin: 10px;
	}
	
	#box li:hover .add_btn {
		display: block;
		
	}
	#box li:hover .pro_rank {
		opacity: 0;
	}
	#box li .add_btn:hover {
		background-color: #f60;
		color: white;
	}
	

	
	.add_btn {
		height: 22px;
		position: absolute;
		width: 122px;
		bottom: 8px;
		left: 50%;
		margin-left: -61px;
		line-height: 22px;
		display: none;
		color: #F60;
		font-size: 12px;
		border: 1px solid  #f60;
	}
	.car {
		width: 1240px auto;
		margin: 20px auto;
		background: rgb(255, 206, 206);
	}
	.car .check{
		width: 50px auto;
	
	}
	.car .check i{
		color: #fff;
		display: inline-block;
		
		width: 18px auto;
		height: 18px;
		line-height: 18px;
		border: 1px solid #e0e0e0;
		margin-left: 24px;
		background-color: #fff;
		font-size: 16px;
		text-align: center;
		vertical-align: middle;
		position: relative;
		top: -1px;
		cursor: pointer;
		font-family: "iconfont";
	}
	.i_acity {

		border-color: #ff6700 !important;
		background-color: #ff6700 !important;
	}
	.car .img {
		width: 100px;
	}
	.car .name {
		width: 300px;
		padding-left: 140px;
		padding-right: 20px;
	}
	.car .name span {
		line-height: 1;
		margin-top: 8px;
		margin-bottom: 8px;
		font-size: 18px;
		font-weight: normal;
		text-overflow: ellipsis;
		white-space: nowrap;
		overflow: hidden;
	}
	.car .price {
		width: 180px;
		text-align: right;
		padding-right: 60px;
	}
	.car .price span {
		color: #ff6700;
		font-size: 16px;
		padding-left: 180px;
	}
	.car .number{
		width: 150px;
	}
	.car .subtotal{
		width: 180px;
		padding-left: 90px;
		
	}
	.car .ctrl {
		width: 105px;
		padding-right:25px;
		text-align: center;
	}
	.car .ctrl a {
		font-size: 20px;
		cursor: pointer;
		display: block;
		width: 26px;
		height: 26px;
		margin: 30px auto;
		line-height: 26px;
	}
	.car .ctrl a:hover {
		color: #FFF;
		background: #ff6700;
		border-radius: 50%;
	}
	.head_row {
		height: 70px;
		line-height: 70px;
	}
	.head_row, .row {
		border-bottom: solid 1px #e0e0e0;
	}
	.row {
		height: 86px;
		line-height:86px;
		padding: 15px 0;
		margin: 0px;
	}
	#sum_area{
		width:1240px auto;
		height: 60px;
		background: white;
		margin: 20px auto;
	}
	#sum_area #pay{
		width:250px;
		height:60px;
		text-align: center;
		float: right;
		line-height: 60px;
		font-size: 19px;
		background: #ff0008;
		color: white;
	}
	#sum_area #pay_amout{
		width:250px;
		height:60px;
		text-align: center;
		float: right;
		line-height: 60px;
		font-size: 16px;
		color:#FF4B00 ;
	}
	#sum_area #pay_amout #price_num{
		width:100px;
		height: 60px;
		font-size: 25px;
		color:#a70505 ;
	/*	float: left;*/
	}
	
	.item_count_i{
		height: 85px;
		width:10%;
		/*border: 1px solid black;*/
		width: 220px;
		padding-left: 30px;
		float: left;
		margin-right: 25px;
	}
	.num_count{
		width:150px;
		height:40px;
		border: 1.2px solid #ac9494;
		float:right;
		margin-top: 21px;
	
	}
	.count_i{
		width:30%;
		height:40px;
		line-height: 40px;
		float: left;
		text-align: center;
		font-size:21px;
		color: #747474;
	}
	.count_i:hover{
		width:30%;
		height:40px;
		line-height: 40px;
		float: left;
		text-align: center;
		font-size:21px;
		color: #747474;
		background: #b58585;
		cursor: pointer;
	}
	.c_num{
		width:40%;
		height:40px;
		line-height: 40px;
		float: left;
		text-align: center;
		font-size:16px;
		color: #747474;
	}
	.count_d{
		width:30%;
		height:40px;
		line-height: 40px;
		float: left;
		text-align: center;
		font-size:25px;
		color: #747474;
	}
	.count_d:hover{
		width:30%;
		height:40px;
		line-height: 40px;
		float: left;
		text-align: center;
		font-size:25px;
		color: #747474;
		background: #E0E0E0;
		cursor: pointer;
	}
	.i_acity2 {
		border-color: #ff6700 !important;
		background-color: #ff6700 !important;
	}

</style>
	</head>
	<body>
		<script>
			window.onload = function() {
                    var aData = [{
                            "Food": "GRILLED ASPARAGUS | $9",
                            "price": "9",
                            "comm": "0",
                        },
                        {
                            "Food": 'CREOLE OKRA | $10',
                            "price": "10",
                            "comm": "0",
                        },
                        {
                            "Food": 'BRUSSELS SPROUTS | $11',
                            "price": "11",
                            "comm": "0",
                        },
                        {
                            "Food": 'CAULIFLOWER AU GRATIN | $9',
                            "price": "9",
                            "comm": "0",
                        },
                        {
                            "Food": 'SHRIMP PAT | $13.99',
                            "price": "$13.99",
                            "comm": "0",
                        },
                        {
                            "Food": 'CRAFISH | $12.88/lb',
                            "price": "12.88",
                            "comm": "0",
                        },
                        {
                            "Food": 'GUMBO | $11',
                            "price": "11",
                            "comm": "0",
                        },
                        {
                            "Food": 'FRIED CUMBO | $9',
                            "price": "9",
                            "comm": "0",
                        },
                        {
                            "Food": ' SEAFOOD SALAD* | $22',
                            "price": "22",
                            "comm": "0",
                        },
                        {
                            "Food": 'GRILLED SEAFOOD SALAD* | $23',
                            "price": "23",
                            "comm": "0",
                        },
                        {
                            "Food": 'SHRIMP SALAD* | $16',
                            "price": "16",
                            "comm": "0",
                        },
                        {
                            "Food": 'GRILLED CHINCHEN SALAD* |$23',
                            "price": "23",
                            "comm": "0",
                        },
                        {
                            "Food": 'CRAWFISH, SHRIMP, CHICKEN, OR SEAFOOD(SHRIMP, CRAWFISH, AND CRAD) |$26',
                            "price": "26",
                            "comm": "0",
                        },
                        {
                            "Food": 'FRIED SHRIMP* |$21',
                            "price": "21",
                            "comm": "0",
                        },
                        {
                            "Food": 'FRIED OYSTERS |$23',
                            "price": "23",
                            "comm": "0",
                        },
                        {
                            "Food": 'FRIED CATFISH* |$23',
                            "price": "23",
                            "comm": "0",
                        },
                        {
                            "Food": 'STUFFED SHRIMP* |$23',
                            "price": "23",
                            "comm": '0',
                        },
                        {
                            "Food": 'BREAD PUDDING* |$8',
                            "price": "8",
                            "comm": '0',
                        },
                        {
                            "Food": 'PECAN PIE* |$8',
                            "price": "8",
                            "comm": '0',
                        },
                        {
                            "Food": 'CHEESECAKE* |$8',
                            "price": "8",
                            "comm": '0',
                        }
                        ];
				var oBox = document.getElementById("box");
				var oCar = document.getElementById("car");
				var oUl = document.getElementsByTagName("ul")[0];

				for (var i = 0; i < aData.length; i++) {
					var oLi = document.createElement("li");
					var data = aData[i];

					oLi.innerHTML += '<h3 id="h3" class="pro_name"><a rel="nofollow" href="#">' + data["Food"] + '</a></h3>';
					oLi.innerHTML += '<p class="pro_price">' + data["price"] + '&pound</p>';
					oLi.innerHTML += '<div class="add_btn">Add to Cart</div>';
					oUl.appendChild(oLi);

				}
				var aBtn = getClass(oBox, "add_btn");//get  add buttum items in box所有添加购物车按钮
				var number = 0;//初始
				for (var i = 0; i < aBtn.length; i++) {
					number++;
					aBtn[i].index = i;
					aBtn[i].onclick = function() {
						var oDiv = document.createElement("div");
						var data = aData[this.index];
						oDiv.className = "row hid";
						oDiv.innerHTML += '<div class="check left"> <i class="i_check" id="i_check" onclick="i_check()" >&#10004</i></div>';
						oDiv.innerHTML += '<div class="name left"><span>' + data["Food"] + '</span></div>';
						oDiv.innerHTML += '<div class="price left"><span>' + data["price"] + '&pound</span></div>';
						oDiv.innerHTML +=' <div class="item_count_i"><div class="num_count"><div class="count_d">-</div><div class="c_num">1</div><div class="count_i">+</div></div> </div>'
						oDiv.innerHTML += '<div class="subtotal left"><span>' + data["price"] + '&pound</span></div>'
						oDiv.innerHTML += '<div class="ctrl left"><a rel="nofollow" href="javascript:;">&#10005</a></div>';
						oCar.appendChild(oDiv);
						var flag = true;
						var check = oDiv.firstChild.getElementsByTagName("i")[0];
						check.onclick = function() {
							// console.log(check.className);
							if (check.className == "i_check i_acity") {
								check.classList.remove("i_acity");

							} else {
								check.classList.add("i_acity");
							}
							getAmount();
						}
						var delBtn = oDiv.lastChild.getElementsByTagName("a")[0];
						delBtn.onclick = function() {
							var result = confirm("确定删除吗?");
							if (result) {
								oCar.removeChild(oDiv);
								number--;
								getAmount();
							}
						}
						var i_btn = document.getElementsByClassName("count_i");
						for (var k = 0; k < i_btn.length; k++) {
							i_btn[k].onclick = function() {
								bt = this;
								//get items prices
								at = this.parentElement.parentElement.nextElementSibling;
								//get items prices
								pt = this.parentElement.parentElement.previousElementSibling;
								//get select items
								node = bt.parentNode.childNodes[1];
								console.log(node);
								num = node.innerText;
								num = parseInt(num);
								num++;
								node.innerText = num;
								//获取单价
								price = pt.innerText;
								price = price.substring(0, price.length - 1);
								//计算小计值
								at.innerText = price * num + '';
								//calculate total prices
								getAmount();
							}
						}
						//checking click "-" vlaue 
						var d_btn = document.getElementsByClassName("count_d");
						for (k = 0; k < i_btn.length; k++) {
							d_btn[k].onclick = function() {
								bt = this;
								//GET CHART FROM THE PRICE
								at = this.parentElement.parentElement.nextElementSibling;
								//获取单价节点
								pt = this.parentElement.parentElement.previousElementSibling;
								//获取c_num节点
								node = bt.parentNode.childNodes[1];
								num = node.innerText;
								num = parseInt(num);
								if (num > 1) {
									num--;
								}
								node.innerText = num;
								//获取单价
								price = pt.innerText;
								price = price.substring(0, price.length - 1);
								//计算小计值		
								at.innerText = price * num + "";
								//calculate total
								getAmount();
							}
						}

						delBtn.onclick = function() {
							var result = confirm("Are you sure want to DELETE?");
							if (result) {
								oCar.removeChild(oDiv);
								number--;
								getAmount();
							}
						}

					}
				}

			}

			function getClass(oBox, tagname) {
				var aTag = oBox.getElementsByTagName("*");
				var aBox = [];
				for (var i = 0; i < aTag.length; i++) {
					if (aTag[i].className == tagname) {
						aBox.push(aTag[i]);
					}
				}
				return aBox;
			}


			var index = false;
			function checkAll() {
				var choose = document.getElementById("car").getElementsByTagName("i");
				// console.log(choose);
				if (choose.length != 1) {
					for (i = 1; i < choose.length; i++) {
						if (!index) {
							choose[0].classList.add("i_acity2")
							choose[i].classList.add("i_acity");
						} else {
							choose[i].classList.remove("i_acity");
							choose[0].classList.remove("i_acity2")
						}
					}
					index = !index;
				}
				getAmount();
			}



			//calculate price
			function getAmount() {
				// console.log(ys);
				ns = document.getElementsByClassName("i_acity");
				console.log(ns);
				sum = 0;
				//calcullate select
				document.getElementById("price_num").innerText = sum;
				for (y = 0; y < ns.length; y++) {
					//price
					amount_info = ns[y].parentElement.parentElement.lastElementChild.previousElementSibling;
					num = parseInt(amount_info.innerText);
					sum += num;
					document.getElementById("price_num").innerText = sum;
				}
			}
		</script>
		</head>
		<body>
			<a href="index.php" style="text-decoration: none;"><div class="header">
				<div style="border: 3px solid #460202; filter:drop-shadow(12px 22px 800px rgb(14, 14, 0)); backdrop-filter: blur(6px);">
				  <h1 >LA PLAQUE</h1>
				  <h4>LOUISIANA'S FLAVOR</h3></div>
			  </div></a>
          
              <div class="topnav">
                <a href="index.php">HOME</a>
                <a href="menu.php">MENU</a>
                <div class="subnav">
                 <button class="subnavbtn">ABOUT</button>
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
            <a href="./admin.php">Admin Panel</a>
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

          <div class="card">
             
               

			<div id="car" class="car">

				<div class="head_row hid">
					<div class="check left"> <i onclick="checkAll()">&#10004</i></div>
					<div class="img left">  Select_All</div>
					<div class="name left">NAME</div>
					<div class="price left">PRICE</div>
					<div class="number left">VALUE</div>
					<div class="subtotal left">Price</div>
					<div class="ctrl left">Cancel</div>
				</div>


			</div>
			<div id="sum_area">
				<div id="pay"><a href="makepay.php">PAY</a></div>
				<div id="pay_amout">Total: <span id="price_num">0</span></div>
			</div>



			<div id="box">
				<h2 id="h5" class="box_head"><span>Our Menu</span></h2>
				<ul>
				</ul>
			</div>
<div class="footer">
	<strong>  LA PLAQUE </strong> &#9743  4205 Ryan St, Lake Charles &nbsp 70605 
	<p>Thank you for using our online ordering form for quick and easy
       orders. Please enter your name and phone number and whether you
	   want to place an order for delivery or pickup. Note that required
	   values are marked by an asterisk (*). If you
	   want to place your order over the phone, call us at
		&#9743<a href="tel:+13865557499">(386) 555-7499</a>.</p>
</div>
			 
				
		
		</body>
</html>
