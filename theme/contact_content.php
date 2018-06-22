<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="?option_menu=home_"><?=$dict['Menu']?></a></li>
			<li class="active"><?=$dict['Contact']?></li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title"><?=$dict['Svyz']?></h1>
				</header>
				
				<p>
					<?=$dict['Formanswe']?>
				</p>
				<br>
      				<form action="" name="form-2">
						<div class="row">
							<div class="col-sm-4">
								<input name="name" class="form-control name" type="text" placeholder="<?=$dict['Name']?>"/>
							</div>
							<div class="col-sm-4">
								<input name="e-mail" class="form-control e-mail" type="email" placeholder="Email"/>
							</div>
							<div class="col-sm-4">
								<input name="tell" class="form-control tell" type="text" placeholder="<?=$dict['Phon']?>"/>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea name="text" placeholder="<?=$dict['Message']?>..." class="form-control text" rows="9"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12 text-right">
                               <input type="button" name="send" class="btn btn-action feedback"  value="<?=$dict['Send']?>"/>
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4><?=$dict['Ad']?></h4>
					<address>
						<?=$dict['RB']?>
					</address>
					<h4><?=$dict['Phon']?>:</h4>
					<address>
						<p><?=$dict['Fax']?><br>
							+375 29 251 20 09<br>
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
	<section class="container-full top-space">
		<div id="map"></div>
	</section>