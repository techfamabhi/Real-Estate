<?php

session_start();
if(isset($_SESSION['email']))
{

}
else
{
    header('location:login.php');
}

?>

<?php
include('header.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <title>About page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
<style>

<!--last image hover Effect-->
/*ZoomIn Hover Effect*/
.hover-zoomin a {
      display: block;
      position: relative;
      overflow: hidden;
    }
    .hover-zoomin img {
      width: 100%;
      height: auto;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
    }
    .hover-zoomin:hover img {
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -o-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2);
    }

    /*Fade Hover Effect*/
    .hover-fade a {
      display: block;
      position: relative;
      overflow: hidden;
      background-color: #333;
    }
    .hover-fade img {
      width: 100%;
      height: auto;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
    }
    .hover-fade:hover img {
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -o-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2);
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0.5)";
      filter: alpha(opacity=0.5);
      opacity: 0.5;
    }

    /*ZoomIn Hover-Mask Effect*/
    .hover-mask a {
      display: block;
      position: relative;
      overflow: hidden;
    }
    .hover-mask img {
      width: 100%;
      height: auto;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
    }
    .hover-mask:hover img {
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -o-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2);
    }
    .hover-mask a h2 {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      margin-top: 0px;
      margin-bottom: 0px;
      height: 100%;
      width: 100%;
      padding: 45% 20px;
      text-align: center;
      background-color: rgba(0,0,0,0.4);
      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
    }
    .hover-mask:hover a h2 {
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1;
    }
    .hover-mask .glyphicon {
      -webkit-transform: scale(0);
      -moz-transform: scale(0);
      -o-transform: scale(0);
      -ms-transform: scale(0);
      transform: scale(0);
      color: #fff;
      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
    }
    .hover-mask:hover .glyphicon {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -o-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=1)";
      filter: alpha(opacity=1);
      opacity: 1;
    }

    /* Hover Blur Effect */
    .text-white {
      color: #fff;
    }
    .hover-blur a {
      display: block;
      position: relative;
      overflow: hidden;
    }
    .hover-blur img {
      width: 100%;
      height: auto;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
    }
    .hover-blur:hover img {
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -o-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2);
      -webkit-filter: grayscale(0.6) blur(1px);
      filter: grayscale(0.6) blur(1px);
    }
    .hover-blur a h2 {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      margin-top: 0px;
      margin-bottom: 0px;
      height: 100%;
      width: 100%;
      padding: 45% 20px;
      text-align: center;
      background-color: rgba(0,0,0,0.5);
      /*background dotted*/
      background-image: -webkit-repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      background-image: -moz-repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      background-image: -ms-repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      background-image: repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      -webkit-background-size: 3px 3px;
      -moz-background-size: 3px 3px;
      background-size: 3px 3px;
      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
    }
    .hover-blur:hover a h2 {
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1;
    }
    .hover-blur .text-white {
      -webkit-transform: scale(0);
      -moz-transform: scale(0);
      -o-transform: scale(0);
      -ms-transform: scale(0);
      transform: scale(0);
      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
    }
    .hover-blur:hover .text-white {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -o-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=1)";
      filter: alpha(opacity=1);
      opacity: 1;
    }

    /* Hover Zoomout */
    .hover-zoomout a {
      display: block;
      position: relative;
      overflow: hidden;
    }
    .hover-zoomout img {
      width: 100%;
      height: auto;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -o-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2);
    }
    .hover-zoomout:hover img {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -o-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
    }

