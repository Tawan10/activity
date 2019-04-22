<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<!-- << table >> -->">

           <!-- << end table >>  -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Calendar</title>
	<!-- Fontfaces CSS-->
    <link href="<?php echo base_url();?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>assets/css/theme.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" media="all">
</head>
<body>
<div class="container">
                <div class="row">
                    <div class="col-lg-12 mar-top">
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>ชื่อกิจกรรม</th>
                                        <th>วันที่เริ่มต้นกิจกรรม</th>
										<th>วันที่สิ้นสุดกิจกรรม</th>
										<th>ปี</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
									foreach ($data_result->result() as $row)
									{
									echo "<tr>";
                                    echo "<td>".$row->name."</td>";
                                    echo "<td>".$row->startDate."</td>";
									echo "<td>".$row->endDate."</td>"   ;
									echo "<td>".$row->year."</td>"   ;
                                    echo "</tr>";		
									}
								?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
</body>
</html>
