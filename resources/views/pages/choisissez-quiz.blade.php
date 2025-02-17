<!-- resources/views/choisissez-quiz.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisissez vos quiz</title>
    <link rel="stylesheet" href="{{ asset('css/choisisez-quiz.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    @include('welcome')

    <div class="selection-quiz">
        <h2>Choisissez vos Quiz</h2>
        <div>
            <h3 class='h4'>Front End</h3>
            <div class="quiz">
                <div class="category-card">
                    <img src="{{ asset('images/rr.png') }}" alt="Cuisine">
                    <h4 data-url="/selection-sujets">React</h4>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/jss.jpeg') }}" alt="Cuisine">
                    <h4 data-url="/selection-sujets">JavaScript</h4>
                </div>
            </div>
        </div>
        <div>
            <h3 class='h4'>Back End</h3>
            <div class="quiz">
                <div class="category-card">
                    <img src="{{ asset('images/la.png') }}" alt="Cuisine">
                    <h4 data-url="/selection-sujets">Laravel</h4>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/pp.jpeg') }}" alt="Cuisine">
                    <h4 data-url="/selection-sujets">Php</h4>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var titles = document.querySelectorAll('.category-card h4[data-url]');

            titles.forEach(function(title) {
                title.addEventListener('click', function() {
                    var url = this.getAttribute('data-url');
                    window.location.href = url;
                });
            });
        });
    </script>
</body>
</html>
