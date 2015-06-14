<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
require_once "db.php";
$row = new DB();
$row->create($_REQUEST["description"], $_REQUEST["text"])
?>
<form action="create.html">

</form>
</body>
</html>