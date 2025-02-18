<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quiz</title>
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/motion/1.2.0/motion.min.js"></script>
</head>
<body>
@include('welcome')

<div class="quiz-container" id="quizContainer">
<!-- Le contenu du quiz sera inséré ici par JavaScript -->
</div>

<script>
let quizData = @json($quizData); // Ajoutez les données de votre quiz ici
let languagesSelectionnes = @json($languagesSelectionnes); // Ajoutez les langues sélectionnées ici

// Récupération des paramètres de la requête
const urlParams = new URLSearchParams(window.location.search);
const nombreQuestions = urlParams.get('nombreQuestions') || 5;
const niveau = urlParams.get('niveau') || 'facile';

// Initialisation du quiz
let quizCommence = true;
let categorieActuelle = 0;
let questionActuelle = 0;
let score = 0;
let afficherIndice = false;
let afficherResultats = false;
let afficherDetails = false;
let afficherChoixRecommencer = false;
let tempsRestant = niveau === 'facile' ? 300 : niveau === 'moyen' ? 420 : 600; // 5 minutes, 7 minutes, 10 minutes
let modalMessage = null;
let showConfirmationModal = false;
const reponsesUtilisateur = {};
const quizFiltre = quizData.filter(categorie => languagesSelectionnes.includes(categorie.categorie))
.map(categorie => ({
...categorie,
questions: categorie.questions.filter(question => question.niveau === niveau).slice(0, nombreQuestions)
}));
const categorie = quizFiltre[categorieActuelle];
const question = categorie?.questions[questionActuelle];
const quizContainer = document.getElementById('quizContainer');
// Fonction pour décrémenter le temps restant
function decrementerTempsRestant() {
if (tempsRestant > 0) {
tempsRestant--;
document.querySelector('.chronometre').textContent = `Temps restant : ${formatTemps(tempsRestant)}`;
} else {
clearInterval(timer);
alert('Le temps est écoulé !');
redirigerVersResultats();
}}

// Démarrer le timer
const timer = setInterval(decrementerTempsRestant, 1000);
// Fonction pour rediriger vers la page des résultats
function redirigerVersResultats() {
const queryParams = new URLSearchParams({
reponses: JSON.stringify(reponsesUtilisateur),
quizData: JSON.stringify(quizData),
languagesSelectionnes: JSON.stringify(languagesSelectionnes)
}).toString();
window.location.href = `/resultats?${queryParams}`;
}
// Fonction pour afficher la question suivante
function questionSuivante() {
if (questionActuelle < categorie.questions.length - 1) {
questionActuelle++;
} else if (categorieActuelle < quizFiltre.length - 1) {
categorieActuelle++;
questionActuelle = 0;
} else {
redirigerVersResultats();
return;
}
afficherQuestion();
}

// Fonction pour afficher la question précédente
function questionPrecedente() {
if (questionActuelle > 0) {
questionActuelle--;
} else if (categorieActuelle > 0) {
categorieActuelle--;
questionActuelle = quizFiltre[categorieActuelle].questions.length - 1;
}
afficherQuestion();
}

// Fonction pour afficher une question
function afficherQuestion() {
const categorie = quizFiltre[categorieActuelle];
const question = categorie.questions[questionActuelle];
quizContainer.innerHTML = `
<div>
<h2>${categorie.categorie}</h2>
<div class="barre-progression">${afficherBarreProgression(categorie.questions)}</div>
<div style='display:flex ;display: flex;justify-content: space-between;margin-left: 65px;margin-right: 70px;'>
<div class="chronometre">Temps restant : ${formatTemps(tempsRestant)}</div>
<div class="progression">Question ${questionActuelle + 1} / ${categorie.questions.length}</div>
</div>
<div class="question">
<h2>${question.question}</h2>
${afficherIndice ? `<div class="indice">${question.indice}</div>` : ''}
<div class="options">
${question.options.map((option, index) => `
<button onclick="repondre('${option}')" class="${reponsesUtilisateur[categorieActuelle]?.[questionActuelle] === option ? 'selected' : ''}">
${option}
</button>
`).join('')}
</div>
</div>
<div class="controles">
<button onclick="questionPrecedente()" ${questionActuelle === 0 ? 'disabled' : ''}><i class="fas fa-arrow-left"></i> Précédent</button>
<button onclick="toggleIndice()"><i class="fas fa-lightbulb"></i> Indice</button>
<button onclick="questionSuivante()">${questionActuelle === categorie.questions.length - 1 && categorieActuelle === quizFiltre.length - 1 ? 'Terminer' : 'Suivant'} <i class="fas fa-arrow-right"></i></button>
</div>
</div>
`;
}

// Fonction pour afficher la barre de progression
function afficherBarreProgression(questions) {
const points = questions.map((_, index) => reponsesUtilisateur[categorieActuelle]?.[index] !== undefined);
return points.map((estActif, index) => `
<div class="point-progression" style="background-color: ${estActif ? getCouleurProgression(index) : '#87bfff'}"></div>
`).join('');
}

// Fonction pour obtenir la couleur de progression
function getCouleurProgression(index) {
const couleurs = ["#4ecdc4", "#ffd166", "#6b5b95"];
return couleurs[index % couleurs.length];
}

// Fonction pour répondre à une question
function repondre(reponse) {
if (!reponsesUtilisateur[categorieActuelle]) {
reponsesUtilisateur[categorieActuelle] = {};
}
reponsesUtilisateur[categorieActuelle][questionActuelle] = reponse;
questionSuivante();
}

// Fonction pour formater le temps restant
function formatTemps(temps) {
const minutes = Math.floor(temps / 60);
const secondes = temps % 60;
return `${minutes}:${secondes < 10 ? `0${secondes}` : secondes}`;
}

// Fonction pour basculer l'affichage de l'indice
function toggleIndice() {
afficherIndice = !afficherIndice;
afficherQuestion();
}

// Afficher la première question
afficherQuestion();
</script>

@include('partials.footer')
</body>
</html>
