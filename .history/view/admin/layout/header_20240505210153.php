<?php
?>

<html>
<head>
  <meta charset="utf-8">
  <title>EasyRecrute</title>
  <link rel="stylesheet" href="../../view/css/custom.css">
  <script src="../view/js/custom.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    .dashbord{
      display: flex;
    }
    .easyRecruit-logo-dashbord{
      display: flex;
      flex-direction: column;
      background: black;
      height: 100vh;
      max-width: 200px;
      padding: 10px;
    }
    .joboffer-show{ 
      text-transform: uppercase;
      color: #ffffff;
      font-family: "Poppins", sans-serif;
      font-size: 14px;
      text-decoration: unset;
    
    }
    .joboffer-show:hover{
      text-decoration: underline;
    }
    .joboffer-show{
      margin-top: 20px;
    display: flex;
    column-gap: 23px;
    }
    .style-page-list{
      display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    }
  </style>
</head>
<body class="dashbord">
    <div class="easyRecruit-logo-dashbord">
      <div class="logo-header-dashbord">
          <img src="../img/EasyRecruit-logo-dash.png" alt="logo" width="60">
      </div>
     
      <a href="" class="joboffer-show">      <img src="../img/dashbordsvg.svg" class="icon-joboffer-show" alt="icon" width="20"> tableau de bord</a>

        <a href="index.php?controller=joboffer&action=list" class="joboffer-show">      <img src="../img/eye-dashbord.svg" class="icon-joboffer-show" alt="icon" width="20">offre d'emploi</a>
        <a href="" class="joboffer-show">      <img src="../img/user.svg" class="icon-joboffer-show" alt="icon" width="20"> User</a>
        <a href="" class="joboffer-show">      <img src="../img/eye-dashbord.svg" class="icon-joboffer-show" alt="icon" width="20"> Forum</a>   
        <a href="" class="joboffer-show">      <img src="../img/eye-dashbord.svg" class="icon-joboffer-show" alt="icon" width="20"> Reclamation</a>      
    </div>