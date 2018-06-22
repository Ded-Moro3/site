    
<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Roman Kudin"charset="utf-8">
	
	<title>ЯнМорСтрой - каркасные дома</title>
	<link rel="shortcut icon" href="images/gt_favicon.ico">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/jquery.arcticmodal.css">
    <link rel="stylesheet" href="css/jquery.jgrowl.css">
  
</head>
<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container-fluide">
		    <div class="row">
			<div class="col-sm-4 col-md-5 navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="?option_menu=home_"><img src="images/templatemo_logo.png" alt=""><span class="logopng"> <?=$dict['Company1']?></span></a>
			 </div>
			 <div class="col-sm-8 col-md-7"> 
			     <div class="row">
			         <div class="navbar-collapse collapse">
                        <!--<div class="row">
                            <div class="col">-->
                            <ul class="nav navbar-nav">
                            <li class="active"><a href="?option_menu=home_"><?=$dict['Menu']?></a></li>
                            <li><a href="?option_menu=about_"><?=$dict['Company']?></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$dict['Foto']?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="?option_menu=external_view_"><?=$dict['Views1']?></a></li>
                                    <li><a href="?option_menu=types_of_interior_design_"><?=$dict['Views2']?></a></li>
                                    <li><a href="?option_menu=the_construction_technology_"><?=$dict['Views3']?></a></li>
                                </ul>
                            </li>
                            <li><a href="?option_menu=contact_"><?=$dict['Contact']?></a></li>
                            <li><a href="?option_menu=product_"><?=$dict['Tovar']?> <span class="badge progress-bar-danger"><?php echo "$num_rows";?></span></a></li>	
                            <li><a id="lang_imag" href="?lang=ru"><img src="../images/lang/ru.png" alt=""></a></li>
                            <li><a id="lang_imag" class="slide" href="?lang=en"><img src="../images/lang/gb.png" alt=""></a></li>
                        </ul>
			         </div><!--/.nav-collapse --> 
			    </div>
			 </div>
			</div>
		</div>
	</div> 
	<!-- /.navbar -->