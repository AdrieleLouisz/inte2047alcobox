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

    <title>Products</title>
</head>

<body>
    <?php include("login.php") ?>

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
        <div class="section">
            <div class="product">
                <div class="simpleCart_shelfItem">
                    <a href="spirits.php"> <img class="item_image product_image" src="images/spirits-box.jpg" alt="Spirits Box" /> </a>
                    <h2 class="item_name" >Spirits Box</h2>
                    <p>
                        <span class="item_price">$79.99</span><br />
                        <select class="item_size">
                            <option value="Every month">Every month</option>
                            <option value="Every 2 months">Every 2 months</option>
                            <option value="Every 4 months">Every 4 months</option>
                        </select>
                        <input type="text" value="1" class="item_Quantity"/><br />
                        <p><a class="item_add" href="javascript:;">Add to Cart</a></p> 
                    </p>
                </div>
            </div>
            <div class="product">
                <div class="simpleCart_shelfItem">
                    <a href="whiskey.php"> <img class="item_image product_image" src="images/whiskey-box.jpg" alt="Whiskey Box" /> </a>
                    <h2 class="item_name">Whiskey Box</h2>
                    <p>
                        <span class="item_price">$89.99</span><br />
                        <select class="item_size">
                            <option value="Every month">Every month</option>
                            <option value="Every 2 months">Every 2 months</option>
                            <option value="Every 4 months">Every 4 months</option>
                        </select>
                        <input type="text" value="1" class="item_Quantity"/><br />
                        <p><a class="item_add" href="javascript:;">Add to Cart</a></p>   
                    </p>
                </div>            
            </div>
            <div class="product">
                <div class="simpleCart_shelfItem">
                    <a href="vodka.php"> <img class="item_image product_image" src="images/vodka-box.jpg" alt="Vodka Box" /> </a> 
                    <h2 class="item_name">Vodka Box</h2>
                    <p>
                        <span class="item_price">$94.99</span><br />
                        <select class="item_size">
                            <option value="Every month">Every month</option>
                            <option value="Every 2 months">Every 2 months</option>
                            <option value="Every 4 months">Every 4 months</option>
                        </select>
                        <input type="text" value="1" class="item_Quantity" /><br />
                        <p><a class="item_add" href="javascript:;">Add to Cart</a></p>
                    </p>
                </div>            
            </div>        
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