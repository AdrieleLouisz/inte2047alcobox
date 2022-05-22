<html>
<head>
    <title>Process Form Data</title>
</head>
<body>
    <h1>Process Form Data</h1>

    <?php
       $name = htmlspecialchars($_GET["user_name"]);
       $email = htmlspecialchars($_GET["user_email"]);
       $order = htmlspecialchars($_GET["order_number"]);
       $comments = htmlspecialchars($_GET["user_comments"]);

       echo "Name: " . $name . "<br />";
       echo "Email: " . $email . "<br />";
       echo "Order No: " . $order . "<br />";
       echo "Comments: " . $comments . "<br />";
    ?>
</body>
</html>