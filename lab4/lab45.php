<?php
if (array_key_exists("enviar", $_POST)) {
    if (intval($_POST["num"]) % 2 == 0) {
        $tam = intval($_POST['num']);
        for ($i = 0; $i < $tam; $i++) {
            for ($j = 0; $j < $tam; $j++) {
                if ($i == $j) {
                    echo 1;
                } else {
                    echo 0;
                }
            }
            echo "</br>";
        }
    } else {
        header('location: lab45.html');
    }
}
?>