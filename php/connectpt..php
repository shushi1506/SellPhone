 <?php
 $conn = mysql_connect("localhost", "root", "");
mysql_select_db("sell", $conn);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
if(isset($_GET['id'])){
	$id=$_GET['id'];}
	else {$id=0;}
	if(isset($_GET['idgia'])){
	$idgia=$_GET['idgia'];}
	else {$idgia=0;}
	

if($id==1){
	$Nsx = "SamSung" ;
}
else{
	if($id==2){
	$Nsx ="Iphone" ;
				}
else{
	if($id==3){
	$Nsx ="Sky" ;
				}
else{
	if($id==4){
	$Nsx ="Nokia" ;
				}
else{
	if($id==5){
	$Nsx ="LG" ;
		}
else{
	if($id==6){
	$Nsx ="OPPO" ;
}
else{
	if($id==7){
	$Nsx ="HTC" ;
}
else{
	
	if($id==8){
	$Nsx ="Sony";
	}
	else{
}
}
}
}
}
}
}
}
if($idgia==1){
	$gia1=1000000;
  	$gia2=3000000;
}
	else{
		if($idgia==2){
  				$gia1=3000000;
				$gia2=5000000;
					}
			else{
				if($idgia==3){
  					$gia1=5000000;
					$gia2=10000000;
							}
					else{
						if($idgia==4){
  							$gia1=10000000;
							$gia2=50000000;
									}
							else{
									$gia1=1000000;
									$gia2=50000000;	
							}
					}
			}
	}
if($idgia==0&&$id==0){
	$sql = "SELECT * FROM Mobile Where MayCu=0 ORDER BY Gia DESC";
	$sql1 = "SELECT * FROM Mobile Where MayCu=1 ORDER BY Gia DESC ";
	}
	else{
if($idgia==0&&$id!=0){
		$sql="SELECT * FROM Mobile where MayCu=0 and Nsx='".$Nsx."' ORDER BY Gia DESC ";
		$sql1="SELECT * FROM Mobile where MayCu=1 and Nsx='".$Nsx."' ORDER BY Gia DESC ";
}
else{
if($idgia!=0&&$id==0)
{
		$sql="SELECT * FROM Mobile where MayCu=0 and Gia between ".$gia1." and ".$gia2." ORDER BY Gia DESC " ;
		$sql1="SELECT * FROM Mobile where MayCu=1 and Gia between ".$gia1." and ".$gia2." ORDER BY Gia DESC "  ;
}
else{
			$sql="SELECT * FROM Mobile where MayCu=0 and Nsx= '".$Nsx."' and Gia between ".$gia1." and ".$gia2." ORDER BY Gia DESC ";
			$sql1="SELECT * FROM Mobile where MayCu=1 and Nsx= '".$Nsx."' and Gia between ".$gia1." and ".$gia2." ORDER BY Gia DESC ";
	}
	}
	}
//if ( $total < 1 ) {
    //không tìm thấy image với ID chỉ định
    //thông báo lỗi nếu cần thiết
//} else {
    //$row = mysql_fetch_assoc($result);
   // $row['imgData'];
//} //end if
?>	
