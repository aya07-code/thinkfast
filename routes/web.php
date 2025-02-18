<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('pages.home');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/listcategory', function () {
    return view('pages.list-card-category');; 
})->name('listcategory');
Route::get('/choisissez-sujets', function () {
    return view('pages.choisissez-sujets');
});
Route::get('/choisissez-quiz', function () {
    return view('pages.choisissez-quiz');
});
Route::get('/selection-sujets', function () {
    return view('pages.selection-sujets');
});
Route::get('/quiz', function () {
    return view('pages.quiz', [
        'quizData' => [
            [
                'categorie' => 'React JS',
                'questions' => [
                    [
                        'question' => "Qu'est-ce que React ?",
                        'options' => ["Une bibliothèque", "Un framework", "Un langage"],
                        'reponse' => "Une bibliothèque",
                        'indice' => "React est souvent comparé à Angular, qui est un framework.",
                        'niveau' => "facile",
                    ],
                    [
                        'question' => "Qu'est-ce que React ?",
                        'options' => ["Une bibliothèque", "Un framework", "Un langage"],
                        'reponse' => "Une bibliothèque",
                        'indice' => "React est souvent comparé à Angular, qui est un framework.",
                        'niveau' => "facile",
                    ],
                    [
                        'question' => "Qu'est-ce que React ?",
                        'options' => ["Une bibliothèque", "Un framework", "Un langage"],
                        'reponse' => "Une bibliothèque",
                        'indice' => "React est souvent comparé à Angular, qui est un framework.",
                        'niveau' => "facile",
                    ],
                    [
                        'question' => "Qu'est-ce que React ?",
                        'options' => ["Une bibliothèque", "Un framework", "Un langage"],
                        'reponse' => "Une bibliothèque",
                        'indice' => "React est souvent comparé à Angular, qui est un framework.",
                        'niveau' => "facile",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour capturer les erreurs dans les composants React ?",
                        'options' => ["ErrorBoundary", "tryCatch", "useError"],
                        'reponse' => "ErrorBoundary",
                        'indice' => "C'est un composant qui capture les erreurs dans ses enfants.",
                        'niveau' => "moyen",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour capturer les erreurs dans les composants React ?",
                        'options' => ["ErrorBoundary", "tryCatch", "useError"],
                        'reponse' => "ErrorBoundary",
                        'indice' => "C'est un composant qui capture les erreurs dans ses enfants.",
                        'niveau' => "moyen",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour capturer les erreurs dans les composants React ?",
                        'options' => ["ErrorBoundary", "tryCatch", "useError"],
                        'reponse' => "ErrorBoundary",
                        'indice' => "C'est un composant qui capture les erreurs dans ses enfants.",
                        'niveau' => "moyen",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour capturer les erreurs dans les composants React ?",
                        'options' => ["ErrorBoundary", "tryCatch", "useError"],
                        'reponse' => "ErrorBoundary",
                        'indice' => "C'est un composant qui capture les erreurs dans ses enfants.",
                        'niveau' => "moyen",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour créer un composant React avec des événements ?",
                        'options' => ["onClick", "handleClick", "eventListener"],
                        'reponse' => "onClick",
                        'indice' => "Cette propriété est utilisée pour gérer les clics.",
                        'niveau' => "difficile",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour créer un composant React avec des événements ?",
                        'options' => ["onClick", "handleClick", "eventListener"],
                        'reponse' => "onClick",
                        'indice' => "Cette propriété est utilisée pour gérer les clics.",
                        'niveau' => "difficile",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour créer un composant React avec des événements ?",
                        'options' => ["onClick", "handleClick", "eventListener"],
                        'reponse' => "onClick",
                        'indice' => "Cette propriété est utilisée pour gérer les clics.",
                        'niveau' => "difficile",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour créer un composant React avec des événements ?",
                        'options' => ["onClick", "handleClick", "eventListener"],
                        'reponse' => "onClick",
                        'indice' => "Cette propriété est utilisée pour gérer les clics.",
                        'niveau' => "difficile",
                    ],
                ]
            ]
        ],
        'languagesSelectionnes' => ['React JS'] 
    ]);
});
Route::get('/resultats', function () {
    // Exemple de données fictives pour quizData, languagesSelectionnes et reponsesUtilisateur
    $quizData = [
        [
            'categorie' => 'React JS',
            'questions' => [
                    [
                        'question' => "Qu'est-ce que React ?",
                        'options' => ["Une bibliothèque", "Un framework", "Un langage"],
                        'reponse' => "Une bibliothèque",
                        'indice' => "React est souvent comparé à Angular, qui est un framework.",
                        'niveau' => "facile",
                    ],
                    [
                        'question' => "Qu'est-ce que React ?",
                        'options' => ["Une bibliothèque", "Un framework", "Un langage"],
                        'reponse' => "Une bibliothèque",
                        'indice' => "React est souvent comparé à Angular, qui est un framework.",
                        'niveau' => "facile",
                    ],
                    [
                        'question' => "Qu'est-ce que React ?",
                        'options' => ["Une bibliothèque", "Un framework", "Un langage"],
                        'reponse' => "Une bibliothèque",
                        'indice' => "React est souvent comparé à Angular, qui est un framework.",
                        'niveau' => "facile",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour capturer les erreurs dans les composants React ?",
                        'options' => ["ErrorBoundary", "tryCatch", "useError"],
                        'reponse' => "ErrorBoundary",
                        'indice' => "C'est un composant qui capture les erreurs dans ses enfants.",
                        'niveau' => "moyen",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour capturer les erreurs dans les composants React ?",
                        'options' => ["ErrorBoundary", "tryCatch", "useError"],
                        'reponse' => "ErrorBoundary",
                        'indice' => "C'est un composant qui capture les erreurs dans ses enfants.",
                        'niveau' => "moyen",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour capturer les erreurs dans les composants React ?",
                        'options' => ["ErrorBoundary", "tryCatch", "useError"],
                        'reponse' => "ErrorBoundary",
                        'indice' => "C'est un composant qui capture les erreurs dans ses enfants.",
                        'niveau' => "moyen",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour créer un composant React avec des événements ?",
                        'options' => ["onClick", "handleClick", "eventListener"],
                        'reponse' => "onClick",
                        'indice' => "Cette propriété est utilisée pour gérer les clics.",
                        'niveau' => "difficile",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour créer un composant React avec des événements ?",
                        'options' => ["onClick", "handleClick", "eventListener"],
                        'reponse' => "onClick",
                        'indice' => "Cette propriété est utilisée pour gérer les clics.",
                        'niveau' => "difficile",
                    ],
                    [
                        'question' => "Quelle méthode est utilisée pour créer un composant React avec des événements ?",
                        'options' => ["onClick", "handleClick", "eventListener"],
                        'reponse' => "onClick",
                        'indice' => "Cette propriété est utilisée pour gérer les clics.",
                        'niveau' => "difficile",
                    ],
                ]
        ],
    ];
    
    $languagesSelectionnes = ['React JS']; 
    $reponsesUtilisateur = [
        0 => [0 => 'Une bibliothèque',1 => 'Une bibliothèque',2 => 'Une bibliothèque', 3 => 'ErrorBoundary',4 => 'ErrorBoundary',5 => 'ErrorBoundary', 6 => 'onClick', 7 => 'onClick', 8 => 'onClick'],
    ];
    
    return view('pages.resultats', compact('quizData', 'languagesSelectionnes', 'reponsesUtilisateur'));
});
Route::get('/quiz-personnaliser', function () {
    return view('pages.quiz-personnaliser');
});
Route::get('/liste-quiz-personnalises', function () {
    return view('pages.liste-quiz-personnalises');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
