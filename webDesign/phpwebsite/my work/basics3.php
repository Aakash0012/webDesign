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
					<td>enter obt. marks</td>
					<td><input type="text" name="txt1"></td>
				</tr>
				<tr>
					<td>total marks</td>
					<td>
						<input type="text" name="txt2">
					</td>
				</tr>
				<tr>
					<td colspan="1" align="center"><input type="submit" name="btn" value="submit"></td>
					<td colspan="1"><?php 

					$n=$_POST["txt1"];
					$N=$_POST["txt2"];
					$percentage=$n/$N*100;
					echo $percentage."%";


					  ?></td>

				</tr>
			
			</table>

		</form>

	</center>

</body>
</html>