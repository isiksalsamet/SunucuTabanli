<?php include 'header.php'; ?>
	<div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>İletişim</h2>
					<!-- Breadcrumbs -->
					
				</div>
			</div>
		</div>
	</div>
	
	<div id="support" class="section wb">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="contact_form">
                        <div id="message"></div>
                        

                        <form class="row" method="POST" action="nedmin/netting/islem.php" name="contactform">
                            
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="iletisim_ad" id="iletisim_ad" class="form-control" placeholder="Adınızı giriniz.." required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="iletisim_soyad" id="iletisim_soyad" class="form-control" placeholder="Soyadınızı giriniz.." required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="iletisim_email" id="iletisim_email" class="form-control" placeholder="Mail adresinizi giriniz.." required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="iletisim_gsm" id="iletisim_gsm" class="form-control" placeholder="Telefon numaranızı giriniz..">
                                </div>
                               
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="iletisim_mesaj" id="iletisim_mesaj" rows="6" placeholder="Mesajınızı giriniz.." required=""></textarea>
                                </div>
                            	
                            	<div class="col-lg-8"> 
                            	<?php if($_GET['durum']=="ok"){ ?>
                                <b style="color:green;">Başarılı.</b>
                                
                            	<?php } elseif($_GET['durum']=="no"){ ?>
                                <b style="color:red;">Başarısız.</b>
                            	<?php }  ?>
                            	</div>
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                                    <button type="submit" value="SEND" name="iletisimgonder" class="btn btn-light btn-radius btn-brd grd1 btn-block">Gönder</button>
                                </div>
                           	
                        </form>

                    </div>
                </div><!-- end col -->
				<div class="col-md-6">
					<div class="right-box-contact">
						<h4>Telefon</h4>
						<div class="support-info">
							<div class="info-title">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<?php echo $ayarcek['ayar_tel']?> - <?php echo $ayarcek['ayar_gsm']?>
								
							</div>
						</div>
					</div>
					<div class="right-box-contact">
						<h4>Adres</h4>
						<div class="support-info">
							<div class="info-title">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<?php echo $ayarcek['ayar_adres']?> - <?php echo $ayarcek['ayar_ilce']?> / <?php echo $ayarcek['ayar_il']?>
							</div>
						</div>
					</div>
					<div class="right-box-contact">
						<h4>Email</h4>
						<div class="support-info">
							<div class="info-title">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<?php echo $ayarcek['ayar_mail']?>
								
							</div>
						</div>
					</div>
				</div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

<?php include 'footer.php'; ?>