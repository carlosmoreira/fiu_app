<!DOCTYPE html>
<html>
<head>

    <title>TV Show Selection</title>
    <link rel="stylesheet" type="text/css" href="style.css">

	<script type="text/javascript">var __noop = function() {};var dB=__noop, wRx=__noop, updateFormat=__noop, hideMenu=__noop, focusNClearInput=__noop, inlevent=__noop;var GDMenu = {}; GDMenu.show = __noop;</script>
	
	<script type="text/javascript">
	<!--
function clickconfirm()
{
var response=confirm("are you sure you want to click?");
return response;
}
-->
	</script>
	
<script src="ajax.js" type="text/javascript"></script>

<script language="JavaScript"> 
 
	function Write(url, content)	// url is the script and data is a string of parameters
	{ 
		var xhr = createXHR();
 
		xhr.onreadystatechange=function()
		{ 
			if(xhr.readyState == 4)
			{
				// nothing for now
				// alert("sent " + url + " " + content);
			}
		}; 
		xhr.open("POST", url, true);		
		xhr.send(content); 
	} 
 
 
	function submitForm()
	{ 
		var content = "bonjour";
		Write("ajax-post-text.php", "file=ajax-post-text.txt&content=" + content);
	} 
 
</script> 

	<?php

$path = "file:///Volumes/Macintosh%20HD/Users/Ben/Documents/Cours/MSU/TC802/Project/Site/ajax-post-text.txt";
$filenum = fopen($path, "w");
fwrite($path, "bonjourbenoit");
fclose($path);
	
?>
		
	
	
	<script type="text/javascript">
	function changetext() {
	document.getElementById("m70125231_1").innerHTML="Added";
	}
	</script>
	

</head>

<body id="page-WiRecentAdditionsGallery" class="ua-safari ua-safari-5 le-webkit sc-wn os-mac os-mac-x struts">
    
    <div id="doc2" class="" >
        <div class="svfDoc">
            <div id="hd">
                

<div id="navigation" class=" ">
    <div id="top-nav" class="clearfix">
        
            
<script type="text/javascript">
    var sf = document.getElementById("searchField");
    sf.disabled = true;
</script>

              

            </div>
            <div id="fground">
                <div id="bd" class="main-content vbg-right">
                    




<style type="text/css">
	#bd.main-content .merch-vignette{ background-image: url("Gradient Black Highlight BG.jpeg"); }
</style>

<div class="vignette merch-vignette clearfix">
    
        <h1 id="page-title">Make Your Selection</h1>
    
	
		<div class="tag-line">Watch TV Trailers Now!</div>
	
	
    
	
</div>

                    
                   

<div id="yui-main">
    <div class="yui-b" >
        






<div class="custom-view-w">


    
        
            <div class="custom-view custom-view-gallery">
                <div class="agMovieSet agMovieGallery">
                    
                        
<div class="agMovie agMovie-lulg">
        <span class="title"><b><font size="5">Comedy</font></b><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>

