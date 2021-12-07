<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Info4042 Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/_vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/_vendor/prismjs/themes/prism-okaidia.css">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- importer notre style css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animation.css">

</head>
<body>
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
          <a href="<?= base_url(); ?>" class="navbar-brand">Info4042 Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="flex-grow: 0;">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url().'home'; ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url().'about'; ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url().'posts'; ?>">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="download">Administration <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" rel="noopener" href="<?= base_url().'posts/create'; ?>">Create a Post</a>
                <a class="dropdown-item" rel="noopener" href="<?= base_url().'users/create'; ?>">Create a User</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">