<?php 

	include 'header.php'; 
	error_reporting(0);
?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Api Ayarları</h3>
								
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
											<label class="control-label" for="basicinput">Analystic Kodu*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="ayar_analystic" value="<?php echo $ayarcek['ayar_analystic']?>" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Maps Api*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_maps" value="<?php echo $ayarcek['ayar_maps']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Zopim Api*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ayar_zopim" value="<?php echo $ayarcek['ayar_zopim']?>" class="span8" >
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="apiayarkaydet" class="btn btn-success">Kaydet</button>
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