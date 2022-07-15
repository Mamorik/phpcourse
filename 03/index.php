<?php //phpinfo();
// Однострочный комментарий
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 3</title>
</head>
<body>

<!-- PHP -->

    <p> Hello </p>
    <?php

    /*
    *Многострочный
    *комментарий
    */
        echo '<p> Hello2 </p>';
        //echo '<p> Hello3 </p>';
        echo '<p> Hello4 </p>'; #Комментарий в стиле Unix
    ?>

    <?//= '<p> Hello5 </p>'; ?>

    <? echo '<p> Hello6 </p>'; ?>
</body>
</html>