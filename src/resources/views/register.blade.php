<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>
    <header class="header">
     <div class="header__inner">
      <a class="header__logo">FashionablyLate</a>
     </div>
     <div class="login__button">
     <form class="loginform" action="/login" method="post">
     @csrf
      <button class="login__button--submit" type="submit">login</button>
     </form>
     </div>

    </header>
    
</body>
</html>