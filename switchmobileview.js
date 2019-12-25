/*
This file is part of the LBSGK Template

https://github.com/el-mejor/LBSGK

Copyright (c) 2019 Lars Becker (lars@lars-b.net)

Script to switch between mobile and desktop view 
*/

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