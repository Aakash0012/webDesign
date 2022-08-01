<?php


           if(isset($_POST["btn"]))
           {

           	  $n1=$_POST["txt1"];

              $n2=$_POST["txt2"];

              
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
                   	        	  <td>Enter the number one</td>
                   	        	  <td><input type="text" name="txt1"></td>
                   	        </tr>

                             <tr>
                                  <td>Enter the number two</td>
                                  <td><input type="text" name="txt2"></td>
                            </tr>

                                <tr>

                                    <td>Result </td>
                                    <td><?php if($n1>$n2)
              {
                  echo "number 1 is greater than number 2";
              }
              else
              {
                  echo "number 2 is greater than number 1";
              } ?></td>
                                   
                                         
                                </tr>

                                <tr>
                   	        	  
                   	             <td colspan="2" align="center"><input type="submit" name="btn" value="submit"></td>
                   	        </tr>   

                   </table>

</form>
  </center>




</body>
</html>