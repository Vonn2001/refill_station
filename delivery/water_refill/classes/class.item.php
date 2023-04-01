<?php
class Item{
	private $DB_SERVER='localhost';
	private $DB_USERNAME='root';
	private $DB_PASSWORD='';
	private $DB_DATABASE='order';
	private $conn;
	public function __construct(){
		$this->conn = new PDO("mysql:host=".$this->DB_SERVER.";dbname=".$this->DB_DATABASE,$this->DB_USERNAME,$this->DB_PASSWORD);
		
	}

	
	
	public function new_item($cname,$typ,$pr_typ){

	/* Setting Timezone for DB */
	$NOW = new DateTime('now', new DateTimeZone('Asia/Manila'));
	$NOW = $NOW->format('Y-m-d H:i:s');
		
		$data = [
			[$cname,$typ,$NOW,$NOW,$pr_typ],
		];
		$stmt = $this->conn->prepare("INSERT INTO items (cname, typ, date_tr, time_tr, pr_typ) VALUES (?,?,?,?,?)");
		try {
			$this->conn->beginTransaction();
			foreach ($data as $row)
			{
				$stmt->execute($row);
			}
			$this->conn->commit();
		}catch (Exception $e){
			$this->conn->rollback();
			throw $e;
		}

		return true;

	}


	public function new_item2($cname,$typ,$pr_typ){

		/* Setting Timezone for DB */
		$NOW = new DateTime('now', new DateTimeZone('Asia/Manila'));
		$NOW = $NOW->format('Y-m-d H:i:s');
			
			$data = [
				[$cname,$typ,$NOW,$NOW,$pr_typ],
			];
			$stmt = $this->conn->prepare("INSERT INTO items2 (cname, typ, date_tr, time_tr, pr_typ) VALUES (?,?,?,?,?)");
			try {
				$this->conn->beginTransaction();
				foreach ($data as $row)
				{
					$stmt->execute($row);
				}
				$this->conn->commit();
			}catch (Exception $e){
				$this->conn->rollback();
				throw $e;
			}
	
			return true;
	
		}


public function list_items(){
	$sql="SELECT * FROM items";
	$q = $this->conn->query($sql) or die("failed!");
	while($r = $q->fetch(PDO::FETCH_ASSOC)){
	$data[]=$r;
	}
	if(empty($data)){
	   return false;
	}else{
		return $data;	
	}
}

public function list_items2(){
	$sql="SELECT * FROM items2";
	$q = $this->conn->query($sql) or die("failed!");
	while($r = $q->fetch(PDO::FETCH_ASSOC)){
	$data[]=$r;
	}
	if(empty($data)){
	   return false;
	}else{
		return $data;	
	}
}

	function get_user_id($email){
		$sql="SELECT user_id FROM tbl_users WHERE user_email = :email";	
		$q = $this->conn->prepare($sql);
		$q->execute(['email' => $email]);
		$user_id = $q->fetchColumn();
		return $user_id;
	}
	function get_user_email($id){
		$sql="SELECT user_email FROM tbl_users WHERE user_id = :id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$user_email = $q->fetchColumn();
		return $user_email;
	}

	function get_user_access($id){
		$sql="SELECT user_access FROM tbl_users WHERE user_id = :id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$user_access = $q->fetchColumn();
		return $user_access;
	}
	function get_user_status($id){
		$sql="SELECT user_status FROM tbl_users WHERE user_id = :id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$user_status = $q->fetchColumn();
		return $user_status;
	}




	function get_id($cname){
		$sql="SELECT id FROM items";	
		$q = $this->conn->prepare($sql);
		$q->execute(['cname' => $cname]);
		$id = $q->fetchColumn();
		return $id;
	}

	function get_cname($id){
		$sql="SELECT cname FROM items";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$cname = $q->fetchColumn();
		return $cname;
	}

	function get_typ($id){
		$sql="SELECT typ FROM items";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$item_typ = $q->fetchColumn();
		return $item_typ;
	}

	function get_time($id){
		$sql="SELECT time_tr FROM items";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$time_tr = $q->fetchColumn();
		return $time_tr;
	}

	function get_date($id){
		$sql="SELECT date_tr FROM items";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$date_tr = $q->fetchColumn();
		return $date_tr;
	}

	function get_pr_typ($id){
		$sql="SELECT pr_typ FROM items";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$pr_typ = $q->fetchColumn();
		return $pr_typ;
	}

	function get_id2($cname){
		$sql="SELECT id FROM items2";	
		$q = $this->conn->prepare($sql);
		$q->execute(['cname' => $cname]);
		$id = $q->fetchColumn();
		return $id;
	}

	function get_cname2($id){
		$sql="SELECT cname FROM items2";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$cname = $q->fetchColumn();
		return $cname;
	}

	function get_typ2($id){
		$sql="SELECT typ FROM items2";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$item_typ = $q->fetchColumn();
		return $item_typ;
	}

	function get_time2($id){
		$sql="SELECT time_tr FROM items2";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$time_tr = $q->fetchColumn();
		return $time_tr;
	}

	function get_date2($id){
		$sql="SELECT date_tr FROM items2";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$date_tr = $q->fetchColumn();
		return $date_tr;
	}

	function get_pr_typ2($id){
		$sql="SELECT pr_typ FROM items2";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$pr_typ = $q->fetchColumn();
		return $pr_typ;
	}



	function get_session(){
		if(isset($_SESSION['login']) && $_SESSION['login'] == true){
			return true;
		}else{
			return false;
		}
	}
	public function check_login($email,$password){
		
		$sql = "SELECT count(*) FROM tbl_users WHERE user_email = :email AND user_password = :password"; 
		$q = $this->conn->prepare($sql);
		$q->execute(['email' => $email,'password' => $password ]);
		$number_of_rows = $q->fetchColumn();
		

	
		if($number_of_rows == 1){
			
			$_SESSION['login']=true;
			$_SESSION['user_email']=$email;
			return true;
		}else{
			return false;
		}
	}
}