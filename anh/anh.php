<!DOCTYPE html>
<html>
<head>
	<title>Người lạ gửi ảnh cho bạn</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	
	
</head>

<style>
 img,
    video {
      max-width: 100%;
    }

    a#news {
	    margin: 15px auto;
	    display: block;
	    text-decoration: none;
	    color: #1c639e;
	}
/*new*/
	#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
/*new*/
</style>
<body onload="myFunction()" style="margin:0;">
	
	
	<?php	
/*
$url = $_GET['url'];
$url2 = '&_nc_sid=';
$url3 = $_GET['_nc_sid'];
$url4 = '&_nc_oc=';
$url5 = $_GET['_nc_oc'];
$url6 = '&_nc_ad=';
$url7 = $_GET['_nc_ad'];
$url8 = '&_nc_cid=';
$url9 = $_GET['_nc_cid'];
$url10 = '&_nc_zor=';
$url11 = $_GET['_nc_zor'];
$url12 = '&_nc_ht=';
$url13 = $_GET['_nc_ht'];
$url14 = '&oh=';
$url15 = $_GET['oh'];
$url16 = '&oe=';
$url17 = $_GET['oe'];
$url18 = '&_nc_ohc=';
$url19 = $_GET['_nc_ohc'];
if (isset($url5)){
    
$hihi = "".$url."".$url2."".$url3."".$url4."".$url5."".$url6."".$url7."".$url8."".$url9."".$url10."".$url11."".$url12."".$url13."".$url14."".$url15."".$url16."".$url17."";
}
else{
$hihi= "".$url."".$url2."".$url3."".$url18."".$url19."".$url6."".$url7."".$url8."".$url9."".$url10."".$url11."".$url12."".$url13."".$url14."".$url15."".$url16."".$url17."";
}
if (isset($url)){
	
}
else
{
	die();
}
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $hihi = $_POST['fname'];
    if (empty($hihi)) {
        echo "Không có ảnh";
    } else {
        #echo $name;

    }
}	   
if (isset($hihi)){
	
}
else
{
	echo'Không có ảnh';
	$hihi="https://znews-photo.zadn.vn/w1024/Uploaded/kbd_bcvi/2019_11_23/5d828d976f24eb1a752053b5.jpg";
	#die();
}  


?>
	

<!-- new -->
	<script>
	var myVar;

	function myFunction() {
	  myVar = setTimeout(showPage, 1000); //1s
	}

	function showPage() {
	  document.getElementById("loader").style.display = "none";
	  document.getElementById("myDiv").style.display = "block";
	}
</script>
<!-- new -->
	<!-- Quảng cáo banner -->
	<script type="application/javascript">
    var ad_idzone = "4017194",
    ad_width = "300",
    ad_height = "250"
</script>
<script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
<noscript>
    <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=4017194&output=noscript&type=300x250" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</noscript>
	<!-- Quảng cáo banner -->
	<!-- Quảng cáo qc Sticky Banner -->
	<script type="application/javascript">
    var ad_idzone = "4017196",
    ad_width = "300",
    ad_height = "250",
    v_pos = "bottom",
    h_pos = "left";
</script>
<script type="application/javascript" src="https://a.exdynsrv.com/js.php?t=17&idzone=4017196"></script>
	<!-- Quảng cáo qc Sticky Banner -->
		<!-- Quảng cáo mess -->

	<script type="application/javascript" src="https://syndication.exdynsrv.com/splash.php?idzone=4017190"></script>
	<!-- Quảng cáo mess -->
	
     <h1 style="1">
	     
        <p>Ảnh người lạ đã gửi cho bạn</p>
<!--  -->
<div id="loader"></div>
	     
<div style="display:none;" id="myDiv" class="animate-bottom" >
	<!--     -->
<img id="image" src= <?php echo "$hihi"?> >
<!--  -->
</div>
<!-- -->

</h1>
  <p>
    <small>This is the content sent from the user in
      <a href="https://m.me/102206461510133?ref=anh">Chatbot</a> on Facebook Messenger Platform
      <br> People can talk with each other, send messages, photos, videos to each other and share their interesting stories.
    </small>
  </p>
	<!-- Quảng cáo -->
	<div id="SC_TBlock_801507" class="SC_TBlock">loading...</div> 
	<script type="text/javascript">
  (sc_adv_out = window.sc_adv_out || []).push({
    id : "801507",
    domain : "n.ads1-adnow.com"
  });
</script>
<script type="text/javascript" src="//st-n.ads1-adnow.com/js/a.js" async></script>
	<!-- Quảng cáo -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179608067-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179608067-1');
</script>

</body>
</html>
