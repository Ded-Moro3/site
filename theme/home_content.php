<div class="container-fluid slide">
		<div class="row">
              <div class="col-sm-0 col-md-0 col-lg-12">
		        <!---Индикаторы слайдов --->
                <div class="carousel slide" id="carousel" data-ride="carousel">
                   <ol class="carousel-indicators">
                   <li class="active" data-target="#carousel" data-slide-to="0"></li>
                   <li data-target="#carousel" data-slide-to="1"></li>
                   <li data-target="#carousel" data-slide-to="2"></li>
                   <li data-target="#carousel" data-slide-to="3"></li>
                   </ol>
                       <!--Слайды --->
                         <div class="carousel-inner">
                              <div class="item active">
                                <img class="img-responsive center-block" src="images/slider/slide1.jpg" alt=""> 
                              </div>
                         <div class="item">
                            <img class="img-responsive center-block" src="images/slider/slide2.jpg" alt=""> 
                         </div>
                         <div class="item">
                             <img class="img-responsive center-block" src="images/slider/slide3.jpg" alt=""> 
                         </div>
                         <div class="item">
                              <img class="img-responsive center-block" src="images/slider/slide4.jpg" alt=""> 
                         </div>
                         </div>
    
                <!---Стрелки переключения слайда --->
                   <a href="#carousel" class="left carousel-control" data-slide="prev">
                       <span class="glyphicon glyphicon-chevron-left"></span>
                   </a>
                   <a href="#carousel" class="right carousel-control" data-slide="next">
                       <span class="glyphicon glyphicon-chevron-right"></span>
                   </a>
                </div>
            </div>
            </div>
		</div>
   
			
	<!-- Highlights - jumbotron -->
	<div class="jumbotron">
		<div class="container">

			<h2 class="text-center thin"><?=$dict['Advantages']?></h2>
			
			<div class="row">
				<div class="col-sm-4 col-md-4 highlight">
					<div class="h-caption"><h4><i class="glyphicon glyphicon-home"></i><?=$dict['Work']?></h4></div>
					<div class="h-body text-center">
						<p><?=$dict['Work1']?></p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 highlight">
					<div class="h-caption"><h4><i class="glyphicon glyphicon-wrench"></i><?=$dict['Materials']?></h4></div>
					<div class="h-body text-center">
						<p><?=$dict['Materials1']?></p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 highlight">
					<div class="h-caption"><h4><i class="glyphicon glyphicon-list-alt"></i><?=$dict['Standards']?></h4></div>
					<div class="h-body text-center">
						<p><?=$dict['Standards1']?></p>
					</div>
				</div>
            </div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space"><?=$dict['Construction']?></h2>
		<br>

        <div class="row">
            <div class="col-sm-6 col-md-6 h-caption"><img src="images/karkasdom_<?=$_SESSION['lang'];?>.png" alt=""> </div>
			<div class="col-sm-6 col-md-6">
				<p><?=$dict['Construction1']?></p>
                <p><?=$dict['Construction2']?></p>
			</div>
		</div> <!-- /row -->
    </div><!-- container -->
		<div class="container">

		<h2 class="text-center top-space"><?=$dict['Foundation']?></h2>
		<br>

        <div class="row">
            <div class="col-sm-6 col-md-6 h-caption"><img src="images/fundament_<?=$_SESSION['lang'];?>.png" alt=""></div>
			<div class="col-sm-6 col-md-6">
				<p><?=$dict['Foundation1']?></p>
                <p><?=$dict['Foundation2']?></p>
                <p><?=$dict['Foundation3']?></p>
			</div>
		</div> <!-- /row -->
        </div><!-- container -->
        
        <!-- container -->
	<div class="container">

		<h2 class="text-center top-space"><?=$dict['Technologies']?></h2>
		<br>

        <div class="row">
            <div class="col-sm-6 col-md-6 h-caption"><img src="images/KarkasShema_<?=$_SESSION['lang'];?>.png" alt=""></div>
			<div class="col-sm-6 col-md-6">
				<p><?=$dict['Technologies1']?></p>
                <p><?=$dict['Technologies2']?></p>
                <p><?=$dict['Technologies3']?></p>
			</div>
		</div> <!-- /row -->
    </div><!-- container -->