<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'userdata';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM userdata ORDER BY score DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Food Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
    <style>
        /* Your CSS styles go here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        footer {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        main {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>

<body>
	<section>
		<h1>Food Nutrients</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Itema</th>
				<th>Fats</th>
				<th>Proteins</th>
				<th>Carbs</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php 
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['problems'];?></td>
				<td><?php echo $rows['score'];?></td>
				<td><?php echo $rows['articles'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>