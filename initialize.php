<?php
ob_start();
session_start();

include("config.php");
require_once(__ROOT__ . "/model/ConnectionDB.php");

$dbInstance =  ConnectionDB::getInstance();

ob_end_flush();
