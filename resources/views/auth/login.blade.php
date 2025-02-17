    @include('welcome')   
   <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            .signIn {
                position: relative;
                padding: 10px 30px;
                background: #D1E4F3;
                backdrop-filter: blur(25px);
                border: 1px solid rgba(255, 255, 255, 0.5);
                border-radius: 13px;
                display: flex;
                flex-direction: column;
                gap: 7%;
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
                width: 320px;
                height: 280px;
                margin: auto;
                margin-top: 80px;
                margin-bottom: 30px;
            }
            .signIn .container {
                display: flex;
                justify-content: space-between;
            }
            .signIn .container h2 {
                font-size: 1.5em;
                font-weight: 600;
                color: #054a91;
                margin-top: 30px;
            }
            .signIn .container .img {
                width: 60px;
                height: 60px;
            }
            .signIn .input {
                position: relative;
                height: 10%;
            }
            .signIn .input i {
                position: absolute;
                left: 3%;
                top: 54%;
                transform: translateY(-50%);
                color: #054a91;
                font-size: 15px;
            }
            .signIn .input input {
                position: relative;
                padding-left: 15%;
                width: 75%;
                padding: 8px 40px;
                color: #054a91;
                border-radius: 25px;
                background: rgba(255, 255, 255, 0.2);
                box-shadow: inset 0 0 15px rgba(255, 255, 255, 0.6);
                border: 1px solid rgba(255, 255, 255, 0.5);
                outline: none;
            }
            .signIn .input input:focus {
                border-color: #054a91;
                border: 1px solid #054a91;
            }
            .signIn .input::placeholder {
                color: rgba(255, 255, 255, 0.8);
                padding-left: 10px;
            }
            .signIn #btn {
                background:rgb(26, 104, 182);
                border-radius: 20px;
                margin: auto;
                color: #fff;
                font-weight: 500;
                box-shadow: inset 0 0 15px  rgb(182, 203, 250);
                width: 35%;
                border: none;
                padding: 7px 0px;
                font-size: 1em;
                cursor: pointer;
                text-align: center;
                display: flex;
                justify-content: center; 
                align-items: center; 
                margin-top:-5px;

            }
            .signIn #btn:hover {
                color: #054a91;
                background-color: white;
                box-shadow: inset 0 0 15px rgb(26, 104, 182);
            }
            .signIn p {
                font-size: 1.25em;
                color: #054a91;
                font-weight: 600;
                cursor: pointer;
            }
            .signIn .link {
                font-size: 1em;
                color: rgb(93, 138, 236); 
                text-decoration: none;
            }
        </style>
    </head>
<body>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="signIn">
        @csrf

        <div class="container">
            <h2>Log In</h2>
            <img class="img" src="{{ asset('images/logo-transparence-sans-logo1.png') }}" alt="logo" />
        </div>

        <!-- @if ($errors->any())
            <p class="error">{{ $errors->first() }}</p>
        @endif -->

        <!-- Email Address -->
        <div class="input">
            <i class="fas fa-user"></i>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
            <!-- <x-input-error :messages="$errors->get('email')" class="mt-2"  style='color:red;'/> -->
        </div>

        <!-- Password -->
        <div class="input mt-4">
            <i class="fas fa-lock"></i>
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" 
                            placeholder="Password"/>
            <!-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> -->
        </div>

        <!-- Remember Me -->
        <div class="container">
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400" style='color: #054a91;'>{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>
        <x-primary-button id="btn" style='padding: 7px 0px;' >
                {{ __('Log In') }}
        </x-primary-button>
    </form>
    @include('partials.footer')
</body>

