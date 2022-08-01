<?php


           if(isset($_POST["btn"]))
           {

           	  $n1=$_POST["txt1"];

              $n2=$_POST["txt2"];

              $n3=$_POST["txt3"];

              if($n1>$n2)
              {
                if($n1>$n3)
                {

                 echo $n1." is greater";
                }
                else
                {
                    echo $n3." is greater";
                }
              }
              else
              {
                 if($n2>$n3)
                {

                 echo $n2." is greater";
                }
                else
                {
                    echo $n3." is greater";
                }
                 
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
                   	        	  <td>Enter the number one</td>
                   	        	  <td><input type="text" name="txt1"></td>
                   	        </tr>

                             <tr>
                                  <td>Enter the number two</td>
                                  <td><input type="text" name="txt2"></td>
                            </tr>

                             <tr>
                                  <td>Enter the number three</td>
                                  <td><input type="text" name="txt3"></td>
                            </tr>


                                <tr>
                   	        	  
                   	             <td colspan="2" align="center"><input type="submit" name="btn" value="submit"></td>
                   	        </tr>   

                   </table>

</form>
  </center>




</body>
</html>