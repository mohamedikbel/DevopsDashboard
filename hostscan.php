<?php

/*

hostscan o.1

Requirements (php5):
php5-mysql - for mysql connections
php5-pgsql - for postgresql connections
libssh2-php - for ssh connections
php5-sybase - for mssql connections
php5-imap - for imap connections

Github: https://github.com/Smaash/hostscan/
Contact: smash[at]devilteam.pl

Happy hacking!
*/

ini_set('memory_limit','1000M');
set_time_limit(0);
error_reporting(0);

 $linux = TRUE;
 $users = array('root');
 $passes = array('', 'root', 'test', 'admin', 'zaq123wsx', '1234', '12345', '123456', 'password', 'Password123');
 $crawl = array('.htaccess', 'robots.txt', 'info.php', 'administrator/', 'admin/', 'cms/', 'server-status/', 'readme.html');
 $http = array('GET', 'OPTIONS', 'POST', 'HEAD', 'TRACE', 'PUT', 'DELETE');
 $ports = array(21, 22, 23, 25, 53, 80, 110, 143, 443, 465, 3690, 1433, 3306, 5432, 8080);
 $imap_users = array('postmaster', 'hostmaster', 'master', 'admin', 'administrator', 'test', 'root', 'demo');

if(isset($_GET['url'])) {
    echo gethostbyname($_GET['url']);
    
}

