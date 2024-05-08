<?php
header('HTTP/1.1 401 Unauthorized');
header('WWW-Authenticate: Basic realm="My site"');

header('Location: admin.php');

exit();
?>
