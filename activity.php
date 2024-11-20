<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
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
    td:nth-child(4) 
    {
        padding-left: 20px;
        padding-right: 20px;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>
<body>
	<a href="index.php">Back</a>
	<h1>Activity details:</h1>
	<table style="width:100%; margin-top: 10px; text-align: center;">
    <tr>
        <th style="background-color: #CDC1FF;">Added By User ID</th>
        <th style="background-color: #CDC1FF;">Date Added</th>
        <th style="background-color: #CDC1FF;">Modified By User ID</th>
        <th style="background-color: #CDC1FF;">Last Updated</th>
    </tr>
    <?php $getAppliByID = getAppliByID($pdo, $_GET['applicant_id']); ?>
    <?php foreach ($getAppliByID as $row) { ?>
    <tr>
        <td><?php echo $row['added_by']; ?></td>
        <td><?php echo $row['date_added']; ?></td>
        <td><?php echo $row['modified_by']; ?></td>
        <td><?php echo $row['last_updated']; ?></td>
    </tr>
    <?php } ?>
</table>
	
</body>
</html>