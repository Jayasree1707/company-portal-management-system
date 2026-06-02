<?php

$password = password_hash(
    "Admin@123",
    PASSWORD_DEFAULT
);

echo $password;

?>