<?php
alert("Welcome to ATN Web Application");

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
  <title>ATN Web Application</title>
</head>
  <body>
    <div class="hero-image">
    <div class="hero-text">
      <h1>Welcome To ATN Web Application</h1>
      <p>This Application belongs to ATN Company</p>
      <button>Get Started</button>
    </div>
  </div>
</div>
  </body>
