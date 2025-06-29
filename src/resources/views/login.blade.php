<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
    <header class="header">
     <div class="header__inner">
      <a class="header__logo">FashionablyLate</a>
     </div>
     <div class="register__button">
     <form class="registerform" action="/register" method="post">
     @csrf
      <button class="login__button--submit" type="submit">register</button>
     </form>
     </div>

    </header>
    
</body>
</html>