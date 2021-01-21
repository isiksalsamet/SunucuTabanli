<?php 

include 'header.php'; 
//belirli veriyi çekme işlemi
$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(
    'id'=>0
));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
error_reporting(0);
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

										<!-- CK Editör başlangıcı-->
										<div class="control-group">
											<label class="control-label" for="basicinput">İçerik*</label>
											<div class="controls">
											<textarea class="ckeditor" id="editor1" name="hakkimizda_icerik"><?php echo $hakkimizdacek['hakkimizda_icerik'];?></textarea>
											</div>
										</div>
										<script type="text/javascript">
                        
                        					CKEDITOR.replace('editor1',{

                          						filebrowserBrowseUr1: 'ckfinder/ckfinder.html',
                          						filebrowserImageBrowseUr1: 'ckfinder/ckfinder.html?type=Images',
                          						filebrowserFlashBrowseUr1: 'ckfinder/ckfinder.html?type=Flash',
                          						filebrowserUploadUr1: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                          						filebrowserBrowseUr1: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                          						filebrowserBrowseUr1: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                          						forcePasteAsPlainText : true

                        					});
                      					</script><hr>
                      					<!-- Ck Editör bitişi -->

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