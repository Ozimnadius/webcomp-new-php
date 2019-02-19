<? include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php' ?>
 
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi">
    <title><?=(isset($meta[$_SERVER["REQUEST_URI"]])) ? $meta[$_SERVER["REQUEST_URI"]]["METATITLE"] : "Web-comp - Создание и продвижение сайтов"?></title>
    <meta name="keywords" content="<?=(isset($meta[$_SERVER["REQUEST_URI"]])) ? $meta[$_SERVER["REQUEST_URI"]]["METAKEYS"] : "Web-comp, Создание сайтов, продвижение сайтов"?>">
    <meta name="description" content="<?=(isset($meta[$_SERVER["REQUEST_URI"]])) ? $meta[$_SERVER["REQUEST_URI"]]["METADESCR"] : "Web-comp - Создание и продвижение сайтов"?>">

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png"/>
    <link rel="manifest" href="/images/favicon/site.webmanifest"/>
    <meta name="msapplication-TileColor" content="#da532c"/>
    <meta name="theme-color" content="#ffffff"/>

    <link rel="stylesheet" href="/css/vendor.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

<div class="wrapper">
<? include $_SERVER['DOCUMENT_ROOT'].'/pages/headerTablets.php'?>