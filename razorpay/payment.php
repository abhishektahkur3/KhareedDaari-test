<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options={
        "key": "rzp_test_Q9HlIhkAaIvVqR",
        "amount":"50000",
        "currency":"INR",
        "name":"Khareedari",
        "description":"Test Treansaction",
        "image":"",
        "handler": function(response){
            console.log(response);
        }
    };

    var rzp = new Razorpay(options);
    document.getElementById('rzp-button1').onclick=function(e){
        rzp.open();
        e.preventDefault();
    }

</script>