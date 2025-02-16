<x-guest-layout>
    <style>
        /* Reset default margin and padding */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('{{ asset('assets/images/gallery/banner.jpg') }}');
            background-size: cover;
            background-position: center;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            overflow: hidden;
        }

        .login {
            background: rgba(0, 0, 0, 0.7); /* Latar belakang semi-transparan */
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.4);
            width: 90%; /* Lebar card 90% dari parent */
            max-width: 400px; /* Lebar maksimum card */
            text-align: center;
            backdrop-filter: blur(10px); /* Efek blur untuk latar belakang */
            border: 1px solid rgba(255, 255, 255, 0.1); /* Border transparan */
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 32px; /* Ukuran font yang lebih kecil */
            margin-bottom: 20px;
            font-weight: 700;
            color: #fff;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .login form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .login input[type="email"],
        .login input[type="password"],
        .login button {
            width: 100%; Lebar input dan tombol 100% dari form
            padding: 12px;
            margin: 10px 0; /* Margin atas dan bawah */
            border-radius: 10px;
            border: none;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .login input[type="email"],
        .login input[type="password"] {
            background: rgba(255, 255, 255, 0.1); /* Input transparan */
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .login input[type="email"]::placeholder,
        .login input[type="password"]::placeholder {
            color: #dcdcdc;
        }

        .login input[type="email"]:focus,
        .login input[type="password"]:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.4);
            outline: none;
        }

        .login button {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .login button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }

        .forgot-password {
            margin-top: 15px;
            font-size: 14px;
            color: #dcdcdc;
        }

        .forgot-password a {
            color: #f5f5f5;
            text-decoration: none;
            transition: color 0.3s;
        }

        .forgot-password a:hover {
            color: #6a11cb;
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-top: 15px;
            font-size: 14px;
            color: #dcdcdc;
        }

        .remember-me input {
            margin-right: 10px;
            accent-color: #6a11cb;
        }
    </style>

    <div class="login">
        <h1>Masuk</h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Enter your password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="remember-me">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">{{ __('Remember me') }}</label>
            </div>

            <!-- Forgot Password -->
            <div class="forgot-password">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                @endif
            </div>

            <!-- Submit Button -->
            <button type="submit">
                {{ __('Log in') }}
            </button>
        </form>
    </div>
</x-guest-layout>