<div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>
    
    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>
    
    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>
    
    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>



    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070173924_0" class="mdpLink">Futurama</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070173924_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Futurama" src="thumbs/futurama.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40" ><a  id="m70173924_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a  id="m70173924_1" class="btn btn-40 watchlk btn-play btn-def" onclick="return clickconfirm()"><span class="inr">Add</span></a></span>
        
    </div>



    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070117322_0" class="mdpLink">Family Guy</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070117322_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Family Guy" src="thumbs/family guy.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40" ><a  id="m70117322_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a  id="m70117322_1" class="btn btn-40 watchlk btn-play btn-def" onclick="addtoplaylist(family gyu)"><span class="inr">Add</span></a></span>
    
    </div>




    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070125231_0" class="mdpLink">Two and a Half Man</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070125231_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Two and a Half Man" src="thumbs/two and a half men.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40" ><a  id="m70125231_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70125231_1" class="btn btn-40 watchlk btn-play btn-def" onclick="submitform()"><span class="inr">Add</span></a></span>
        
    </div>




    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070169911_0" class="mdpLink">Friends</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070169911_1"  onmouseover="dB(this)"><img class="boxShotImg" alt="Friends" src="thumbs/friends.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40" ><a  id="m70169911_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a  id="m70169911_1" class="btn btn-40 watchlk btn-play btn-def" onclick="return onreadystatechange()"><span class="inr">Add</span></a></span>
        
    </div>

                    

    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070110903_0" class="mdpLink">Curb your enthusiasm</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070110903_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Curb your enthusiasm" src="thumbs/curb.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70110903_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70110903_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>

                    


    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070124183_0" class="mdpLink">The Office</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070124183_1" onmouseover="dB(this)"><img class="boxShotImg" alt="The Office" src="thumbs/office.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40" ><a  id="m70124183_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a  id="m70124183_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>

                    


    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070152658_0" class="mdpLink">South Park</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070152658_1" onmouseover="dB(this)"><img class="boxShotImg" alt="South Park" src="thumbs/south park.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40" ><a id="m70152658_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a  id="m70152658_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>



    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060024922_0" class="mdpLink">Modern Family</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b060024922_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Modern Family" src="thumbs/modern family.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a  id="m60024922_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m60024922_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>

                    
                      
    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070113398_0" class="mdpLink">How I Met Your Mother</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070113398_1" onmouseover="dB(this)"><img class="boxShotImg" alt="How I Met Your Mother" src="thumbs/how I met.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70113398_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70113398_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
       
    </div>



    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070135635_0" class="mdpLink">Mr. Sunshine</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070135635_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Mr. Sunshine" src="thumbs/mr sunshine.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70135635_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70135635_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>



    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070053833_0" class="mdpLink">Mike and Molly</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070053833_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Mike and Molly" src="thumbs/mike molly.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70053833_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70053833_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>

                    
                        

    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b017687717_0" class="mdpLink">The Big Band Theory</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b017687717_1" onmouseover="dB(this)"><img class="boxShotImg" alt="The Big Band Theory" src="thumbs/big bang theory.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m17687717_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m17687717_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
       
    </div>

 


    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060000909_0" class="mdpLink">The Simpsons</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b060000909_1" onmouseover="dB(this)"><img class="boxShotImg" alt="The Simpsons" src="thumbs/simpsons.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m60000909_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m60000909_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>

                    
                       

    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070144845_0" class="mdpLink">Cougar Town </a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070144845_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Cougar Town " src="thumbs/cougar town.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70144845_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70144845_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>

  


    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070144525_0" class="mdpLink">Bob's Burgers</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070144525_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Bob's Burgers" src="thumbs/bobs burgers.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70144525_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70144525_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>


	<div class="agMovie agMovie-lulg">
        <span class="title"><b><font size="5">Drama</font></b><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>

<div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>
    
    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>
    
    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>
    
    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>
    
    
    
    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink">Fringe</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b060001807_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Fringe" src="thumbs/fringe.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m60001807_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m60001807_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>



    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070061804_0" class="mdpLink">House M.D.</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070061804_1" onmouseover="dB(this)"><img class="boxShotImg" alt="House M.D." src="thumbs/house.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70061804_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70061804_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
       
    </div>

                    

    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060003242_0" class="mdpLink">Prison Break</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b060003242_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Prison Break" src="thumbs/prison break.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m60003242_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m60003242_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>

                    

    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060034549_0" class="mdpLink">Law and Order</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b060034549_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Law and Order" src="thumbs/law and order.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m60034549_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m60034549_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
       
    </div>



    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070141633_0" class="mdpLink">Grey's Anatomy</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070141633_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Grey's Anatomy" src="thumbs/greys.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70141633_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70141633_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>




    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070144360_0" class="mdpLink">Gossip Girl</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070144360_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Gossip Girl" src="thumbs/gossip.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70144360_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70144360_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
       
    </div>




    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070003046_0" class="mdpLink">Bones</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070003046_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Bones" src="thumbs/bones.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70003046_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70003046_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>





    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060020780_0" class="mdpLink">CSI : Miami</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b060020780_1" onmouseover="dB(this)"><img class="boxShotImg" alt="CSI Miami" src="thumbs/csi miami.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m60020780_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m60020780_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>




    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060022413_0" class="mdpLink">NCIS</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b060022413_1" onmouseover="dB(this)"><img class="boxShotImg" alt="NCIS" src="thumbs/ncis.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m60022413_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m60022413_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>





    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070124565_0" class="mdpLink">Borther and Sisters</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070124565_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Borther and Sisters" src="thumbs/brothers and sisters.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70124565_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70124565_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>




    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b026198935_0" class="mdpLink">The Good Wife</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b026198935_1" onmouseover="dB(this)"><img class="boxShotImg" alt="The Good Wife" src="thumbs/good wife.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m26198935_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m26198935_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>





    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b018958127_0" class="mdpLink">Criminal Minds</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b018958127_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Criminal Minds" src="thumbs/criminal minds.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m18958127_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m18958127_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>




    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070165184_0" class="mdpLink">Off the Map</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070165184_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Off the Map" src="thumbs/off the map.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70165184_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70165184_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>




    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070130143_0" class="mdpLink">Law and Order: SVU</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070130143_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Law and Order: SVU" src="thumbs/LO SVU.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70130143_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70130143_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>





    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070049805_0" class="mdpLink">Hawaii Five 0</a></span>
        <span class="boxShot boxShot-lg"><a class="mdpLink" id="b070049805_1" onmouseover="dB(this)"><img class="boxShotImg" alt="Hawaii Five 0" src="thumbs/hawaii five 0.jpg"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70049805_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70049805_1" class="btn btn-40 watchlk btn-play btn-def"><span class="inr">Add</span></a></span>
        
    </div>

                    
                </div>
                <div class="agMovie agMovie-lulg">
        <span class="title"><b><font size="5"><a id="b060001807_0" class="mdpLink"> </a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>

