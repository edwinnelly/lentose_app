<?php
//open connection to mysql db
//open connection to mysql db
$connection = mysqli_connect("localhost","root","","app_data") or die("Error " . mysqli_error($connection));
//fetch table rows from mysql db
$sql = "SELECT * FROM product_tables";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

//create an array
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
    echo $product_name = $row['key_grant'];
}
 echo json_encode($emparray);

//close the db connection
mysqli_close($connection);
?>