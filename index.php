<!-- 
LBSGK Template made for www.sg-kornburg.de

https://github.com/el-mejor/LBSGK

Designed to be used with WebsiteBaker (www.websitebaker.org)

If you like this template feel free to use it for your own project. 

-----------------

Necessary files:

index.php
style.css
mobilestyle.css
currvers.css
mobilemenu.png
banner_change.js
switchmobileview.js
appearancehelpers.js
cookiehint.js

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
        <link href="<?php echo TEMPLATE_DIR; ?>/currvers.css" rel="stylesheet" type="text/css" />

        <meta name="description" content="<?php page_description(); ?>" />
        <meta name="keywords" content="<?php page_keywords(); ?>" />	
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat" />
        <link href="<?php echo WB_URL;?>/modules/event/frontend.css" rel="stylesheet"  type="text/css" />
        <link href="<?php echo WB_URL;?>/modules/news/frontend.css" rel="stylesheet"  type="text/css" />
        <link rel="shortcut icon" href="<?php echo WB_URL;?>/../favicon.ico" type="image/x-icon">
    </head>
    <body>
        <!-- cookie dingsbums -->		
        <link href="<?php echo TEMPLATE_DIR; ?>/cookiehint.css" rel="stylesheet" type="text/css" />
        <div id="cookiedingsbums" class="cookiedingsbums">
            <div>
                <div class="cookiedingsbumsText">
                    Um diese Webseite für Sie optimal darzustellen verwenden wir aus technischen Gründen Cookies. Wir verwenden keine
                    Cookies von Drittanbietern. <br>
                    <u>Generell haben Sie die Möglichkeit, die Verwendung von Cookies jederzeit in den Einstellungen Ihres Browsers zu deaktivieren.</u> <br>
                    Durch das Benutzen unserer Internetseite erklären Sie sich damit einverstanden, weitere Informationen erhalten Sie in der Datenschutzerklärung.
                </div>
                <div class="cookiedingsbumsButtons">
                    <a id="cookiedingsbumsAcceptCookies" class="cookiedingsbumsCloser cookiedingsbumsOK" href="javascript:void(0);">Einverstanden</a>
                    <a class="cookiedingsbumsCloser cookiedingsbumsDS" href="https://www.sg-kornburg.de/wb2/pages/datenschutzerklaerung.php">Datenschutzerklärung</a>
                </div>
            </div>  
        </div>
        <script src="<?php echo TEMPLATE_DIR; ?>/cookiehint.js"></script>
        
        <!-- swimming logo -->
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
                <img class="mobilemenubuttonimg" src="<?php echo TEMPLATE_DIR; ?>/graphics/mobilemenu.png"/>
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
                
                <!-- COVID19 HINWEIS -->                
                <style>
                    .covidBox {
                        border: 5px solid red; 
                        border-left: 5px solid red; 
                        border-radius: 3px; 
                        padding: 20px; 
                        background-color: rgb(210, 210, 210);
                    }
                    
                    .covidTable {                        
                        
                    }
                    
                    .covidTableCell {                        
                        padding-right: 2em;
                    }
                    
                    .coronaDateIcon {
                        height: 1em;
                        border: none;
                        box-shadow: none;                        
                        vertical-align: middle;
                    }
                </style>
                <div class="covidBox">                      
                    <p><strong>Aufgrund der aktuellen Verordnungen der bayer. Staatsregierung zur Eindämmung des neuartigen Coronaviruses (COVID-19) ist das Schützenhaus bis auf weiteres geschlossen und alle Vereinsaktivitäten ruhen:</strong></p>

                    <ul>
                        <li>Kein Schankbetrieb</li>                        
                        <li>Kein Betrieb auf den Schießständen innen sowie außen</li>
                        <li>Alle Wettkämpfe (RWK) und Meisterschaften sind ausgesetzt</li>
                    </ul>

                    <p><strong>Folgende <a href="[wblink7]">Termine</a> sind betroffen (Stand 30.03.2020):</strong></p>
                    
                    <table class="covidTable">                        
                        <tr>
                            <td class="covidTableCell">04.04.2020</td>
                            <td class="covidTableCell">Frühjahrsarbeitsdienst</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="covidTableCell"><img class="coronaDateIcon" src="<?php echo TEMPLATE_DIR; ?>/graphics/cancel.gif">abgesagt</td>
                        </tr>
                        <tr>
                            <td class="covidTableCell">11.04.2020</td>
                            <td class="covidTableCell">Böllern Nürnberger Frühlingsfest</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="covidTableCell"><img class="coronaDateIcon" src="<?php echo TEMPLATE_DIR; ?>/graphics/cancel.gif">abgesagt</td>
                        </tr>
                        <tr>
                            <td class="covidTableCell">25.04.2020</td>
                            <td class="covidTableCell">Böllern Spalter Brauereifest</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="covidTableCell"><img class="coronaDateIcon" src="<?php echo TEMPLATE_DIR; ?>/graphics/cancel.gif">abgesagt</td>
                        </tr>
                        <tr>
                            <td class="covidTableCell">10.05.2020</td>
                            <td class="covidTableCell">Böllern Festzug Gauschießen Roth</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="covidTableCell"><img class="coronaDateIcon" src="<?php echo TEMPLATE_DIR; ?>/graphics/cancel.gif">abgesagt</td>
                        </tr>
                    </table>            

                    <p><em>Weitere Informationen zur&nbsp;Absage oder Verschiebung von Wettkämpfen (RWK), Meisterschaften und sonstigen Terminen und Veranstaltungen auf Verbandsebene&nbsp;erhalten Sie bei den entsprechenden Verbänden (s.u.)</em></p>
                </div>
                

                <p>&nbsp;</p>

                <!-- ENDE HINWEIS -->
                
                <?php page_content(1); ?>	
            </div>

            <!-- unesco -->	
            <p class="mobilonly" style="text-align:center;">
                <a href="https://www.unesco.de/kultur-und-natur/immaterielles-kulturerbe/immaterielles-kulturerbe-deutschland/bundesweites-30" target="_blank">
                <img class="advimg unesco" style="padding:15px;box-shadow:none;border:none;" src="<?php echo WB_URL;?>/media/graphics-static-content/IK_logo_cmyk.jpg"/>
                </a>
            </p>
        </div>		

        <!-- insert footer -->						
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

            if(document.cookie.indexOf('forceDesktopView=1') != -1) {
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
		
        <!-- design and function helpers -->
        <script src="<?php echo TEMPLATE_DIR; ?>/appearancehelpers.js"></script>
        
        <!-- script to rotate banner image -->	
        <script src="<?php echo TEMPLATE_DIR; ?>/banner_change.js"></script>
        <!-- config and start banner rotation -->	
        <script>
            var bannerRotCfg = {
                "random": false,
                "randomStartImg": true,
                "rotationInterval": 12000,
                "transitionTime": 3000,
                "images": [
                    {
                        "imgurl": "https://www.sg-kornburg.de/wb2/media/graphics-static-content/bogen_comm.jpg"  
                    },
                    {
                        "imgurl": "https://www.sg-kornburg.de/wb2/media/graphics-static-content/boeller_reihe_salut_2.JPG"  
                    },
                    {
                        "imgurl": "https://www.sg-kornburg.de/wb2/media/graphics-static-content/SIZ_banner.JPG" 
                    },
                    {
                        "imgurl": "https://www.sg-kornburg.de/wb2/media/graphics-static-content/scheiben_banner.JPG"  
                    }                
                ]            
            };
            StartBannerRot(bannerRotCfg);
        </script>
    </body>
</html>

