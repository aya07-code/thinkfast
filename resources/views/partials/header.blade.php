<header style="background: linear-gradient(135deg, #a7c7e7, #6a8bce); padding-left: 10px; display: flex; justify-content: space-between; align-items: center; position: fixed; width: 100%; top: 0; z-index: 1000;">
    <img src="{{ asset('images/logo_transparence1.png') }}" alt="Quiz Logo" style="width: 50px; height: 50px;">
    <nav style="display: flex; position: relative; right: 3%; align-items: center; gap: 10px;">
        <a href="{{ route('home') }}" class="nav-a">Home</a>
        <a href="{{ route('about') }}" class="nav-a">About</a>
        @if (Auth::check())
            <a href="{{ route('ajouter.quiz') }}" class="nav-a">Ajouter un Quiz</a>
            <a href="{{ route('quiz.personnalises') }}" class="nav-a">Quiz Personnalisés</a>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="nav-a" style="background: none; border: none; cursor: pointer;">Logout</button>
            </form>
        @else
             <a href="" class="nav-a">Login</a>
        @endif
    </nav>
</header>

<style>
    .nav-a {
        text-decoration: none;
        color: #fff;
        font-weight: 500;
        font-size: 1rem;
        padding: 10px 15px;
        position: relative;
        transition: color 0.3s ease;
        border-radius: 5px;
    }
    .nav-a:hover {
        color:rgb(2, 61, 116);
    }
</style>