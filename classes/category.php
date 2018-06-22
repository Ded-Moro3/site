<?php
class category extends ACore {
	
	public function get_content() {
		
		
		if(!$_GET['id_text']) {
			echo 'Не правильные данные для вывода статьи';
		}
		else {
			$id_cat = (int)$_GET['id_text'];
			if(!$id_cat) {
				echo 'Не правильные данные для вывода статьи';
			}
			else {
                $product=$_SESSION['lang'];
				$query = "SELECT title,discription,text,date,img_src0,img_src1,img_src2,img_src3,img_src4,img_src5,img_src6,img_src7 
							FROM product_$product 
							WHERE id='$id_cat' 
							ORDER BY date DESC";
				$result = mysql_query($query);
				if(!$result) {
					exit(mysql_error());
				}
				
				if(mysql_num_rows($result) > 0) {
					$row = array();
					for($i = 0; $i < mysql_num_rows($result);$i++) 
                    {
						$row[] = mysql_fetch_array($result,MYSQL_ASSOC);
                    }
				}
				else {
					echo 'В данной категории нет статей';
				}
			}
            
		}
		return $row;
	}
}
?>