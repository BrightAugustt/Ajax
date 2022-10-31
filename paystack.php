
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="form-group">
        <label for="first-name">First Name</label>
        <input type="text" id="first-name" name="fname" />
    </div>
    <div class="form-group">
        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" name="email"/>
    </div>
    <div class="form-submit">
        <button type="submit" onclick="payWithPaystack()"> Pay </button>
    </div>
    </form>

<script src="https://paystack.co/v1/inline.js"></script> 
<script src="paystack.js"></script>
</body>
</html>

