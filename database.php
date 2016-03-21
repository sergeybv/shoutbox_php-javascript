
<?php

  $con = mysqli_connect("localhost", "root", "", "jsshoutbox");

  if(mysqli_connect_errno($con)){

  	echo 'Something is wrong!' .mysqli_connect_errno($con);
  
   }


   
?>