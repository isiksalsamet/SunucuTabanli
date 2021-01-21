<?php 

	include 'header.php'; 
	error_reporting(0);
?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Mail Ayarları</h3>
								
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
											<label class="control-label" for="basicinput">Smtp Host*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="ayar_smtphost" value="<?php echo $ayarcek['ayar_smtphost']?>" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Smtp User*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_smtpuser" value="<?php echo $ayarcek['ayar_smtpuser']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Smtp Password*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_smtppassword" value="<?php echo $ayarcek['ayar_smtppassword']?>" class="span8" >
											</div>
										</div>


										
										<div class="control-group">
											<label class="control-label" for="basicinput">Smtp Port*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_smtpport" value="<?php echo $ayarcek['ayar_smtpport']?>" class="span8" >
											</div>
										</div>

										
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="mailayarkaydet" class="btn btn-success">Kaydet</button>
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