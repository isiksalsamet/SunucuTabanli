<?php 

	include 'header.php'; 

  $menusor=$db->prepare("SELECT * FROM menu where menu_id=:id");
  $menusor->execute(array(
    'id'=>$_GET['menu_id'] 
  ));
 
  $menucek=$menusor->fetch(PDO::FETCH_ASSOC);
  error_reporting(0);
?>
				<head>
					<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
				</head>
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Menü Ayarları</h3>
								
									<?php if($_GET['durum']=="ok"){ ?>
									<div align="right" class="module-head">
                          				<b style="color:green;">İşlem Başarılı.</b>
                          			</div>	
                          			
		                        	<?php } elseif($_GET['durum']=="no"){ ?>
                         			<div align="right" class="module-head">
          		                	<b style="color:red;">İşlem Başarısız.</b>
                       				</div>
                		       		<?php }  ?>
								
							</div>
							<div align="right" >
								
								
							</div>
							<div class="module-body">

									
									<form action="../netting/islem.php" method="POST" class="form-horizontal row-fluid" >
										<div class="control-group">
											<label class="control-label" for="basicinput">Menü Adı*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="menu_ad" value="<?php echo $menucek['menu_ad']?>" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Menü Detay*</label>
											<div class="controls">
												<textarea class="ckeditor" id="editor1" name="menu_detay"><?php echo $menucek['menu_detay']; ?></textarea>
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

										<div class="control-group">
											<label class="control-label" for="basicinput">Menü Url*</label>
											<div class="controls">
												<input type="text" id="basicinput" name="menu_url" value="<?php echo $menucek['menu_url']?>" class="span8" >
											</div>
										</div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Menü Sıra*</label>
											<div class="controls">
												<input type="text" name="menu_sira" value="<?php echo $menucek['menu_sira']?>" data-original-title="" class="span8 tip" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Menü Durum*</label>
											<div class="controls">
												<div class="input-append">
													<select id="heard" class="control-form" name="menu_durum" required="">
                            
                            							<option value="1" <?php echo $menucek['menu_durum']=='1' ? 'selected=""' : ''; ?>>Aktif</option>

                            							<option value="0" <?php echo $menucek['menu_durum']=='0' ? 'selected=""' : ''; ?>>Pasif</option>

                          							</select>
												</div>
											</div>
										</div><hr>

										<input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id']; ?>">

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="menuduzenle" class="btn btn-success">Kaydet</button>
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