/*Hover Blurout Effect*/
    .hover-blurout a {
      display: block;
      position: relative;
      overflow: hidden;
    }
    .hover-blurout img {
      width: 100%;
      height: auto;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -o-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2);
    }
    .hover-blurout:hover img {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -o-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
      /*Blur Filtr*/
      -webkit-filter: grayscale(0.6) blur(1px);
      -moz-filter: grayscale(0.6) blur(1px);
      -o-filter: grayscale(0.6) blur(1px);
      -ms-filter:progid:DXImageTransform.Microsoft.Blur(pixelRadius=2);
      filter: progid:DXImageTransform.Microsoft.blur(pixelradius=2);
      filter: grayscale(0.6) blur(2px);
    }
    .hover-blurout a h2 {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      margin-top: 0px;
      margin-bottom: 0px;
      height: 100%;
      width: 100%;
      padding: 45% 20px;
      text-align: center;
      background-color: rgba(0,0,0,0.4);
      /*background dotted*/
      background-image: -webkit-repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      background-image: -moz-repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      background-image: -ms-repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      background-image: repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      -webkit-background-size: 3px 3px;
      -moz-background-size: 3px 3px;
      background-size: 3px 3px;

      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
    }
    .hover-blurout:hover a h2 {
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1;
    }
    .hover-blurout .glyphicon {
      -webkit-transform: scale(0);
      -moz-transform: scale(0);
      -o-transform: scale(0);
      -ms-transform: scale(0);
      transform: scale(0);
      color: #fff;
      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
    }
    .hover-blurout:hover .glyphicon {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -o-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=1)";
      filter: alpha(opacity=1);
      opacity: 1;
    }
/* ---------Hover Overlay text Effect--------- */

    .overlay-item {
       display: block;
       position: relative;
       overflow: hidden;
       text-align: center;

    }
    .overlay-item .mask {
       display: block;
       position: absolute;
       overflow: hidden;
       top: 0;
       left: 0;
       height: 100%;
    }
    .overlay-item img {
       display: block;
       width: 100%;
       height: auto;
       x-margin-right: auto;
       x-margin-left: auto;
    }
    .overlay-item h3 {
       text-transform: uppercase;
       text-align: center;
       position: relative;
       padding: 10px;
       margin: 0px 0px 20px 0px;
       display: block;
       background-color: #333;
       color: #fff;
    }
    .overlay-item p {
       text-align: left;
    }
    .overlay-item a.btn {
      margin: 10px 0;
    }

    .overlay-effect img {
       -webkit-transform: scaleY(1);
       -moz-transform: scaleY(1);
       -o-transform: scaleY(1);
       -ms-transform: scaleY(1);
       transform: scaleY(1);
       -webkit-transition: all 0.7s ease-in-out;
       -moz-transition: all 0.7s ease-in-out;
       -o-transition: all 0.7s ease-in-out;
       -ms-transition: all 0.7s ease-in-out;
       transition: all 0.7s ease-in-out;
    }
    .overlay-effect .mask {
       background-color: rgba(255, 255, 255, 0.3);
       -webkit-transition: all 0.5s linear;
       -moz-transition: all 0.5s linear;
       -o-transition: all 0.5s linear;
       -ms-transition: all 0.5s linear;
       transition: all 0.5s linear;
       -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
       filter: alpha(opacity=0);
       opacity: 0;
    }
    .overlay-effect h3 {
       -webkit-transform: scale(0);
       -moz-transform: scale(0);
       -o-transform: scale(0);
       -ms-transform: scale(0);
       transform: scale(0);
       -webkit-transition: all 0.5s linear;
       -moz-transition: all 0.5s linear;
       -o-transition: all 0.5s linear;
       -ms-transition: all 0.5s linear;
       transition: all 0.5s linear;
       -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
       filter: alpha(opacity=0);
       opacity: 0;
    }
    .overlay-effect p {
       -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
       filter: alpha(opacity=0);
       opacity: 0;
       -webkit-transform: scale(0);
       -moz-transform: scale(0);
       -o-transform: scale(0);
       -ms-transform: scale(0);
       transform: scale(0);
       -webkit-transition: all 0.5s linear;
       -moz-transition: all 0.5s linear;
       -o-transition: all 0.5s linear;
       -ms-transition: all 0.5s linear;
       transition: all 0.5s linear;
    }
    .overlay-effect a.btn {
       -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
       filter: alpha(opacity=0);
       opacity: 0;
       -webkit-transform: scale(0);
       -moz-transform: scale(0);
       -o-transform: scale(0);
       -ms-transform: scale(0);
       transform: scale(0);
       -webkit-transition: all 0.5s linear;
       -moz-transition: all 0.5s linear;
       -o-transition: all 0.5s linear;
       -ms-transition: all 0.5s linear;
       transition: all 0.5s linear;
    }
    .overlay-effect:hover img {
       -webkit-transform: scale(10);
       -moz-transform: scale(10);
       -o-transform: scale(10);
       -ms-transform: scale(10);
       transform: scale(10);
       -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
       filter: alpha(opacity=0);
       opacity: 0;
    }
    .overlay-effect:hover .mask {
       -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
       filter: alpha(opacity=100);
       opacity: 1;
    }
    .overlay-effect:hover h3,.overlay-effect:hover p,.overlay-effect:hover a.btn {
       -webkit-transform: scale(1);
       -moz-transform: scale(1);
       -o-transform: scale(1);
       -ms-transform: scale(1);
       transform: scale(1);
       -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
       filter: alpha(opacity=100);
       opacity: 1;
    }
