<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Quiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/resultats.css') }}">
</head>
<body>

    @include('welcome')
    <div class="resultats-container">
        <div class="resultats">
            <h2>Résultats du quiz</h2>
            <div class="score-progress">
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 80%;"></div>
                </div>
                <p>80% de bonnes réponses</p>
                <p>Vous avez répondu correctement à <strong>8</strong> questions sur <strong>10</strong>.</p>
            </div>
            <div class="resultats-actions">
                <button onclick="window.location.href='/selection-sujets'">Recommencer</button>
                <button onclick="afficherReview()">Review</button>
            </div>
            <div class="categorie-resultats" style="display: none;">
                <h3>React JS (6 / 8)</h3>
                <div class="question-resultat">
                    <p><strong>Question 1:</strong> Qu'est-ce que React ?</p>
                    <p><strong>Votre réponse :</strong> Une bibliothèque ✅</p>
                    <p><strong>Réponse correcte :</strong> Une bibliothèque</p>
                    <hr />
                </div>
                <div class="question-resultat">
                    <p><strong>Question 2:</strong> Quelle méthode est utilisée pour capturer les erreurs dans les composants React ?</p>
                    <p><strong>Votre réponse :</strong> tryCatch ❌</p>
                    <p><strong>Réponse correcte :</strong> ErrorBoundary</p>
                    <hr />
                </div>
                <div class="question-resultat">
                    <p><strong>Question 3:</strong> Quelle méthode est utilisée pour créer un composant React avec des événements ?</p>
                    <p><strong>Votre réponse :</strong> onClick ✅</p>
                    <p><strong>Réponse correcte :</strong> onClick</p>
                    <hr />
                </div>
                <!-- Ajoutez d'autres questions et réponses ici -->
            </div>
        </div>
    </div>

    <script>
        function afficherReview() {
            document.querySelector('.categorie-resultats').style.display = 'block';
        }
    </script>
    @include('partials.footer')
</body>
</html>
