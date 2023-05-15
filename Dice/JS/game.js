function reloadPage() {
    location.href='game.php';
}

function rezultati() {
    location.href='rezultati.php';
}

setTimeout(function() {
    document.getElementById('sestevek1').style.opacity = "1";}, 1250);
setTimeout(function() {
    document.getElementById('sestevek2').style.opacity = "1";}, 1250);
setTimeout(function() {
    document.getElementById('sestevek3').style.opacity = "1";}, 1250);
setTimeout(function() {
    document.getElementById('sestevek4').style.opacity = "1";}, 1250);
setTimeout(function() {
    document.getElementById('sestevek5').style.opacity = "1";}, 1250);

function animkocke1() {
    setTimeout("document.getElementById('anim1').style.display = 'none'; document.getElementById('kocke1').style.display = 'inline-block';",1200);
}
function animkocke2() {
    setTimeout("document.getElementById('anim2').style.display = 'none'; document.getElementById('kocke2').style.display = 'inline-block';",2200);
}
function animkocke3() {
    setTimeout("document.getElementById('anim3').style.display = 'none'; document.getElementById('kocke3').style.display = 'inline-block';",3200);
}
function animkocke4() {
    setTimeout("document.getElementById('anim4').style.display = 'none'; document.getElementById('kocke4').style.display = 'inline-block';",4200);
}
function animkocke5() {
    setTimeout("document.getElementById('anim5').style.display = 'none'; document.getElementById('kocke5').style.display = 'inline-block';",5200);
}
animkocke1();
animkocke2();
animkocke3();
animkocke4();
animkocke5();