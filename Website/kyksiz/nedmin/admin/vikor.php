<?php 

include 'header.php'; 

?>
			<head>
				<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
			</head>
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Hakkımızda Ayarları</h3>
							</div>
								
							<div class="module-body">

									<form method="POST" action="../netting/islem.php" class="form-horizontal row-fluid" >

										<div class="control-group">
											<label class="control-label" for="basicinput">Vizyon Başlığı*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="hakkimizda_vizyonbaslik" value="<?php echo $hakkimizdacek['hakkimizda_vizyonbaslik']?>" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Misyon Başlığı*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="hakkimizda_misyonbaslik" value="<?php echo $hakkimizdacek['hakkimizda_misyonbaslik']?>" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">İçerik Başlığı*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="hakkimizda_icerikbaslik" value="<?php echo $hakkimizdacek['hakkimizda_icerikbaslik']?>" class="span8">
												
											</div>
										</div>

                      					<div class="control-group">
											<label class="control-label" for="basicinput">Video*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="hakkimizda_video" value="<?php echo $hakkimizdacek['hakkimizda_video']?>" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Vizyonumuz*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="hakkimizda_vizyon" value="<?php echo $hakkimizdacek['hakkimizda_vizyon']?>" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Mizyonumuz*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="hakkimizda_misyon" value="<?php echo $hakkimizdacek['hakkimizda_misyon']?>" class="span8">
												
											</div>
										</div>


										<div class="control-group">
											<div class="controls">
												<button type="submit" name="hakkimizdakaydet" class="btn btn-success">Güncelle</button>
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