/*Hover Fall Effect*/
    .fall-item {
       width: 100%;
       height: auto;
       overflow: hidden;
       position: relative;
       text-align: center;
    }
    .fall-item .mask,.fall-item .content {
       width: 100%;
       height: 100%;
       position: absolute;
       overflow: hidden;
       top: 0;
       left: 0;
    }
    .fall-item img {
       display: block;
       position: relative;
       width: 100%;
       height: auto;
    }
    .fall-item h2 {
       text-transform: uppercase;
       color: #fff;
       text-align: center;
       position: relative;
       padding: 10px;
       background: rgba(0, 0, 0, 0.8);
       margin: 0 0 0 0;
    }
    .fall-item p {
       font-style: italic;
       position: relative;
       color: #fff;
       padding: 10px 20px 20px;
       text-align: center;
    }
    .fall-effect .mask {
       background-color: rgba(255, 255, 255, 0.7);
       top: -200px;
       -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
       filter: alpha(opacity=0);
       opacity: 0;
       -webkit-transition: all 0.3s ease-out 0.5s;
       -moz-transition: all 0.3s ease-out 0.5s;
       -o-transition: all 0.3s ease-out 0.5s;
       -ms-transition: all 0.3s ease-out 0.5s;
       transition: all 0.3s ease-out 0.5s;
    }
    .fall-effect h2 {
       -webkit-transform: translateY(-200px);
       -moz-transform: translateY(-200px);
       -o-transform: translateY(-200px);
       -ms-transform: translateY(-200px);
       transform: translateY(-200px);
       -webkit-transition: all 0.2s ease-in-out 0.1s;
       -moz-transition: all 0.2s ease-in-out 0.1s;
       -o-transition: all 0.2s ease-in-out 0.1s;
       -ms-transition: all 0.2s ease-in-out 0.1s;
       transition: all 0.2s ease-in-out 0.1s;
    }
    .fall-effect p {
       color: #333;
       -webkit-transform: translateY(-200px);
       -moz-transform: translateY(-200px);
       -o-transform: translateY(-200px);
       -ms-transform: translateY(-200px);
       transform: translateY(-200px);
       -webkit-transition: all 0.2s ease-in-out 0.2s;
       -moz-transition: all 0.2s ease-in-out 0.2s;
       -o-transition: all 0.2s ease-in-out 0.2s;
       -ms-transition: all 0.2s ease-in-out 0.2s;
       transition: all 0.2s ease-in-out 0.2s;
    }
    .fall-effect a.btn {
       -webkit-transform: translateY(-200px);
       -moz-transform: translateY(-200px);
       -o-transform: translateY(-200px);
       -ms-transform: translateY(-200px);
       transform: translateY(-200px);
       -webkit-transition: all 0.2s ease-in-out 0.3s;
       -moz-transition: all 0.2s ease-in-out 0.3s;
       -o-transition: all 0.2s ease-in-out 0.3s;
       -ms-transition: all 0.2s ease-in-out 0.3s;
       transition: all 0.2s ease-in-out 0.3s;
    }
    .fall-effect:hover .mask {
       -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
       filter: alpha(opacity=100);
       opacity: 1;
       top: 0px;
       -webkit-transition-delay: 0s;
       -moz-transition-delay: 0s;
       -o-transition-delay: 0s;
       -ms-transition-delay: 0s;
       transition-delay: 0s;

    }
    .fall-effect:hover h2 {
       -webkit-transform: translateY(0px);
       -moz-transform: translateY(0px);
       -o-transform: translateY(0px);
       -ms-transform: translateY(0px);
       transform: translateY(0px);
       -webkit-transition-delay: 0.4s;
       -moz-transition-delay: 0.4s;
       -o-transition-delay: 0.4s;
       -ms-transition-delay: 0.4s;
       transition-delay: 0.4s;
    }
    .fall-effect:hover p {
       -webkit-transform: translateY(0px);
       -moz-transform: translateY(0px);
       -o-transform: translateY(0px);
       -ms-transform: translateY(0px);
       transform: translateY(0px);
       -webkit-transition-delay: 0.2s;
       -moz-transition-delay: 0.2s;
       -o-transition-delay: 0.2s;
       -ms-transition-delay: 0.2s;
       transition-delay: 0.2s;
    }
    .fall-effect:hover a.btn {
       -webkit-transform: translateY(0px);
       -moz-transform: translateY(0px);
       -o-transform: translateY(0px);
       -ms-transform: translateY(0px);
       transform: translateY(0px);
       -webkit-transition-delay: 0s;
       -moz-transition-delay: 0s;
       -o-transition-delay: 0s;
       -ms-transition-delay: 0s;
       transition-delay: 0s;
    }


