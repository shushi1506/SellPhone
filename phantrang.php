<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php 
  $conn = mysql_connect("localhost", "root", "");
mysql_select_db("sell", $conn);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
$page = isset ( $_GET["page"] ) ? intval ( $_GET["page"] ) : 1; 
$rows_per_page = 8; 
$page_start = ( $page - 1 ) * $rows_per_page; 
$page_end = $page * $rows_per_page;
$query="select * from Mobile"; 
$sql_query = mysql_query($query,$conn); 
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
$list_page .= "<td><a href='phantrang.php?page={$i}'> &nbsp;{$i}&nbsp; </a></td>"; 
} 
} 
} 

$i = 0; ?>
<?php
while ( $row = mysql_fetch_array ( $sql_query ) ) 
{ 
echo "<tr>";
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
	//echo "</table>";
} 
} 
?>

<?php
	echo $list_page;
?>
</body>

</html>