?>
<!DOCTYPE HTML>
<html>
<body onload="new Accordian('basic-hostscan',5,'header_highlight');">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hostscan</title>
<script type="text/javascript">
//by dezinerfolio.com
eval((function(){a=" {3document5ByIdOgvv=8E!&&E!K32}o=E;E;v=parseInt(2E=o;3vdheight=vHpx}Oofvgvv=v/d.h;dDv;dfilterKalpha(D+v*100H)Obz>0z#-1:z-v90E;%eE;z<x(x-z)#+1:v+z9x%Accordians,fl=5sByTagName(diva=[]d=S;QQ,Q)=={a.push}}xL((hc=h0,hc6==hcMc+;c;coverflowKhidden;c.h=g(cc.s=(s=8)?7:s;h.f=f;h.c=a;h.match4fHH))x=h}hC=(Rj=0;j<F.c;j++n=F.c[j];n=n0,ndMn6nMn+;s=dJt4sH)Rp=0;p<s;p++s[p]=KGsJce(p,1d=s.join( break}}clearn.tQ==FPg(n,0@ed+K GP@b}}}}})(S)}x!LxC()}}",b=49;while(b>=0)a=a.replace(new RegExp("#%2345689@CDEFGHJKLMOPQRS".charAt(b),"g"),("\\\042\044.style.displayfunctionInterval(.className.length.indexOf(-)(d)if(-content).id){.style.=none{d=;z=g;x=d.h;(d,;for(i=0;i<l;i++);}else{('+n+')',9)}.substr(=blockv=Math.round(/d.sv=(v<1)?zcleard.t)}} d.offsetHeightreturn (new RegExp(.getElement+-header=undefined;ofv)gn.t=set'.onclickopacity=dthis+d.f+.spli==null=(} n=dfor(l[i]".split(""))[b--]);return a})())
</script>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Devops Consulting</title>
        <!-- Favicon-->
         <style type="text/css">svg:not(:root).svg-inline--fa{overflow:visible}.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-lg{vertical-align:-.225em}.svg-inline--fa.fa-w-1{width:.0625em}.svg-inline--fa.fa-w-2{width:.125em}.svg-inline--fa.fa-w-3{width:.1875em}.svg-inline--fa.fa-w-4{width:.25em}.svg-inline--fa.fa-w-5{width:.3125em}.svg-inline--fa.fa-w-6{width:.375em}.svg-inline--fa.fa-w-7{width:.4375em}.svg-inline--fa.fa-w-8{width:.5em}.svg-inline--fa.fa-w-9{width:.5625em}.svg-inline--fa.fa-w-10{width:.625em}.svg-inline--fa.fa-w-11{width:.6875em}.svg-inline--fa.fa-w-12{width:.75em}.svg-inline--fa.fa-w-13{width:.8125em}.svg-inline--fa.fa-w-14{width:.875em}.svg-inline--fa.fa-w-15{width:.9375em}.svg-inline--fa.fa-w-16{width:1em}.svg-inline--fa.fa-w-17{width:1.0625em}.svg-inline--fa.fa-w-18{width:1.125em}.svg-inline--fa.fa-w-19{width:1.1875em}.svg-inline--fa.fa-w-20{width:1.25em}.svg-inline--fa.fa-pull-left{margin-right:.3em;width:auto}.svg-inline--fa.fa-pull-right{margin-left:.3em;width:auto}.svg-inline--fa.fa-border{height:1.5em}.svg-inline--fa.fa-li{width:2em}.svg-inline--fa.fa-fw{width:1.25em}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:#ff253a;border-radius:1em;-webkit-box-sizing:border-box;box-sizing:border-box;color:#fff;height:1.5em;line-height:1;max-width:5em;min-width:1.5em;overflow:hidden;padding:.25em;right:0;text-overflow:ellipsis;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:0;right:0;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:0;left:0;right:auto;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{right:0;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:0;right:auto;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top left;transform-origin:top left}.fa-lg{font-size:1.3333333333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-both,.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .fa-flip-both,:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;position:relative;width:2.5em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.svg-inline--fa.fa-stack-1x{height:1em;width:1.25em}.svg-inline--fa.fa-stack-2x{height:2em;width:2.5em}.fa-inverse{color:#fff}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}.svg-inline--fa .fa-primary{fill:var(--fa-primary-color,currentColor);opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa .fa-secondary{fill:var(--fa-secondary-color,currentColor);opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-primary{opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-secondary{opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa mask .fa-primary,.svg-inline--fa mask .fa-secondary{fill:#000}.fad.fa-inverse{color:#fff}</style><style type="text/css">svg:not(:root).svg-inline--fa{overflow:visible}.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-lg{vertical-align:-.225em}.svg-inline--fa.fa-w-1{width:.0625em}.svg-inline--fa.fa-w-2{width:.125em}.svg-inline--fa.fa-w-3{width:.1875em}.svg-inline--fa.fa-w-4{width:.25em}.svg-inline--fa.fa-w-5{width:.3125em}.svg-inline--fa.fa-w-6{width:.375em}.svg-inline--fa.fa-w-7{width:.4375em}.svg-inline--fa.fa-w-8{width:.5em}.svg-inline--fa.fa-w-9{width:.5625em}.svg-inline--fa.fa-w-10{width:.625em}.svg-inline--fa.fa-w-11{width:.6875em}.svg-inline--fa.fa-w-12{width:.75em}.svg-inline--fa.fa-w-13{width:.8125em}.svg-inline--fa.fa-w-14{width:.875em}.svg-inline--fa.fa-w-15{width:.9375em}.svg-inline--fa.fa-w-16{width:1em}.svg-inline--fa.fa-w-17{width:1.0625em}.svg-inline--fa.fa-w-18{width:1.125em}.svg-inline--fa.fa-w-19{width:1.1875em}.svg-inline--fa.fa-w-20{width:1.25em}.svg-inline--fa.fa-pull-left{margin-right:.3em;width:auto}.svg-inline--fa.fa-pull-right{margin-left:.3em;width:auto}.svg-inline--fa.fa-border{height:1.5em}.svg-inline--fa.fa-li{width:2em}.svg-inline--fa.fa-fw{width:1.25em}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:#ff253a;border-radius:1em;-webkit-box-sizing:border-box;box-sizing:border-box;color:#fff;height:1.5em;line-height:1;max-width:5em;min-width:1.5em;overflow:hidden;padding:.25em;right:0;text-overflow:ellipsis;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:0;right:0;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:0;left:0;right:auto;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{right:0;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:0;right:auto;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top left;transform-origin:top left}.fa-lg{font-size:1.3333333333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-both,.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .fa-flip-both,:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;position:relative;width:2.5em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.svg-inline--fa.fa-stack-1x{height:1em;width:1.25em}.svg-inline--fa.fa-stack-2x{height:2em;width:2.5em}.fa-inverse{color:#fff}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}.svg-inline--fa .fa-primary{fill:var(--fa-primary-color,currentColor);opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa .fa-secondary{fill:var(--fa-secondary-color,currentColor);opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-primary{opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-secondary{opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa mask .fa-primary,.svg-inline--fa mask .fa-secondary{fill:#000}.fad.fa-inverse{color:#fff}</style><style type="text/css">svg:not(:root).svg-inline--fa{overflow:visible}.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-lg{vertical-align:-.225em}.svg-inline--fa.fa-w-1{width:.0625em}.svg-inline--fa.fa-w-2{width:.125em}.svg-inline--fa.fa-w-3{width:.1875em}.svg-inline--fa.fa-w-4{width:.25em}.svg-inline--fa.fa-w-5{width:.3125em}.svg-inline--fa.fa-w-6{width:.375em}.svg-inline--fa.fa-w-7{width:.4375em}.svg-inline--fa.fa-w-8{width:.5em}.svg-inline--fa.fa-w-9{width:.5625em}.svg-inline--fa.fa-w-10{width:.625em}.svg-inline--fa.fa-w-11{width:.6875em}.svg-inline--fa.fa-w-12{width:.75em}.svg-inline--fa.fa-w-13{width:.8125em}.svg-inline--fa.fa-w-14{width:.875em}.svg-inline--fa.fa-w-15{width:.9375em}.svg-inline--fa.fa-w-16{width:1em}.svg-inline--fa.fa-w-17{width:1.0625em}.svg-inline--fa.fa-w-18{width:1.125em}.svg-inline--fa.fa-w-19{width:1.1875em}.svg-inline--fa.fa-w-20{width:1.25em}.svg-inline--fa.fa-pull-left{margin-right:.3em;width:auto}.svg-inline--fa.fa-pull-right{margin-left:.3em;width:auto}.svg-inline--fa.fa-border{height:1.5em}.svg-inline--fa.fa-li{width:2em}.svg-inline--fa.fa-fw{width:1.25em}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:#ff253a;border-radius:1em;-webkit-box-sizing:border-box;box-sizing:border-box;color:#fff;height:1.5em;line-height:1;max-width:5em;min-width:1.5em;overflow:hidden;padding:.25em;right:0;text-overflow:ellipsis;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:0;right:0;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:0;left:0;right:auto;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{right:0;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:0;right:auto;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top left;transform-origin:top left}.fa-lg{font-size:1.3333333333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-both,.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .fa-flip-both,:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;position:relative;width:2.5em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.svg-inline--fa.fa-stack-1x{height:1em;width:1.25em}.svg-inline--fa.fa-stack-2x{height:2em;width:2.5em}.fa-inverse{color:#fff}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}.svg-inline--fa .fa-primary{fill:var(--fa-primary-color,currentColor);opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa .fa-secondary{fill:var(--fa-secondary-color,currentColor);opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-primary{opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-secondary{opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa mask .fa-primary,.svg-inline--fa mask .fa-secondary{fill:#000}.fad.fa-inverse{color:#fff}</style><link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
        <!-- Font Awesome icons (free version)-->
        <script src="js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="css/fonts.css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="css/fonts.css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
