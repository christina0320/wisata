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
            background-image: url('{{ asset('assets/images/gallery/gallery-1.jpeg') }}');
            background-size: cover;
            background-position: center;
            font-family: 'Poppins', sans-serif; /* Menggunakan font modern */
            color: #fff;
        }

        .login {
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3); /* Lembutkan bayangan */
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #f5f5f5;
        }

        .login form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .login input[type="email"],
        .login input[type="password"],
        .login button {
            width: calc(100% - 20px); /* Sesuaikan dengan form */
            padding: 10px;
            margin: 10px auto;
            border-radius: 8px;
            border: none;
            font-size: 16px;
        }

        .login input[type="email"],
        .login input[type="password"] {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .login input[type="email"]::placeholder,
        .login input[type="password"]::placeholder {
            color: #dcdcdc;
        }

        .login button {
            background: linear-gradient(135deg, #6a11cb, #2575fc); /* Gradasi warna */
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb); /* Animasi warna */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
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
            margin-top: 10px;
            font-size: 14px;
            color: #dcdcdc;
        }

        .remember-me input {
            margin-right: 10px;
        }
    </style>

    <div class="login">
        <h1>Halaman Login</h1>

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
