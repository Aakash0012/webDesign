<?php

 
         session_start();


           if(isset($_POST["btn"]))
           {


                $_SESSION["pro"]=$_POST["pro"];

                $_SESSION["quan"]=$_POST["quan"];

                $_SESSION["price"]=$_POST["price"];

           }

?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<a href="z12shop.php">shop_page</a>


<center>
       
        <form method="post">
         	

                   <table width="100" border="1" cellpadding="10" cellspacing="5">
                   	        <tr>
                                   <td>SNO</td>
                                   <td>NAME</td>
                                   <td>QUANTITY</td>
                                   <td>PRICE</td>
                                   <td>TOTAL</td>
                   	        </tr>



                            <tr>  
                            	  <td>1</td>
                            	  <td><?php echo $_SESSION["pro"]; ?></td>

                            	  <td><?php echo  $_SESSION["quan"]; ?></td>

                            	  <td><?php echo  $_SESSION["price"]; ?></td>

                            	  <td><?php echo  $_SESSION["quan"]* $_SESSION["price"]; ?></td>
                   	        </tr>   

                   </table>

</form>
  </center>




</body>
</html>