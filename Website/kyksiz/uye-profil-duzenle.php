
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
                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm">
                    <div class="contact_form">
                        <h3><i class="fa fa-user grd1 global-radius"></i>Üye Profili
                        </h3>
                        
                        <div class="module-body">
                                    
                                <form class="row" method="POST" action="nedmin/netting/islem.php" name="contactform">

                                <input type="hidden" name="uye_id" value="<?php echo $uyecek['uye_id']?>">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <i> Adınız:</i>
                                    <input type="text" name="uye_ad" class="form-control" required="" value="<?php echo $uyecek['uye_ad']; ?>">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <i> Soyadınız:</i>
                                    <input type="text" name="uye_soyad" class="form-control" required="" value="<?php echo $uyecek['uye_soyad']; ?>">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <i> T.C No:</i>
                                    <input type="text" name="uye_tc" class="form-control" required="" value="<?php echo $uyecek['uye_tc']; ?>">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <i> Email:</i>
                                    <input type="email" name="uye_email" class="form-control" required="" disabled="" value="<?php echo $uyecek['uye_email']; ?>">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <i> Telefon:</i>
                                    <input type="text" name="uye_gsm" class="form-control" required="" value="<?php echo $uyecek['uye_gsm']; ?>">
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <i> Doğum Tarihiniz:</i>
                                    <input type="date" name="uye_dogum" class="form-control" required="" value="<?php echo $uyecek['uye_dogum']; ?>">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <i> Durum:</i>
                                    <select class="form-control" name="uye_durum" required="">
                            
                                        <option value="1" <?php echo $uyecek['uye_durum']=='1' ? 'selected=""' : ''; ?>>Aktif</option>

                                        <option value="0" <?php echo $uyecek['uye_durum']=='0' ? 'selected=""' : ''; ?>>Pasif</option>

                                    </select>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <i> Kayıt Tarihi:</i>
                                    <input type="text" name="uye_kayit" id="uye_kayit" class="form-control" disabled="" value="<?php echo $uyecek['uye_kayit']; ?>">
                                </div>                                

                                <div class="col-lg-8"> 
                                <?php if($_GET['durum']=="ok"){ ?>
                                <b style="color:green;">Başarılı.</b>
                                
                                <?php } elseif($_GET['durum']=="no"){ ?>
                                <b style="color:red;">Başarısız.</b>
                                <?php }  ?>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                                    <button type="submit" value="SEND" name="uyeprofilduzenle" class="btn btn-light btn-radius btn-brd grd1 btn-block">Düzenle</button>
                                </div>
                            
                        </form>
                            </div>
                        
                    </div>

                </div>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
<?php include 'footer.php';?>   	