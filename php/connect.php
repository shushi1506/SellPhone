 <?php
 $conn = mysqli_connect("localhost", "root", "");
mysqli_select_db( $conn,"sell");
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,"SET CHARACTER SET utf8");
mysqli_query($conn,"SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
	if(isset($_GET['id'])){
	$id=$_GET['id'];}
	else {$id=0;}
	if(isset($_GET['idgia'])){
	$idgia=$_GET['idgia'];}
	else {$idgia=0;}
		if(isset($_POST['vm'])){
	 $_SESSION['vm'] += 8;}
	else {
		$_SESSION['vm']=8;
	}
	$vm=$_SESSION['vm'];
	if (isset($_POST['btnsearch'])){
		$search=$_POST['txtsearch'];
		 $_SESSION['btnsearch'] =1;
	}else {
		$_SESSION['btnsearch']=2;
	}
	//----------------------\\
	if (isset($_POST['dn'])){
	$user=$_POST['txtuser'];
		$pass=$_POST['txtpass'];
		if ($user == "" || $pass =="") {
			$cau= "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from User where UserName = '$user' and PassWord = '$pass' ";
			$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			$num_rows=mysqli_num_rows($result);
			if ($num_rows==0) {
				$cau= "tên đăng nhập hoặc mật khẩu không đúng !";
			}
			else{
				$_SESSION['check'] = 1;
				$_SESSION['user'] = $user;
				}
		}
}
else{ if(!isset($_SESSION['check'])or ($_SESSION['check']!=1)){
		$_SESSION['check'] = 0;
}
}
if (isset($_POST['dx'])){
	$_SESSION['check']=0;
	unset($_SESSION['user']);
}
if (isset($_POST['bl'])){
	$_SESSION['bl']=1;
	
}

?>

