<?php
session_start();
$codigoCaptcha = substr(md5(time()),0,4);

$_SESSION['captcha'] = $codigoCaptcha;

$imagemCaptcha = imagecreatefrompng("img/fundocaptcha.png");
$fonteCaptcha = imageloadfont("lib/anonymous.gdf");
$corCaptcha = imagecolorallocate($imagemCaptcha, 255,0,0);

imagestring($imagemCaptcha, $fonteCaptcha, 15, 5, $codigoCaptcha, $corCaptcha);

imagepng($imagemCaptcha);
imagedestroy($imagemCaptcha);

?>