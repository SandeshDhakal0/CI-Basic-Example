<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="assets/css/styles.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <title>Dashboard</title>
    <style>
    body {
        background-image: radial-gradient(circle,
                #e7eced,
                #d4ecec,
                #c2ece5,
                #b6ebd7,
                #b2e8c3);
    }
    </style>
</head>

<body>
    
    <!-- <div class="row justify-content-center">
        <img src="assets/img/logo.png" alt="" class="center" style="height: 64px; width: 230px" />
    </div> -->
    <!-- The side bar starts here -->
    <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="/login">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text"> Dashboard </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="news/create">
                    <i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text"> Add Products </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text"> User data </span>
                </a>
            </li>
        </ul>
        <ul class="logout">
            <li>
                <a href="#">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text"> Logout </span>
                </a>
            </li>
        </ul>
    </nav>

    