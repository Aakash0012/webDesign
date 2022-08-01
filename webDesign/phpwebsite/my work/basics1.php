<?php 

error_reporting(0);
	
	if(isset($_POST["btn1"])) 
	{
		 $n1=$_POST["txt1"];

         $n2=$_POST["txt2"];

         $n3=$n1+$n2;

        	}



	if(isset($_POST["btn2"])) 
	{
		 $n1=$_POST["txt1"];

         $n2=$_POST["txt2"];

         $n4=$n1-$n2;

         
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
                   	       	<td><input type="text" name="txt1"></td>
                   	       	<td><input type="" name="txt2"></td>
                   	       </tr>

                   	       <tr>
                   	       	<td colspan="1" align="center"><input type="submit" name="btn1" value="submit">  &nbsp;Add</td>
                   	       	<td><?php  echo $n3; ?></td>
                   	       </tr>

                   	       <tr>
                   	       		<td colspan="1" align="center"><input type="submit" name="btn2" value="submit">  &nbsp;Subtract</td>
                   	       		<td><?php echo $n4; ?></td>
                   	       </tr>

                   </table>

</form>
	</center>

</body>
</html>