<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<title> BTA </title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
     <link href="css/Listder.css" rel="stylesheet" type="text/css" />
	</head>
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script type="text/javascript" src="js/Lisder.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
   
 <?php  
 
 $page = isset ( $_GET["page"] ) ? intval ( $_GET["page"] ) : 1; 
$rows_per_page = 8; 
$page_start = ( $page - 1 ) * $rows_per_page; 
$page_end = $page * $rows_per_page;
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
	if (isset($_POST['dn'])){
	$user=$_POST['txtuser'];
		$pass=$_POST['txtpass'];
		if ($user == "" || $pass =="") {
			$cau= "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from User where UserName = '$user' and PassWord = '$pass' ";
			$result = mysql_query($sql, $conn) or die(mysql_error($conn));
			$num_rows=mysql_num_rows($result);
			if ($num_rows==0) {
				$cau= "tên đăng nhập hoặc mật khẩu không đúng !";
			}
			else{
				$_SESSION['username'] = 1;
				}
		}
}
else{ if(isset($_SESSION['username'])!=1){
		$_SESSION['username'] = 0;
}
}
if (isset($_POST['dx'])){
	$_SESSION['username']=0;
}

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
	

$sql_query = mysql_query($sql,$conn)or die(mysql_error($conn)); 
$number_of_page = ceil ( mysql_num_rows( $sql_query ) / $rows_per_page ); 

if ( $number_of_page > 1 ) 
{ 
$list_page = " <td><b> Trang:&nbsp;&nbsp;</b></td>"; 

for ( $i = 1; $i <= $number_of_page; $i++ ) 
{ 
if ( $i == $page ) 
{ 
$list_page .= " <td>[ <b>{$i}</b> ]</td> "; 
} 
else 
{ 
$list_page .= "<td><a href='pt.php?page={$i}'> &nbsp;{$i}&nbsp; </a></td>"; 
} 
} 
} 

