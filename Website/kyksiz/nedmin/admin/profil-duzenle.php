<?php 

	include 'header.php'; 
	error_reporting(0);
?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Profil Ayarları</h3>
								
								</div>
									<?php if($_GET['durum']=="ok"){ ?>
                  					<div align="right" class="module-head">
                                  	<b style="color:green;">İşlem Başarılı.</b>
                                	</div>  
                                
                              		<?php } elseif($_GET['durum']=="no"){ ?>
                              		<div align="right" class="module-head">
                                	<b style="color:red;">İşlem Başarısız.</b>
                              		</div>
                              		<?php }  ?>
								<div class="module-body">

									
									<form action="../netting/islem.php" method="POST" class="form-horizontal row-fluid" >
										<div class="control-group">
											<label class="control-label" for="basicinput">Tc Kimlik No*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="kullanici_tc" value="<?php echo $kullanicicek['kullanici_tc']?>" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Adı Soyadı*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Telefon Numarası*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="kullanici_gsm" value="<?php echo $kullanicicek['kullanici_gsm']?>" class="span8" >
											</div>
										</div>


										
										<div class="control-group">
											<label class="control-label" for="basicinput">Mail*</label>
											<div class="controls">
												<input type="email" id="basicinput"  name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail']?>" disabled="" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">İl*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="kullanici_il" value="<?php echo $kullanicicek['kullanici_il']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">İlçe*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="kullanici_ilce" value="<?php echo $kullanicicek['kullanici_ilce']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Adres*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="kullanici_adres" value="<?php echo $kullanicicek['kullanici_adres']?>" class="span8" >
											</div>
										</div><hr>

										<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']?>">

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="profilduzenle" class="btn btn-success">Düzenle</button>
											</div>
										</div>
										
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include 'footer.php'; ?>