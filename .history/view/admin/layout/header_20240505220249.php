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
      column-gap: 30px;
    }
    .admin-list-job-offer h1.desc-style {
    margin-top: 40px;
    font-size: 30px;
    font-family: "Poppins", sans-serif;
    text-align: center;
    font-weight: 500;
    text-transform: uppercase;
    color: #2c4395;
}
.admin-list-job-offer th {
    background: #2c4395;
    color: #fff;
    font-family: "Poppins", sans-serif;
}
.btn-recrut {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ee3a87;
    color: #ffffff;
    border-radius: 30px;
    padding: 5px 30px;
    font-size: 20px;
    font-family: "Poppins", sans-serif;
    text-decoration: none;
    border: unset;
}
.admin-list-job-offer tr td {
    border-bottom: 1px solid #2c4395;
    padding: 0 8px;
}
.admin-heaser-list {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
    .easyRecruit-logo-dashbord{
      display: flex;
      flex-direction: column;
      background: black;
      height: 400vh;
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
    .admin-list-job-offer {
    width: 100%;
    display: flex;
    flex-direction: column;
}
    .style-page-list{
      display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    }
    a.btn-admin-edit {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ee3a87;
    color: #ffffff;
    border-radius: 30px;
    padding: 5px 30px;
    font-size: 14px;
    font-family: "Poppins", sans-serif;
    text-decoration: none;
    border: unset;
    width: max-content;
    margin-bottom: 8px
}
a.btn-admin-delate {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #2c4395;
    color: #ffffff;
    border-radius: 30px;
    padding: 5px 37px;
    font-size: 14px;
    font-family: "Poppins", sans-serif;
    text-decoration: none;
    border: unset;
    width: max-content;
}
  </style>
</head>
<body class="dashbord">
    <div class="easyRecruit-logo-dashbord">
      <div class="logo-header-dashbord">
        <a href="/projetweb/admin/">
          <img src="../view/admin/img/EasyRecruit-logo-dash.png" alt="logo" width="60">
        </a>
      </div>
     
      <a href="/projetweb/admin/" class="joboffer-show">      <img src="../view/admin/img/dashbordsvg.svg" class="icon-joboffer-show" alt="icon" width="20"> tableau de bord</a>

        <a href="index.php?controller=joboffer&action=list" class="joboffer-show">      <img src="../view/admin/img/eye-dashbord.svg" class="icon-joboffer-show" alt="icon" width="20">offre d'emploi</a>
        <a href="" class="joboffer-show">      <img src="../view/admin/img/user.svg" class="icon-joboffer-show" alt="icon" width="20"> User</a>
        <a href="" class="joboffer-show">      <img src="../view/admin/img/eye-dashbord.svg" class="icon-joboffer-show" alt="icon" width="20"> Forum</a>   
        <a href="" class="joboffer-show">      <img src="../view/admin/img/eye-dashbord.svg" class="icon-joboffer-show" alt="icon" width="20"> Reclamation</a>      
    </div>