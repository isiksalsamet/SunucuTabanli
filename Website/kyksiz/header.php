
<?php 
    include 'nedmin/admin/fonksiyon.php';
    include 'nedmin/netting/baglan.php'; 
    error_reporting(0);

    $ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
    $ayarsor->execute(array(
    'id'=>0
    ));
    $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);    

    //--------------------------------------------------------------    
    
    $apartyurtsor=$db->prepare("SELECT * FROM apartyurt where apartyurt_id=:apartyurt_id");
    $apartyurtsor->execute(array(
        'apartyurt_id'=>$_SESSION['apartyurt_id']
    ));
    $apartyurtcek=$apartyurtsor->fetch(PDO::FETCH_ASSOC);

    //--------------------------------------------------------------
    $uyesor=$db->prepare("SELECT * FROM uyeler where uye_email=:uye_email");
    $uyesor->execute(array(
        'uye_email'=>$_SESSION['uye_email']
    ));
    $uyecek=$uyesor->fetch(PDO::FETCH_ASSOC);
    $sayi=$uyesor->rowCount();

    //--------------------------------------------------------------

    $hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
    $hakkimizdasor->execute(array(
    'id'=>0
    ));
    $hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
   
if($uyecek>0){
     if($sayi==0){

        Header("Location:girisyap.php?durum=izinsiz");
    
        exit;
    }else{
?>

        <!DOCTYPE html>
        <html lang="en" xmlns="http://www.w3.org/1999/xhtml">

            <!-- Basic -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">   
           
            <!-- Mobile Metas -->
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
            
            <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
             <!-- Site Metas -->
            <title>KYKSIZ</title>  
            <meta name="keywords" content="">
            <meta name="description" content="">
            <meta name="author" content="">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <!-- Site Icons -->
            <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
            <link rel="apple-touch-icon" href="images/kyksiz2.png">
        <head>
            
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <!-- Site CSS -->
            <link rel="stylesheet" href="style.css">
            <!-- Colors CSS -->
            <link rel="stylesheet" href="css/colors.css">
            <!-- ALL VERSION CSS -->
            <link rel="stylesheet" href="css/versions.css">
            <!-- Responsive CSS -->
            <link rel="stylesheet" href="css/responsive.css">
            <!-- Custom CSS -->
            <link rel="stylesheet" href="css/custom.css">
            <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
            <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
                    rel='stylesheet'>
                    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>


        </head>
        <body class="realestate_version">

            <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous" type="text/javascript"></script>

            <header class="header header_style_01">
                <nav class="megamenu navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="<?php echo $ayarcek['ayar_logo']?>" alt="image"></a>
                            
                        </div>


                        <div id="navbar" class="navbar-collapse collapse">

                            <ul class="nav navbar-nav navbar-left">
                                <li><a class="active" href="index.php">Anasayfa</a></li>
                                
                                <?php

                                        //menüleri sıra numarasına bağlı baştan sona doğru ekler limit 5 e kadar
                                        $menusor=$db->prepare("SELECT * FROM menu where menu_durum=:durum order by menu_sira ASC limit 6 ");
                                        $menusor->execute(array(
                                            'durum'=> 1

                                        ));
                                        while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {

                                        ?>
                                        
                                        <li><a href="
                                        <?php
                                            if(!empty($menucek['menu_url'])){

                                                echo $menucek['menu_url'];

                                            }else{

                                                echo "sayfa-".seo($menucek['menu_ad']);
                                            }
                                        ?>
                                        "><?php echo $menucek['menu_ad'] ?></a></li>

                                        <?php } ?> 
         
                               
                            </ul>

                            <ul class="nav navbar-nav navbar-right">

                                <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i> <!-- <img src="#" class="nav-avatar" /> -->
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Hoşgeldin,<br><?php echo $uyecek['uye_ad'] ?> <?php echo $uyecek['uye_soyad'] ?></a></li>
                                    <li class="divider"></li>
                                    <li><a href="uye-profil.php">Profilim</a></li>
                                    <li><a href="uye-profil-duzenle.php">Profil düzenle</a></li>
                                    <li><a href="uye-sifre-degistir.php">Şifre Değiştir</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Çıkış Yap</a></li>
                                </ul>
                                </li>

                                <li class="search-option">
                                    
                                    <button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    <form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
                                        <input type="text" placeholder="Arama Yap..">
                                        <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                               </li> 
                            </ul>

                        </div>
                    </div>
                </nav>
            </header>
    <?php } }else{ ?>
    <!DOCTYPE html>
        <html lang="en">

            <!-- Basic -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">   
           
            <!-- Mobile Metas -->
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
         
             <!-- Site Metas -->
            <title>KYKSIZ</title>  
            <meta name="keywords" content="">
            <meta name="description" content="">
            <meta name="author" content="">

            <!-- Site Icons -->
            <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
            <link rel="apple-touch-icon" href="kyksiz2.png">
        <head>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <!-- Site CSS -->
            <link rel="stylesheet" href="style.css">
            <!-- Colors CSS -->
            <link rel="stylesheet" href="css/colors.css">
            <!-- ALL VERSION CSS -->
            <link rel="stylesheet" href="css/versions.css">
            <!-- Responsive CSS -->
            <link rel="stylesheet" href="css/responsive.css">
            <!-- Custom CSS -->
            <link rel="stylesheet" href="css/custom.css">
            <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
            <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
                    rel='stylesheet'>


        </head>
        <body class="realestate_version">

            <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous" type="text/javascript"></script>

            <header class="header header_style_01">
                <nav class="megamenu navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="<?php echo $ayarcek['ayar_logo']?>" alt="image"></a>
                            
                        </div>


                        <div id="navbar" class="navbar-collapse collapse">

                            <ul class="nav navbar-nav navbar-left">
                                <li><a class="active" href="index.php">Anasayfa</a></li>
                                
                                <?php

                                        //menüleri sıra numarasına bağlı baştan sona doğru ekler limit 5 e kadar
                                        $menusor=$db->prepare("SELECT * FROM menu where menu_durum=:durum order by menu_sira ASC limit 6 ");
                                        $menusor->execute(array(
                                            'durum'=> 1

                                        ));
                                        while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {

                                        ?>
                                        
                                        <li><a href="
                                        <?php
                                            if(!empty($menucek['menu_url'])){

                                                echo $menucek['menu_url'];

                                            }else{

                                                echo "sayfa-".seo($menucek['menu_ad']);
                                            }
                                        ?>
                                        "><?php echo $menucek['menu_ad'] ?></a></li>

                                        <?php } ?> 
         
                               
                            </ul>

                            <ul class="nav navbar-nav navbar-right">

                                <li class="search-option">
                                    <a  href="girisyap.php"><i>Giriş Yap</i></a>
                                </li> 

                                <li class="search-option">
                                    
                                    <button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    <form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
                                        <input type="text" placeholder="Arama Yap..">
                                        <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                               </li> 
                            </ul>

                        </div>
                    </div>
                </nav>
            </header>
    <?php } ?>           