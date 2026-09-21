<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Global Auto Transporter')</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: sans-serif; color: #1f2937; display: flex; flex-direction: column; min-height: 100vh; }
        header { background: #1e3a5f; color: #fff; padding: 16px 24px; display: flex; justify-content: space-between; align-items: center; }
        header a { color: #fff; text-decoration: none; margin-left: 20px; }
        header .logo { font-weight: bold; font-size: 20px; margin-left: 0; }
        header a:hover { color: #f59e0b; }
        main { flex: 1; padding: 24px; max-width: 1100px; width: 100%; margin: 0 auto; }
        footer { background: #f3f4f6; text-align: center; padding: 16px; font-size: 14px; color: #6b7280; }
    </style>
</head>
<body>
    <header>
        <a href="{{ url('/') }}" class="logo">Global Auto Transporter</a>
        <nav>
            <a href="{{ url('/') }}">მთავარი</a>
            <a href="{{ route('login') }}">შესვლა</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Global Auto Transporter
    </footer>
</body>
</html>