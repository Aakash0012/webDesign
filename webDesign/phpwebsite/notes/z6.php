<?php


           if(isset($_POST["btn"]))
           {

           	   $a=$_POST["txt1"];

               for($i=1;   $i<=100;   $i++)
               {
                  echo $a*$i."<br>";
               }
              

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

<center>
       
        <form method="post">
         	

                   <table width="100" border="1" cellpadding="10" cellspacing="5">
                   	        <tr>
                   	        	  <td>Enter the table number you want to print</td>
                   	        	  <td><input type="text" name="txt1"></td>
                   	        </tr>



                            <tr>  
                   	             <td colspan="2" align="center"><input type="submit" name="btn" value="submit"></td>
                   	        </tr>   

                   </table>

</form>
  </center>




</body>
</html>