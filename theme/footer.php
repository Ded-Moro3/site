	<!-- Social links-->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">					
					<div class="col-md-3 widget">
						<h3 class="widget-title"><?=$dict['Contacts']?></h3>
						<div class="widget-body">
							<p><?=$dict['Fax']?><br>
							+375 29 251 20 09<br>
								<a href="mailto:#">janushkevich@tut.by</a><br>
								<br>
								 <?=$dict['RB']?>
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title"><?=$dict['Social']?></h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-odnoklassniki-square fa-2"></i></a>
								<a href=""><i class="fa fa-hacker-news fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title"><?=$dict['About']?></h3>
						<div class="widget-body">
                            <p><?=$dict['About1']?></p> 
							<p><?=$dict['About2']?></p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="?option_menu=home_"><?=$dict['Menu']?></a> | 
								<a href="?option_menu=about_"><?=$dict['Company']?></a> |
								<a href="?option_menu=external_view_"><?=$dict['Foto']?></a> |
								<a href="?option_menu=contact_"><?=$dict['Contact']?></a> |
								<a href="?option_menu=product_"><?=$dict['Tovar']?></a> |
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2017, <?=$dict['Copyright']?></p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
				<div class="row">
				    <div class="col widget-body">
				    <br><!--LiveInternet counter--><script type="text/javascript">
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t12.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
</script><!--/LiveInternet--></div>
				</div>
			</div>
		</div>

	</footer>	
    <!-- Подключение библиотеки jQuery  -->		
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="js/headroom.min.js"></script>
	<script src="js/jQuery.headroom.min.js"></script>
	<script src="js/template.js"></script>
	<script src="js/jquery.mosaicflow.min.js"></script> 
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script> 
    <script src="js/feedback.js"></script>
	<script src="js/jquery.arcticmodal.js"></script>
	<script src="js/jquery.jgrowl.js"></script>
    <script type="text/javascript"> 
    $(document).ready(function() { 
      $("a.fancyimage").fancybox(); 
    }); 
  </script> 

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="js/google-map.js"></script>
	
	
</body>
</html>