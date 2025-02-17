
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Think Fast</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    @include('welcome')

    <section class="hero" style="background-image: url('{{ asset('images/background_quiz2.jpg') }}');">
        <div class="titre">
            <h1>Think Fast</h1>
            <h1>Think Fast</h1>
        </div>
        <h2>Aiguisez votre esprit</h2>
        <a href="/listcategory" class="start-quiz-link">
            Commencer le quiz <span class="arrow">→</span>
        </a>
    </section>

    <section id="welcome" class="section welcome-section">
        <h3>Bienvenue sur Think Faster</h3>
        <div class="welcome-container">
            <img src="{{ asset('images/welcome.png') }}" alt="Image de bienvenue">
            <div class="welcome-text">
                <p>
                    Bienvenue sur ThinkFast, la plateforme de quiz conçue pour tester et améliorer vos connaissances de manière amusante et interactive ! 🚀<br>
                    Nos tests sont classés en trois niveaux de difficulté : <br>
                    🟢 Facile : Pour un démarrage en douceur et une révision légère. <br>
                    🟡 Moyen : Un défi équilibré pour ceux qui veulent se surpasser.<br>
                    🔴 Difficile : Un vrai test pour les experts en quête d'excellence.<br>
                    La durée des tests est définie en fonction du nombre de quiz que vous choisissez et du niveau de difficulté sélectionné. Plus le niveau est élevé et le nombre de questions important, plus le temps alloué sera conséquent.<br>
                    Que vous souhaitiez vous entraîner, vous amuser ou mesurer vos connaissances, ThinkFast est là pour vous offrir une expérience dynamique et stimulante ! Prêt à relever le défi ? 🎯🔥
                </p>
            </div>
        </div>
    </section>

    <section id="categories" class="section quiz-categories">
        <h3>Catégories de quiz</h3>
        <div class="categories-grid">
            <div class="category-card">
                <img src="{{ asset('images/chefcuis.jpg') }}" alt="Cuisine">
                <h4>Cuisine</h4>
                <p>Questions sur les plats, les recettes et les cultures culinaires.</p>
            </div>
            <div class="category-card">
                <img src="{{ asset('images/voyage.jpg') }}" alt="Voyages">
                <h4>Voyages</h4>
                <p>Découvrez des cultures et des destinations à travers le monde.</p>
            </div>
            <div class="category-card">
                <img src="{{ asset('images/sports.jpg') }}" alt="Sports">
                <h4>Sports</h4>
                <p>Testez vos connaissances sur les sports et les grands événements sportifs.</p>
            </div>
            <div class="category-card" onclick="window.location.href='/quiz';" style="cursor: pointer;">
                <img src="{{ asset('images/programme.jpg') }}" alt="Développement">
                <h4>Développement</h4>
                <p>Explorez le monde du codage et des technologies.</p>
            </div>
            <div class="category-card">
                <img src="{{ asset('images/films.jpg') }}" alt="Cinéma">
                <h4>Cinéma</h4>
                <p>Plongez dans l'univers du cinéma avec des questions sur les films cultes.</p>
            </div>
            <div class="category-card">
                <img src="{{ asset('images/langues.jpg') }}" alt="Langues">
                <h4>Langues</h4>
                <p>Apprenez tout en jouant avec des quiz sur les langues et les expressions.</p>
            </div>
            <div class="category-card">
                <img src="{{ asset('images/santes.jpg') }}" alt="Santé">
                <h4>Santé</h4>
                <p>Quiz sur le bien-être, la santé et les modes de vie sains.</p>
            </div>
            <div class="category-card">
                <img src="{{ asset('images/art.jpg') }}" alt="Arts">
                <h4>Arts</h4>
                <p>Découvrez des questions captivantes sur la peinture, la musique et l'histoire de l'art.</p>
            </div>
        </div>
    </section>
    
    <section class="feedback">
      <div class="tit col-12" id="titres">What Clients Say?</div>
      <ul id="feedback-row">
        <li class="feedback-card">
          <p style="margin: 15px 0; font-family: New Century Schoolbook, TeX Gyre Schola, serif;">
            &nbsp;&nbsp;<i class="fas fa-quote-left quote"></i>Les quiz sont amusants et engageants.
          </p>
          <img src="{{ asset('images/ca.jpeg') }}" style="height: 60px; width: 60px; border-radius: 50%;">
          <p class="user-details"><b>Ahelina</b><br>co-founder</p>
        </li>
        <li class="feedback-card">
          <p style="margin: 15px 0; font-family: New Century Schoolbook, TeX Gyre Schola, serif;">
            &nbsp;&nbsp;<i class="fas fa-quote-left quote"></i>Parfait pour tester mes connaissances.
          </p>
          <img src="{{ asset('images/client2.jpeg') }}" style="height: 60px; width: 60px; border-radius: 50%;">
          <p class="user-details"><b>Jhon Doe</b><br>Directeur</p>
        </li>
        <li class="feedback-card">
          <p style="margin: 15px 0; font-family: New Century Schoolbook, TeX Gyre Schola, serif;">
            &nbsp;&nbsp;<i class="fas fa-quote-left quote"></i>Merci pour ce merveilleux site
          </p>
          <img src="{{ asset('images/client3.jpeg') }}" style="height: 60px; width: 60px; border-radius: 50%;">
          <p class="user-details"><b>Katren</b><br>Teacher</p>
        </li>
        <li class="feedback-card">
          <p style="margin: 15px 0; font-family: New Century Schoolbook, TeX Gyre Schola, serif;">
            &nbsp;&nbsp;<i class="fas fa-quote-left quote"></i>Excellent site, j'ai appris beaucoup !
          </p>
          <img src="{{ asset('images/client2.jpeg') }}" style="height: 60px; width: 60px; border-radius: 50%;">
          <p class="user-details"><b>Batren</b><br>Doctor</p>
        </li>
        <li class="feedback-card">
          <p style="margin: 15px 0; font-family: New Century Schoolbook, TeX Gyre Schola, serif;">
            &nbsp;&nbsp;<i class="fas fa-quote-left quote"></i>J'adore les questions variées.
          </p>
          <img src="{{asset('images/ca.jpeg')}}" style="height: 60px; width: 60px; border-radius: 50%;">
          <p class="user-details"><b>Batren</b><br>Doctor</p>
        </li>
        <li class="feedback-card">
          <p style="margin: 15px 0; font-family: New Century Schoolbook, TeX Gyre Schola, serif;">
            &nbsp;&nbsp;<i class="fas fa-quote-left quote"></i>Facile à utiliser et très éducatif
          </p>
          <img src="{{ asset('images/client3.jpeg') }}" style="height: 60px; width: 60px; border-radius: 50%;">
          <p class="user-details"><b>Batren</b><br>Doctor</p>
        </li>
        <li class="feedback-card">
          <p style="margin: 15px 0; font-family: New Century Schoolbook, TeX Gyre Schola, serif;">
            &nbsp;&nbsp;<i class="fas fa-quote-left quote"></i>Des heures de plaisir garanti.
          </p>
          <img src="{{ asset('images/client4.jpeg') }}" style="height: 60px; width: 60px; border-radius: 50%;">
          <p class="user-details"><b>Batren</b><br>Doctor</p>
        </li>
        <li class="feedback-card">
          <p style="margin: 15px 0; font-family: New Century Schoolbook, TeX Gyre Schola, serif;">
            &nbsp;&nbsp;<i class="fas fa-quote-left quote"></i>Le design est super attrayant
          </p>
          <img src="{{ asset('images/client2.jpeg') }}" style="height: 60px; width: 60px; border-radius: 50%;">
          <p class="user-details"><b>Batren</b><br>Doctor</p>
        </li>
        <li class="feedback-card">
          <p style="margin: 15px 0; font-family: New Century Schoolbook, TeX Gyre Schola, serif;">
            &nbsp;&nbsp;<i class="fas fa-quote-left quote"></i>Excellent site, j'ai appris beaucoup !
          </p>
          <img src="{{ asset('images/ca.jpeg') }}" style="height: 60px; width: 60px; border-radius: 50%;">
          <p class="user-details"><b>Batren</b><br>Doctor</p>
        </li>
      </ul>
    </section>

    @include('partials.footer')
</body>
</html>












