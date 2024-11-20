<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
		body {
			font-family: Arial, sans-serif;
            background-color: #b3d9ff; /* Light blue background */
            display: block;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 3%;
		}
		input {
			padding: 10px;
            font-size: 14px;
            height: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 50%; /* Ensures full width for inputs */
            box-sizing: border-box;
            background-color: #FFF6E9;
		}

        input[type="submit"] {
            grid-column: span 2; /* Make the button span both columns */
            padding: 10px;
            font-size: 16px;
            color: white;
            background-color: #ffcc80; /* Orange background for the button */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #ffa726; /* Darker orange on hover */
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            text-align: center;
            background-color: #ffcc80;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;   

        }

        td:nth-child(2),
        td:nth-child(3),
        td:nth-child(4),
        td:nth-child(5),
        td:nth-child(6),
        td:nth-child(7),
        td:nth-child(8),
        td:nth-child(9)   
        {
            padding-left: 20px;
            padding-right: 20px;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
	</style>
</head>

<body>
	<?php if (isset($_SESSION['message'])) { ?>
	<h1 style="color: red;"><?php echo $_SESSION['message']; ?></h1>
	<?php } unset($_SESSION['message']); ?>

	<div class="greeting" style="text-align: center;">
		<h1 style="text-align: center;">⁺₊✧ Hello, <?php echo $_SESSION['username']; ?>! Welcome to Vertex Solutions Inc. Application System ✧₊⁺</h1>
		<h3 style="text-align: right; margin-right: 5px;"><a href="core/handleForms.php?logoutUserBtn=1">Logout</a></h3>
	</div>

	<?php if (isset($_SESSION['message'])) { ?>
		<h1 style="color: green; text-align: center; background-color: ghostwhite; border-style: solid;">	
			<?php echo $_SESSION['message']; ?>
		</h1>
	<?php } unset($_SESSION['message']); ?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="GET">
		<input type="text" name="searchInput" placeholder="Search here" style="height: 30px; padding: 5px; font-size:1em;">
		<input type="submit" name="searchBtn" value="Search" style="width: 80px; height: 30px; padding: 5px; font-size:1em;">
	</form>

	<p><a href="index.php">Clear Search Query</a></p>
	<p><a href="insert.php">Insert New Applicant</a></p>

	<table style="width:100%; margin-top: 30px; text-align: center; background-color: #B6A28E;">
		<tr>
			<th style="background-color: #CDC1FF;">First Name</th>
			<th style="background-color: #CDC1FF;">Last Name</th>
			<th style="background-color: #CDC1FF;">Gender</th>
			<th style="background-color: #CDC1FF;">Age</th>
			<th style="background-color: #CDC1FF;">Email</th>
			<th style="background-color: #CDC1FF;">Phone Number</th>
			<th style="background-color: #CDC1FF;">Position</th>
            <th style="background-color: #CDC1FF;">Application Date</th>
			<th style="background-color: #CDC1FF;">Action</th>
		</tr>

		<?php if (!isset($_GET['searchBtn'])) { ?>
			<?php $getAllApplicants = getAllApplicants($pdo); ?>
				<?php foreach ($getAllApplicants as $row) { ?>
					<tr>
						<td><?php echo $row['first_name']; ?></td>
						<td><?php echo $row['last_name']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['age']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['phone_number']; ?></td>
						<td><?php echo $row['position_applied_for']; ?></td>
                        <td><?php echo $row['application_date']; ?></td>
						<td>
							<a href="edit.php?applicant_id=<?php echo $row['applicant_id']; ?>">Edit</a>
							<a>⟡</a>
							<a href="delete.php?applicant_id=<?php echo $row['applicant_id']; ?>">Delete</a>
							<a>⟡</a>
							<a href="activity.php?applicant_id=<?php echo $row['applicant_id']; ?>">Activity details</a>
						</td>
					</tr>
			<?php } ?>
			
		<?php } else { ?>
			<?php $searchForAnApplicant =  searchForAnApplicant($pdo, $_GET['searchInput']); ?>
				<?php foreach ($searchForAnApplicant as $row) { ?>
					<tr>
						<td><?php echo $row['first_name']; ?></td>
						<td><?php echo $row['last_name']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['age']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['phone_number']; ?></td>
						<td><?php echo $row['position_applied_for']; ?></td>
                        <td><?php echo $row['application_date']; ?></td>
						<td>
							<a href="edit.php?applicant_id=<?php echo $row['applicant_id']; ?>">Edit</a>
							<a>⟡</a>
							<a href="delete.php?applicant_id=<?php echo $row['applicant_id']; ?>">Delete</a>
							<a>⟡</a>
							<a href="activity.php?applicant_id=<?php echo $row['applicant_id']; ?>">Activity details</a>
						</td>
					</tr>
				<?php } ?>
		<?php } ?>	
		
	</table>
</body>
</html>