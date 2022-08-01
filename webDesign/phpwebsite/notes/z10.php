<?php


           if(isset($_POST["btn"]))
           {

           	   $ch=$_POST["txt1"];

               switch ($ch) 
               {
                 case 101:
                      echo "you have selected case no 101";
                   break;

                  case 7:
                      echo "you have selected case no 7";
                   break;

                   case 1:
                      echo "you have selected case no 1";
                   break;

                   case 45:
                      echo "you have selected case no 45";
                   break;

                   case 123:
                      echo "you have selected case no 123";
                   break;

                   default:
                   echo "Wrong case selected";
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
                   	        	  <td>Enter the number to check </td>
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