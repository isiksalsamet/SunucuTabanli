<?php 

	include 'header.php'; 
	error_reporting(0);
?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Sosyal Ayarlar</h3>
								
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
											<label class="control-label" for="basicinput">Facebook*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook']?>" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Twitter*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">İnstagram*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_instagram" value="<?php echo $ayarcek['ayar_instagram']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Youtube*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_youtube" value="<?php echo $ayarcek['ayar_youtube']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Google*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_google" value="<?php echo $ayarcek['ayar_google']?>" class="span8" >
											</div>
										</div>
<
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="sosyalayarkaydet" class="btn btn-success">Kaydet</button>
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