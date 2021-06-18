<?php
session_start();
$_SESSION = array();

include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Example &raquo; A simple PHP CAPTCHA script</title>
    <style type="text/css">
        pre {
            border: solid 1px #bbb;
            padding: 10px;
            margin: 2em;
        }

        img {
            border: solid 1px #ccc;
            margin: 0 2em;
        }
    </style>
</head>
<body>
<div class="captcha">
    <?php
    echo "<h1>Captcha</h1>";
    echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
    ?>
</div>
<style>
    h1 {
        text-align: center;
    }
    .captcha {
        margin: 0 auto;
        width: 400px;
        height: 200px;
        text-align: center;
    }
</style>
</body>
</html>