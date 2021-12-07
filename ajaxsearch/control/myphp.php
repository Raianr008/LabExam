<?php
include "../model/db.php";



  if (empty($_POST["pname"])) {
    echo "no data";
  }else {
  //  $pid=$_POST["pid"];

 $connection = new db();
 $conobj=$connection->OpenCon();

 $userQuery=$connection->SearchProduct($conobj,"student",$_POST["pname"]);

 if ($userQuery->num_rows > 0) {

   echo "<table><tr><th>username</th><th>Name</th><th>email</th><th>address</th></tr>";
   // output data of each row
   while($row = $MyQuery->fetch_assoc()) {
     echo "<tr><td>".$row["username"]."</td><td>".$row["firstname"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td></tr>";





   }
 }
   else {
     echo "0 results";
   }
   $connection->CloseCon($conobj);
  }


?>