<div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink"> </a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>
    
    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b070049805_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"><a id="m70049805_0" class="btn btn-40 addlk btn-ED-40 btn-rent btn-ED-rent btn-flyc"><span class="inr">Add</span></a><a id="m70049805_1" class="btn btn-40 watchlk btn-play btn-def" href="VideoPlaylist.html"><span class="inr">Submit</span></a></span>
    
    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>
    
    <div class="agMovie agMovie-lulg">
        <span class="title"><a id="b060001807_0" class="mdpLink"></a></span>
        <span class="btnWrap mltBtn mltBtn-s40"></span>
    </div>
            </div>
        
    
    

	<div class="control-b clearfix">
		



	</div>
</div>
    </div>
</div>
<div class="yui-b">
    
</div>
                </div>
            </div>
            
                <div id="ft">
                    <div id="footer" class="footer" style="text-align:center; padding-top: 1px;">
                        




<div class="ftr-grid">
    <span class="ftr-col">
 
    </span><span class="ftr-col">
     
        
    </span><span class="ftr-col">
            </span><span class="ftr-col">
        
        
    </span><span class="ftr-col">
        

</span>
</div>

                    </div>
                </div>
            
        </div>
    </div>
    
    <script type="text/javascript">
        window.name = '_nfk';
var PAGE_ROOT = 'http://www.netflix.com/';
var XML_ROOT = 'http://www.netflix.com/XML/U/';
var IMAGE_ROOT = 'http://cdn-0.nflximg.com/en_US/';
var BS_MOD = 10;
var cinematchEnabled = true;

        if (!window.netflix) { window.netflix = {}; }
netflix.constants = {"page":{"ibob":false,"quacInCloud":true,"cfn":"Blane","xsrf":"1300889113834.9WM5KYE61oZA9OWJEhxyoXVkxwg=","bobInCloud":true,"ibobTracker":2738756,"bobServer":"http://bobservice.netflix.com","quacServer":"http://movies.netflix.com","AUTOCOMPLETE":{"autoCompleteResultUrl":"http://movies.netflix.com","queueCloudUrl":"http://autocomplete.netflix.com/JSON/AutoCompleteSearch","beaconUrl":"http://beacon.netflix.com/img/BAQgBEAEasAPXA1sEGXwzqOEosw9gO8Dn9bIALw07QzZ0D63rnm3Mbn_ez_zHGZd5g6AKTD5u4v1JgeDrqVeJq8i5NMouB7WD9IG24SizWB9OVK29paAJMXsRnaIHiqLUBWUt61tbJYHhzwV5o1vn5jhmqW_hG3utVcQeztKhTaKRIhhRlAxwDTqsQ2Kzt2lfJWP1K7S00LBqyWKuEwFkyh04fzGhW67c4ozQaXTSNXRCf63g_4jIVP4pwARkfP5Pk0TdU51f_qET46MJUgsXCj4IRum_OQOHVdU-6JSnDZ3WwEYyxmKp2L3Uv2BdRoV63i8jx4AeACuTQLUNtrvi6Wm3BwssAmf3-YL0xlH7KUyMidjJMzMjnOuB405DvHYmx21WU4RIaEdJgeDrqVeJq8i5NMouB7WDElg_3jVkZ8_yXDLz-OxNADkPwqmf0XDx18T9vSMSh_k1qrEus-HfNs9md-A2WGpkwNgktTRbfgJA_2a-sEt-Hm_1hnmXZpN4TOsdOJwzatBm50sx3dQDqErQhFOoATasQzAyAzvC9SqVaFNvtIaLpKCnhighENNhpeRhIlHNTO8.","zIndex":"200","queryOptions":{"n":"10","loc":1},"sessionId":1.506051734E9,"autoCompleteUrl":"/JSON/AutoCompleteSearch","cloudUrl":"http://autocomplete.netflix.com/JSON/AutoCompleteSearch"},"ct":"1"},"global":{"QUEUE_UNDO":true,"CLOUD_ROOT_SECURE":"https://movies.netflix.com","XML_ROOT":"http://www.netflix.com/XML/U/","PAGE_ROOT_SECURE":"https://www.netflix.com/","FACEBOOK_APPID":"163114453728333","CLOUD_ROOT":"http://movies.netflix.com","QUEUE_ENABLE_REMOVE_ALL":true,"SilverlightLoggingVersions":["1.0","2.0.30226","2.0.30523","2.0.31005","2.0.40115","3.0","3.0.40307","3.0.40624","4.0.50401","4.0.50826"],"IMAGE_ROOT":"http://cdn-0.nflximg.com/en_US/","CINEMATCH_ENABLED":"true","PAGE_ROOT":"http://www.netflix.com/","CDN_COUNT":10}};

	    if (!window.netflix) { window.netflix = {}; }
