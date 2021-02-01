<?php

include_once "header.php"; //includes session var

if(!isset($_SESSION["principle"]) || $_SESSION["principle"] == null || $_SESSION["principle"] == false){
    header("refresh:0; location: login.html");
}