<?php
include "config.php";

$query = <<<HEREDOC
SELECT `ItemID`, `ItemName`, `ItemSalePrice` FROM `item`;
HEREDOC;

 $result = $conn->query($query);
 $numRows = $result->num_rows;
 while ($row = $result->fetch_assoc()){
    $ItemID = htmlspecialchars($row['ItemID']);
    $ItemName = htmlspecialchars($row['ItemName']);
    $ItemSalePrice = htmlspecialchars($row['ItemSalePrice']);
    echo("<option id=\"item$ItemID\" value=\"$ItemID\" class=\"$ItemSalePrice\">$ItemName</option>");
 }