<?php
$active = "Checkout";
include('db.php');
include("functions.php");
include("header.php");
?>



<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <a href="shop.php">Shop</a>
                    <span>Check Out</span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form class="checkout-form">
            <div class="row">

                <div class="col-lg-6" <?php if (!($_SESSION['customer_email'] == 'unset')) {
                                            echo "style = 'margin: 0 auto'";
                                        } ?>>
                    <div class="checkout-content">
                        <a href="shop.php" class="content-btn">Continue Shopping</a>
                    </div>
                    <div class="place-order">
                        <h4>Your Order</h4>
                        <div class="order-total">
                            <ul class="order-table" style="margin-bottom:25px">
                                <li>Products <span>Total</span></li>
                                <?php checkoutProds(); ?>

                                <li class="fw-normal">Subtotal <span><p style="font-weight:bold">&#x20b9;<?php total_price(); ?></p></span></li>
                                <li id="totalAmt" class="total-price">Total <span><p style="color:red; font-weight:bold">&#x20b9;<?php total_price(); ?></p></span></li>
                            </ul>
                            
                            <select name="method" class="box" required="" style = "position:relative; left:14%; height:50px; width:70%; margin-bottom:30px; padding:12px">
                                <option value="" disabled="" selected="">select payment method --</option>
                                <option value="cash on delivery">cash on delivery</option>
                                <option value="credit card">credit card</option>
                                <option value="paytm">paytm</option>
                                <option value="paypal">paypal</option>
                            </select>
                            <form action="check-out.php" method="post">
                                <!-- <div class="order-btn">
                                    <a href="check-out.php?place=1" class="site-btn place-btn">Place Order</a>
                                </div> -->
                                <input type="button" name="btn" id="btn" value="Place order" onclick="payNow()"/>
                            </form>

                        </div>
                    </div>
                </div>
        </form>
    </div>
</section>
<!-- Shopping Cart Section End -->

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function payNow(){
        var amt= <?php total_price() ?>;

        
        var options={
            "key": "rzp_test_Q9HlIhkAaIvVqR",
            "amount":amt*100,
            "currency":"INR",
            "name":"Khareedari",
            "description":"Test Treansaction",
            "image":"",
            "handler": function(response){
                url:"account.php"
            }
        };

        var rzp = new Razorpay(options);
        rzp.open();

        // if(payNow()){
        //     window.open('account.php?orders','_self');
        // }
        }
        // window.open('account.php?orders','_self')
</script>

<?php
include('footer.php');
?>

</body>

</html>


<?php


if (isset($_GET['place'])) {


    $c_id = $_SESSION['customer_email'];

    $query = "select * from customer where customer_email= '$c_id'";

    $run_query = mysqli_query($con, $query);


    $get_query = mysqli_fetch_array($run_query);

    $custom_id = $get_query['customer_id'];


    $get_items = "select * from cart where c_id = '$c_id'";
    $run_items = mysqli_query($db, $get_items);

    while ($row_items = mysqli_fetch_array($run_items)) {
        $p_id = $row_items['products_id'];
        $pro_qty = $row_items['qty'];

        $get_item = "select * from products where products_id = '$p_id'";
        $run_item = mysqli_query($db, $get_item);

        while ($row_item = mysqli_fetch_array($run_item)) {

            $pro_price = $row_item['product_price'];
            $pro_details = $row_item['product_title'];

            $total_q += $pro_qty;
            $pro_total_p = $pro_price * $pro_qty;
        }

        $final_price += $pro_total_p;
    }
    $order = "insert into orders (order_qty, order_price, c_id, order_details, date) values ('$total_q','$final_price','$custom_id','$pro_details',NOW())";

    $run_order = mysqli_query($con, $order);


    $cart_clear = "delete from cart where c_id = '$c_id'";

    $run_clear = mysqli_query($con, $cart_clear);

    echo "<script>alert('Order Placed. Thankyou for Shopping')</script>";
    echo "<script>window.open('account.php?orders','_self')</script>";
}







?>