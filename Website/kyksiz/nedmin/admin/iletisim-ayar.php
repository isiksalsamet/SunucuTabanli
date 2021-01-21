<?php 

	include 'header.php'; 
	error_reporting(0);
?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>İletişim Ayarları</h3>
								
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
											<label class="control-label" for="basicinput">Telefon Numarası*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="ayar_tel" value="<?php echo $ayarcek['ayar_tel']?>" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Telefon Numarası(GSM)*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_gsm" value="<?php echo $ayarcek['ayar_gsm']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Faks Numarası*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_faks" value="<?php echo $ayarcek['ayar_faks']?>" class="span8" >
											</div>
										</div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Mail Adresi*</label>
											<div class="controls">
												<input type="email" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail']?>" data-original-title="" class="span8 tip" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">İl*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_il" value="<?php echo $ayarcek['ayar_il']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">İlçe*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_ilce" value="<?php echo $ayarcek['ayar_ilce']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Adres*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Mesai*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_mesai" value="<?php echo $ayarcek['ayar_mesai']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="iletisimayarkaydet" class="btn btn-success">Kaydet</button>
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