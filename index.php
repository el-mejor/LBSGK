<!-- 
LBSGK Template made for www.sg-kornburg.de V3.1

Adapt the images of the banner rotation in banner_change.js.

https://github.com/el-mejor/LBSGK

Designed to be used with WebsiteBaker (www.websitebaker.org)

If you like this template feel free to use it for your own project. 

-----------------

Necessary files:

index.php
style.css
mobilestyle.css
mobilemenu.png
banner_change.js

-----------------

MIT License

Copyright (c) 2017 Lars Becker (lars@lars-b.net)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and 
to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the 
Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO 
THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE 
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS 
IN THE SOFTWARE.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- prevent from loading empty -->
<?php
if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title><?php page_title(); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php if(defined('DEFAULT_CHARSET')) { echo DEFAULT_CHARSET; } else { echo 'utf-8'; }?>" />
		
		<link id="mobilestylelink" href="<?php echo TEMPLATE_DIR; ?>/mobilestyle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo TEMPLATE_DIR; ?>/style.css" rel="stylesheet" type="text/css" />

		<meta name="description" content="<?php page_description(); ?>" />
		<meta name="keywords" content="<?php page_keywords(); ?>" />	
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat" />
		<link href="<?php echo WB_URL;?>/modules/event/frontend.css" rel="stylesheet"  type="text/css" />
		<link href="<?php echo WB_URL;?>/modules/news/frontend.css" rel="stylesheet"  type="text/css" />
		<link rel="shortcut icon" href="<?php echo WB_URL;?>/../favicon.ico" type="image/x-icon">
	</head>
	<body>
		<!-- cookie dingsbums -->		
		<div id="cookiedingsbums" class="cookiedingsbums">
			<div>
				  <div class="cookiedingsbumsText">
				  Um diese Webseite für Sie optimal darzustellen verwenden wir aus technischen Gründen Cookies. Wir verwenden keine
				  Cookies von Drittanbietern. <br>
				  <u>Generell haben Sie die Möglichkeit, die Verwendung von Cookies jederzeit in den Einstellungen Ihres Browsers zu deaktivieren.</u> <br>
				  Durch das Benutzen unserer Internetseite erklären Sie sich damit einverstanden, weitere Informationen erhalten Sie in der Datenschutzerklärung.</div>
				  <div class="cookiedingsbumsButtons">
				  <a id="cookiedingsbumsAcceptCookies" class="cookiedingsbumsCloser cookiedingsbumsOK" href="javascript:void(0);">Einverstanden</a>
				  <a class="cookiedingsbumsCloser cookiedingsbumsDS" href="https://www.sg-kornburg.de/wb2/pages/datenschutzerklaerung.php">Datenschutzerklärung</a>
				  </div>
			</div>  
		</div>
		<script> 
            document.getElementById('cookiedingsbumsAcceptCookies').addEventListener('click', function() {
			 	var now = new Date();
				now.setTime(now.getTime() + 28 * 24 * 3600 * 1000);
			 	document.cookie = 'hidecookiedingsbums=1; expires=' + now.toUTCString() + '; path=/';
			 	document.getElementById('cookiedingsbums').style.display = 'none';
			 });
			
			 if(document.cookie.indexOf('hidecookiedingsbums=1') != -1){
			 
			 document.getElementById('cookiedingsbums').style.display = 'none';
			 }
			 else{	
			 document.getElementById('cookiedingsbumsCloser').style.display = 'block';
			 }
			
		</script>
		
		
		<div class="swimlogocontainer" id="swimlogo">
			<div class="mainlogotria notmobile" id="mainlogotria">
			</div>
			<div class="swimlogo" style="">

				<a href="https://www.sg-kornburg.de">
					<img class="mainlogo" id="scrolldownmainlogo" src="<?php echo WB_URL;?>/media/graphics_homepage/kornburg.gif"/>
				</a>
			</div>
		</div>
		
		<!-- main banner -->			
		<div class="mainbanner" id="mainbanner">
		
				<img class="mainbannerbackimg"/>
				<img class="mainbannerbackimg"/>
				<div class="mainbannerheaderlogo">
					<a href="https://www.sg-kornburg.de">
						<img class="mainbannerlogo " src="<?php echo WB_URL;?>/media/graphics_homepage/kornburg.gif" align="left"/>
					</a>
				</div>
				<div class="mainbannerheadertext">						
					<hmain1><?php page_title('', '[WEBSITE_TITLE]'); ?></hmain1>
					<hmain2><?php page_header('', '[PAGE_HEADER]'); ?></hmain2>
				</div>					
			
			<!-- website search -->	
			<div class="mainbannerheaderprev">
				<div style="border-bottom:1px solid gray;padding-bottom:2px;">
					<?php if(SHOW_SEARCH) { ?>
						<!--<?php echo $TEXT['SEARCH']; ?> -->						
							<form name="search" action="<?php echo WB_URL; ?>/search/index.php" method="get">
								<input type="hidden" name="referrer" value="<?php
									echo defined('REFERRER_ID') ? REFERRER_ID : PAGE_ID; ?>" />
								<input type="text" name="string" style="width: 100px;" />
								<input type="submit" name="submit" value="<?php echo $TEXT['SEARCH']; ?>" style="width: 50px;" />
							</form>						
					<?php } ?>
					</div>
				<p style="text-align:right;margin:0;padding:0;font-size:0.9em;">
					<a class="contactbannerlink" href="[wblink15]">
						<span>Kontakt</span>
					</a>
				</p>
			</div>			
		</div>
			<!-- mobile only menu box -->
			<div class="topbox" id="mobilemenubar">	
				<a href="#" class="mobilemenuitem mobilemenu-item" id="mobilemenubutton">
					<img class="mobilemenubuttonimg" src="<?php echo TEMPLATE_DIR; ?>/mobilemenu.png"/>
				</a>			
				<div id="mobilemenu" class="mobilemainmenu">
					<?php show_menu2(1, SM2_ROOT, SM2_CURR+0, '','<span class="mlevmobile[level]"><a href="[url]" class="mobilemenuitem mobile[class]">[menu_title]</a></span><br/> ','','','');	 ?>				
					<?php if(SHOW_SEARCH) { ?>
						<!--<?php echo $TEXT['SEARCH']; ?> -->						
						<span>
							<form name="search" action="<?php echo WB_URL; ?>/search/index.php" method="get">
								<input type="hidden" name="referrer" value="<?php
									echo defined('REFERRER_ID') ? REFERRER_ID : PAGE_ID; ?>" />
								<input type="text" name="string" style="width: 60%;" />
								<input type="submit" name="submit" value="<?php echo $TEXT['SEARCH']; ?>" style="width: 30%;" />
							</form>						
						</span>
					<?php } ?>
				</div>
			</div>
		
		<div class="mainframe">

			
			<!-- left box -->
			<div class="leftbox">
				<!-- unesco -->	
				<div class="menuimg">
					<a href="https://www.unesco.de/kultur-und-natur/immaterielles-kulturerbe/immaterielles-kulturerbe-deutschland/bundesweites-30" target="_blank">
						<img style="width:80%;height:auto;box-shadow:none;border:none;border-radius:0" src="<?php echo WB_URL;?>/media/graphics-static-content/IK_logo_cmyk.png"/>
					</a>					
				</div>
				<!-- menu box -->
				<div class="menubox">

					
				
					<table class="mainmenu">
					<tbody>
						<?php show_menu2(1, SM2_ROOT, SM2_CURR+0, '','<tr><td class="mlev[level]"><a href="[url]" class="menu-item [class]">[menu_title]</a></td></tr>','','','');	 ?>				
					</tbody>
					</table>
				</div>	
				
				
				
				<!-- info box admin -->	
				<!-- Shows some admin related links to the backend when logged in. -->
				<!-- Remove the box if you dont want this to be displayed -->			
				<?php if($wb->is_authenticated()) { ?>	
					<div class="infobox" style="background-color:gold !important">						
					<p>
						<a href="<?php echo WB_URL;?>/admin/pages/modify.php?page_id=<?php echo PAGE_ID; ?>" target="_blank">
							Seite bearbeiten
						</a>
						<br/>
						<a href="<?php echo WB_URL;?>/admin/start/index.php" target="_blank">
							Verwaltung
						</a>
					</p>	
					</div>
								
				<?php }	?>
				

				
	
				
				
			</div>			
			
			<!-- content box -->
			
			
			
			<div class="contentbox">
			
				<p style='text-align:right;'>
					<a href="javascript:void(0);" id="switchmobile">Mobile Ansicht</a>
					<a href="javascript:void(0);" id="switchdesktop">Desktop Ansicht</a>	
				</p>				

				
			
				<?php page_content(1); ?>	
	
				
			</div>
			
			<!-- unesco -->	
			<p class="mobilonly" style="text-align:center;">
				<a href="https://www.unesco.de/kultur-und-natur/immaterielles-kulturerbe/immaterielles-kulturerbe-deutschland/bundesweites-30" target="_blank">
					<img class="advimg unesco" style="padding:15px;box-shadow:none;border:none;" src="<?php echo WB_URL;?>/media/graphics-static-content/IK_logo_cmyk.jpg"/>
				</a>
			</p>
					
			
			
			
			
		</div>		
		
		<!-- footer -->						
			<?php page_footer(); ?>
		
		<!-- script to switch between mobile and desktop view -->
		
		<script>
		document.getElementById('switchmobile').addEventListener('click', function() {
			document.cookie = 'forceDesktopView=1;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/';
			showMobile();
		});
		
		document.getElementById('switchdesktop').addEventListener('click', function() {
			document.cookie = 'forceDesktopView=1;path=/';
			showDesktop();
		});
		
		if(document.cookie.indexOf('forceDesktopView=1') != -1){
			showDesktop();
		} else {
			showMobile();
		}
		
		function showMobile() {
			document.getElementById('mobilestylelink').setAttribute('href', '<?php echo TEMPLATE_DIR; ?>/mobilestyle.css');
			document.getElementById('switchmobile').style.display = 'none';			
		}
		
		function showDesktop() {
			document.getElementById('mobilestylelink').setAttribute('href', '<?php echo TEMPLATE_DIR; ?>/empty.css');			
			document.getElementById('switchdesktop').style.display = 'none';
			document.getElementById('switchmobile').style.display = 'block';
		}
		</script>
		
		
		<!-- script to rotate banner image -->		
		<script async src="<?php echo TEMPLATE_DIR; ?>/banner_change.js"></script>
		
		<script>
		/* show / hide mobile menu */
		document.getElementById('mobilemenubutton').addEventListener('click', function(){		    
		       var e = document.getElementById('mobilemenu');
		       var bar = document.getElementById('mobilemenubar');
		       if(e.style.display == 'block') {
		          e.style.display = 'none';		          			  
		          bar.style.height = 'initial';        			          
		       } else {	
		          e.style.display = 'block';
			  
		          bar.style.height = 'auto';
		       }
	    	});
	
		/* script to hide content when news are shown */
		var news = document.getElementsByClassName('post-header');	
		if (news.length > 0) {			
			var elements = document.getElementsByClassName('m_wysiwyg');
			for (i = 0; i < elements.length; i++) {
				if (!elements[i].classList.contains('m_news')) {
					elements[i].classList.toggle('hidesection');
				}
			}
		}
		
		/* script to fade in logo on scrolling */
		document.getElementsByTagName('body')[0].onscroll = function() {
			var _h = document.getElementById('mainbanner').clientHeight;
			var _posh = document.getElementById('mainbanner').getBoundingClientRect().top;
			var _o = (-_posh - _h) / (50);
			if ( _o < 0 ) { 
				_o = 0; 
			} 
			if ( _o > 1.0 ) { 
				_o = 1.0; 
			}
			document.getElementById('swimlogo').style.opacity = _o;
		};
		
		/* script to setup animation delay on menu items */
		var menuitems = document.getElementsByClassName('mlev0');
		for (i = 0; i < menuitems.length; i++) {
			menuitems[i].setAttribute("style", "animation-delay:" + (i * 20) + "ms");
		}
		</script>
	</body>
</html>

