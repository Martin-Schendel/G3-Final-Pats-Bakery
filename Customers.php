<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pat's Bakery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once "Header.php";?>
    <div class="content">
        <h2>New Customer</h2>
        <form action="CreateCustomer.php" method="post">
            <label for="CustFirstName">Customer First Name:</label>
            <input type="text" id="CustFirstName" name="CustFirstName"><br><br>
            <label for="CustLastName">Customer Last Name:</label>
            <input type="text" id="CustLastName" name="CustLastName"><br><br>
            <label for="CustEmail">Customer Email:</label>
            <input type="text" id="CustEmail" name="CustEmail"><br><br>
            <label for="CustPhone">Customer Phone:</label>
            <input type="text" id="CustPhone" name="CustPhone"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <footer>
        Copyright 2022 Pat's Bakery
    </footer>
</body>
</html>