<?php 

	include 'header.php'; 

	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
  	$kullanicisor->execute(array(
    'id'=>$_GET['kullanici_id'] 
  	));
 
	$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
	error_reporting(0);
?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Kullanici Ayarları</h3>
								
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
											<label class="control-label" for="basicinput">Tc Kimlik Numarası*</label>

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
											<label class="control-label" for="basicinput">Kullanıcı Telefon*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="kullanici_gsm" value="<?php echo $kullanicicek['kullanici_gsm']?>" class="span8" >
											</div>
										</div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Kullanıcı Mail*</label>
											<div class="controls">
												<input type="email" name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail']?>"  disabled="">
											</div>
										</div>

										<?php 
                        					$zaman=explode(" ",$kullanicicek['kullanici_zaman']);
                      					?>

										<div class="control-group">
											<label class="control-label" for="basicinput">Kayıt Tarihi*</label>
											<div class="controls">
												
													<input type="date" id="basicinput" name="kullanici_zaman" value="<?php echo $zaman[0]; ?>" class="span8" disabled="" >

											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Mail Durum*</label>
											<div class="controls">
												<div class="input-append">
													<select id="heard" class="control-form" name="kullanici_durum" required="">
                            
                            							<option value="1" <?php echo $kullanicicek['kullanici_durum']=='1' ? 'selected=""' : ''; ?>>Aktif</option>

                            							<option value="0" <?php echo $kullanicicek['kullanici_durum']=='0' ? 'selected=""' : ''; ?>>Pasif</option>

                          							</select>
												</div>
											</div>
										</div><hr>

										<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>">

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="kullaniciduzenle" class="btn btn-success">Kaydet</button>
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