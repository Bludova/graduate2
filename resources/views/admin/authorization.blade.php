@extends('admin.include.header')
@section('content')
  <body>

    <div class="container">

      <form class="form-signin" method="post" action="/">
        <h2 class="form-signin-heading">Пожалуйста войдите</h2>
        <label for="login" class="sr-only">Логин</label>
        <input type="login" id="login" class="form-control" placeholder="Логин" required autofocus>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
      </form>
<a href="/">Вернуться в список вопросов</a>

<br>
<a href="admin">Admin</a>
    </div>
  </body>
</html>
@endsection
