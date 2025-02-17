<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Sujets</title>
    <link rel="stylesheet" href="{{ asset('css/selection-sujets.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    @include('welcome')
    <div class="options-supplementaires">
        <h2>Choisissez le nombre de questions et le niveau</h2>
        <label>
            Nombre de questions par sujet :
            <input type="number" id="nombreQuestions" value="5" min="1" max="10">
        </label>
        <label>
            Niveau des questions :
            <select id="niveau">
                <option value="facile">Facile</option>
                <option value="moyen">Moyen</option>
                <option value="difficile">Difficile</option>
            </select>
        </label>
        <button onclick="soumettre()">Commencer le quiz</button>
    </div>
    @include('partials.footer')

    <script>
        function soumettre() {
            const nombreQuestions = document.getElementById('nombreQuestions').value;
            const niveau = document.getElementById('niveau').value;
            window.location.href = `/quiz?nombreQuestions=${nombreQuestions}&niveau=${niveau}`;
        }
    </script>
</body>
</html>
