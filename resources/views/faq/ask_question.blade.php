<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Задать вопрос</title>
    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
 <!-- <p>Задать вопрос</p> -->
    <section class="container">
      <div class="question">

        <h1>Задать вопрос</h1>

        <form  class="form-signin" method="POST" >
          <input type="text" name="nickname" class="form-control" placeholder="Nickname">
          <input type="text" name="email" class="form-control" placeholder="email">
          <input type="text" name="question" class="form-control"  placeholder="Вопрос">
          <select name="categorie" class="form-control">
            <option value='tema'>tema1</option>
          </select>
          <input class="btn btn-lg btn-primary btn-block" type="submit" name="send" value="Опублитковать вопрос">
        </form>
<br>
<a href="/">Вернуться в список вопросов</a>
      </div>
    </section>
  </body>
</html>
