<html>
<head>
    <title>Home Page</title>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body>
	<div class="container box">
		<h3 align="center">Homepage</h3>
		<br />
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<!-- <th>CustomerName</th>
					<th>Address</th>
					<th>City</th>
					<th>PostalCode</th>
					<th>Country</th> -->
				</tr>
				<?php
				// foreach($employee_data as $row)
				// {
				// 	echo '
				// 	<tr>
				// 		<td>'.$row->CustomerName.'</td>
				// 		<td>'.$row->Address.'</td>
				// 		<td>'.$row->City.'</td>
				// 		<td>'.$row->PostalCode.'</td>
				// 		<td>'.$row->Country.'</td>
				// 	</tr>
				// 	';
				// }
				?>
			</table>
            <div align="center">
                <form method="post" action="<?php echo base_url(); ?>excel_import">
                    <input type="submit" class="btn btn-primary" name="import" value="Import"/>
                </form>
                <br><br><br>
            </div>
			<div align="center">
				<form method="post" action="<?php echo base_url(); ?>excel_export/action">
					<input type="submit" name="export" class="btn btn-success" value="Export" />
				</form>
			</div>
			<br />
			<br />
		</div>
	</div>
</body>
</html>























