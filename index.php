<!-- 
LBSGK Template made for www.sg-kornburg.de V0.9

https://github.com/el-mejor/LBSGK

Designed to be used with WebsiteBaker (www.websitebaker.org)

If you like this template feel free to use it for your own project. 

-----------------

Necessary files:

style.css
mobilestyle.css
mobilemenu.png

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
		<meta name="description" content="<?php page_description(); ?>" />
		<meta name="keywords" content="<?php page_keywords(); ?>" />	
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat" />
		<link href="<?php echo TEMPLATE_DIR; ?>/style.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo TEMPLATE_DIR; ?>/mobilestyle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo WB_URL;?>/modules/event/frontend.css" rel="stylesheet"  type="text/css" />
		<link href="<?php echo WB_URL;?>/modules/news/frontend.css" rel="stylesheet"  type="text/css" />
		<link rel="shortcut icon" href="<?php echo WB_URL;?>/../favicon.ico" type="image/x-icon">
		
		<script type="text/javascript">	
			/* warn about obsolete browser */
			var $buoop = {} 
			$buoop.ol = window.onload; 
			
			window.onload=function(){ 
			 if ($buoop.ol) $buoop.ol(); 
			 var e = document.createElement("script"); 
			 e.setAttribute("type", "text/javascript"); 
			 e.setAttribute("src", "http://browser-update.org/update.js"); 
			 document.body.appendChild(e); 
			} 

			/* expand mobile menu */
		    	function showmenu() {		    
			       var e = document.getElementById('mobilemenu');
			       var bar = document.getElementById('mobilemenubar');
			       if(e.style.display == 'block') {
			          /*bar.classList.toggle('topbox-exp');*/
			          e.style.display = 'none';	
			          			  
			          bar.style.height = '68px';
			          bar.style.width = '68px';		        			          
			       } else {	
			          /*bar.classList.toggle('topbox-exp');	*/	          
			          e.style.display = 'block';
				  
			          bar.style.height = 'auto';
			          bar.style.width = '90%';			          
			       }
		    	}			
		</script>
	</head>
	<body>
		<div class="mainframe">
		
			<!-- main banner -->
			<!-- adapt links and images for your own project! -->
			
			<div class="mainbanner">
				<a href="http://newpage.sg-kornburg.de">
					<img class="mainbannerbackimg" src="<?php echo WB_URL;?>/media/graphics_homepage/head3.jpg"/>
					<div class="mainbannerheaderlogo">
						<img class="mainbannerlogo " src="<?php echo WB_URL;?>/media/graphics_homepage/kornburg.gif" align="left"/>
					</div>
					<div class="mainbannerheadertext">
						<hmain1><?php page_title('', '[WEBSITE_TITLE]'); ?></hmain1>
						<br/>
						<hmain2><?php page_header('', '[PAGE_HEADER]'); ?></hmain2>
					</div>	
				</a>
				
				<!-- website search -->	
				<div class="mainbannerheaderprev" style="right:10px;">
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
			</div>
			
			<!-- mobile only menu box -->
			<div class="topbox" id="mobilemenubar">	
				<a href="#" class="mobilemenuitem mobilemenu-item" onclick="showmenu()">
					<img src="<?php echo TEMPLATE_DIR; ?>/mobilemenu.png" style="margin:0 !important;height:64px !important;width:auto !important;"/>
				</a>			
				<div id="mobilemenu" class="mobilemainmenu">
					<?php show_menu2(1, SM2_ROOT, SM2_CURR+0, '','<span class="mlevmobile[level]"><a href="[url]" class="mobilemenuitem mobile[class]">[menu_title]</a></span><br/> ','','','');	 ?>				
				</div>
			</div>
			
			<!-- left box -->
			<div class="leftbox">
			
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
						<br/>
						<a href="<?php echo WB_URL;?>/admin/logout/index.php" target="_top">
							Logout
						</a>
					</p>	
					</div>			
				<?php }	?>
								
				<!-- info box commercials -->
				<!-- remove this box if you dont have anything to display or add your own content -->
				<!-- adapt links and images for your own project! -->
				<div id="werbung" class="infobox">				
					<p align="center">
						<a href="[wblink24]">
							<img class="advimg" src="<?php echo WB_URL;?>/media/graphics_sponsoring/reifen_kfz.jpg">
						</a>
	
						<a href="http://www.perdika-reisen.de" target="_blank">
							<img class="advimg" src="<?php echo WB_URL;?>/media/graphics_sponsoring/perdika.jpg">
						</a>
					</p>
				</div>
			</div>			
			
			<!-- content box -->
			<div class="contentbox">
				<?php page_content(1); ?>
			</div>
	
			<!-- footer -->
			<div class="footerbox">
				<?php page_footer(); ?>
			</div>
		</div>
	</body>
</html>

