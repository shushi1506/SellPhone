<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<title> Chi Tiết </title>
    <link href="css/stylect.css" rel="stylesheet" type="text/css" />
     <link href="css/Listder.css" rel="stylesheet" type="text/css" />
	</head>
      <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script type="text/javascript" src="js/Lisder.js"></script>
    <?php
	session_start();
	require_once( 'E:\Programs\xampp\htdocs\Sell_Phone\php\connect.php');
	if(isset($_GET['id'])){
	$id=$_GET['id'];}
$sql = "SELECT * FROM Mobile where MaPhone='".$id."'";
$result = mysql_query($sql, $conn) or die(mysql_error($conn));
$row=mysql_fetch_assoc($result);

?>	
	<body>
     <form id="hsx" name="hsx" method="post" action="">
		<div id="wrapper">
        <div id="shadow">
          <div id="head_top">
             <a href="index.php" class="logo"></a>
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
                           <label >Sam Sung</label>
               		 </p>
                       <p>
  					 <label >Iphone</label>
                        </p>	
               		  <p>
 						  <label >Sky</label>
                         </p>
           		      
               		    <p>
                         
               		   <label >Nokia</label>
               		    
                           </p>
                           <p>
                          
               		  <label >LG      </label>
               		
  </p>
               		    <p>
                     
               		      <label >OPPO    </label>
					
</p>
               		    <p>
               		     
                    <label > HTC     </label>
               		 
                        </p>
               		    <p>
                     <label >Sony    </label>
           		    
                        </p>
                       <p>
               <label>Tất Cả</label>
                        </p>     
               		
               		  <p>&nbsp;</p>
               		</div>
               	
                    <div class="left_find">
                      <h3>Giá Tiền </h3>
                        <p>
                    
                          <label >Từ 1-3tr</label>
                    
                       
  						</p>
                        <p>
                    
                          <label>Từ 3-5tr</label>
                   
                      
                        </p>
                        <p>
                     
                          <label >Từ 5-10tr</label>
                       
                      
                        </p>
                        <p>
                       
                          <label>Trên 10tr</label>
                      
                        </p>
                        <p>
                       
                          <label>Tất cả giá</label>
                     
                      
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
                   	<div class="content_main">
                    	<div class="content_main_top">
                        	<h3><?php echo $row['Ten'];?></h3>
                        	<div class="hinhanh">
                            	<div class="ha">
                                	<img src="css/images/17.jpg" alt="error" />
                                </div>
                                <div class="pickha"></div>
                            </div>
                           	<div class="thongtinkm">
                            	<span><?php echo number_format($row['Gia'],0,',','.');?>₫</span>
                                <div class="ttkm">
                                <strong>Khuyến Mãi </strong>
                                	<p>Cơ hội trúng 1 tỷ tiền mặt</p>
                                    <p>7 ưu đãi khủng:</p>
									<p>	Tặng ốp lưng chính hãng<p>

										<p>Tặng bộ 2 túi vải<p>
										<p>Trả góp lãi suất 0% với HSBC</p>
                                </div>
                                <div class="ttbh">
                               		<p> Trong hộp có: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim</p>
									<p>Bảo hành chính hãng 12 tháng.</p>

									<p>Giao hàng trong 30 phút, đổi trả 1 tháng (nếu lỗi).<p>
                                </div>
                                <div class="mua">
                                	<a href=""><span>Mua</span></a>
                                </div>
                            </div>
							
                        </div>
                        
                        <div class="content_main_bot">
                        		<div class="chitietsp">
                                  <h4>Thông Số Kỹ Thuật</h4>
                                  <span><div style="width:115px;height:inherit;">Màn Hình:</div><ul><?php echo $row['ManHinh'];?></ul></span>
                                  <span><div style="width:115px;height:inherit;">Hệ Điều Hành:</div><ul><?php echo $row['HDH'];?></ul></span>
                                   <span><div style="width:115px;height:inherit;">Camera sau:</div><ul><?php echo $row['CameraSau'];?> MP</ul></span>
                                    <span><div style="width:115px;height:inherit;">Camera trước:</div><ul><?php echo $row['CameraTruoc'];?> MP</ul></span>
                                     <span><div style="width:115px;height:inherit;">CPU:</div><ul><?php echo $row['CPU'];?> </ul></span>
                                      <span><div style="width:115px;height:inherit;">Ram:</div><ul><?php echo $row['Ram'];?> GB</ul></span>
                                       <span><div style="width:115px;height:inherit;">Bộ Nhớ Trong:</div><ul><?php echo $row['BNT'];?> GB</ul></span>
                                        <span><div style="width:115px;height:inherit;">Hỗ Trợ Thẻ Nhớ:</div><ul><?php echo $row['Httn'];?></ul></span>
                                         <span><div style="width:115px;height:inherit;">Thẻ Sim:</div><ul><?php echo $row['TheSim'];?></ul></span>
                                          <span><div style="width:115px;height:inherit;">Kết Nối:</div><ul><?php echo $row['KetNoi'];?></ul></span>
                                           <span><div style="width:115px;height:inherit;">Dung Lượng Pin:</div><ul><?php echo $row['DungLuongPin'];?>Mah</ul></span>
                                             <span><div style="width:115px;height:inherit;">Chức Năng Đặc Biệt:</div><ul><?php echo $row['ChucNangDacBiet'];?></ul></span>
                                </div>
                                <div class="demoha">
                                <h4>Điểm Nổi Bật</h4>
                                  <img src="" alt="" />
                                </div>
                        </div>
                    </div>
                    
               
                   <div class="content_card"></div>
               </div>>  
			</div>
        </div>
        </div> 
		<footer>
			<div class="footer_content">
            	<div class="left_footer">
                	<input type="text" id="txtSearch" name="txtSearch" placeholder="Search Term..." />
                    <a href="#"> <input type="button" id="btnSearch" value="GO" /> </a>
                </div>
                <div class="right_footer">
                	&copy; Copyright 2017.All Right Reserved. 
                </div>
            </div>           		
		</footer>
    </form>
	</body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
<!-- write script to toggle class on scroll -->
<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});
</script>
</html>       