<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index1.php">Go to Home</a>
	<br/><br/>
 
	<form action="addpepesan.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nama Pepesan</td>
				<td><input type="text" name="nama_pepesan"></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr> 
				<td>keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama_pepesan = $_POST['nama_pepesan'];
		$harga = $_POST['harga'];
		$keterangan = $_POST['keterangan'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO anekapepes(nama_pepesan,harga,keterangan) VALUES('$nama_pepesan','$harga','$keterangan')");
		
		// Show message when user added
		echo "User added successfully. <a href='index1.php'>View Users</a>";
	}
	?>
</body>
</html>