
    @include('welcome')

    <head>
        <title>forget password</title>
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
                width: 300px;
                height: 200px;
                margin: auto;
                margin-top: 56px;
                margin-bottom: 52px;
            }
            .signIn .container {
                display: flex;
                justify-content: space-between;
            }
            .signIn .container h2 {
                font-size: 1.3em;
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
                width: 73%;
                margin-bottom: 5%;
            }
            .signIn .input i {
                position: absolute;
                left: 6%;
                top: 79%;
                transform: translateY(-50%);
                color: #054a91;
                font-size: 15px;
            }
            .signIn .input input {
                position: relative;
                padding-left: 15%;
                width: 100%;
                padding: 8px 40px;
                font-size: 1em;
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
                background: rgb(26, 104, 182);
                border-radius: 20px;
                margin: auto;
                color: #fff;
                font-weight: 300;
                box-shadow: inset 0 0 15px rgb(182, 203, 250);
                width: 80%;
                border: none;
                padding: 7px 0px;
                font-size: 1em;
                cursor: pointer;
                text-align: center;
                display: flex;
                justify-content: center; 
                align-items: center;
                margin-top:10px;
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
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="signIn">
        @csrf

        <div class="container">
            <h2>Reset Password</h2>
            <img class="img" src="{{ asset('images/logo-transparence-sans-logo1.png') }}" alt="logo" />
        </div>

        <!-- Email Address -->
        <div class="input">
            <i class="fas fa-envelope"></i>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
            <!-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> -->
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button id="btn">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
    @include('partials.footer')

    </body>


