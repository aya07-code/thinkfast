<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Personnaliser</title>
    <link rel="stylesheet" href="{{ asset('css/quiz-personnaliser.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
@include('welcome')

<div class="container">
        <h1>Personnalisez votre Quiz</h1>
        <form action="/importer-quiz" method="post" enctype="multipart/form-data">
            @csrf <!-- Laravel CSRF protection -->
            <div class="form-group">
                <label for="titre">Titre du Quiz :</label>
                <input type="text" id="titre" name="titre" placeholder="Entrez le titre du quiz" required>
            </div>
            <div class="form-group">
                <label for="niveau">Niveau :</label>
                <select id="niveau" name="niveau" required>
                    <option value="facile">Facile</option>
                    <option value="moyen">Moyen</option>
                    <option value="difficile">Difficile</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nombreQuestions">Nombre de questions :</label>
                <input type="number" id="nombreQuestions" name="nombreQuestions" min="5" max="10" placeholder="Entre 5 et 10" required>
            </div>
            <div class="form-group">
                <label for="fichierQuiz">Importer un quiz :</label>
                <input type="file" id="fichierQuiz" name="fichierQuiz" accept=".json,.csv,.xlsx" required>
            </div>
            <button type="submit" class="btn-submit">Soumettre</button>
        </form>
    </div>
    

    @include('partials.footer')
</body>
</html>
