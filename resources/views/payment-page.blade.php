
		<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script src="js/jquery-1.12.5.min.js"></script>
<script type="text/javascript">

        var options = {
            "key": "rzp_test_hUp5HJPqFK8qsv",
            "amount": "<?php echo round($data['amount'])*100; ?>",
            "currency": "INR",
            "name": "Safarnama",
            "description": "A journey of thousand miles begins with Single Step..!!",
            // "image": "images/logo.png",
            "handler": function (response){
                var form = $(document.createElement('form'));
                $(form).attr("action", "{{route('payment-paid')}}");
                $(form).attr("method", "POST");
                $(form).css("display", "none");
                var payment_id = $("<input>").attr("type", "text").attr("name", "payment_id").val(response.razorpay_payment_id );
                var id = $("<input>").attr("type", "text").attr("name", "id").val(<?php echo $data['book_id']; ?> );
                var total = $("<input>").attr("type", "text").attr("name", "total").val(<?php echo $data['amount']; ?> );
                $(form).append($(payment_id));
                $(form).append($(total));
                $(form).append($(id));
                form.appendTo( document.body );
                $(form).submit();
            },
    "prefill": {
        "name": "Safarnama",
        "email": "<?php echo $data['email'];?>",
        "contact": "<?php echo $data['phone']?>"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#36454F"
    },
    "modal": {
        "ondismiss": function(){
            history.back();
        }
    }
    };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function (response){
            alert(response.error.description);
        });
        rzp1.open();

</script>