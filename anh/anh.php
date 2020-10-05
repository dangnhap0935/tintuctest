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
	<!-- Quảng cáo hu mới - (Banner - -->
	<script type="application/javascript">
    var ad_idzone = "4017202",
    ad_width = "728",
    ad_height = "90"
</script>
<script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
<noscript>
    <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=4017202&output=noscript&type=728x90" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</noscript>
	
	
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
	<!-- Popunder -->
	<script type="application/javascript">
(function() {

    //version 1.0.0

    var adConfig = {
    "ads_host": "a.exdynsrv.com",
    "syndication_host": "syndication.exdynsrv.com",
    "idzone": 4017268,
    "popup_fallback": false,
    "popup_force": false,
    "chrome_enabled": true,
    "new_tab": false,
    "frequency_period": 5,
    "frequency_count": 3,
    "trigger_method": 3,
    "trigger_class": "",
    "only_inline": false,
    "t_venor": false
};

    if(!window.document.querySelectorAll){document.querySelectorAll=document.body.querySelectorAll=Object.querySelectorAll=function querySelectorAllPolyfill(r,c,i,j,a){var d=document,s=d.createStyleSheet();a=d.all;c=[];r=r.replace(/\[for\b/gi,"[htmlFor").split(",");for(i=r.length;i--;){s.addRule(r[i],"k:v");for(j=a.length;j--;){a[j].currentStyle.k&&c.push(a[j])}s.removeRule(0)}return c}}var popMagic={version:"1.0.0",cookie_name:"",url:"",config:{},open_count:0,top:null,browser:null,venor_loaded:false,venor:false,configTpl:{ads_host:"",syndication_host:"",idzone:"",frequency_period:720,frequency_count:1,trigger_method:1,trigger_class:"",popup_force:false,popup_fallback:false,chrome_enabled:true,new_tab:false,cat:"",tags:"",el:"",sub:"",sub2:"",sub3:"",only_inline:false,t_venor:false},init:function(config){if(typeof config.idzone==="undefined"||!config.idzone){return}for(var key in this.configTpl){if(!this.configTpl.hasOwnProperty(key)){continue}if(typeof config[key]!=="undefined"){this.config[key]=config[key]}else{this.config[key]=this.configTpl[key]}}if(typeof this.config.idzone==="undefined"||this.config.idzone===""){return}if(this.config.only_inline!==true){this.loadHosted()}this.addEventToElement(window,"load",this.preparePop)},getCountFromCookie:function(){var shownCookie=popMagic.getCookie(popMagic.cookie_name);var ctr=typeof shownCookie==="undefined"?0:parseInt(shownCookie);if(isNaN(ctr)){ctr=0}return ctr},shouldShow:function(){if(popMagic.open_count>=popMagic.config.frequency_count){return false}var ctr=popMagic.getCountFromCookie();popMagic.open_count=ctr;return!(ctr>=popMagic.config.frequency_count)},venorShouldShow:function(){return!popMagic.config.t_venor||popMagic.venor_loaded&&popMagic.venor==="0"},setAsOpened:function(){var new_ctr=1;if(popMagic.open_count!==0){new_ctr=popMagic.open_count+1}else{new_ctr=popMagic.getCountFromCookie()+1}popMagic.setCookie(popMagic.cookie_name,new_ctr,popMagic.config.frequency_period);if(new_ctr>=popMagic.config.frequency_count){popMagic.setCookie("nb-no-req-"+popMagic.config.idzone,true,popMagic.config.frequency_period)}},loadHosted:function(){var hostedScript=document.createElement("script");hostedScript.type="application/javascript";hostedScript.async=true;hostedScript.src="//"+this.config.ads_host+"/popunder1000.js";hostedScript.id="popmagicldr";for(var key in this.config){if(!this.config.hasOwnProperty(key)){continue}if(key==="ads_host"||key==="syndication_host"){continue}hostedScript.setAttribute("data-exo-"+key,this.config[key])}var insertAnchor=document.getElementsByTagName("body").item(0);if(insertAnchor.firstChild){insertAnchor.insertBefore(hostedScript,insertAnchor.firstChild)}else{insertAnchor.appendChild(hostedScript)}},preparePop:function(){if(typeof exoJsPop101==="object"&&exoJsPop101.hasOwnProperty("add")){return}popMagic.top=self;if(popMagic.top!==self){try{if(top.document.location.toString()){popMagic.top=top}}catch(err){}}popMagic.cookie_name="splashWeb-"+popMagic.config.idzone+"-42";if(popMagic.config.t_venor&&popMagic.shouldShow()){var xmlhttp=new XMLHttpRequest;xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==XMLHttpRequest.DONE){popMagic.venor_loaded=true;if(xmlhttp.status==200){popMagic.venor=xmlhttp.responseText}}};var protocol=document.location.protocol!=="https:"&&document.location.protocol!=="http:"?"https:":document.location.protocol;xmlhttp.open("GET",protocol+"//"+popMagic.config.syndication_host+"/venor.php",true);try{xmlhttp.send()}catch(error){popMagic.venor_loaded=true}}popMagic.buildUrl();popMagic.browser=popMagic.browserDetector.detectBrowser(navigator.userAgent);if(!popMagic.config.chrome_enabled&&(popMagic.browser.name==="chrome"||popMagic.browser.name==="crios")){return}var popMethod=popMagic.getPopMethod(popMagic.browser);popMagic.addEvent("click",popMethod)},getPopMethod:function(browserInfo){if(popMagic.config.popup_force){return popMagic.methods.popup}if(popMagic.config.popup_fallback&&browserInfo.name==="chrome"&&browserInfo.version>=68&&!browserInfo.isMobile){return popMagic.methods.popup}if(browserInfo.isMobile){return popMagic.methods.default}if(browserInfo.name==="chrome"){return popMagic.methods.chromeTab}return popMagic.methods.default},buildUrl:function(){var protocol=document.location.protocol!=="https:"&&document.location.protocol!=="http:"?"https:":document.location.protocol;var p=top===self?document.URL:document.referrer;var script_info={type:"inline",name:"popMagic",ver:this.version};var encodeScriptInfo=function(script_info){var result=script_info["type"]+"|"+script_info["name"]+"|"+script_info["ver"];return encodeURIComponent(btoa(result))};this.url=protocol+"//"+this.config.syndication_host+"/splash.php"+"?cat="+this.config.cat+"&idzone="+this.config.idzone+"&type=8"+"&p="+encodeURIComponent(p)+"&sub="+this.config.sub+(this.config.sub2!==""?"&sub2="+this.config.sub2:"")+(this.config.sub3!==""?"&sub3="+this.config.sub3:"")+"&block=1"+"&el="+this.config.el+"&tags="+this.config.tags+"&scr_info="+encodeScriptInfo(script_info)},addEventToElement:function(obj,type,fn){if(obj.addEventListener){obj.addEventListener(type,fn,false)}else if(obj.attachEvent){obj["e"+type+fn]=fn;obj[type+fn]=function(){obj["e"+type+fn](window.event)};obj.attachEvent("on"+type,obj[type+fn])}else{obj["on"+type]=obj["e"+type+fn]}},addEvent:function(type,fn){var targetElements;if(popMagic.config.trigger_method=="3"){targetElements=document.querySelectorAll("a");for(i=0;i<targetElements.length;i++){popMagic.addEventToElement(targetElements[i],type,fn)}return}if(popMagic.config.trigger_method=="2"&&popMagic.config.trigger_method!=""){var trigger_classes;var trigger_classes_final=[];if(popMagic.config.trigger_class.indexOf(",")===-1){trigger_classes=popMagic.config.trigger_class.split(" ")}else{var trimmed_trigger_classes=popMagic.config.trigger_class.replace(/\s/g,"");trigger_classes=trimmed_trigger_classes.split(",")}for(var i=0;i<trigger_classes.length;i++){if(trigger_classes[i]!==""){trigger_classes_final.push("."+trigger_classes[i])}}targetElements=document.querySelectorAll(trigger_classes_final.join(", "));for(i=0;i<targetElements.length;i++){popMagic.addEventToElement(targetElements[i],type,fn)}return}popMagic.addEventToElement(document,type,fn)},setCookie:function(name,value,ttl_minutes){var now_date=new Date;now_date.setMinutes(now_date.getMinutes()+parseInt(ttl_minutes));var c_value=encodeURIComponent(value)+"; expires="+now_date.toUTCString()+"; path=/";document.cookie=name+"="+c_value},getCookie:function(name){var i,x,y,cookiesArray=document.cookie.split(";");for(i=0;i<cookiesArray.length;i++){x=cookiesArray[i].substr(0,cookiesArray[i].indexOf("="));y=cookiesArray[i].substr(cookiesArray[i].indexOf("=")+1);x=x.replace(/^\s+|\s+$/g,"");if(x===name){return decodeURIComponent(y)}}},randStr:function(length,possibleChars){var text="";var possible=possibleChars||"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";for(var i=0;i<length;i++){text+=possible.charAt(Math.floor(Math.random()*possible.length))}return text},isValidUserEvent:function(event){if("isTrusted"in event&&event.isTrusted&&popMagic.browser.name!=="ie"&&popMagic.browser.name!=="safari"){return true}else{return event.screenX!=0&&event.screenY!=0}},isValidHref:function(href){if(typeof href==="undefined"||href==""){return false}var empty_ref=/\s?javascript\s?:/i;return!empty_ref.test(href)},findLinkToOpen:function(clickedElement){var target=clickedElement;var location=false;try{var breakCtr=0;while(breakCtr<20&&!target.getAttribute("href")&&target!==document&&target.nodeName.toLowerCase()!=="html"){target=target.parentNode;breakCtr++}var elementTargetAttr=target.getAttribute("target");if(!elementTargetAttr||elementTargetAttr.indexOf("_blank")===-1){location=target.getAttribute("href")}}catch(err){}if(!popMagic.isValidHref(location)){location=false}return location||window.location.href},getPuId:function(){return"ok_"+Math.floor(89999999*Math.random()+1e7)},browserDetector:{browserDefinitions:[["firefox",/Firefox\/([0-9.]+)(?:\s|$)/],["opera",/Opera\/([0-9.]+)(?:\s|$)/],["opera",/OPR\/([0-9.]+)(:?\s|$)$/],["edge",/Edg(?:e|)\/([0-9._]+)/],["ie",/Trident\/7\.0.*rv:([0-9.]+)\).*Gecko$/],["ie",/MSIE\s([0-9.]+);.*Trident\/[4-7].0/],["ie",/MSIE\s(7\.0)/],["safari",/Version\/([0-9._]+).*Safari/],["chrome",/(?!Chrom.*Edg(?:e|))Chrom(?:e|ium)\/([0-9.]+)(:?\s|$)/],["chrome",/(?!Chrom.*OPR)Chrom(?:e|ium)\/([0-9.]+)(:?\s|$)/],["bb10",/BB10;\sTouch.*Version\/([0-9.]+)/],["android",/Android\s([0-9.]+)/],["ios",/Version\/([0-9._]+).*Mobile.*Safari.*/],["yandexbrowser",/YaBrowser\/([0-9._]+)/],["crios",/CriOS\/([0-9.]+)(:?\s|$)/]],detectBrowser:function(userAgent){var isMobile=userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile|WebOS|Windows Phone/i);for(var i in this.browserDefinitions){var definition=this.browserDefinitions[i];if(definition[1].test(userAgent)){var match=definition[1].exec(userAgent);var version=match&&match[1].split(/[._]/).slice(0,3);var versionTails=Array.prototype.slice.call(version,1).join("")||"0";if(version&&version.length<3){Array.prototype.push.apply(version,version.length===1?[0,0]:[0])}return{name:definition[0],version:version.join("."),versionNumber:parseFloat(version[0]+"."+versionTails),isMobile:isMobile}}}return{name:"other",version:"1.0",versionNumber:1,isMobile:isMobile}}},methods:{default:function(triggeredEvent){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(triggeredEvent))return true;var clickedElement=triggeredEvent.target||triggeredEvent.srcElement;var href=popMagic.findLinkToOpen(clickedElement);window.open(href,"_blank");popMagic.setAsOpened();popMagic.top.document.location=popMagic.url;if(typeof triggeredEvent.preventDefault!=="undefined"){triggeredEvent.preventDefault();triggeredEvent.stopPropagation()}return true},chromeTab:function(event){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(event))return true;if(typeof event.preventDefault!=="undefined"){event.preventDefault();event.stopPropagation()}else{return true}var a=top.window.document.createElement("a");var target=event.target||event.srcElement;a.href=popMagic.findLinkToOpen(target);document.getElementsByTagName("body")[0].appendChild(a);var e=new MouseEvent("click",{bubbles:true,cancelable:true,view:window,screenX:0,screenY:0,clientX:0,clientY:0,ctrlKey:true,altKey:false,shiftKey:false,metaKey:true,button:0});e.preventDefault=undefined;a.dispatchEvent(e);a.parentNode.removeChild(a);window.open(popMagic.url,"_self");popMagic.setAsOpened()},popup:function(triggeredEvent){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(triggeredEvent))return true;var winOptions="";if(popMagic.config.popup_fallback&&!popMagic.config.popup_force){var height=Math.max(Math.round(window.innerHeight*.8),300);var width=Math.max(Math.round(window.innerWidth*.7),300);var top=window.screenY+100;var left=window.screenX+100;winOptions="menubar=1,resizable=1,width="+width+",height="+height+",top="+top+",left="+left}var prePopUrl=document.location.href;var popWin=window.open(prePopUrl,popMagic.getPuId(),winOptions);setTimeout(function(){popWin.location.href=popMagic.url},200);popMagic.setAsOpened();if(typeof triggeredEvent.preventDefault!=="undefined"){triggeredEvent.preventDefault();triggeredEvent.stopPropagation()}}}};    popMagic.init(adConfig);
})();
</script>
	<!-- Popunder -->
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
