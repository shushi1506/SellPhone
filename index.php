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
   
 <?php session_start();require_once( '/php/connect.php'); ?>
 

	<body>
     <form id="hsx" name="hsx" method="post" action="">
		<div id="page">
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
            <?php if(($_SESSION['check'])==1){?>
            <div class="hadn" align="center" style="margin-top:20px;"><img src="img/002.jpg" height="150" width="170"</div>
                <div class="username" style="width:200px;height:80px; text-align:center; font-size:24px;margin-top:30px;">
                <span>Xin Chào <?php echo $_SESSION['user'];?></span>
                </div>
                <div style="width:200px; text-align:center; text-decoration:blink; font-size:14px;">
                <span>
                <input type="submit" name="dx" value="Out" style="height:25px; width:100px; margin-left:35px;" />
                </span>
                </div>
                </nav>
            <?php }else if(($_SESSION['check'])==0){?>
     			           	<table width="200" border="0" style="margin:60px 0px auto 15px;">
  <tr>
    <td style="margin-bottom:10px;"><input type="text" name="txtuser" required="required" minlength="4" maxlength="30" placeholder="UserName"  style="height:25px; margin-bottom:10px;"/></td>
  </tr>
  <tr>
    <td><input type="password" name="txtpass"  placeholder="Password" required="required" minlength="4" maxlength="30" style="height:25px;margin-bottom:10px;"/></td>
  </tr>
 <tr>
    <td><input type="submit" name="dn" value="Login"  style="height:25px; width:100px; margin-left:35px;"/></td>
  </tr>
  <tr>
    <td><div style="text-align:center>"><a href="register.php" style="height:25px; width:100px; margin-left:45px; text-decoration:underline;">Đăng Ký</a></div></td>
  </tr>
</table>
<div style="text-align:center">
<span>Mời Bạn Đăng Nhập</span>
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
     <?php if(($_SESSION['check'])==0){?>
   	<div style="width: 170px;
    height: 285px;
    border: 2px solid #FC0;
    float: right;
    margin-top: -295px;
    background-image:url(css/images/dra.gif);">
    
    <input type="submit" name="bl" value="Bình Luận"  style=" margin-top:200px;height:25px; width:100px; margin-left:35px;"/>
    <span style="text-align:center; ">Đăng Nhập Để Bình Luận</span>
    </div>
    <?php }else{if(($_SESSION['check'])==1){?>
    	<div style="width: 170px;
    height: 285px;
    border: 2px solid #FC0;
    float: right;
    margin-top: -295px;
    background-image:url(css/images/dra.gif);">
    <div style="width:170px; height:280px" align="center">
    	<textarea name="txtbl" placeholder="Nhập Binh Luan" cols="" rows="10" maxlength="1000" style="width:160px;
        height:230px; box-shadow:2px 2px 2px #CC0066;
        border-radius:5px;"></textarea>
        
    </div>
    
    </div>
    <?php }}?>
    <?php include 'php/sqlindex.php'; ?>
			</header>           				
			<div id="content"> 
               <div id="left_content">
               		<div class="left_menu">
               		  <h3>Hãng Sản Xuất</h3>
               		
                   		<p>
                            <?php if ($id==1){?><a href="/sell/index.php?id=1&&idgia=<?php echo $idgia;?>" class="label1"><span>Sam Sung</span></a><?php }else{   ?>
                          <a href="/sell/index.php?id=1&&idgia=<?php echo $idgia;?>">  <label >Sam Sung</label></a>
						<?php }?>
               		 </p>
                       <p>
  						  <?php if ($id==2){?><a href="/sell/index.php?id=2&&idgia=<?php echo $idgia;?>" class="label1"><span>Iphone</span></a><?php }else{   ?>
                       <a href="/sell/index.php?id=2&&idgia=<?php echo $idgia;?>">  <label >Iphone</label></a>
       					<?php }?>
                        </p>	
						
               		  <p>
                         
 							     <?php if ($id==3){?><a href="/sell/index.php?id=3&&idgia=<?php echo $idgia;?>" class="label1"><span>Sky</span></a><?php }else{   ?>
                              <a href="/sell/index.php?id=3&&idgia=<?php echo $idgia; ?>">  <label >Sky</label></a>
               		    <?php }?>
                        
                         </p>
           		      
               		    <p>
                         
               		        <?php if ($id==4){?><a href="/sell/index.php?id=4&&idgia=<?php echo $idgia;?>" class="label1"><span>Nokia</span></a><?php }else{   ?>
                         <a href="/sell/index.php?id=4&&idgia=<?php echo $idgia; ?>"> <label >Nokia</label></a>
               		      <?php }?>
                           </p>
                           <p>
                          
               		       <?php if ($id==5){?><a href="/sell/index.php?id=5&&idgia=<?php echo $idgia;?>" class="label1"><span>LG</span></a><?php }else{   ?>
                          <a href="/sell/index.php?id=5&&idgia=<?php echo $idgia; ?>"> <label >LG      </label></a>
               		    <?php }?>
  </p>
               		    <p>
                        <?php if ($id==6){?><a href="/sell/index.php?id=6&&idgia=<?php echo $idgia;?>" class="label1"><span>OPPO</span></a><?php }else{   ?>
               		        <a href="/sell/index.php?id=6&&idgia=<?php echo $idgia; ?>"><label >OPPO</label></a>
							<?php }?>
</p>
               		    <p>
               		       <?php if ($id==7){?><a href="/sell/index.php?id=7&&idgia=<?php echo $idgia;?>" class="label1"><span>HTC</span></a><?php }else{   ?>
                          <a href="/sell/index.php?id=7&&idgia=<?php echo $idgia; ?>"> <label > HTC</label></a>
               		   <?php }?>
                        </p>
               		    <p>
                         <?php if ($id==8){?><a href="/sell/index.php?id=8&&idgia=<?php echo $idgia;?>" class="label1"><span>Sony</span></a><?php }else{   ?>
                            <a href="/sell/index.php?id=8&&idgia=<?php echo $idgia; ?>"><label >Sony</label></a>
           		       <?php }?>
                        </p>
                       <p>
                          <?php if ($id==0){?><a href="/sell/index.php?id=0&&idgia=<?php echo $idgia;?>" class="label1"><span>Tất Cả</span></a><?php }else{   ?>
                            <a href="/sell/index.php?id=0&&idgia=<?php echo $idgia; ?>" ><label>Tất Cả</label></a>
           		       <?php }?>
                        </p>     
               		
               		  <p>&nbsp;</p>
               		</div>
               	
                    <div class="left_find">
                      <h3>Giá Tiền </h3>
                        <p>
                         <?php if ($idgia==1){?><a href="/sell/index.php?id=<?php echo $id; ?>&&idgia=1" ><span>Từ 1-3tr</span></a><?php }else{   ?>
                         <a href="/sell/index.php?id=<?php echo $id; ?>&&idgia=1">
                          <label >Từ 1-3tr</label>
                          </a>
                            <?php }?>
  						</p>
                        <p>
                        <?php if ($idgia==2){?><a href="/sell/index.php?id=<?php echo $id; ?>&&idgia=2" ><span>Từ 3-5tr</span></a><?php }else{   ?>
                         <a href="/sell/index.php?id=<?php echo $id; ?>&&idgia=2">
                          <label>Từ 3-5tr</label>
                          </a>
                          <?php }?>
                        </p>
                        <p>
                        <?php if ($idgia==3){?><a href="/sell/index.php?id=<?php echo $id; ?>&&idgia=3" ><span>Từ 5-10tr</span></a><?php }else{   ?>
                         <a href="/sell/index.php?id=<?php echo $id; ?>&&idgia=3">
                          <label >Từ 5-10tr</label>
                          </a>
                          <?php }?>
                        </p>
                        <p>
                        <?php if ($idgia==4){?><a href="/sell/index.php?id=<?php echo $id; ?>&&idgia=4" ><span>Trên 10tr</span></a><?php }else{   ?>
                        	 <a href="/sell/index.php?id=<?php echo $id; ?>&&idgia=4">
                          <label>Trên 10tr</label>
                          </a>
                          <?php }?>
                        </p>
                        <p>
                        <?php if ($idgia==0){?><a href="/sell/index.php?id=<?php echo $id; ?>&&idgia=0" ><span>Tất cả giá</span></a><?php }else{   ?>
                        	 <a href="/sell/index.php?id=<?php echo $id; ?>&&idgia=0">
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
				   if( mysqli_num_rows($result)!=0){
				   while($row=mysqli_fetch_array($result)){
					   $mp=$row['MaPhone'];
					   $ten=$row['Ten'];
					   $gia=$row['Gia'];
				?>
                   		<div class="product">
                        		<a href="/sell/chitiet.php?id=<?php echo $row['MaPhone']; ?>">
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
                           <a href="/sell/Buy_product.php?id=<?php echo $row['MaPhone']; ?>" class="buy">Mua</a>
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
				   }
				   ?>
                   </div>
                   <div class="clr"></div>
                  
                   <a href="" class="viewmore">  <input type="submit" name="vm" value="ViewMore"  /></a>
                   
                   <div class="content_head">Sản Phẩm Khuyến Mại</div>
                   <div class="content_spkm">
                  <?php $result1 = mysqli_query( $conn,$sql1) or die(mysqli_error($conn)); 
				   if( mysqli_num_rows($result)!=0){
				   while($row1=mysqli_fetch_array($result1)){
					   $mp=$row1['MaPhone'];
					   $ten=$row1['Ten'];
					   $gia=$row1['Gia'];
				?>
                   		<div class="product">
                        		<a href="/sell/chitiet.php?id=<?php echo $row['MaPhone']; ?>">
                           <?php
							
										$url=$row1['Image'];
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
                           <a href="/sell/Buy_product.php?id=<?php echo $row1['MaPhone']; ?>" class="buy">Mua</a>
                           <figure class="info">
               				     <span><?php echo $row1['ManHinh']; ?></span>
                				 <span><?php echo $row1['HDH']; ?></span>
               					 <span><?php echo $row1['CPU'];echo ", RAM";echo $row1['Ram']; ?> GB</span>
                <span><?php echo "Camera: ";echo $row1['CameraSau'];echo "MP, ";echo $row1['TheSim']; ?></span>
               					 <span>Dung lượng pin: <?php echo $row1['DungLuongPin']; ?> mAh</span>
           				   </figure>
                           <span class="arr"></span>
                        </div>
                         <?php   
				   }
				   }
				   ?>
                   </div>
                      <div class="clr"></div>
               
               </div>     
			</div>
        </div>
        </div> 
 
        <div id="footfind">
       
 <div id="btnSearch"><input type="submit" name="btnsearch" placeholder="Search" style="width: 77px;
	height: 30px;
	float: left;
	background-color: #db6516;
	color: white;
	border-radius: 0px 15px 15px 0px;
	cursor: pointer;" /></div>
     <div id="txtSearch"><input type="text" name="txtsearch" placeholder="Search" style="width: 260px;
	height: 30px;
	float: left;
	border: 0;
	background-color: #e8d3a5;
	border-radius: 15px 0px 0px 15px;" /></div>
        </div>
                      <div id="foot1" align="center">
 <p style="font-size:24px; display:block;
 margin-top:10px;">Bùi Tuấn Anh _Nguyễn Thị Thùy Giang_Quách Mỹ Linh </p>
<marquee> <p style="font-size:14px; display:block; marquee-speed:fast;"">**************
</p></marquee>
 <p style="font-size:14px; display:block;"">© 2016 Pearson Education, Peachpit. All rights reserved.
</p>
<p style="font-size:14px; display:block;">
1301 Sansome Street, San Francisco, CA 94111<p>
</div>
	</div>
      </div>
    </form>
  
	</body>

    

</html>
       