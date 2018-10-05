<?php 
	$connection = mysqli_connect('127.0.0.1','root','jl110696','Spending');
		if(mysqli_connect_errno()) {
				die("Database connection failed: " . 
				     mysqli_connect_error() . 
				     " (" . mysqli_connect_errno() . ")"
				);
		}
		if (isset($_POST['submit'])) {
			$purchaseDate = $_POST['purchaseDate'];
			$purchaseAmount = $_POST['purchaseAmount'];
			$storeName = $_POST['storeName'];
			$itemName = $_POST['itemName'];
			$itemCategory = $_POST['itemCategory'];

			$query_add = "INSERT INTO daily_spending (purchaseDate, purchaseAmount, storeName, itemName, itemCategory) VALUES ('$purchaseDate', '$purchaseAmount', '$storeName', '$itemName', '$itemCategory'); ";

			$result_add = mysqli_query($connection, $query_add);

			if($result_add){
				header('location: index.php');
			} else {
				die("Database insert failed to table because..." . mysqli_error($connecion));
			}
		}

?>