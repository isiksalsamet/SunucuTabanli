
<?php 

include'header.php'; 
   
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
                <div class="col-md-4 wow slideInLeft hidden-xs hidden-sm">
                    <div class="contact_form">
                        <h3><i class="fa fa-user grd1 global-radius"></i>Üye Profili
                        </h3>
                        
                        <div class="module-body">
                                    
                                <form class="row" method="POST" action="nedmin/netting/islem.php" name="contactform">

                                <input type="hidden" name="uye_id" value="<?php echo $uyecek['uye_id']?>">

                                <input type="hidden" name="uye_eski" value="<?php echo $uyecek['uye_sifre']?>"> 

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <i>Eski Şifre:</i>
                                    <input type="text" name="uye_eskisifre" class="form-control" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <i>Yeni Şifre:</i>
                                    <input type="password" name="uye_yenisifre" class="form-control" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <i>Yeni Şifre Tekrar:</i>
                                    <input type="password" name="uye_yenisifre2" class="form-control" required="">
                                </div>                             

                                <div class="col-lg-6"> 
                                <?php if($_GET['durum']=="ok"){ ?>
                                    <div align="right" class="module-head">
                                    <b style="color:green;">İşlem Başarılı.</b>
                                    </div>  
                                
                                    <?php } elseif($_GET['durum']=="no"){ ?>
                                    <div align="right" class="module-head">
                                    <b style="color:red;">İşlem Başarısız.</b>
                                    </div>
                                    <?php } elseif($_GET['durum']=="eslesmiyor"){ ?>
                                    <div align="right" class="module-head">
                                    <b style="color:red;">Girilen şifreler eşleşmiyor.</b>
                                    </div>  
                                
                                    <?php } elseif($_GET['durum']=="eskiyanlis"){ ?>
                                    <div align="right" class="module-head">
                                    <b style="color:red;">Girilen eski şifre yanlış.</b>
                                    </div>
                                <?php }  ?>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                                    <button type="submit" value="SEND" name="uyesifredegistir" class="btn btn-light btn-radius btn-brd grd1 btn-block">Kaydet</button>
                                </div>
                            
                        </form>
                            </div>
                        
                    </div>

                </div>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
<?php include 'footer.php';?>   	