$i = 0; ?>
	<body>
     <form id="hsx" name="hsx" method="post" action="">
		<div id="wrapper">
        <div id="shadow">
          <div id="head_top">
           <a href="index.php">
          <div class="logo">
             </div>
            </a>
         </div>
			<header>
           
            <nav id="right_menu">
            <?php if(($_SESSION['username'])==1){?>
            <div class="hadn" align="center" style="margin-top:20px;"><img src="img/002.jpg" height="150" width="170"</div>
                <div class="username" style="width:200px;height:80px; text-align:center; font-size:24px;margin-top:30px;">
                <span>Xin Chào Tuấn Anh</span>
                </div>
                <div style="width:200px; text-align:center; text-decoration:blink; font-size:14px;">
                <span>
                <input type="submit" name="dx" value="Out" />
                </span>
                </div>
                </nav>
            <?php }else if(($_SESSION['username'])==0){?>
     			           	<table width="200" border="0" style="margin:10px 0px 10px 5px;">
  <tr>
    <td style="margin-bottom:10px;"><input type="text" name="txtuser" placeholder="UserName"  style="height:25px; margin-bottom:10px;"/></td>
  </tr>
  <tr>
    <td><input type="password" name="txtpass"  placeholder="Password"  style="height:25px;margin-bottom:10px;"/></td>
  </tr>
 <tr>
    <td><input type="submit" name="dn" value="Login"  style="height:25px; width:100px; margin-left:35px;"/></td>
  </tr>
  <tr>
    <td><div style="text-align:center>"><a href="dangky.php" style="height:25px; width:100px; margin-left:45px; text-decoration:underline;">Dang ky </a></div></td>
  </tr>
</table>
<div style="text-align:center">
<span>dn đe</span>
</div><?php }?>
                </nav>
            <!--Jsssssssssssss -->
	
    <div id="jssor_1" style="position: relative; margin-left:10px; display: flex; top: 0px; left: 0px; width: 810px; height: 300px;  visibility: hidden; background-color: inherit;">
       
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
               <div data-u="thumb">
                    <img class="i" src="img/thumb-002.jpg" />
                    <div class="t">Banner Rotator</div>
                    <div class="c">360+ touch swipe slideshow effects</div>
                </div>
                <img data-u="image" src="img/002.jpg" />
                
            </div>
            <div data-p="112.50" style="display: none;">
                 <div data-u="thumb">
                    <img class="i" src="img/thumb-003.jpg" />
                    <div class="t">Image Gallery</div>
                    <div class="c">Image gallery with thumbnail navigation</div>
                </div>
                <img data-u="image" src="img/003.jpg" />
               
            </div>
            <div data-p="112.50" style="display: none;">
                <div data-u="thumb">
                    <img class="i" src="img/thumb-004.jpg" />
                    <div class="t">Carousel</div>
                    <div class="c">Touch swipe, mobile device optimized</div>
                </div>
                <img data-u="image" src="img/004.jpg" />
                
            </div>
            <div data-p="112.50" style="display: none;">
                 <div data-u="thumb">
                    <img class="i" src="img/thumb-005.jpg" />
                    <div class="t">Themes</div>
                    <div class="c">30+ professional themems + growing</div>
                </div>
                <img data-u="image" src="img/005.jpg" />
               
            </div>
            <div data-p="112.50" style="display: none;">
                <div data-u="thumb">
                    <img class="i" src="img/thumb-006.jpg" />
                    <div class="t">Tab Slider</div>
                    <div class="c">Tab slider with auto play options</div>
                </div>
                <img data-u="image" src="img/006.jpg" />
                
            </div>
            <a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
        
        </div>
          <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort11" style="position:absolute;right:5px;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="tp"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora02r" style="top:0px;right:218px;width:55px;height:55px;" data-autocenter="2"></span>
   
       </div>
    <!-- #endregion Jssor Slider End -->	
   	<div style="    width: 170px;
    height: 285px;
    border: 2px solid #FC0;
    float: right;
    margin-top: -295px;">
    </div>
			</header>           				
			<div id="content"> 
               <div id="left_content">
               		<div class="left_menu">
               		  <h3>Hãng Sản Xuất</h3>
               		
                   		<p>
                            <?php if ($id==1){?><a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=1&&idgia=<?php echo $idgia;?>" class="label1"><span>Sam Sung</span></a><?php }else{   ?>
                          <a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=1&&idgia=<?php echo $idgia;?>">  <label >Sam Sung</label></a>
						<?php }?>
               		 </p>
                       <p>
  						  <?php if ($id==2){?><a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=2&&idgia=<?php echo $idgia;?>" class="label1"><span>Iphone</span></a><?php }else{   ?>
                       <a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=2&&idgia=<?php echo $idgia;?>">  <label >Iphone</label></a>
       					<?php }?>
                        </p>	
						
               		  <p>
                         
 							     <?php if ($id==3){?><a href="/Sell_Phone/index.php?id=3&&idgia=<?php echo $idgia;?>" class="label1"><span>Sky</span></a><?php }else{   ?>
                              <a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=3&&idgia=<?php echo $idgia; ?>">  <label >Sky</label></a>
               		    <?php }?>
                        
                         </p>
           		      
               		    <p>
                         
               		        <?php if ($id==4){?><a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=4&&idgia=<?php echo $idgia;?>" class="label1"><span>Nokia</span></a><?php }else{   ?>
                         <a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&?id=4&&idgia=<?php echo $idgia; ?>"> <label >Nokia</label></a>
               		      <?php }?>
                           </p>
                           <p>
                          
               		       <?php if ($id==5){?><a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=5&&idgia=<?php echo $idgia;?>" class="label1"><span>LG</span></a><?php }else{   ?>
                          <a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=5&&idgia=<?php echo $idgia; ?>"> <label >LG      </label></a>
               		    <?php }?>
  </p>
               		    <p>
                        <?php if ($id==6){?><a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=6&&idgia=<?php echo $idgia;?>" class="label1"><span>OPPO</span></a><?php }else{   ?>
               		        <a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=6&&idgia=<?php echo $idgia; ?>"><label >OPPO</label></a>
							<?php }?>
