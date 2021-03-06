<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title> Daily Spending Table </title>
	<?php
		include 'crud.php'
	?>
</head>
<body>
	<div class="container">
		<h1> Daily Spending </h1>
		<table class="table table-striped">
			<thread>
				<tr>
					<th>Date</th>
					<th>Amount</th>
					<th>Store</th>
					<th>Item</th>
					<th>Category</th>
				</tr>
			</thread>
			<?php
				$query = "SELECT * FROM Daily_Spending ORDER BY purchaseDate DESC";
				$result_set = mysqli_query($connection, $query);

				if (!$result_set) {
					exit("Database query failed.");
				}
				while($Daily_Spending = mysqli_fetch_assoc($result_set)) {
					?>
					<tbody>
						<tr>
							<th><?php echo $Daily_Spending['purchaseDate']; ?></th>
							<th><?php echo '$' . $Daily_Spending['purchaseAmount']; ?></th>
							<th><?php echo $Daily_Spending['storeName']; ?></th>
							<th><?php echo $Daily_Spending['itemName']; ?></th>
							<th><?php echo $Daily_Spending['itemCategory']; ?></th>							
						</tr>
					</tbody>
					<?php
				}
				mysqli_free_result($result_set);
				mysqli_close($connection);
			?>
		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
<html>