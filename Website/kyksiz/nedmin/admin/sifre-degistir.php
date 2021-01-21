<?php 

	include 'header.php'; 
	error_reporting(0);
?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div>
							<div class="module-head">
								<h3>Şifre Değiştir</h3>
								
							</div>
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
								<div class="module-body">
									
									<form action="../netting/islem.php" method="POST" class="form-horizontal row-fluid" >

										<input type="hidden" name="kullanici_password" value="<?php echo $kullanicicek['kullanici_password']?>">
										<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']?>">

										<div class="control-group">
											<label class="control-label">Şifrenizi Giriniz*</label>

											<div class="controls">
												<input type="text"  id="basicinput"  name="eski_sifre"  class="span8" required="">
												
											</div>
										</div><hr>

										<div class="control-group">
											<label class="control-label" for="basicinput">Yeni Şifre Giriniz*</label>
											<div class="controls">
												<input type="password" id="basicinput" name="yeni_sifre" class="span8" required="">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput" >Tekrar Giriniz*</label>
											<div class="controls">
												<input type="password" id="basicinput" name="yeni_sifre2" class="span8" required="" >
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="sifredegistir" class="btn btn-success">Kaydet</button>
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