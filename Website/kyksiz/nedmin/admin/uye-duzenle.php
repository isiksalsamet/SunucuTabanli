<?php 

	include 'header.php'; 
	error_reporting(0);

	$uyesor=$db->prepare("SELECT * FROM uyeler where uye_id=:id");
  	$uyesor->execute(array(
    'id'=>$_GET['uye_id'] 
  	));
 
	$uyecek=$uyesor->fetch(PDO::FETCH_ASSOC);
	error_reporting(0);

?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Üye Ayarları</h3>
								
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
											<label class="control-label" for="basicinput">Üye Adı*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="uye_ad" value="<?php echo $uyecek['uye_ad']?>" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Üye Soyadı*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="uye_soyad" value="<?php echo $uyecek['uye_soyad']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Üye T.C No*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="uye_tc" value="<?php echo $uyecek['uye_tc']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Üye Doğum Tarihi*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="uye_dogum" value="<?php echo $uyecek['uye_dogum']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Üye Telefon*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="uye_gsm" value="<?php echo $uyecek['uye_gsm']?>" class="span8" >
											</div>
										</div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Üye Email*</label>
											<div class="controls">
												<input type="email" id="basicinput" disabled="" name="uye_email" value="<?php echo $uyecek['uye_email']?>" class="span8">
											</div>
										</div>			

										<div class="control-group">
											<label class="control-label" for="basicinput">Mail Durum*</label>
											<div class="controls">
												<div class="input-append">
													<select class="control-form" name="uye_durum" required="">
                            
                            							<option value="1" <?php echo $uyecek['uye_durum']=='1' ? 'selected=""' : ''; ?>>Aktif</option>

                            							<option value="0" <?php echo $uyecek['uye_durum']=='0' ? 'selected=""' : ''; ?>>Pasif</option>

                          							</select>
												</div>
											</div>
										</div><hr>

										<input type="hidden" name="uye_id" value="<?php echo $uyecek['uye_id']; ?>">

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="uyeduzenle" class="btn btn-success">Kaydet</button>
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