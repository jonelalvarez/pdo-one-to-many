<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Welcome To Fein! Clothing. Order good shirts!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName">
		</p>
		<p>
			<label for="bDate">Date of Birth</label> 
			<input type="date" name="bDate">
		</p>
		<p>
			<label for="address">Address</label> 
			<input type="text" name="address">
			<input type="submit" name="insertWebDevBtn">
		</p>
	</form>
	<?php $getAllWebDevs = getCustomer($pdo); ?>
	<?php foreach ($getAllWebDevs as $row) { ?>
	<div class="container" style="border-style: solid; width: 50%; height: 300px; margin-top: 20px;">
		<h3>FirstName: <?php echo $row['firstName']; ?></h3>
		<h3>LastName: <?php echo $row['lastName']; ?></h3>
		<h3>Birthdate: <?php echo $row['bDate']; ?></h3>
		<h3>Address: <?php echo $row['address']; ?></h3>
		<h3>Date Added: <?php echo $row['date_added']; ?></h3>


		<div class="editAndDelete" style="float: right; margin-right: 20px;">
			<a href="viewprojects.php?web_dev_id=<?php echo $row['web_dev_id']; ?>">View Projects</a>
			<a href="editwebdev.php?web_dev_id=<?php echo $row['web_dev_id']; ?>">Edit</a>
			<a href="deletewebdev.php?web_dev_id=<?php echo $row['web_dev_id']; ?>">Delete</a>
		</div>


	</div> 
	<?php } ?>
</body>
</html>