<?php

 
         session_start();


           if(isset($_POST["btn"]))
           {



                 if(isset($_SESSION["cnt"]))
                 
                    $_SESSION["cnt"]++;
                    
                  else

                    $_SESSION["cnt"]=1;


                  $cnt=$_SESSION["cnt"];





                $_SESSION["pro$cnt"]=$_POST["pro"];

                $_SESSION["quan$cnt"]=$_POST["quan"];

                $_SESSION["price$cnt"]=$_POST["price"];

           }




               if(isset($_REQUEST["delete"]))
               {

                     $i=$_REQUEST["delete"];

                   unset($_SESSION["pro$i"]);
                   unset($_SESSION["quan$i"]);
                   unset($_SESSION["price$i"]);
                   
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


<a href="z13shop.php">shop_page</a>


<center>
       
        <form method="post">
         	

                   <table width="100" border="1" cellpadding="10" cellspacing="5">
                   	        <tr>
                                   <td>SNO</td>
                                   <td>NAME</td>
                                   <td>QUANTITY</td>
                                   <td>PRICE</td>
                                   <td>TOTAL</td>
                                   <td>DELETE</td>
                                   
                   	        </tr>


<?php

            $cnt=$_SESSION["cnt"];


            for($i=1;$i<=$cnt;$i++)

            {

              if(isset($_SESSION["pro$i"]))
              {



?>
                            <tr>  

                            	  <td><?php echo $i; ?></td>

                            	  <td><?php echo $_SESSION["pro$i"]; ?></td>

                            	  <td><?php echo  $_SESSION["quan$i"]; ?></td>

                            	  <td><?php echo  $_SESSION["price$i"]; ?></td>

                            	  <td><?php echo  $_SESSION["quan$i"]* $_SESSION["price$i"]; ?></td>

                                <td><a href="z13cart.php?delete=<?php echo $i; ?>">del</a></td>

                   	        </tr>   

<?php

    } }

?>




                   </table>

</form>

  </center>




</body>
</html>