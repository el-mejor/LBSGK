/*
This file is part of the LBSGK Template

https://github.com/el-mejor/LBSGK

Copyright (c) 2019 Lars Becker (lars@lars-b.net)

Some helpers to enable design features and functions
*/

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