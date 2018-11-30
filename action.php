<?php

if (isset($_POST['search'])) {
    //If user is searching for something
    echo $_POST['search'];
}
if (isset($_POST['createnew'])) {
    //If user want to create something
    echo $_POST['createnew'];
}
if (isset($_POST['booky'])) {
    //If user clicked on a specific button
    echo $_POST['booky'];
}
