<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Joyeux anniversaire Taqwa ❤️</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f8f5ff;
    font-family:'Segoe UI',sans-serif;
    overflow-x:hidden;
}

/* HERO */

.hero{
    background:linear-gradient(135deg,#6f42c1,#b084f5);
    color:white;
    text-align:center;
    padding:120px 20px;
}

.hero h1{
    font-size:60px;
    font-weight:bold;
}

.hero p{
    font-size:22px;
}

/* SECTION */

.section{
    padding:80px 20px;
}

/* MESSAGE BOX */

.message-box{
    background:white;
    border-radius:20px;
    padding:40px;
    box-shadow:0 15px 35px rgba(0,0,0,0.1);
}

/* GALERIE */

.gallery img{
    border-radius:15px;
    transition:0.4s;
}

.gallery img:hover{
    transform:scale(1.08);
}

/* COEURS */

.heart{
    position:fixed;
    bottom:-20px;
    color:#ff4da6;
    font-size:20px;
    animation:float 6s linear infinite;
}
/* ECRAN CADEAU */

#giftScreen{
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:linear-gradient(135deg,#6f42c1,#a56eff);
display:flex;
justify-content:center;
align-items:center;
z-index:9999;
color:white;
text-align:center;
}

.gift-box{
animation:fadeIn 2s;
}

.fade-photo{

opacity:0;
transform:translateY(40px);
transition:1s;

}

.fade-photo.show{

opacity:1;
transform:translateY(0);

}

@keyframes fadeIn{

from{
opacity:0;
transform:scale(0.8);
}

to{
opacity:1;
transform:scale(1);
}

}

@keyframes float{

0%{
transform:translateY(0);
opacity:1;
}

100%{
transform:translateY(-100vh);
opacity:0;
}

}

/* COUNTDOWN */

.countdown{
    font-size:40px;
    font-weight:bold;
    color:white;
    margin-top:20px;
}

/* FOOTER */

footer{
    background:#6f42c1;
    color:white;
    text-align:center;
    padding:20px;
}

</style>

</head>
<body>

    <!-- ECRAN SURPRISE -->
<div id="giftScreen">

    <div class="gift-box">

        <h1>💜</h1>

        <h2>Un message spécial pour toi Taqwa</h2>

        <button id="openGift" class="btn btn-light btn-lg mt-4">
            Ouvrir ton cadeau 🎁
        </button>

    </div>

</div>
@yield('content')

<footer>
Fait avec ❤️ pour Taqwa – 22 ans 🎂
</footer>


<!-- MUSIQUE -->
<audio id="music" loop>
<source src="https://cdn.pixabay.com/download/audio/2022/03/15/audio_115b9bce68.mp3?filename=romantic-love-112199.mp3">
</audio>


<!-- CONFETTIS -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<script>

window.onload = () => {

confetti({
particleCount:200,
spread:120,
origin:{y:0.6}
});

}

</script>


<!-- COEURS QUI MONTENT -->

<script>

function createHeart(){

const heart = document.createElement("div");

heart.classList.add("heart");

heart.innerHTML="💜";

heart.style.left=Math.random()*100+"vw";

heart.style.fontSize=Math.random()*20+10+"px";

document.body.appendChild(heart);

setTimeout(()=>{

heart.remove();

},6000);

}

setInterval(createHeart,500);

</script>

<script>

const button = document.getElementById("openGift");
const screen = document.getElementById("giftScreen");
const music = document.getElementById("music");

button.addEventListener("click", function(){

screen.style.display="none";

music.play();

confetti({
particleCount:300,
spread:140,
origin:{y:0.6}
});

});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>