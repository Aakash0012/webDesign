<?php


           if(isset($_POST["btn"]))
           {

           	  $a=$_POST["txtname"];

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
                   	        	  <td>Enter the name</td>
                   	        	  <td><input type="text" name="txtname"></td>
                   	        </tr>

                                <tr>
                                     <td colspan="2"><?php echo "my name is ".$a; ?></td>
                                         
                                </tr>

                                <tr>
                   	        	  
                   	             <td colspan="2" align="center"><input type="submit" name="btn" value="submit"></td>
                   	        </tr>   

                   </table>

</form>
  </center>




</body>
</html>