<?php


           if(isset($_POST["btn"]))
           {

           	   $ch=$_POST["txt1"];

               switch ($ch) 
               {
                 case 'a':
                      echo "vowel";
                   break;

                  case 'e':
                      echo "vowel";
                   break;

                   case 'i':
                      echo "vowel";
                   break;

                   case 'o':
                      echo "vowel";
                   break;

                   case 'u':
                      echo "vowel";
                   break;

                    case 'U':
                      echo "vowel";
                   break;

                  default:
                   echo "consonants";
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
                   	        	  <td>Enter the alphabet to check whether vowel or consonants</td>
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