<!--End last hover image Effect-->















html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<h1 class="text-center mt-5">Our Best Team</h1>
<br>
<div class="container">
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/staff-2.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Abhishek Gouda</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/staff-3.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Vachaspati Annaladas</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/staff-4.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Amruta Vasal</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  
  <div class="column">
    <div class="card">
      <img src="images/1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">AGENT</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/3.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Member</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/4.jpg" alt="John" style="width:100%;">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Member</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>



    
<!--last galley -->

<div class="container mb-5">
    <h1 class="text-center text-muted"></h1>
      <div class="row">
        <div class="col-xs-6 col-sm-3 hover-zoomin">
          <a href="#" title="">
            <img src="images/apartament-9-760x510.jpg" alt=""/>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 hover-fade">
          <a href="#" title="">
            <img src="images/apartament-9-1399x899.jpg" alt=""/>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="images/apartament-7-1399x899.jpg" alt=""/>
            <h2><span class="text-white">Hover Blur</span></h2>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 hover-mask">
          <a href="#" title="">
            <img src="images/apartament-4-1399x899.jpg" alt=""/>
            <h2><span class="glyphicon glyphicon-search"></span></h2>
          </a>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-xs-6 col-sm-3 hover-zoomout">
          <a href="" title="">
          <img src="images/alice-kang-1399x899.jpg" alt="" />
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 hover-blurout">
          <a href="#" title="">
            <img src="images/apartament-12-1399x899.jpg" alt=""/>
            <h2><span class="glyphicon glyphicon-search"></span></h2>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3">
          <div class="overlay-item overlay-effect">
            <img src="images/apartament-10-1399x899.jpg" alt="" />
              <div class="mask">
                <h3>OVERLAY</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus doloremque natus quidem id.
                </p>
                <a href="#" class="btn btn-default">Read More</a>
              </div>
          </div>
      </div>
        <!-- Hover-Fall Effect-->
        <div class="col-xs-6 col-sm-3">
          <div class="fall-item fall-effect">
                    <img src="images/apartament-10-1399x899.jpg">
                    <div class="mask">
                        <h2>Hover Fall</h2>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <a href="#" class="btn btn-default">Read More</a>
                    </div>
                </div>
        </div>
      </div>
    </div>
    


    <?php
include('footer.php');
?>



<!--End Last gallery -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>