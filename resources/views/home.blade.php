@extends('layout')

@section('content')

<!-- HERO -->
<section class="hero">

<h1>Joyeux anniversaire Taqwa 🎂</h1>

<p>Une personne extraordinaire fête ses 22 ans aujourd’hui 💜</p>

<div id="countdown" class="countdown"></div>

</section>


<!-- MESSAGE -->
<section class="section">

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="message-box text-center">

<h2 class="mb-4">Un message pour toi 💌</h2>

<p id="loveText" class="fs-5"></p>

Taqwa,

Depuis que tu es dans ma vie, tout est plus beau.  
Ton sourire, ta gentillesse et ta présence rendent chaque jour spécial.

Aujourd’hui tu fêtes tes **22 ans**, et je voulais te faire quelque chose d’unique pour te rappeler combien tu comptes pour moi.

Je te souhaite une année remplie de bonheur, de réussite et d’amour.

Joyeux anniversaire ❤️

</p>

</div>

</div>

</div>

</div>

</section>


<!-- GALERIE -->
<section class="section gallery">

<div class="container text-center">

<h2 class="mb-5">Nos souvenirs 📸</h2>

<div class="row g-4">

<div class="col-md-4">
<img src="/images/taq3.jpeg" class="img-fluid">
</div>

<div class="col-md-4">
<img src="/images/taq1.jpeg" class="img-fluid">
</div>

<div class="col-md-4">
<img src="/images/taq2.jpeg" class="img-fluid">
</div>

<div class="col-md-4">
<img src="/images/taq4.jpeg" class="img-fluid">
</div>

<div class="col-md-4">
<img src="/images/taq5.jpeg" class="img-fluid">
</div>

<div class="col-md-4">
<img src="/images/taq6.jpeg" class="img-fluid">
</div>

</div>

</div>

</section>

<section class="section text-center">

<div class="container">

<h2 class="mb-5">Nos souvenirs ensemble 📸</h2>

<div id="photoSlider" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-inner">

<div class="carousel-item active">
<img src="https://picsum.photos/800/500?1" class="d-block w-100 rounded">
</div>

<div class="carousel-item">
<img src="https://picsum.photos/800/500?2" class="d-block w-100 rounded">
</div>

<div class="carousel-item">
<img src="https://picsum.photos/800/500?3" class="d-block w-100 rounded">
</div>

<div class="carousel-item">
<img src="https://picsum.photos/800/500?4" class="d-block w-100 rounded">
</div>

</div>

</div>

</div>

</section>

<section class="section">

<div class="container">

<h2 class="text-center mb-5">22 raisons pourquoi je t’aime 💜</h2>

<div class="row">

<div class="col-md-4 mb-3">1. Ton sourire</div>
<div class="col-md-4 mb-3">2. Ta gentillesse</div>
<div class="col-md-4 mb-3">3. Ton regard</div>
<div class="col-md-4 mb-3">4. Ta façon de parler</div>
<div class="col-md-4 mb-3">5. Ta douceur</div>
<div class="col-md-4 mb-3">6. Ta patience</div>
<div class="col-md-4 mb-3">7. Ton humour</div>
<div class="col-md-4 mb-3">8. Ta beauté</div>
<div class="col-md-4 mb-3">9. Ta personnalité</div>
<div class="col-md-4 mb-3">10. Ton énergie</div>
<div class="col-md-4 mb-3">11. Ton intelligence</div>
<div class="col-md-4 mb-3">12. Ton cœur</div>
<div class="col-md-4 mb-3">13. Ta sincérité</div>
<div class="col-md-4 mb-3">14. Ta présence</div>
<div class="col-md-4 mb-3">15. Ta façon de me comprendre</div>
<div class="col-md-4 mb-3">16. Ton soutien</div>
<div class="col-md-4 mb-3">17. Tes rêves</div>
<div class="col-md-4 mb-3">18. Ta force</div>
<div class="col-md-4 mb-3">19. Ta sensibilité</div>
<div class="col-md-4 mb-3">20. Ta voix</div>
<div class="col-md-4 mb-3">21. Tes câlins</div>
<div class="col-md-4 mb-3">22. Parce que tu es toi 💜</div>

</div>

</div>

</section>

<section class="section">

<div class="container text-center">

<h2 class="mb-5">Des petits mots pour toi 💜</h2>

<div class="row">

<div class="col-md-4 mb-4">

<button class="btn btn-outline-purple w-100" onclick="showLetter(1)">
Ouvrir la lettre 1 💌
</button>

</div>

<div class="col-md-4 mb-4">

<button class="btn btn-outline-purple w-100" onclick="showLetter(2)">
Ouvrir la lettre 2 💌
</button>

</div>

<div class="col-md-4 mb-4">

<button class="btn btn-outline-purple w-100" onclick="showLetter(3)">
Ouvrir la lettre 3 💌
</button>

</div>

</div>

<div id="letterContent" class="message-box mt-4" style="display:none;"></div>

</div>

</section>
<!-- ANNIVERSAIRE -->
<section class="hero">

<h2>22 ans de beauté et de lumière ✨</h2>

<p>Que cette nouvelle année de ta vie soit encore plus belle que toutes les précédentes.</p>

</section>
<script>

const birthday = new Date("2026-03-28 00:00:00").getTime();

const timer = setInterval(function(){

const now = new Date().getTime();

const distance = birthday - now;

const days = Math.floor(distance / (1000*60*60*24));

const hours = Math.floor((distance%(1000*60*60*24))/(1000*60*60));

const minutes = Math.floor((distance%(1000*60*60))/(1000*60));

const seconds = Math.floor((distance%(1000*60))/1000);

document.getElementById("countdown").innerHTML =
days+"j "+hours+"h "+minutes+"m "+seconds+"s";

},1000);

</script>
<script>

const text = `Taqwa,

Depuis que tu es dans ma vie, tout est différent.
Ton sourire illumine mes journées et ta présence rend chaque moment spécial.

Aujourd'hui tu fêtes tes 22 ans et je voulais te faire un petit endroit sur internet
rien que pour toi.

Parce que tu es une personne incroyable et que tu mérites quelque chose d'unique.

Joyeux anniversaire mon cœur 💜`;

let index = 0;

function writeText(){

if(index < text.length){

document.getElementById("loveText").innerHTML += text.charAt(index);

index++;

setTimeout(writeText,40);

}

}

writeText();

</script>

<script>

const photos = document.querySelectorAll(".fade-photo");

window.addEventListener("scroll", function(){

photos.forEach(photo =>{

const position = photo.getBoundingClientRect().top;

const screenPosition = window.innerHeight / 1.2;

if(position < screenPosition){

photo.classList.add("show");

}

});

});

</script>

<script>

function showLetter(number){

const letters = {

1:`Taqwa,

Je voulais juste te dire merci d'exister.
Ta présence rend ma vie plus belle chaque jour.`,

2:`Depuis que je t'ai rencontrée,
j'ai compris que certaines personnes peuvent vraiment changer une vie.`,

3:`Si je devais refaire ma vie,
je te choisirais encore… et encore.`

};

document.getElementById("letterContent").style.display="block";

document.getElementById("letterContent").innerHTML=letters[number];

}

</script>

<script>

function loveExplosion(){

for(let i=0;i<10;i++){

confetti({
particleCount:100,
spread:120,
origin:{y:0.6}
});

}

}

</script>
@endsection