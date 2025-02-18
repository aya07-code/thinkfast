// JavaScript pour la navigation et l'interactivité basique
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la table des matières
    document.querySelectorAll('.table-of-contents a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            target.scrollIntoView({ behavior: 'smooth' });
        });
    });

    // Exemple d'interactivité pour les graphiques (si nécessaire)
    // Vous pouvez utiliser Chart.js ou une autre bibliothèque pour les graphiques dynamiques
});
