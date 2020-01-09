<?php

include('../inc/header.php');

?>

<script>

var sun = new Image();
var moon = new Image();
var earth = new Image();
function init(){
  sun.src = 'https://mdn.mozillademos.org/files/1456/Canvas_sun.png';
  moon.src = 'https://mdn.mozillademos.org/files/1443/Canvas_moon.png';
  earth.src = 'https://mdn.mozillademos.org/files/1429/Canvas_earth.png';
  window.requestAnimationFrame(draw);
}

function draw() {
  var ctx = document.getElementById('canvas').getContext('2d');

  ctx.globalCompositeOperation = 'destination-over';
  ctx.clearRect(0,0,400,400); // effacer le canvas

  ctx.fillStyle = 'rgba(0,0,0,0.4)';
  ctx.strokeStyle = 'rgba(0,153,255,0.4)';
  ctx.save();
  ctx.translate(150,150);

  // Terre
  var time = new Date();
  ctx.rotate( ((2*Math.PI)/60)*time.getSeconds() + ((2*Math.PI)/60000)*time.getMilliseconds() );
  ctx.translate(105,0);
  ctx.fillRect(0,-12,50,24); // Ombre
  ctx.drawImage(earth,-12,-12);

  // Lune
  ctx.save();
  ctx.rotate( ((2*Math.PI)/6)*time.getSeconds() + ((2*Math.PI)/6000)*time.getMilliseconds() );
  ctx.translate(0,28.5);
  ctx.drawImage(moon,-3.5,-3.5);
  ctx.restore();

  ctx.restore();
  
  ctx.beginPath();
  ctx.arc(150,150,105,0,Math.PI*2,false); // Orbite terrestre
  ctx.stroke();
 
  ctx.drawImage(sun,0,0,300,300);

  window.requestAnimationFrame(draw);
}

init();

</script>

<div class="presentation">
<p>Bienvenue</p> 
<table>
   
      " Voici mon PortFolio de BTS SIO (Services informatique aux Organisations),<br><br>
Ici se trouve les différents languages de code que je maitrise ainsi que les logiciels<br><br>
que j'ai utilisé en entreprise ou à mon centre de formation."<br>
<br><br>
------------------------------------------------------------------- <br>
----------------------------------------------------<br>
------------------------------------<br>
---------------------<br>
-----------<br>
----<br>
-
</table>
<br><br><br><br><br><br>
Mon stage s'est déroulé en alternance dans la société :
<br><br>
<a href="http://www.managementinformatique.com/NUKE/index.php">
<img src="../img/management.png" name="management">
 </a>
 <br><br>
 C'est une société de services crée en 2003, contenant moins d'une dizaine d'employés <br>( Consultant, Expert, Chef de projet, Devellopeur, Formateur) :<br><br>
 <img src="../img/bosap.jpg" name="bosap" width="230" height="130">
 <img src="../img/cognos.png" name="cognos" width="230" height="130">
 <img src="../img/Logo_IBM-Cognos.jpg" name="Logo_IBM-Cognos" width="230" height="130">
 <img src="../img/sap.png" name="sap" width="230" height="130">
 <br><br>
 Management Informatique répond à des missions plus ou moins longue,
 en sélectionnant l'expert le mieux adapté dans ce domaine.<br>
En 2019, l'entreprise a travailler pour plusieurs clients : <br><br>
  <img src="../img/hermes.jpg" name="hermes" width="230" height="130">
   <img src="../img/sncf.png" name="sncf" width="230" height="130">
    <img src="../img/ratp.png" name="ratp" width="230" height="130">
	 <img src="../img/sanofi.png" name="sanofi" width="230" height="130">


 <br><br>
 <br><br>
 Récemment l'entreprise a évoluer en s'orientant dans des domaines innovants : Big Data - Machine Learning, I.A ..
       
</div>


<canvas id="" width="300" height="300">
    TESST
</canvas>

