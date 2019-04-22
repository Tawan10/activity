<!DOCTYPE html>
<?php  header("Access-Control-Allow-Origin: *");?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบจัดการกิจกรรมหลักสูตรวิศวกกรมซอฟต์แวร์</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/homepage.css" type="text/css">
    

    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

        
                
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                <a class="navbar-brand" href="#">SWE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url()?>home/calendar_select">Calender</a>
                    </li>
      
                  </ul>


											
		<a class="nav-link login" href="<?php echo base_url()?>home/login" >Login </a>
											



                </div>
                </div>
        </nav>

<!-- ---------------------------------------------------- -->
              <div class="banner-middle">
                        <div class="container">
                                <div class="banner-middle-image">
                                        <img src="<?php echo base_url();?>assets/img/test5.png" alt="" >
                                </div>
                        </div>
              </div>
<!-- ------------------------------------------------------------ -->
    <div class="container">
                <h2>กิจกรรม</h1>
            <div class="row">
	    	<?php
			foreach ($data_result->result() as $row)
			{
		?>
				<div class="card-board col-md-3 nopadding">
                                <div class="img-in-board">
					<img src="<?php base_url();?><?php echo $row->image; ?>">
				</div>
                                <div class="padding-card-board">
                                        <div class="time-in-board"><?php echo $row->create_at;?> </div>          
                                                <div class="head-in-board">
                                                	<h1 class="h1-text-in-head">
                                                        <?php echo $row->name; ?>
                                                        </h1>
                                                </div>
                                                <div class="content-in-board">
                                                        <p class="text-in-content">
                                                            <?php echo $row->description;?>
                                                        </p>
                                                </div>
                                                <a href="#"><div class="see-more-in-board">อ่านต่อ</div></a>
                                </div>                
                        </div>         
			<?php } ?>

	    </div>
         
    </div>
</body>


</html>
