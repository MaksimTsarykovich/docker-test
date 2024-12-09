<?php

$mysqli = mysqli_connect("mysql", "user", "password", "app");

if (!$mysqli) {
    die(" ". mysqli_connect_error());
}