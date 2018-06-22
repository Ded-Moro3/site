<?php
abstract class ACore {
		
	protected $db;
	public $num_rows;
	public function __construct() {
		$this->db = mysql_connect(HOST,USER,PASSWORD);
		if(!$this->db) {
			exit("Ошибка соединения с базой данных".mysql_error());
		}
		if(!mysql_select_db(DB,$this->db)) {
			exit("Нет такой базы данных".mysql_error());
		}
		mysql_query("SET NAMES 'UTF8'");
	}
	
 

	public function get_body() {
		
		$dict = parse_ini_file('ini/'.$_SESSION['lang'].'.ini');
		
		$content_txt = $this->get_content();
		
        $posts = mysql_query("SELECT * FROM product_".$_SESSION['lang'], $this->db);
		$num_rows = mysql_num_rows( $posts );
		include 'theme/index.php';
	}
	
	//abstract function get_content();

   
    abstract function get_content();
}

?>