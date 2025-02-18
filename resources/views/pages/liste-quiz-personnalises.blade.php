<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Quiz Personnalisés</title>
    <link rel="stylesheet" href="{{ asset('css/liste-quiz-personnalises.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    @include('welcome')

    <div class="container">
        <h1>Liste des Quiz Personnalisés</h1>
        <div class="quiz-list">
            <div class="quiz-item">
                <p> Titre: <strong class='strong'>React</strong></p>
                <p>Niveau :<strong class='strong'>Difficile</strong>  </p>
                <button class="btn-export" onclick="">Exporter le Quiz</button>
            </div>
        </div>

        <div class="quiz-list">
            <div class="quiz-item">
                <p> Titre: <strong class='strong'>Laravel</strong></p>
                <p>Niveau :<strong class='strong'>Facile</strong>  </p>
                <button class="btn-export" onclick="">Exporter le Quiz</button>
            </div>
        </div>

        <div class="quiz-list">
            <div class="quiz-item">
                <p> Titre: <strong class='strong'> React</strong></p>                
                <p>Niveau :<strong class='strong'> Moyen</strong>  </p>
                <button class="btn-export" onclick="">Exporter le Quiz</button>
            </div>
        </div>

        <div class="quiz-list">
            <div class="quiz-item">
                <p> Titre: <strong class='strong'>Laravel</strong></p>
                <p>Niveau :<strong class='strong'>Facile</strong>  </p>
                <button class="btn-export" onclick="">Exporter le Quiz</button>
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>
