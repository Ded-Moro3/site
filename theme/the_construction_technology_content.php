
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="?option_menu=home_"><?=$dict['Menu']?></a></li>
			<li class="active"><?=$dict['Views3']?></li>
		</ol>
		
    <div class="clearfix mosaicflow">  
		<?php 
       
        $dir = opendir('images/1/');
        $count = 0;
       
        
       while($file = readdir($dir))
        {
        if($file == '.' || $file == '..' || is_dir('images/3/' . $file))
            {
            continue;
            }
            else if(strpos($file, '.jpg',1)){
                $count++;
                echo  "<div class='mosaicflow__item'> 
                <a class='fancyimage' rel='group' href='images/3/IMG_$count.jpg'>
                <img src='images/3/IMG_$count.jpg' />
                </a> 
                </div>";}
        }

        ?>

      </div> 
	
		
		
	</div>	<!-- /container -->
	

	