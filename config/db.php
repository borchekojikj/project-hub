<?php

// php populate html table from mysql database

$con = mysqli_connect("localhost", "root", "", "contact_db");

if (!$con) {
    die("Connection Error");
}