netflix.DOMMovieInfo = {"60003242":{"prefixes":{"b0":1,"m":1},"pr":2.1},"26198935":{"prefixes":{"b0":1,"m":1},"pr":2.4},"17687717":{"prefixes":{"b0":1,"m":1},"pr":2.1},"60020780":{"prefixes":{"b0":1,"m":1},"pr":2.5},"60000909":{"prefixes":{"b0":1,"m":1},"pr":2.2},"60001807":{"prefixes":{"b0":1,"m":1},"pr":3.5},"70173924":{"ma":3.796,"prefixes":{"b0":1,"m":1}},"60024922":{"prefixes":{"b0":1,"m":1},"pr":2.3},"70003046":{"prefixes":{"b0":1,"m":1},"pr":2.3},"70144845":{"prefixes":{"b0":1,"m":1},"pr":2.4},"70061804":{"prefixes":{"b0":1,"m":1},"pr":2.7},"70124565":{"prefixes":{"b0":1,"m":1},"pr":1.3},"70152658":{"prefixes":{"b0":1,"m":1},"pr":1.7},"60034549":{"prefixes":{"b0":1,"m":1},"pr":2.4},"70124183":{"prefixes":{"b0":1,"m":1},"pr":2.2},"70144525":{"prefixes":{"b0":1,"m":1},"pr":1},"70110903":{"prefixes":{"b0":1,"m":1},"pr":1.9},"70165184":{"prefixes":{"b0":1,"m":1},"pr":2.1},"70113398":{"prefixes":{"b0":1,"m":1},"pr":1.5},"70053833":{"prefixes":{"b0":1,"m":1},"pr":2.3},"70144360":{"prefixes":{"b0":1,"m":1},"pr":2.5},"60022413":{"prefixes":{"b0":1,"m":1},"pr":2.4},"70135635":{"prefixes":{"b0":1,"m":1},"pr":1.3},"70125231":{"prefixes":{"b0":1,"m":1},"pr":2.3},"70169911":{"prefixes":{"b0":1,"m":1},"pr":2.6},"70141633":{"prefixes":{"b0":1,"m":1},"pr":1},"70117322":{"prefixes":{"b0":1,"m":1},"pr":2.3},"18958127":{"prefixes":{"b0":1,"m":1},"pr":2.4},"70130143":{"prefixes":{"b0":1,"m":1},"pr":1},"70049805":{"prefixes":{"b0":1,"m":1},"pr":1.8}};

    </script>
    <script type="text/javascript" src="http://cdn.nflxext.com/FilePackageGetter/sharedSystem/pkg-Common-ffffcfffefffc33e-1299847184-1-2.js?v=1"></script>

    <script type="text/javascript">
        

        (function($) {
        $(function() {

        var DEFAULT_FIELD_VALUE = "Movies, TV shows, actors, directors, genres",
        $searchForm = $("#global-search"),
        $searchField = $("#searchField");

        $searchForm.bind("submit", function() {
        var value = $searchField.val();
        return !(!value || value === DEFAULT_FIELD_VALUE);
        });

        $searchField.focus(function() {
        var $this = $(this);
        if ($this.val() === DEFAULT_FIELD_VALUE) {
        $this.removeClass("default").val("");
        }
        });

        $searchField.blur(function(){
        var $this = $(this);
        if (!$this.val()){
        $this.addClass("default").val(DEFAULT_FIELD_VALUE);
        }
        });

        var value = $searchField.val();
        if (!value){
        $searchField.val(DEFAULT_FIELD_VALUE);
        } else if (value != DEFAULT_FIELD_VALUE) {
        $searchField.removeClass("default");
        }

        $searchField.removeAttr("disabled");

        });
        })(jQuery);


 

        





       

    </script>

    

</body>
</html>



<!--  -->

