<?php
$active = "Details";

if (isset($_GET['details'])) {

    $email = $_SESSION['customer_email'];
    $query = "select * from customer where customer_email = '$email'";
   

    $run_query = mysqli_query($con,$query); 

    $row_query = mysqli_fetch_array($run_query);       

    $cname = $row_query['customer_name'];
    $cemail = $row_query['customer_email'];
    $ccontact = $row_query['customer_contact'];
    $cpass = $row_query['customer_pass'];
    $caddress = $row_query['customer_address'];
    $cpincode = $row_query['Pin_Code'];

    echo  "
    <div class='col-md-6 col-12' style='margin:0px auto'>
    <div class='bg-light text-dark' style='border:solid #e5e5e5 0.2px; padding: 10px 35px'> 
            <div class='ci-text'>
                <p style = 'font-size:18px'><b>Email:</b> $cemail</p>
            </div>
            <div class='ci-text'>
                <p style='font-size:18px'><b>Contact:</b> $ccontact</p>
            </div>
            <div class='ci-text'>
                
            <p style='font-size:18px'><b>Address:</b> $caddress</p>
            </div>        
            <div class='ci-text'>
            <p style='font-size:18px'><b>Pincode:</b> $cpincode</p>
            </div>        
            </div>
    </div> 
        ";
}
