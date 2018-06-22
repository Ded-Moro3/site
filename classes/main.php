<?php
class main extends ACore {
	
	public function get_content() {
		$product=$_SESSION['lang'];
		$query = "SELECT id,title,discription,date,img_src0 FROM product_$product ORDER BY date DESC";
		$result = mysql_query($query);
		if(!$result) {
			exit(mysql_error());
		}
		$row = array();
		for($i = 0; $i < mysql_num_rows($result);$i++) {
			$row[] = mysql_fetch_array($result,MYSQL_ASSOC);
		}
		
		return $row;	
		
		
	}
}
?>