<style>
html
{ }

*
{ margin: 0;
padding: 0;}

body
{ font-family: "trebuchet ms", arial, sans-serif;
font-size: .84em;
color: #282828;
line-height: 1.4em;
background: #585858;
width: 900px;
margin: 10px auto 0px auto;}
h1, h2, h3
{ font: normal 170% 'lucida sans', arial;
margin: 0 0 15px 0;
padding: 0 0 5px 0;
color: #000;}

h2
{ font-size: 130%;
padding: 9px 0 5px 0;
color: #383838;}

a, a:hover
{ outline: none;
text-decoration: none;
border-bottom: 1px dashed #000;
color: #000;}

p
{ line-height: 1.5em;
padding-bottom: 17px;}

.left
{ float: left;
width: auto;
margin-right: 10px;}

.right
{ float: right;
width: auto;
margin-left: 10px;}

.center
{ display: block;
text-align: center;
margin: 20px auto;}

#basic-hostscan
{ padding: 0px;
background: #404040;}

.hostscan_headings
{ padding: 10px 25px 10px 25px;
background: #606060;
color: #111;
border-bottom: 1px solid #484848;
cursor: pointer;
font-size: 120%;
position: relative;
z-index: 20;}

.hostscan_headings:hover
{ background: #505050;
color: #00FF00;}

.hostscan_child
{ padding: 25px;
background: #808080;}

.header_highlight
{ background: #484848;
color: #00FF00;}

#logo
{ width: 100%;
height: 78px;
background: transparent;
color: #444;
position: relative;
z-index: 10;
padding-top: 15px;}

#logo h1
{ font: normal 600% 'century gothic', arial;
padding: 0 0 0 20px;
margin: 0;
color: #383838;}

#footer p
{ letter-spacing: 0.1em;
text-transform: uppercase;
text-align: center;
padding: 20px;
color: #383838;
font-size: 90%;}

.form_settings
{ margin: 15px 0 0 0;}

.form_settings p
{ padding: 0 0 4px 0;}

.form_settings span
{ float: left;
width: 200px;
text-align: left;}
.form_settings input, .form_settings textarea
{ padding: 5px;
width: 299px;
font: 100% arial;
border: 1px solid #505050;
background: #787878;
color: #47433F;}
.form_settings .submit
{ font: 100% arial;
border: 0;
width: 99px;
margin: 0 0 0 212px;
height: 33px;
padding: 2px 0 3px 0;
cursor: pointer;
background: #686868;
color: #404040;}

</style>

</head>
   <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top navbar-shrink" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Host Scan </a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fas fa-bars"></i> --></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Icon Divider-->
                <h2>Scan Settings</h2>

<form action="" method="post">
<div class="form_settings">
<p><span>Start</span><input class="contact" type="text" name="start" value="<?= (empty($_POST['start'])?'127.0.0.1':htmlspecialchars($_POST['start'])) ?>" /></p>
<p><span>End</span><input class="contact" type="text" name="end" value="<?= (empty($_POST['end'])?'127.0.0.10':htmlspecialchars($_POST['end'])) ?>" /></p>
<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" value="Scan!" /></p>
</div>


<h2>Options</h2>

<div class="form_settings">
<p><span>FTP User</span><input class="contact" type="text" name="ftpuser" value="<?= (empty($_POST['ftpuser'])?'':htmlspecialchars($_POST['ftpuser'])) ?>" /></p>
<p><span>Nmap</span><input class="contact" type="text" name="ncmd" value="<?= (empty($_POST['ncmd'])?'-sV':htmlspecialchars($_POST['ncmd'])) ?>" /></p>
<p><span>SSH</span><input class="contact" type="checkbox" name="ssh" /></p>
<p><span>IMAP</span><input class="contact" type="checkbox" name="imap" /></p>
<p><span>DB's</span><input class="contact" type="checkbox" name="dbs" /></p>
<p><span>Deep Scan</span><input class="contact" type="checkbox" name="deep" /></p>
</div>
</form>
                <!-- Masthead Subheading-->
                
            </div>
        </header>
		 
		 
	
<?php if(isset($_POST['start']) && isset($_POST['end']) && ip2long($_POST['start']) !== false && ip2long($_POST['end']) !== false) { ?>

<div id="test1-header" class="hostscan_headings">General Info</div>
<div id="test1-content">
<div class="hostscan_child">

<?php

        echo '<p><b>Target</b> '.$_POST['start'].' - '.$_POST['end'].'</p>';
        echo '<p><b>Started at</b> '.date('H:i:s').'</p>';

          if(isset($_POST['deep']) && $linux == TRUE) {
            $ncmd = $_POST['ncmd'];
            echo '<p><b>Nmap</b> ('.$_POST['start'].')</p>';
            if($ex = exec('nmap '.
            	escapeshellcmd($ncmd).
            	' '.
            	$_POST['start'], $out)) {
            foreach(array_slice($out,1,count($out)) as $rec)
            {
                echo $rec.'<br />';
            }
            } else {
            echo 'Nmap not installed.<br />';
            }
            echo '<br /><p><b>Traceroute</b> ('.$_POST['start'].')</p>';
            if($trace = exec('traceroute '.
            	escapeshellcmd($_POST['start']),
            	$traceout)) {
            foreach(array_slice($traceout,1,count($traceout)) as $trejs)
            {
                echo $trejs.'<br />';
            }
            } else {
            echo 'Traceroute failed to start.<br />';
            }
          }

        ?>

</div>
</div>

<?php

    $i = 1;
    for ($ip = ip2long($_POST['start']); $ip<=ip2long($_POST['end']); $ip++) {
      $i++;
      echo '<div id="test'.$i.'-header" class="hostscan_headings">'.long2ip($ip).'</div>';
      echo '<div id="test'.$i.'-content">';
      echo '<div class="hostscan_child">';

      echo '<h2><a href="http://whois.domaintools.com/'.long2ip($ip).'">'.long2ip($ip).'</a> ('.gethostbyaddr(long2ip($ip)).')</h2>';
      

      //Ports

      echo '<p><b>Open ports:</b> ';
      foreach($ports as $port) {
        if($look = @fsockopen(long2ip($ip), $port, $err, $err_string, 1)) {
       echo $port.', ';
       fclose($look);
       }
      }
      echo '</p>';


      //FTP
         
      if($checkftp = @fsockopen(long2ip($ip), 21, $errno, $errstr, 5)){
        echo '<h2><b>&raquo;</b> FTP found on port 21. </h2>';
        $ftpconn = ftp_connect(long2ip($ip));
        if(ftp_login($ftpconn, 'anonymous', '')) {
            echo '<font color="#00FF00">Anonymous login allowed!</font><br />';
            echo '<p><b>General info</b></p>';
            echo '<p>Files in directory ('.ftp_pwd($ftpconn).') :</p> ';
            $ftpfiles = ftp_rawlist($ftpconn, ftp_pwd($ftpconn));
            foreach ($ftpfiles as $plik) {
                echo $plik.'<br />';
            }
            ftp_close($ftpconn);
        } else {
            echo '<p>FTP anonymous login not allowed.<p/>';
            ftp_close($ftpconn);
        }


      if($_POST['ftpuser'] !== '') {
        echo '<br /><p>Bruteforcing...</p>';
                foreach ($passes as $haslo){
                $ftpconn = ftp_connect(long2ip($ip));
                if(ftp_login($ftpconn, $_POST['ftpuser'], $haslo)) {
            echo '<font color="#00FF00">' . htmlspecialchars($_POST['ftpuser'], ENT_QUOTES) . ':' . $haslo . ' - Success!</font><br />';
            echo '<p>General info</p>';
            echo '<p>Current directory -</p> '.ftp_pwd($ftpconn).'<br />';
            echo '<p>Files in directory:</p> <br />';
            $ftpfiles = ftp_rawlist($ftpconn, ftp_pwd($ftpconn));
            foreach ($ftpfiles as $plik) {
            echo $plik.'<br />';
            }
             ftp_close($ftpconn);
             break;
                        } else {
             echo '<font color="#990000">' . htmlspecialchars($_POST['ftpuser'], ENT_QUOTES) . ':' . $haslo . '</font><br />';
                        }
                }
        } else {
            echo '<p>FTP user is not defined, wont bruteforce.</p>';
        }
            
    } else {
        echo '<h2><b>&raquo;</b> FTP seems not working (21).</h2>';
    }

    //SSH

    if(isset($_POST['ssh']) || isset($_POST['deep'])) {
      if($checkssh = fsockopen(long2ip($ip), 22, $errno, $errstr, 5)) {
        echo '<h2><b>&raquo;</b> SSH found on port 22. </h2>';
        echo '<br /><p>Bruteforcing...</p>';
        $sshconn = ssh2_connect(long2ip($ip), 22);

        foreach ($users as $uzytkownik){
        foreach ($passes as $haslo){

        if(ssh2_auth_password($sshconn, $uzytkownik, $haslo))
        {
        echo '<font color="#00FF00">' . $uzytkownik . ':' . $haslo . ' - Success!</font><br />';
        ssh2_exec($sshconn, 'exit');
          } else {
        echo '<font color="#990000">' . $uzytkownik . ':' . $haslo . '</font><br />';
          }
        }
        }
        } else {
        echo '<h2><b>&raquo;</b> SSH seems not working (22).</h2>';
      }
    }

    //HTTP


        if($checkwww = fsockopen(long2ip($ip), 80, $errno, $errstr, 5)) {

            echo '<h2><b>&raquo;</b> HTTP found on port 80. </h2>';
            $src = file_get_contents('http://'.long2ip($ip));
            echo '<br /><b>Response Headers</b><br />';
            foreach ($http_response_header as $header) {
                echo $header.'<br />';
            }
            echo '<br /><b>HTTP Methods</b><br />';
            foreach ($http as $metoda)
            {
         echo $metoda;
        $out = $metoda." / HTTP/1.1\r\n";
        $out .= "Host: ".long2ip($ip)."\r\n";
        $out .= "Connection: Close\r\n\r\n";
        fwrite($checkwww, $out);
        echo ' '.fgets($checkwww, 128).'<br />';
        fclose($checkwww);
        $checkwww = fsockopen(long2ip($ip), 80, $errno, $errstr, 5);
            }

    if(isset($_POST['deep'])) {
    echo '<br /><b>Title</b><br />';
    $url = 'http://'.long2ip($ip).'/';
    $fp = file_get_contents($url);

        if (preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches)) {
        $title = preg_replace('/\s+/', ' ', $title_matches[1]);
        $title = trim($title);
        echo $title.'<br />';
        } else {
            echo '...nothing here. <br />';
        }

    echo '<br /><b>Crawler</b><br />';
    foreach ($crawl as $url) {
    $urlnew = 'http://'.long2ip($ip).'/'.$url;
    $ch = curl_init($urlnew);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if($status == 200){
       echo $url.' ('.$status.')<br />';
    }
    curl_close($ch);
    }
    echo '<br />';
    }

            } else {
            echo '<h2><b>&raquo;</b> HTTP seems not working (80).</h2>';
            }


    //IMAP

    if(isset($_POST['imap']) || isset($_POST['deep'])) {
        if ($checkimap = fsockopen(long2ip($ip), 143, $errno, $errstr, 5)) {
        echo '<h2><b>&raquo;</b> IMAP found on port 143. </h2>';
        echo '<br /><p>Bruteforcing...</p>';
        foreach ($imap_users as $uzytkownik) {
            foreach ($passes as $haslo) {
                $mailbox = imap_open("{".long2ip($ip).":143}", $uzytkownik, $haslo);
                    if ($mailbox) {
        echo '<font color="#00FF00">' . $uzytkownik . ':' . $haslo . ' - Success!</font><br />';
                        imap_close($mailbox);
                    } else {
        echo '<font color="#990000">' . $uzytkownik . ':' . $haslo . '</font><br />';
                    }
            }

        }
            } else {
             echo '<h2><b>&raquo;</b> IMAP seems not working (143).</h2>';
            }
        }

        //DB's

       if(isset($_POST['dbs']) || isset($_POST['deep'])) {

        // MsSQL Testing

        if ($checkmssql = fsockopen(long2ip($ip), 1433, $errno, $errstr, 5)) {
        echo '<h2><b>&raquo;</b> MsSQL found on port 1433. </h2>';
        echo '<br /><p>Bruteforcing...</p>';
                $mssqluser = 'sa';
                foreach ($passes as $haslo) {
                    $mssqlconn = mssql_connect(long2ip($ip), $mssqluser, $haslo);
                        if($mssqlconn) {
        echo '<font color="#00FF00">' . $mssqluser . ':' . $haslo . ' - Success!</font><br />';
        pg_close($mssqlconn);
                        } else {
        echo '<font color="#990000">' . $mssqluser . ':' . $haslo . '</font><br />';
                        }
                }
                } else {
        echo '<h2><b>&raquo;</b> MsSQL seems not working (1433).</h2>';
      }

        // MySQL Testing

        $checksql = fsockopen(long2ip($ip), 3306, $errno, $errstr, 5);
            if($checksql){
        echo '<h2><b>&raquo;</b> MySQL found on port 3306. </h2>';
        echo '<br /><p>Bruteforcing...</p>';
        foreach ($users as $uzytkownik){
        foreach ($passes as $haslo){
        $conn = mysql_connect(long2ip($ip), $uzytkownik, $haslo);
            if ($conn) {
        echo '<font color="#00FF00">' . $uzytkownik . ':' . $haslo . ' - Success!</font><br />';
        
        $dbuser = mysql_query("SELECT USER();");
        $dbuzer = mysql_fetch_row($dbuser);
        $dbdb = mysql_query("SELECT DATABASE();");
        $dbd = mysql_fetch_row($dbdb);
        echo '<br /><b>General info</b><br />';
        echo 'MySql version - <a href="http://www.cvedetails.com/version-search.php?vendor=Mysql&product=Mysql&version='.mysql_get_client_info().'">'.mysql_get_client_info().'</a><br />';
        echo 'Host info - '.mysql_get_host_info().'<br />';
        echo 'Current user - '.$dbuzer[0].'<br />';

        echo '<br /><b>Databases</b><br />';
        $res = mysql_query("SHOW DATABASES");

    while ($row = mysql_fetch_assoc($res)) {
        echo $row['Database'] . "<br />";
    }

        mysql_close($conn);
        break;
            } else {
        echo '<font color="#990000">' . $uzytkownik . ':' . $haslo . '</font><br />';
        }
        }

    }
    } else {
        echo '<h2><b>&raquo;</b> MySQL seems not working (3306).</h2>';
    }

    // PostgreSQL Testing

    $checkpgsql = fsockopen(long2ip($ip), 5432, $errno, $errstr, 5);
            if($checkpgsql){
        echo '<h2><b>&raquo;</b> PostgreSQL found on port 5432. </h2>';
        echo '<br /><p>Bruteforcing...</p>';
            $pguser = 'postgres';
            foreach ($passes as $haslo) {
                $pgconn = pg_connect("host=".long2ip($ip)." user=".$pguser." password=".$haslo);
                if ($pgconn) {
         echo '<font color="#00FF00">' . $pguser . ':' . $haslo . ' - Success!</font><br />';
               echo '<br /><b>General info</b><br />';
               echo 'Version - '.pg_version($pgconn).'<br />';
               echo 'Host - '.pg_host($pgconn).'<br />';
               pg_close($pgconn);
                } else
                {
        echo '<font color="#990000">' . $pguser . ':' . $haslo . '</font><br />';
                }
            }

    } else {
        echo '<h2><b>&raquo;</b> PostgreSQL seems not working (5432).</h2>';
    }
}
      echo '</div></div>';
    }
  }

    ?>
</div>
        <footer class="footer text-center">
<p><?php $command="/sbin/ifconfig eth0 | grep 'inet addr:' | cut -d: -f2 | awk '{ print $1}'";
$localIP = exec ($command);
echo $localIP;
 ?></p>
</footer>
</div>
</body>
</html>
