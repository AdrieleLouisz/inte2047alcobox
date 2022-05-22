<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="mystyle.css">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="scripts/simplecartjs/simpleCart.js"></script>
    <script src="scripts/simplecartjs-config.js"></script>

    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>

<div>
    <p>
        <a href="index.php" class="button">Home</a>
        <a href="cart.php" class="button">View Cart (<span class="simpleCart_quantity"></span> items)</a>
    </p>
</div>
    
<form action="" method="post">
    <h4>Full Name and Contact Details</h4>
            
    <p>
        <label for="fname">First Name</label><br />
        <input type="text" name="firstname" id="fname" required/><br />
    </p>
    <p>
        <label for="lname">Last Name</label><br />
        <input type="text" name="lastname" id="lname" required/><br />
    </p>
    <p>
        <label for="phone_number">Phone Number</label><br />
        <input type="tel" name="phone" id="phone_number" pattern="[0-9]{4} [0-9]{3} [0-9]{3}" required /><br />
        <small>Format: 04xx xxx xxx</small>
                
    </p>
    <p>
        <label for="email_address">Email Address</label><br />
        <input type="email" name="email" id="email_address" required /><br />
    </p>
    
    <h4>Delivery Address</h4>
    <p>
        <label for="address_street_1">Street Address</label><br />
        <input type="text" name="street1" id="address_street_1" required /><br />
    </p>
    <p>
        <label for="address_street_2">Street Address Line 2</label><br />
        <input type="text" name="street2" id="address_street_2" /><br />
    </p>
    <p>
        <label for="address_city">City</label><br />
        <input type="text" name="city" id="address_city" required/><br />
    </p>
    <p>
        <label for="address_state_province">State/Province</label><br />
        <input type="text" name="state_province" id="address_state_province" required/><br />
    </p>
    <p>
        <label for="postal_code">Postal/Zip Code</label><br />
        <input type="text" name="postcode" id="postal_code" pattern="[0-9]+" required/><br />
    </p>
    <p>
        <label for="country">Country</label><br />
        <input type="text" name="country" id="country" required/><br />
    </p>
    
    <h4>Credit Card Details</h4>
    <p>
        <input type="radio" id="cc_mastercard" name="cc_type" value="mastercard" />
        <label for="cc_mastercard">Mastercard</label>
        <br />
    
        <input type="radio" id="cc_visa" name="cc_type" value="visa" />
        <label for="cc_visa">Visa</label>
        <br />
                
        <input type="radio" id="cc_amex" name="cc_type" value="amex" />
        <label for="cc_amex">American Express</label>            
    </p>
    <p>
        <label for="credit_card_name">Name on Card</label><br />
        <input type="text" name="ccname" id="credit_card_name" required/><br />
    </p>
    <p>
        <label for="credit_card_number">Card Number</label><br />
        <input type="text" name="ccnumber" id="credit_card_number" pattern="[0-9]+" minlength="16" maxlength="16" required/><br />
    </p>
    <p>
        <label for="credit_card_number">Security Code</label><br />
        <input type="text" name="ccsecuritycode" id="credit_card_security_code" pattern="[0-9]+" minlength="3" maxlength="4" required/><br />
    </p>
    
    <!-- Checkout -->
    <div align="right">
        <a href="javascript:; simpleCart.empty();" class="simpleCart_checkout button">Confirm and Pay</a>
    </div>
</form>
</body>
</html>