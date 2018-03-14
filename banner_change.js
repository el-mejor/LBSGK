/*
This file is part of the LBSGK Template

Select the images for the banner rotation here.

https://github.com/el-mejor/LBSGK

Copyright (c) 2017 Lars Becker (lars@lars-b.net)
*/

var imgidx = 0;
var images = [
    "http://www.sg-kornburg.de/wb2/media/graphics-static-content/boeller_einzel.JPG",
    "http://www.sg-kornburg.de/wb2/media/graphics-static-content/boeller_reihe.JPG"
];

var elements = document.getElementsByClassName("mainbannerbackimg");

elements[0].src = images[images.length - 1];
elements[1].src = images[0];

function change() {

	
	elements[0].src = elements[1].src;

	elements[1].classList.toggle('hidden');

	setTimeout(function(){
		imgidx += 1;
		
		if (imgidx > images.length - 1) { 
			imgidx = 0;
		}
		
		elements[1].src = images[imgidx];

		elements[1].classList.toggle('hidden');
	}, 2000);
}

setInterval(change, 8000);


