<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css"> <!-- Pastikan path ini benar -->
</head>
<body>
<div class="logo">Zerac</div>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Input Email -->
                <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required />
                
                <!-- Menampilkan error untuk email -->
                @if ($errors->has('email'))
                    <div style="color: red;">
                        <ul>
                            @foreach ($errors->get('email') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Input Password -->
                <input type="password" name="password" id="password" placeholder="Password" required />
                
                <!-- Menampilkan error untuk password -->
                @if ($errors->has('password'))
                    <div style="color: red;">
                        <ul>
                            @foreach ($errors->get('password') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Login Button -->
                <button type="submit">LOGIN</button>

                <!-- Pesan error umum jika login gagal -->
                @if ($errors->has('login'))
                    <div style="color: red;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Pesan untuk logout setelah login -->
                <p class="message">
                    Sudah Selesai? Silahkan <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                </p>
            </form>
        </div>
    </div>

    <!-- Form untuk logout -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
