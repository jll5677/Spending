<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title> Daily Spending </title>
</head>
<body>
	<div>
		<form action="crud.php" method="POST">
			<div class="form group">
				<label for="purchaseDate"> Date of purchase </label>
				<input type="date" class="form-control" name="purchaseDate" id="today">
			</div>
			<div class="form group">
				<label for="purchaseAmount"> Total amount of purchase </label>
				<input type="number" min="0" step="any" class="form-control" name="purchaseAmount" >
			</div>
			<div class="form group">
				<label for="storeName"> Name of store </label>
				<input type="text" class="form-control" name="storeName">
			</div>
			<div class="form group">
				<label for="itemName"> Name of item </label>
				<input type="text" class="form-control" name="itemName">
			</div>
			<div class="form group">
				<label for="itemCatergory"> Category of item </label>
				<Select class="form-control" name="itemCatergory">
					<option disabled selected value> -- Select an option -- </option>
					<option value="Food"> Food </option>
					<option value="Lifestyle"> Lifestyle </option>
					<option value="Family"> Family </option>
					<option value="Transportation"> Transportation </option>
				</Select>
			</div>
			<button class="btn btn-primary" type="submit" name="submit"> Submit </button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
<html>