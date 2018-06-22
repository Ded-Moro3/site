
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="?option_menu=home_"><?=$dict['Menu']?></a></li>
			<li class="active"><?=$dict['Tovar']?></li>
		</ol>

	<br>	
 <div class="container">  
     <div class="row">
       <? foreach($content_txt as $item) :?>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                 <div class="thumbnail">   
                     <img src="<?=$item['img_src0']?>" alt="">
                         <div class="caption">
                            <h4>
                            <a href="?option=category&id_text=<?=$item['id']?>"><?=$item['title']?></a> </h4>
                            <p><?=$item['discription']?></p>
                            <a href="?option=category&id_text=<?=$item['id']?>" class="btn btn-success"><?=$dict['RM']?>.. <i class="fa fa-arrow-right"></i></a>
                         </div>
                 </div>
             </div>
     <? endforeach; ?>
    </div>
</div> 

	</div>	<!-- /container -->
	

	
	