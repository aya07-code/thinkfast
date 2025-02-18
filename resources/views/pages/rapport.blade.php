<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport d'Analyse des Quiz</title>
    <link rel="stylesheet" href="{{ asset('css/rapport.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        <h3>Rapport d'Analyse des Quiz</h3>
        <p>Date : 18 février 2025</p>
        <p>Auteur : Équipe ThinkFast</p>
    </div>

    <div class="executive-summary">
        <h2>Résumé Exécutif</h2>
        <p>Ce rapport présente une analyse détaillée des performances des utilisateurs sur la plateforme ThinkFast. Les données couvrent une période de 3 mois, de novembre 2024 à janvier 2025. Les points clés incluent le nombre total de quiz réalisés, les scores moyens par sujet, et des recommandations pour améliorer les compétences des utilisateurs.</p>
    </div>

    <div class="table-of-contents">
        <h2>Table des Matières</h2>
        <ul>
            <li><a href="#section1">1. Introduction</a></li>
            <li><a href="#section2">2. Analyse des Performances</a></li>
            <li><a href="#section3">3. Graphiques et Diagrammes</a></li>
            <li><a href="#section4">4. Recommandations</a></li>
            <li><a href="#section5">5. Conclusion</a></li>
        </ul>
    </div>

    <div class="content">
        <h2 id="section1">1. Introduction</h2>
        <p>Le projet ThinkFast vise à fournir une plateforme de quiz personnalisés pour aider les utilisateurs à améliorer leurs compétences dans divers sujets. Ce rapport analyse les performances des utilisateurs et fournit des recommandations pour optimiser l'apprentissage.</p>

        <h2 id="section2">2. Analyse des Performances</h2>
        <h3>2.1 Nombre Total de Quiz Réalisés</h3>
        <p>Nombre total de quiz réalisés : 150</p>
        <p>Nombre total de quiz personnalisés : 50</p>

        <h3>2.2 Scores Moyens par Sujet</h3>
        <p>React : 80%</p>
        <p>Laravel : 60%</p>
        <p>PHP : 90%</p>
        <p>JavaScript : 70%</p>

        <h3>2.3 Performances des Utilisateurs</h3>
        <p>Utilisateur moyen : 75%</p>
        <p>Meilleur utilisateur : 95%</p>
        <p>Utilisateur le moins performant : 50%</p>

        <h2 id="section3">3. Graphiques et Diagrammes</h2>
        <div id='imgg'>
            <div class="chart">
                <img src="{{ asset('images/graph1.webp') }}" alt="Graphique de Scores Moyens">
            </div>
            <div class="chart">
                <img src="{{ asset('images/graph3.webp') }}" alt="Graphique de Performances des Utilisateurs">
            </div>
        </div>

        <h2 id="section4">4. Recommandations</h2>
        <p>1. Encourager les utilisateurs à faire plus de quiz pour améliorer leurs compétences.</p>
        <p>2. Proposer des quiz plus variés pour couvrir un plus large éventail de sujets.</p>
        <p>3. Fournir des explications détaillées pour les réponses incorrectes afin d'améliorer la compréhension.</p>
        <p>4. Introduire des récompenses et des badges pour motiver les utilisateurs.</p>

        <h2 id="section5">5. Conclusion</h2>
        <p>Le projet ThinkFast a montré des résultats prometteurs en aidant les utilisateurs à améliorer leurs compétences dans divers sujets. En suivant les recommandations, nous pouvons encore optimiser la plateforme pour offrir une expérience d'apprentissage plus efficace et engageante.</p>
    </div>

    <div class="footer">
        <p>Page 1</p>
        <p>&copy; 2025 ThinkFast. Tous droits réservés.</p>
    </div>
    <script src="{{ asset('js/rapport.js') }}"></script>
</body>
</html>
