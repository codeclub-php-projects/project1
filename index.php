<?php

session_start();

$page_id = 'main';
if (isset($_GET['id'])) {
	$page_id = $_GET['id'];
}

$page_user = 'Гость';
if (isset($_SESSION['user'])) {
	$page_user = $_SESSION['user'];
}

include('app/pages/'.$page_id.'.php');
include('tpl/layouts/base.php');
