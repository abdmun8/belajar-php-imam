<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM anekapepes ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="addpepesan.php">Add New User</a><br/><br/>
 
    <table width='55%' border=1>
 
    <tr>
        <th>nama_pepesan</th> <th>harga</th> <th>keterangan</th> <th>update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_pepesan']."</td>";
        
        echo "<td>".$user_data['harga']."</td>"; 
        echo "<td>".$user_data['keterangan']."</td>";   
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='deletepepesan.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>