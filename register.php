<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<title> Đăng Ký </title>
    <link href="css/stylect.css" rel="stylesheet" type="text/css" />
     <link href="css/Listder.css" rel="stylesheet" type="text/css" />
     <script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
     </script>
</head>
      <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script type="text/javascript" src="js/Lisder.js"></script>
   <?php
   session_start();
 $conn = mysql_connect("localhost", "root", "");
mysql_select_db("sell", $conn);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["pass"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $name == "" || $email == "") {
			echo "bạn vui lòng nhập đầy đủ thông tin";
		}else{
			$sql = "INSERT INTO `User` (`UserName`, `PassWord`, `Quyen`) VALUES ('".$username."', '".$password."', NULL)";
			// thực thi câu $sql với biến conn lấy từ file connection.php
		$result = mysql_query($sql, $conn) or die(mysql_error($conn));
			echo "chúc mừng bạn đã đăng ký thành công";
		}
	}
 
?>
	

	<body>
     <form id="hsx" name="hsx" method="post" action="">
		<div id="wrapper">
        <div id="shadow">
          <div id="head_top">
             <a href="index.php" class="logo"></a>
         </div>
      
			<header>
           
           
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
                   	  <table width="438" height="355">
                   	  <tr>
                   	    <td colspan="2"><table width="400" height="262" onfocus="MM_validateForm('pass','','R');return document.MM_returnValue">
                   	      <tr>
                   	        <td colspan="2">Form dang ky</td>
               	          </tr>
                   	      <tr>
                   	        <td width="88">Username :</td>
                   	        <td width="266"><input name="username" type="text" id="username" required="required" minlength="6" maxlength="50" style="height:40px;width:200px;"/></td>
               	          </tr>
                   	      <tr>
                   	        <td>Password :</td>
                   	        <td><input name="pass" type="password" id="pass" required="required" minlength="6" maxlength="50" style="height:40px;width:200px;" /></td>
               	          </tr>
                   	      <tr onfocus="MM_validateForm('pass','','R','email','','NisEmail');return document.MM_returnValue">
                   	        <td>Ho Ten :</td>
                   	        <td><input name="name" type="text" id="name" required="required" minlength="6" maxlength="50"  style="height:40px;width:200px;" /></td>
               	          </tr>
                   	      <tr>
                   	        <td>Email :</td>
                   	        <td><input name="email" type="text" id="email" style="height:40px;width:200px;" onblur="MM_validateForm('email','','RisEmail');return document.MM_returnValue"/></td>
               	          </tr>
                   	      <tr>
                   	        <td colspan="2" align="center"><input name="btn_submit" type="submit" style="height:40px;width:200px;"value="Dang ky" /></td>
               	          </tr>
               	        </table></td>
                   	  </tr>
                   	  </table>
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