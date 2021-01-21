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
								<h3>Menü Ekleme</h3>
							</div>
							
							<div class="module-body">

									<form method="POST" action="../netting/islem.php" class="form-horizontal row-fluid" >

										<div class="control-group">
											<label class="control-label" for="basicinput">Menü Adı*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="menu_ad" placeholder="Menü Adını Giriniz..." class="span8" required="" ="">
												
											</div>
										</div>

										<!-- CK Editör başlangıcı-->
										<div class="control-group">
											<label class="control-label" for="basicinput">Menü Detay*</label>
											<div class="controls">
											<textarea class="ckeditor" id="editor1" name="menu_detay" placeholder="Menü Detaylarını Giriniz..."></textarea>
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
											<label class="control-label" for="basicinput">Menü Url*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="menu_url" placeholder="Menü Linkini Giriniz..." class="span8" required="" ="">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Menü Sıra*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="menu_sira" placeholder="Menü Sırasını Giriniz..." class="span8" required="">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Menü Durum*</label>
											<div class="controls">
											<select id="heard"  name="menu_durum" required="">
                            		
                            					<option value="1">Aktif</option>
                            					<option value="0">Pasif</option>

                          					</select>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="menukaydet" class="btn btn-success">Kaydet</button>
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