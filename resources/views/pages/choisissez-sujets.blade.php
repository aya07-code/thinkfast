<!-- resources/views/choisissez-sujets.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisissez vos sujets</title>
    <link rel="stylesheet" href="{{ asset('css/choisissez-sujet.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    @include('welcome')

    <div class="selection-sujets">
        <h2>Choisissez vos sujets</h2>
        <div class="sujets">
            <label>
                <input type="checkbox" id="frontend" onchange="changerSujet('frontend')">
                Front-end
            </label>
            <label>
                <input type="checkbox" id="backend" onchange="changerSujet('backend')">
                Back-end
            </label>
        </div>

        <div id="languages" style="display:none;">
            <h3 style='color: #054a91;'>Sélectionnez les langages/frameworks</h3>
            <div id="frontend-languages" style="display:none;">
                <label><input type="checkbox" id="React JS" onchange="changerLanguage('React JS')">React JS</label>
                <label><input type="checkbox" id="JavaScript" onchange="changerLanguage('JavaScript')">JavaScript</label>
                <label><input type="checkbox" id="HTML/CSS" onchange="changerLanguage('HTML/CSS')">HTML/CSS</label>
            </div>
            <div id="backend-languages" style="display:none;">
                <hr id="backend-separator" style="display:none;">
                <label><input type="checkbox" id="Laravel" onchange="changerLanguage('Laravel')">Laravel</label>
                <label><input type="checkbox" id="PHP" onchange="changerLanguage('PHP')">PHP</label>
                <label><input type="checkbox" id="Node.js" onchange="changerLanguage('Node.js')">Node.js</label>
                <label><input type="checkbox" id="MongoDB" onchange="changerLanguage('MongoDB')">MongoDB</label>
                <label><input type="checkbox" id="MySQL" onchange="changerLanguage('MySQL')">MySQL</label>
            </div>
        </div>

        <button class='suivre' onclick="passerAEtapeSuivante()">Suivant</button>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal-overlay" style="display:none;">
        <div class="modal-content">
            <p id="modalMessage"></p>
            <button onclick="fermerModal()">Fermer</button>
        </div>
    </div>

    @include('partials.footer')

    <script>
        let sujetsSelectionnes = {
            frontend: false,
            backend: false
        };
        let languagesSelectionnes = [];

        function changerSujet(sujet) {
            sujetsSelectionnes[sujet] = !sujetsSelectionnes[sujet];
            document.getElementById('languages').style.display = (sujetsSelectionnes.frontend || sujetsSelectionnes.backend) ? 'block' : 'none';
            document.getElementById('frontend-languages').style.display = sujetsSelectionnes.frontend ? 'block' : 'none';
            document.getElementById('backend-languages').style.display = sujetsSelectionnes.backend ? 'block' : 'none';
            document.getElementById('backend-separator').style.display = sujetsSelectionnes.backend ? 'block' : 'none';
        }

        function changerLanguage(language) {
            const index = languagesSelectionnes.indexOf(language);
            if (index > -1) {
                languagesSelectionnes.splice(index, 1);
            } else {
                languagesSelectionnes.push(language);
            }
        }

        function passerAEtapeSuivante() {
            if (languagesSelectionnes.length === 0) {
                document.getElementById('modalMessage').innerText = "Veuillez sélectionner au moins un langage/framework.";
                document.getElementById('modal').style.display = 'flex';
                return;
            }
            window.location.href = '/choisissez-quiz';
        }

        function fermerModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</body>
</html>
