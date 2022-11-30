<?php

include("header.php");

?>
<style>
  #a{color: black}
  </style>
<nav class="navbar navbar-expand-lg bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" id="a"  href="#">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" id="a" href="./navbar.php">about</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="a"  href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Registration
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">customer</a></li>
            <li><a class="dropdown-item" href="#">account</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">hall</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>