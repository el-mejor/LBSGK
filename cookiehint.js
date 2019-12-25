/*
This file is part of the LBSGK Template

https://github.com/el-mejor/LBSGK

Copyright (c) 2019 Lars Becker (lars@lars-b.net)

Cookie hint
*/

document.getElementById('cookiedingsbumsAcceptCookies').addEventListener('click', function() {
    var now = new Date();
    now.setTime(now.getTime() + 28 * 24 * 3600 * 1000);
    document.cookie = 'hidecookiedingsbums=1; expires=' + now.toUTCString() + '; path=/';
    document.getElementById('cookiedingsbums').style.display = 'none';
    });

    if(document.cookie.indexOf('hidecookiedingsbums=1') != -1){

    document.getElementById('cookiedingsbums').style.display = 'none';
    } else {	
    document.getElementById('cookiedingsbumsCloser').style.display = 'block';
}