/*
Manage Banner Image Rotation with crossover

This file is part of the LBSGK Template

https://github.com/el-mejor/LBSGK

Copyright (c) 2019 Lars Becker (lars@lars-b.net)
*/

/* ----------- Paramters ---------- */
/* Example json to config banner_change and start banner rot below */
/*
<script src="<?php echo TEMPLATE_DIR; ?>/banner_change.js">            
</script>
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
*/
/* -------------------------------- */

var _banRotImgIdx = 0;
var _banRotRotation = false;
var _banRotImgElmts = document.getElementsByClassName("mainbannerbackimg");
var _banRotConfig;

function StartBannerRot(bannerRotCfg) {
    _banRotConfig = bannerRotCfg;
    initiateBannerImg();
    startBannerRotation();
}
/* initiate first image - randomly or start with the first image in the array */
function initiateBannerImg() {
	if (_banRotConfig.randomStartImg) {
		_banRotImgIdx
            = Math.floor(Math.random() * _banRotConfig.images.length);
	} else {
		_banRotImgIdx
            = 0;
	}
	
	_banRotImgElmts[1].src = _banRotConfig.images[_banRotImgIdx].imgurl;
}

/* show explicit image */
function showImage(i) {
	_banRotRotation = false;
	_banRotImgElmts[1].src = _banRotConfig.images[i].imgurl;	
}

/* StartBannerRotation */
function startBannerRotation() {
	_banRotRotation = true;
	setInterval(rotateBannerImg, _banRotConfig.rotationInterval);
}

/* function to rotate img */
function rotateBannerImg() {	
	/* if rotation is switched off, leave */
	if (!_banRotRotation) {		
		return; 
	}	
	
	/* 1. Front Image isn't opaque and apparent, Back image has old content and is obscured by front image */
	/* 2. back and front image get the same content, front image is switched to opaque (hidden) */
	_banRotImgElmts[0].src = _banRotImgElmts[1].src;
	_banRotImgElmts[1].classList.toggle('hidden');

	/* 3. Wait until transition of front image is performed (wait at least the time, the transition needs!) */
	setTimeout(function() {	
		/* 4. determine next image - randomly or next one depending on settings */
		var nextimg = Math.floor(Math.random() * _banRotConfig.images.length);		

		if (nextimg == _banRotImgIdx
            || !_banRotConfig.random) {			
			_banRotImgIdx
                += 1;
			if (_banRotImgIdx
                > _banRotConfig.images.length - 1) {
				_banRotImgIdx
                    = 0;				
			}
		} else {
			_banRotImgIdx
                = nextimg;
		}		
	
		/* 5. Front image gets new content and opacity is removed, return to 1 in next round... */
		_banRotImgElmts[1].src = _banRotConfig.images[_banRotImgIdx].imgurl;
		_banRotImgElmts[1].classList.toggle('hidden');
	}, _banRotConfig.transitionTime);
}




