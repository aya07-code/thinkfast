<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    @include('welcome')

    <div class="dashboard-container">
        <div class="user-info">
            <img src="{{ asset('images/client2.jpeg') }}">
            <h1>Bonjour Aya Ziad</h1>
        </div>
        <div class="quiz-stats">
            <div class="stats">
                <div><p>Nombre de quiz réalisés : 15</p></div>
                <div><p>Nombre de quiz personnalisés : 7</p></div>
            </div>

            <div class="quiz-list">
                <div class="quiz-item">
                    <h3>React</h3>
                    <p>Score : 80%</p>
                    <a href="" class="btn-import">Importer un quiz</a>
                </div>
                <div class="quiz-item">
                    <h3>Laravel</h3>
                    <p>Score : 60%</p>
                    <a href="" class="btn-import">Importer un quiz</a>
                </div>
                <div class="quiz-item">
                    <h3>PHP</h3>
                    <p>Score : 90%</p>
                    <a href="" class="btn-import">Importer un quiz</a>
                </div>
                <div class="quiz-item">
                    <h3>JavaScript</h3>
                    <p>Score : 70%</p>
                    <a href="" class="btn-import">Importer un quiz</a>
                </div>
            </div>
        </div>
        <div class="actions">
            <a href="{{ route('liste-quiz-personnalises') }}" class="btn-action">Afficher la liste des quiz</a>
            <button class="btn-action" onclick="ouvrirPopup()">Ajouter un quiz personnalisé</button>
        </div>
    </div>

    <!-- Pop-up pour sélectionner le sujet -->
    <div id="popup" class="popup-overlay">
        <div class="popup-content">
            <span class="close" onclick="fermerPopup()">&times;</span>
            <h2>Choisissez un sujet</h2>
            <form action="{{ route('quiz-personnaliser') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="sujet">Sujet :</label>
                    <select id="sujet" name="sujet" required>
                        <option value="react">React</option>
                        <option value="laravel">Laravel</option>
                        <option value="php">PHP</option>
                        <option value="js">JavaScript</option>
                    </select>
                </div>
                <button type="submit" class="btn-submit">Tester vos compétences</button>
            </form>
        </div>
    </div>

    @include('partials.footer')

    <script>
        function ouvrirPopup() {
            document.getElementById('popup').style.display = 'flex';
        }

        function fermerPopup() {
            document.getElementById('popup').style.display = 'none';
        }
    </script>
</body>
</html>
