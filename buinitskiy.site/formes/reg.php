<?php 
// Подключаем коннект к БД
require_once 'connect.php';
 
// Проверяем нажата ли кнопка отправки формы
if (isset($_REQUEST['doGo'])) {
    
    // Все последующие проверки, проверяют форму и выводят ошибку
    // Проверка на совпадение паролей
    if ($_REQUEST['pass'] !== $_REQUEST['pass_rep']) {
        $error = 'Пароль не совпадает';
    }
    
    // Проверка есть ли вообще повторный пароль
    if (!$_REQUEST['pass_rep']) {
        $error = 'Введите повторный пароль';
    }
    
    // Проверка есть ли пароль
    if (!$_REQUEST['pass']) {
        $error = 'Введите пароль';
    }
 
    // Проверка есть ли email
    if (!$_REQUEST['email']) {
        $error = 'Введите email';
    }
 
    // Проверка есть ли логин
    if (!$_REQUEST['login']) {
        $error = 'Введите login';
    }
   
  // проверяем, не сущестует ли пользователя с таким имене
    $query = mysqli_query($db, "SELECT id FROM users WHERE login='".mysqli_real_escape_string($db, $_REQUEST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $error = "Пользователь с таким логином уже существует в базе данных";
    }

    // Если ошибок нет, то происходит регистрация 
    if (!$error) {
        $login = $_REQUEST['login'];
        $email = $_REQUEST['email'];
        // Пароль хешируется
        $pass = password_hash($_REQUEST['pass'], PASSWORD_DEFAULT);
        // Если день рождения не был указан, то будет самый последний год из доступных
        $DOB = $_REQUEST['year_of_birth'];
        
        // Добавление пользователя
        mysqli_query($db, "INSERT INTO `users` (`login`, `email`, `password`, `DOB`) VALUES ('" . $login . "','" . $email . "','" . $pass . "', '" . $DOB . "')");
        
        // Подтверждение что всё хорошо
           echo "<script>
function myFunction()
{
alert('Регистрация прошла успешна.');
}
</script> 
<script>myFunction()</script>";
    } else {
        // Если ошибка есть, то выводить её 
     echo "<script>
function myFunction()
{
alert(' Ошибка: $error. ');
}
</script> 
<script>myFunction()</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
  <link rel="stylesheet" href="../css/reg.css">
</head>

<body>
  <div class="based">
    <div class="formabg">
      <div class="titletext">
        Регистрация
      </div>
      <div class="forma">
        <form action="<?= $_SERVER['SCRIPT_NAME'] ?>">
             <div class="errory"></div>
        <p>Логин: <input type="text" name="login"  class="vvod" id=""> <samp style="color:red">*</samp></p>
        <p>EMail: <input type="email" name="email" class="vvod" id=""><samp style="color:red">*</samp></p>
        <p>Пароль: <input type="password" name="pass" class="vvod" id=""><samp style="color:red">*</samp></p>
        <p>Повторите пароль: <input type="password" class="vvod" name="pass_rep" id=""><samp style="color:red">*</samp></p>
        <?php $year = date('Y'); ?>
        Год рождения:
        <select class="vvod" name="year_of_birth" id="">
        <option value="">----</option>
            <?php for ($i = $year - 14; $i > $year - 14 - 100; $i--) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php } ?>
        </select>
        <p><input style="margin-left:8%;" class="buttonvhod" type="submit" value="Зарегистрироваться" name="doGo"></p>
        <a style="margin-left:35%;" href="../formes/index.php">
            Вход
          </a>
        <a style="margin-left:5%;" href="../index.php">
          Главная
        </a>
    </form>
      
       
    
    </div>
  </div>
</body>

</html>