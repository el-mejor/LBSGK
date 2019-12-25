/*
Manage Banner Image Rotation with crossover

This file is part of the LBSGK Template

https://github.com/el-mejor/LBSGK

Copyright (c) 2017 Lars Becker (lars@lars-b.net)
*/

/* ----------- Paramters ---------- */
/* images to show */
var images = [
    "https://www.sg-kornburg.de/wb2/media/graphics-static-content/bogen_comm.jpg",		    
    "https://www.sg-kornburg.de/wb2/media/graphics-static-content/boeller_reihe_salut_2.JPG",
    "https://www.sg-kornburg.de/wb2/media/graphics-static-content/SIZ_banner.JPG",
    "https://www.sg-kornburg.de/wb2/media/graphics-static-content/scheiben_banner.JPG"
];			

/* random sequence */
var random = false;

/* choose initial image randomly or use 1st one */
var randomStartImg = true;

/* Time to show next image */
var rotationInterval = 	12000;

/* time to crossfade the images (given in the css!) */ 
var transitionTime = 3000; 

/* -------------------------------- */

var imgidx = 0;
var rotation = false;
var imgElements = document.getElementsByClassName("mainbannerbackimg");

initiateBannerImg();
startBannerRotation();

/* initiate first image - randomly or start with the first image in the array */
function initiateBannerImg() {
	if (randomStartImg) {
		imgidx = Math.floor(Math.random() * images.length);
	} else {
		imgidx = 0;
	}
	
	imgElements[1].src = images[imgidx];
}

/* show explicit image */
function showImage(i) {
	rotation = false;
	imgElements[1].src = images[i];	
}

/* StartBannerRotation */
function startBannerRotation() {
	rotation = true;
	setInterval(rotateBannerImg, rotationInterval);
}

/* function to rotate img */
function rotateBannerImg() {	
	/* if rotation is switched off, leave */
	if (!rotation) {		
		return; 
	}	
	
	/* 1. Front Image isn't opaque and apparent, Back image has old content and is obscured by front image */
	/* 2. back and front image get the same content, front image is switched to opaque (hidden) */
	imgElements[0].src = imgElements[1].src;
	imgElements[1].classList.toggle('hidden');

	/* 3. Wait until transition of front image is performed (wait at least the time, the transition needs!) */
	setTimeout(function() {	
		/* 4. determine next image - randomly or next one depending on settings */
		var nextimg = Math.floor(Math.random() * images.length);		

		if (nextimg == imgidx || !random) {			
			imgidx += 1;
			if (imgidx > images.length - 1) {
				imgidx = 0;				
			}
		} else {
			imgidx = nextimg;
		}		
	
		/* 5. Front image gets new content and opacity is removed, return to 1 in next round... */
		imgElements[1].src = images[imgidx];
		imgElements[1].classList.toggle('hidden');
	}, transitionTime);
}




