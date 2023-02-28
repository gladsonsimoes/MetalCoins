<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_ENCODED);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_ENCODED);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_ENCODED);

echo "Nome: $name <br>";
echo "E-mail: $name <br>";

?>