
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="?option_menu=home_"><?=$dict['Menu']?></a></li>
			<li class="active"><?=$dict['Tovar']?></li>
		</ol>
    <br>
	
		<div class="container-fluid slide">
		    <div class="row"><? foreach($content_txt as $item) :?>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		        <!---Индикаторы слайдов --->
                <div class="carousel slide" id="carousel" data-ride="carousel">
                   <ol class="carousel-indicators">
                   <?php 
                       $len=0;
                       for($i = 0; $i<=7;$i++){ 
                            if ($item['img_src'.(string) $i]!='' && $i==0)
                              {
                                 echo "<li class='active' data-target='#carousel' data-slide-to='$len'></li>
                                 ";
                                 $len++;
                              }
                                elseif($item['img_src'.(string) $i]!='' && $i!=0)
                                {
                                 echo " <li data-target='#carousel' data-slide-to='$len'></li>
                                 ";$len++;
                                } else continue;
                                
                                }?>
                   
                         
                   </ol>
                       <!--Слайды --->
                         <div class="carousel-inner">
                             <?php for($i = 0; $i<=7;$i++){                       
                             if ($item['img_src'.(string) $i]!=NULL && $i==0)
                              {$str=$item['img_src'.(string) $i];
                             echo "<div class='item active'>
                                <img class='img-responsive center-block' src='$str' alt=''> 
                             </div>";}
                                    elseif ($item['img_src'.(string) $i]!=NULL && $i!=0) {
                                       $str=$item['img_src'.(string) $i]; 
                            echo "<div class='item'>
                                <img class='img-responsive center-block' src='$str' alt=''> 
                             </div>";  }  
                                
                                }?>
                            
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
            <div class="col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
                <div class="row">
                    <div class="col text-center"><h3><?=$item['title']?></h3>
                    <a href="?option_menu=contact_" class="btn btn-success"><?=$dict['Writе']?></a>
                    </div>
                    <div class="col">
                       <h3 class="text-center"><?=$dict['Company1']?></h3>
                        <h5><?=$item['text']?></h5>
                    </div>
                </div>                         
           </div>
             <? endforeach; ?>
        </div>
        
            
    </div> 
</div>	<!-- /container -->
	
