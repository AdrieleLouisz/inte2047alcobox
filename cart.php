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


    <title>Cart</title>
</head>

<body>
    <!-- Entire Web Page -->
    <div class="page">

        <!-- Header -->
        <div class="header">
            <h1>My E-Commerce Site</h1>
            <p>Place your order now!</p>

            <!-- Menu -->
            <div class="menu">
            <ul>
                <li><a href="index.php" class="button">Home</a></li>
                <li><a href="shop.php" class="button">Shop</a></li>
                <li><a href="about.php" class="button">About Us</a></li>
                <li><a href="contact.php" class="button">Contact Us</a></li>
                <li><a href="cart.php" class="button">Cart (<span class="simpleCart_quantity"></span> items)</a></li>
            </ul>

            </div>
        </div>


        <!-- Main Content -->
        <div>
            <h1>Cart</h1>
            <div class="simpleCart_items"></div>
            <!-- Display Totals Table -->
    <!-- Display Totals Table -->
    <table class="costs" border=0 cellspacing=0>

        <!-- Display sub-total -->
        <tr class="costs">
            <td class="costs">Sub-Total</td>
            <td class="costs"><div class="simpleCart_total"></div></td>
        </tr>

        <!-- Display tax cost and tax rate -->
        <tr class="costs">
            <td class="costs">GST (<span class="simpleCart_taxRate"></span>%)</td>
            <td class="costs"><span class="simpleCart_tax"></span></td>
        </tr>

        <!-- Display shipping cost -->
        <tr class="costs">
            <td class="costs">Delivery fee</td>
            <td class="costs"><span class="simpleCart_shipping"></span></td>
        </tr>

        <!-- Display grand total, including tax and shipping -->
        <tr class="costs total">
            <th class="costs">Total (inc. GST)</th>
            <th class="costs"><span class="simpleCart_grandTotal"></span></th>
        </tr>
    </table>

    <div align="right">
        <!-- Checkout -->
        <p><a href="checkout.php" class="button">Checkout</a></p>
            
        <!-- Empty the cart -->
        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
    </div>
        


        <!-- Footer -->
        <!--
            In this example, a table is used to layout information.
            It's also possible to use divs to do this.  For example, refer to:
            https://www.w3schools.com/howto/howto_css_two_columns.asp
        -->
        <div class="footer">
            <table width="100%">
                <tr>
                    <th>Customer Help</th>
                    <th>Careers with Us</th>
                </tr>
                <tr>
                    <td>FAQ</td>
                    <td>Benefits</td>
                </tr>
                <tr>
                    <td>Exchanges & Returns</td>
                    <td>Jobs</td>
                </tr>
            </table>

            <p>
                Terms & Conditions | 
                Privacy
            </p>
            <p>&copy; 2000 Cool Site Designs</p>
        </div>
    </div>

</body>
</html>