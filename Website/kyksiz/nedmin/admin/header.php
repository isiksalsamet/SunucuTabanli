<?php

  include '../netting/baglan.php';
  include 'fonksiyon.php';
  error_reporting(0);
  
  //belirli veriyi çekme işlemi
  $ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
  $ayarsor->execute(array(
    'id'=>0
  ));
  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

  //-------------------------------------------

  $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
  $kullanicisor->execute(array(
    'mail'=>$_SESSION['kullanici_mail']
  ));
  $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
  $say=$kullanicisor->rowCount();

  if($say==0){

    Header("Location:login/login.php?durum=izinsiz");
    exit;
  }
  
  //--------------------------------------------

  

?>
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Paneli</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Admin Paneli</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        
                        <ul class="nav pull-right">

                            <li><a href="#"><input type="text" name="arama" placeholder="Arama Yap..." ></a></li> 
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Hoşgeldin,<br><?php echo $kullanicicek['kullanici_ad'] ?> <?php echo $kullanicicek['kullanici_soyad'] ?> </a></li>
                                    <li class="divider"></li>
                                    <li><a href="profil.php">Profilim</a></li>
                                    <li><a href="profil-duzenle.php">Profil düzenle</a></li>
                                    <li><a href="sifre-degistir.php">Şifre Değiştir</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Çıkış Yap</a></li>
                                                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li><a href="index.php"><i class="menu-icon icon-home"></i>Anasayfa </a>
                                </li>
                                <li class="active"><a href="kullanici.php"><i class="menu-icon icon-user"></i>Kullanıcılar
                                </a></li>
                                <li class="active"><a href="uyeler.php"><i class="menu-icon icon-user"></i>Üyeler
                                </a></li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-building">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Apart,Yurt ve İlanlar </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="apartyurt.php"><i class="icon-inbox"></i>Apart ve Yurtlar</a></li>
                                        <li><a href="ilanlar.php"><i class="icon-inbox"></i>Üye İlanları</a></li>                                     
                                    </ul>
                                </li>
                                
                                <li><a href="hakkimizda.php"><i class="menu-icon icon-edit"></i>Hakkımızda</a></li>
                                <li><a href="menu.php"><i class="menu-icon icon-list"></i>Menüler</a></li>
                                <li><a href="iletisim.php"><i class="menu-icon icon-phone"></i>İletişim</a></li>

                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Site Ayarları </a>
                                    <ul id="togglePage" class="collapse unstyled">
                                        <li><a href="genel-ayar.php"><i class="icon-inbox"></i>Genel Ayarlar </a></li>
                                        <li><a href="iletisim-ayar.php"><i class="icon-inbox"></i>İletişim Ayarları </a></li>
                                        <li><a href="api-ayar.php"><i class="icon-inbox"></i>Api Ayarları </a></li>
                                        <li><a href="sosyal-ayar.php"><i class="icon-inbox"></i>Sosyal Ayarlar </a></li>
                                        <li><a href="mail-ayar.php"><i class="icon-inbox"></i>Mail Ayarları </a></li>
                                    </ul>
                                </li>
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Çıkış Yap </a></li>
                            </ul>
                            <!--/.widget-nav-->
                      
                        </div>
                        <!--/.sidebar-->
                    </div>