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


    <title>Sample E-Commerce Site</title>
</head>

<body>
    <!-- Entire Web Page -->
    <div class="page">

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
            <h1>Our Story</h1>
            <p>
                We are a start up that specialises in ..
            </p>
            
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