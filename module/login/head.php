<?
session_cache_limiter('');
session_start();
Header("p3p: CP=\"CAO DSP AND SO ON\" policyref=\"/w3c/p3p.xml\"");

//글로벌 변수 설정
$GBL_USERID	= strtolower($_SESSION['ses_member_id']);
$GBL_NAME	= $_SESSION['ses_member_name'];
$GBL_MTYPE = $_SESSION['ses_member_type'];
$GBL_PASSWORD = $_SESSION['ses_member_pwd'];

$SYSTEM_DATE = date('Y-m-d');

$strRoot = '../';
$boardRoot = '../board/';

?>

<!doctype html>
	<html lang="ko">
		<head>

			<link rel="stylesheet" type="text/css" href="/css/reset.css?v=1">
			<link rel="stylesheet" type="text/css" href="/css/style.css?v=4">
			<link rel="stylesheet" type="text/css" href="/css/sub.css?v=3">
			<link rel="stylesheet" type="text/css" href="/css/mediaquery.css?v=8">
			
			
			<!--<link rel="stylesheet" type="text/css" href="/css/sub02.css">-->
			
			<link rel="stylesheet" type="text/css" href="/css/board.css?v=7">
			<link rel="stylesheet" type="text/css" href="/css/font.css?v=5">
			<link rel="stylesheet" type="text/css" href="/css/animation.css?v=8">


			
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
			<script src="https://code.jquery.com/jquery-1.11.3.js"></script>	
			<script src="/module/js/common.js"></script>
			<script src="/module/popupoverlay/jquery.popupoverlay.js"></script>
			<link rel="stylesheet" type="text/css" href="/module/popupoverlay/popupoverlay.css">
		

		</head>
	<body>