</p>
               		    <p>
               		       <?php if ($id==7){?><a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=7&&idgia=<?php echo $idgia;?>" class="label1"><span>Sam Sung</span></a><?php }else{   ?>
                          <a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=7&&idgia=<?php echo $idgia; ?>"> <label > HTC</label></a>
               		   <?php }?>
                        </p>
               		    <p>
                         <?php if ($id==8){?><a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=8&&idgia=<?php echo $idgia;?>" class="label1"><span>Sony</span></a><?php }else{   ?>
                            <a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=8&&idgia=<?php echo $idgia; ?>"><label >Sony</label></a>
           		       <?php }?>
                        </p>
                       <p>
                          <?php if ($id==0){?><a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=0&&idgia=<?php echo $idgia;?>" class="label1"><span>Tất Cả</span></a><?php }else{   ?>
                            <a href="/Sell_Phone/pt.php?page=<?php echo $i; ?>&&id=0&&idgia=<?php echo $idgia; ?>" ><label>Tất Cả</label></a>
           		       <?php }?>
                        </p>     
               		
               		  <p>&nbsp;</p>
               		</div>
               	
                    <div class="left_find">
                      <h3>Giá Tiền </h3>
                        <p>
                         <?php if ($idgia==1){?><a href="/Sell_Phone/index.php?id=<?php echo $id; ?>&&idgia=1" ><span>Từ 1-3tr</span></a><?php }else{   ?>
                         <a href="/Sell_Phone/index.php?id=<?php echo $id; ?>&&idgia=1">
                          <label >Từ 1-3tr</label>
                          </a>
                            <?php }?>
  						</p>
                        <p>
                        <?php if ($idgia==2){?><a href="/Sell_Phone/index.php?id=<?php echo $id; ?>&&idgia=2" ><span>Từ 3-5tr</span></a><?php }else{   ?>
                         <a href="/Sell_Phone/index.php?id=<?php echo $id; ?>&&idgia=2">
                          <label>Từ 3-5tr</label>
                          </a>
                          <?php }?>
                        </p>
                        <p>
                        <?php if ($idgia==3){?><a href="/Sell_Phone/index.php?id=<?php echo $id; ?>&&idgia=3" ><span>Từ 5-10tr</span></a><?php }else{   ?>
                         <a href="/Sell_Phone/index.php?id=<?php echo $id; ?>&&idgia=3">
                          <label >Từ 5-10tr</label>
                          </a>
                          <?php }?>
                        </p>
                        <p>
                        <?php if ($idgia==4){?><a href="/Sell_Phone/index.php?id=<?php echo $id; ?>&&idgia=4" ><span>Trên 10tr</span></a><?php }else{   ?>
                        	 <a href="/Sell_Phone/index.php?id=<?php echo $id; ?>&&idgia=4">
                          <label>Trên 10tr</label>
                          </a>
                          <?php }?>
                        </p>
                        <p>
                        <?php if ($idgia==0){?><a href="/Sell_Phone/index.php?id=<?php echo $id; ?>&&idgia=0" ><span>Tất cả giá</span></a><?php }else{   ?>
                        	 <a href="/Sell_Phone/index.php?id=<?php echo $id; ?>&&idgia=0">
                          <label>Tất cả giá</label>
                          </a>
                          <?php }?>
                        </p>
                    
                    </div>
                    <div class ="left_suport">
                    	<span>Hỗ Trợ Trực Tuyến</span>
                    	<div class="khoi">Now Online</div>
                        <div class="khoi">Online</div>
                        <div class="khoi">Chat Me</div>
                    </div>
                    
               </div>
               <div id="right_content">
               		<div class="content_head">Sản Phẩm Mới</div>
                   <div class="content_spm">
                <?php
while ( $row = mysql_fetch_array ( $sql_query ) ) 
{ 
if ( $i >= $page_start ) 
{ ?>
                   <?php 

					   $mp=$row['MaPhone'];
					   $ten=$row['Ten'];
					   $gia=$row['Gia'];
				?>
                   		<div class="product">
                        		<a href="/Sell_Phone/chitiet.php?id=<?php echo $row['MaPhone']; ?>">
                           <?php
							
										$url=$row['Image'];
							 echo '<img src="'.$url.'" alt="error" />';
                               echo '<h3>'.$ten.'</h3>'; 
							   
                   				echo '<strong>' .number_format($gia,0,',','.').'₫</strong>'; 
								?>
                    			<div class="km">
                            		<span>Tặng PMH iPhone/ iPad trị giá 2 triệu HOẶC Trả góp 0%</span>                            
                            		<span>Tặng Dock sạc</span>                            
                            		<span>Tặng PMH Laptop &amp; Tablet 500.000đ</span>                            
                   			 	</div>
                           </a>
                           <a href="/Sell_Phone/Buy_product.php?id=<?php echo $row['MaPhone']; ?>" class="buy">Mua</a>
                           <figure class="info">
               				     <span><?php echo $row['ManHinh']; ?></span>
                				 <span><?php echo $row['HDH']; ?></span>
               					 <span><?php echo $row['CPU'];echo ", RAM";echo $row['Ram']; ?> GB</span>
                <span><?php echo "Camera: ";echo $row['CameraSau'];echo "MP, ";echo $row['TheSim']; ?></span>
               					 <span>Dung lượng pin: <?php echo $row['DungLuongPin']; ?> mAh</span>
           				   </figure>
                           <span class="arr"></span>
                        </div>
                        
				 
  <?php
} 
$i++; 
if ($i >= $page_end) 
{ 
	break; 
} 
} 
?>

<?php
	echo $list_page;
?>
                   </div>
                   <div class="clr"></div>
                   <div class="content_head">Sản Phẩm Khuyến Mại</div>
                  
                      <div class="clr"></div>
                   <div class="content_card"></div>
               </div>     
			</div>
        </div>
        </div> 
		<!--<footer>
			<div class="footer_content">
            	<div class="left_footer">
                	<input type="text" id="txtSearch" name="txtSearch" placeholder="Search Term..." />
                    <a href="#"> <input type="button" id="btnSearch" value="GO" /> </a>
                </div>
                <div class="right_footer">
                	Bùi Tuấn Anh
                </div>
            </div>           		
		</footer>-->
    </form>
  
	</body>

    

</html>
       