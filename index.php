<?php
	require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="Style.css">
	<meta charset="utf-8">
	<title>Doctors</title>
</head>
<body>
	<center>
		<table>
		<tr>
			<th>ID</th>
			<th>FIO</th>
			<th>DateOfBirthday</th>
			<th>PhoneNumber</th>
			<th>Profession</th>
		</tr>

		<?php
			$workers = mysqli_query($connect, "SELECT * FROM `workers`");
			$workers = mysqli_fetch_all($workers);
			foreach ($workers as $worker) {
				?>

				<tr>
					<td><?= $worker[0] ?></td>
					<td><?= $worker[1] ?></td>
					<td><?= $worker[2] ?></td>
					<td><?= $worker[3] ?></td>
					<td><?= $worker[4] ?></td>
				</tr>

				<?php
			}
		?>
	</table>
	</center>
</body>
</html>