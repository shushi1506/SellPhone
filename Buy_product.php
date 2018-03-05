<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/stylebuy.css" rel="stylesheet" type="text/css" />
</head>
<?php
$id=$_GET['id'];
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("sell", $conn);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
$sql = "SELECT * FROM Mobile where MaPhone='".$id."'" ;
$result = mysql_query($sql, $conn);

$row=mysql_fetch_array($result);
					   $ten=$row['Ten'];
					   $gia=$row['Gia'];
	
?>	
<body>
<div id="wrapper">
	<div id="shadow">
   <div id="head_top">
           <div class="logo2">Logo</div>
         </div>
         <div id="content">
         	<p> Iphone 6s 128GB</p>
            <div class="main">
              <form id="form1" name="form1" method="post" action="muahang.php">
            	<div class="sp">
            	<h3><?php echo $ten ; ?></h3>
                <strong><?php  echo number_format($gia);   ?>₫</strong>
                <?php
							$sql1 = "SELECT * FROM images where MaPhone='".$id."'" ;
										$result1 = mysql_query($sql1, $conn);
										$row1=mysql_fetch_array($result1);
										$url=$row1['UrlImage'];
							 echo '<img height="80" src="'.$url.'" alt="error" />';
							 ?> 
                </div>
                <div class="dh">
                	<div class="thongtin">
                    		<div class="checkgt">
                           	  <p>
                           	    <label>
                           	      <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" />
                           	      Anh</label>
                           	    
                           	    <label>
                           	      <input type="radio" name="RadioGroup1" value="0" id="RadioGroup1_1" />
                           	      Chị</label>   
                       	      </p>
                            </div>
                            <div class="nhaptt">
                           
                             <input name="ht" type="text" placeholder="Nhập Họ Tên"/>
                            
                            </div>
                      		 <div class="nhaptt">
                              <input name="sdt" type="tel" placeholder="Nhập Số Điện Thoại"/>
                             </div>
                             
                    <a href="">Mua Ngay 
                   	  <span>Xem hang khong thich thi next</span>
                  </a>
                </div>	
                   
               
                  </form>
                  
                	
                </div>
            </div>
         </div>
    </div>	
</div>
</body>
</html>