<link rel="stylesheet" href="style.css">
<script defer src="script_admin.js"></script>
<?php
require 'db.php';

$adminData = db_select('Admin', 'login, password');

if (empty($_SERVER['PHP_AUTH_USER']) ||
    empty($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] != $adminData[0] ||
    substr(md5($_SERVER['PHP_AUTH_PW']), 0, 20) != $adminData[1]) {
  header('HTTP/1.1 401 Unauthorized');
  header('WWW-Authenticate: Basic realm="My site"');
  print('<h1>401 Требуется авторизация</h1>');
    print($_SERVER['PHP_AUTH_USER']);
    print(substr(md5($_SERVER['PHP_AUTH_PW']), 0, 20);
    print($adminData[0]);
    print($adminData[1]);
  exit();
}

print('Вы успешно авторизовались и видите защищенные паролем данные.');
?>

<button class="Exit">Выйти</button>
<button class="Button_Stats">Посмотреть статистику ответов</button>
<button class="Button_Change">Редактировать пользователя</button>

<div id="Popup" class="Popup">
    <div id="Stats" class="Stats">
        
    </div>
</div>

// *********
// Здесь нужно прочитать отправленные ранее пользователями данные и вывести в таблицу.
// Реализовать просмотр и удаление всех данных.
// *********
