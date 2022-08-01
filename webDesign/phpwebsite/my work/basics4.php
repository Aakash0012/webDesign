<?php 

	if (isset($_POST["btn"])) 
		$n1=$_POST["txt1"];
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
					<td>
						input number
					</td>
					<td>
						<input type="text" name="txt1">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="btn" value="submit">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<?php 

						function Factorial($n1) 
						{
						    if($n1 <= 1)
						    {
						        return 1;
						    }
						    else
						    {
						        return $n1 * Factorial($n1 - 1);
						    }
						}

						$f=Factorial($n1);
						echo "Factorial=$f";

						?>
					</td>
				</tr>


			</table>

		</form>

	</center>

</body>
</html>