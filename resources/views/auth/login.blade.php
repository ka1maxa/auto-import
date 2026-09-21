<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>შესვლა</title>
    <style>
        body { font-family: sans-serif; background: #f3f4f6; display: flex; justify-content: center; padding-top: 80px; }
        form { background: #fff; padding: 32px; border-radius: 8px; width: 320px; box-shadow: 0 1px 4px rgba(0,0,0,.1); }
        h1 { margin-top: 0; font-size: 22px; }
        label { display: block; margin-top: 12px; font-size: 14px; }
        input { width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box; }
        button { margin-top: 20px; width: 100%; padding: 10px; background: #1e3a5f; color: #fff; border: 0; border-radius: 4px; cursor: pointer; }
        .error { color: #b91c1c; font-size: 14px; margin-top: 8px; }
    </style>
</head>
<body>
    <form method="POST" action="/login">
        @csrf
        <h1>ადმინ პანელი</h1>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>

        <label for="password">პაროლი</label>
        <input type="password" id="password" name="password" required>

        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">შესვლა</button>
    </form>
</body>
</html>