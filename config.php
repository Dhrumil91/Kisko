<?php
    $servername='localhost';
    $username='root';
    //$password='Peak@5179';
	$password='';
    $dbname = "emp";
    $con=mysqli_connect($servername,$username,$password,$dbname);
      if(!$con){
          die('Could not Connect MySql Server:' .mysql_error());
        }
		//else{
			//echo "Database Connection Successfully.";
		//}
?>