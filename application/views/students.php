<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<!-- << table >> -->">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
                <div class="row">
                    <div class="col-lg-12 mar-top">
						<div class="row form-group">
                            </div>
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
										<th>รหัสนักศึกษา</th>
                                        <th>ชื่อ-สกุล</th>
                                        <th>ชั้นปี</th>
                                        <th>อีเมลล์</th>
                                        <th>โทรศัพท์</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
									foreach ($data_result->result() as $row)
									{
									echo "<tr>";
                                    echo "<td>".$row->studentID."</td>";
                                    echo "<td>".$row->studentName."</td>";
									echo "<td>".$row->year."</td>";
									echo "<td>".$row->email."</td>";
									echo "<td>".$row->tel."</td>";
                                    echo "</tr>";		
									}
								?>
                                </tbody>
							</table>
						</div>
						<form method="post" action="<?php echo base_url(); ?>excel_export/action">
							<input type="submit" name="export" class="btn btn-success" value="Export" />
						</form>
                    </div>
                </div>
            </div>
            
</body>
</html>
