<?php
	session_start();
	?>
<?php
// Подключение БД
require_once 'connect.php';
// Проверка нажата ли кнопка отправки формы
if(isset($_SESSION["session_username"])){
	// вывод "Session is set"; // в целях проверки
	header("Location: ../index.php");
	}
if (isset($_REQUEST['doGo'])) {

    // Последующий код проверяет вообще есть формы
    // Проверяет логин
    if (!$_REQUEST['login']) {
        $error = 'Введите логин';
         
    
    }
    if (!$_REQUEST['pass']) {
        $error = 'Введите пароль';
    }
    // Проверяет пароль
  if (!$_REQUEST['login'] && (!$_REQUEST['pass'])) {
        $error = 'Введите логин и пароль';
    }

    // Проверяет ошибки
    if (!$error) {
        $login = $_REQUEST['login'];
        $pass = $_REQUEST['pass'];
        // берёт из БД пароль и id пользователя 
        if ($result = mysqli_query($db, "SELECT `password`, `id` FROM `users` WHERE `login`='" . $login . "'")) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Проверяет есть ли id
                if ($row['id']) {
                    // если id есть, то он сравнивает пароли функцией password_verify
                    if (password_verify($pass, $row['password'])) {
                        $_SESSION['session_username']=$login;
 
                        // Если функция возвращает true, то вы входите
                        header("Location: ../index.php");
                         
                        
                        exit;
                    } else {
                        // Если функция возвращает false, то выводит ошибку
                        echo "<script>
function myFunction()
{
alert('Пароль не совпадает.');
}
</script> 
<script>myFunction()</script>";
                    }
                } else {
                    // Выводит ошибку если не нашли такой логин
                    echo "<script>
function myFunction()
{
alert('Ввели не верный логин.');
}
</script> 
<script>myFunction()</script>";
                    
                }
            }
        }
        
    } else {
        // Выводит ошибки, если есть пустые поля формы
        echo $error;echo "<script>
function myFunction()
{
alert('Ошибка: $error');
}
</script> 
<script>myFunction()</script>";
    }
}

?>
<!DOCTYPE html >
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход</title>
	<link rel="stylesheet" href="../css/vhod.css">
</head>
<body>
  <div class="based">
    <div class="formabg">
      <div class="titletext">
        Вход
      </div>
     <form action="https://alexni.ga/buinitskiy.site/formes/index.php" method="post">
         <div class="forma">
        <p>Логин: <input type="text" name="login"  class="vvod" id=""></p>
        <p>Пароль: <input type="password" name="pass"  class="vvod" id="">
        <input style="margin-left:32%;" class="buttonvhod"  name="doGo" type="submit" value="Войти">
       
        </a>
        </div>
          <a  style="" href="../formes/reg.php">
            Регистрация 
          </a>
        <a style="margin-left:31%;" href="../index.php">
          Главная
    </form>
      <div class="obg">
       
      </div>
    </div>
  </div>
</body>
</html>