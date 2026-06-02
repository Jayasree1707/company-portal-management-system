<?php

$conn = mysqli_connect(
    "127.0.0.1",
    "root",
    "",
    "company_portal"
);

if(!$conn){

    die(
        "Database Connection Failed"
    );

}

?>