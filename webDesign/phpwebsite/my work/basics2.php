<?php 
	if (isset($_POST["btn"])) 
	{
	
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
					<td>enter number</td>
					<td><input type="text" name="txt1"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="btn" value="submit"></td>
				</tr>
				<tr>
					<td colspan="2"><?php 

					$n1=$_POST["txt1"];	
	
function primeCheck($n1)
{
    if ($n1 == 1)
    return 0;
    for ($i = 2; $i <= $n1/2; $i++){
        if ($n1 % $i == 0)
            return 0;
    }
    return 1;
}
 
// Driver Code
$flag = primeCheck($n1);
if ($flag == 1)
    echo "Prime";
else
    echo "Not Prime";

					 ?></td>
				</tr>
			</table>

		</form>

	</center>

</body>
</html>