
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://paystack.co/v1/inline.js"></script> 
    <title>Document</title>
</head>
<body>
    <form id="paymentForm">
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email-address" name="email"  required />
    </div>
    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="tel" id="amount" name="amount" required />
    </div>
    <div class="form-submit">
        <button type="submit" onclick="payWithPaystack()"> Pay </button>
    </div>
    </form>


<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
        e.preventDefault();

        let handler = PaystackPop.setup({
            key: 'pk_test_839cab168cfb81723db8ebef98f189d3bbc66f22', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: document.getElementById("amount").value * 100,
            currency: "GHS",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function(){
            alert('Window closed.');
            },
            callback: function(response){
            let message = 'Payment complete! Reference: ' + response.reference;
            alert(message);
            }
        });

        handler.openIframe();
    }
</script>
</body>
</html>

