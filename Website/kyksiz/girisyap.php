
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
                        <h3><i class="fa fa-user grd1 global-radius"></i>Giriş Yap
                        <ul class="nav navbar-nav navbar-right">
                        <li>
                            

                            <?php 
                                if($_GET['durum']=="ok")
                                {
                                    echo" <b style='color:green;'>Giriş Başarılı</b>";
                                   
                                }
                                else if($_GET['durum']=="no")
                                {
                                    echo"<b style='color:red;'>Giriş Başarısız.</b>";
                                }
                            ?>

                        </li>
                        </ul>
                        </h3>
                        

                        <form id="contactform1" class="row" name="contactform" method="POST" action="nedmin/netting/islem.php">
                            <fieldset class="row-fluid">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="uye_email" id="username" class="form-control" placeholder="Kullanıcı Adı(Email)" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="uye_sifre" id="password" class="form-control" placeholder="Şifre" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit1" name="uyegiris" class="btn btn-light btn-radius btn-brd grd1 btn-block">Giriş Yap</button>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a  href="kayitol.php"><i>Kayıt Ol</i></a></li>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a  href="#"><i>Şifremi Unuttum</i></a></li>
                                </div>

                            </fieldset>
                        </form>
                    </div>

                </div>
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
<?php include 'footer.php';?>	
	

   

   

