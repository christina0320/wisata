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
        }

        .register {
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
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

        .register form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .register input[type="text"],
        .register input[type="email"],
        .register input[type="password"],
        .register button {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px auto;
            border-radius: 8px;
            border: none;
            font-size: 16px;
        }

        .register input[type="text"],
        .register input[type="email"],
        .register input[type="password"] {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .register input::placeholder {
            color: #dcdcdc;
        }

        .register button {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .register button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .already-registered {
            margin-top: 15px;
            font-size: 14px;
            color: #dcdcdc;
        }

        .already-registered a {
            color: #f5f5f5;
            text-decoration: none;
            transition: color 0.3s;
        }

        .already-registered a:hover {
            color: #6a11cb;
        }
    </style>

    <div class="register">
        <h1>Daftar Akun</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your name" />
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your email" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Enter your password" />
                <x-input-error :messages="$errors->get('password')" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password" />
                <x-input-error :messages="$errors->get('password_confirmation')" />
            </div>

            <!-- Submit Button -->
            <button type="submit">
                {{ __('Register') }}
            </button>
        </form>

        <div class="already-registered">
            <p>Already have an account? <a href="{{ route('login') }}">Log in</a></p>
        </div>
    </div>
</x-guest-layout>
