<?php


           if(isset($_POST["btn"]))
           {

           	  $a=$_POST["txtname"];

           	  echo $a;

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


       
        <form method="post">
         	

                   <table>
                   	        <tr>
                   	        	  <td>Enter the name</td>
                   	        	  <td><input type="text" name="txtname"></td>
                   	        </tr>

                            <tr>
                   	        	  
                   	             <td><input type="submit" name="btn" value="submit"></td>
                   	        </tr>   

                   </table>

</form>
  




</body>
</html>