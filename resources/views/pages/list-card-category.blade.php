resources/views/list-card-category.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Card Category</title>
    <link rel="stylesheet" href="{{ asset('css/card-category.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    @include('welcome')
    <div class="row d-flex justify-content-center mt-5" style="padding: 20px;  display: flex;flex-wrap:wrap;   margin-top: 50px;">
        <div style='width:100%'>
            <input type="text" id="searchCategory" placeholder="Rechercher par nom de quiz">
            <button id="searchButton">Rechercher</button>
        </div>
        <div class="card" style="padding: 5px;">
            <div class="image-container">
                <img src="{{ asset('images/programme.jpg') }}" class="card-img-top fixed-size" alt="Développement">
                <div class="card-body">
                    <p class="card-text">Testez vos compétences en programmation, technologies web, applications et tout ce qui touche au développement logiciel.</p>
                </div>
            </div>
            <div class="card-footer" data-url="/choisissez-sujets">
                <h5 class="card-title">Développement</h5>
            </div>
        </div>
        <div class="card" style="padding: 5px;">
            <div class="image-container">
                <img src="{{ asset('images/art.jpg') }}" class="card-img-top fixed-size" alt="Arts">
                <div class="card-body"><p class="card-text">Découvrez des questions captivantes sur la peinture, la sculpture, la musique, le théâtre et l’histoire de l’art.</p></div>
            </div>
            <div class="card-footer" data-url="/choisissez-sujets">
                <h5 class="card-title">Arts</h5>
            </div>
        </div>
        <div class="card" style="padding: 5px;">
            <div class="image-container">
                <img src="{{ asset('images/voyage.jpg') }}" class="card-img-top fixed-size" alt="Voyages">
                <div class="card-body"><p class="card-text">Explorez le monde à travers des quiz sur les destinations touristiques, les cultures et les traditions du globe.</p></div>
            </div>
            <div class="card-footer" data-url="/choisissez-sujets">
                <h5 class="card-title">Voyages</h5>
            </div>
        </div>
        <div class="card" style="padding: 5px;">
            <div class="image-container"><img src="{{ asset('images/sports.jpg') }}" class="card-img-top fixed-size" alt="Sports"><div class="card-body"><p class="card-text">Évaluez vos connaissances sur les différents sports, leurs règles, leurs histoires et les exploits de grands champions.</p></div></div>
            <div class="card-footer" data-url="/choisissez-sujets">
                <h5 class="card-title">Sports</h5>
            </div>
        </div>
        <div class="card" style="padding: 5px;">
            <div class="image-container">
                <img src="{{ asset('images/langues.jpg') }}" class="card-img-top fixed-size" alt="Langues">
                <div class="card-body"><p class="card-text">Apprenez tout en jouant avec des quiz sur les langues, les expressions idiomatiques et les alphabets du monde entier.</p></div>
            </div>
            <div class="card-footer" data-url="/choisissez-sujets">
                <h5 class="card-title" >Langues</h5>
            </div>
        </div>
        <div class="card" style="padding: 5px;">
            <div class="image-container">
                <img src="{{ asset('images/films.jpg') }}" class="card-img-top fixed-size" alt="Cinéma">
                <div class="card-body"><p class="card-text">Plongez dans l’univers du cinéma avec des questions sur les films cultes, les réalisateurs célèbres et les anecdotes de tournage.</p>
                </div>
            </div>
            <div class="card-footer" data-url="/choisissez-sujets">
                <h5 class="card-title">Cinéma</h5>
            </div>
        </div>
        <div class="card" style="padding: 5px;">
            <div class="image-container">
                <img src="{{ asset('images/chefcuis.jpg') }}" class="card-img-top fixed-size" alt="Cuisine">
                <div class="card-body">
                    <p class="card-text">Faites voyager vos papilles avec des quiz sur les recettes, les cuisines du monde et les saveurs uniques.</p>
                </div>
            </div>
            <div class="card-footer" data-url="/choisissez-sujets">
                <h5 class="card-title">Cuisine</h5>
            </div>
        </div>
        <div class="card" style="padding: 5px;">
            <div class="image-container">
                <img src="{{ asset('images/santes.jpg') }}" class="card-img-top fixed-size" alt="Santé">
                <div class="card-body">
                    <p class="card-text">Enrichissez vos connaissances sur la santé, le bien-être, les modes de vie sains et les pratiques médicales.</p>
                </div>
            </div>
            <div class="card-footer" data-url="/choisissez-sujets">
                <h5 class="card-title">Santé</h5>
            </div>
        </div>
    </div>
    @include('partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cardFooters = document.querySelectorAll('.card-footer');
            cardFooters.forEach(function(cardFooter) {
                cardFooter.addEventListener('click', function() {
                    var url = this.getAttribute('data-url');
                    window.location.href = url;
                });
            });
        });

        document.getElementById('searchButton').addEventListener('click', function () {
            var query = document.getElementById('searchCategory').value.toLowerCase();
            var cardTitles = document.querySelectorAll('.card-footer .card-title');

            cardTitles.forEach(function (cardTitle) {
                var cardText = cardTitle.textContent.toLowerCase();
                var card = cardTitle.closest('.card');

                if (cardText.includes(query)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
