<?php
alert("Welcome");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
<html>
<style media="screen">
body, html {
    height: 100%;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("banner.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

</style>
<head>
  <title>Zed's Tech</title>
</head>
  <body>
    <div class="hero-image">
    <div class="hero-text">
      <h1>Welcome To Zed's</h1>
      <p>Click Get Started to know more!</p>
    <a href="home.html"><button>Get Started</button></a>
    </div>
  </div>
</div>
  </body>
