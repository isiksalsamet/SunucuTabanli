
<?php 
include 'header.php';
error_reporting(0);

?>
    
    <ul class='slideshow'>
        <li>
            <span>Summer</span>
        </li>
        <li>        
            <span>Fall</span>
        </li>
        <li>        
            <span>Winter</span>
        </li>
        <li>
            <span>Spring</span>
        </li>
    </ul>
		
    <div class="parallax first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm">
                    <div class="contact_form">
                        <h3><i class="fa fa-user grd1 global-radius"></i>Kayıt Ol</h3>
                        <?php if($_GET['durum']=="farklisifre"){ ?>
                                    <div class="alert alert-danger">
                                        <strong>Hata!</strong>Girdiğiniz Şifreler Eşleşmiyor.
                                    </div>  
                                    
                                    <?php } elseif($_GET['durum']=="eksiksifre"){ ?>
                                    <div class="alert alert-danger">
                                        <strong>Hata!</strong>Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
                                    </div>
                                    <?php } elseif ($_GET['durum']=="mukerrerkayit"){ ?>
                                    <div class="alert alert-danger">
                                        <strong>Hata!</strong>Bu kullanıcı daha önce kayıt edilmiş
                                    </div>    
                                        
                                    <?php } elseif ($_GET['durum']=="basarisiz") { ?>
                                    <div class="alert alert-danger">
                                        <strong>Hata!</strong>Kayıt Yapılamadı..
                                    </div>
                                    
                                    <?php } ?> 
                        <form id="contactform1" class="row" name="contactform" method="POST" action="nedmin/netting/islem.php">
                            <fieldset class="row-fluid">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                                    <input type="text" name="uye_ad" id="uye_ad" class="form-control" required="" placeholder="Adınız">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="uye_soyad" id="uye_soyad" class="form-control" required="" placeholder="Soyadınız">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="uye_tc" id="uye_tc" class="form-control" required="" placeholder="T.C Kimlik no">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="uye_gsm" id="uye_gsm" class="form-control" required="" placeholder="Telefon(GSM)">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="uye_email" id="uye_email" class="form-control" required="" placeholder="Kullanıcı Adı(Email)">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" name="uye_dogum" id="uye_dogum" class="form-control" required="" placeholder="Doğum Tarihiniz">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="uye_sifre" id="uye_sifre" class="form-control" required="" placeholder="Şifre">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="uye_sifre1" id="uye_sifre1" class="form-control" required="" placeholder="Şifre Tekrar">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit1" name="uyekaydet" class="btn btn-light btn-radius btn-brd grd1 btn-block">Kayıt Ol</button>
                                </div>

                            </fieldset>
                        </form>
                    </div>

                </div>
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
<?php include 'footer.php';?>	
	

   

   

