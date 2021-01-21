<?php 

include 'header.php'; 

?>
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Apart&Yurt Ekle</h3>
							</div>
							
							<div class="module-body">

									<form method="POST" action="../netting/islem.php" class="form-horizontal row-fluid" >

										<div class="control-group">
											<label class="control-label" for="basicinput">Apart&Yurt Fotoğrafı*</label>

											<div class="controls">
												<input type="file" id="basicinput" name="apartyurt_foto" class="span8" required="">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Apart&Yurt İsmi*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="apartyurt_isim" placeholder="Apart veya Yurt ismi Giriniz..." class="span8" required="">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Apart&Yurt Bilgi*</label>

											<div class="controls">
												<textarea style="resize:none;" rows="4" maxlength="255" name="apartyurt_bilgi" class="span8" placeholder="Apart veya Yurdun Ayrıntılarını Giriniz..." ></textarea>
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Apart Türü*</label>
											<div class="controls">
											<select id="heard"  name="apartyurt_tur" required="">
                            		
                            					<option value="Erkek Öğrenci Yurdu">Erkek Öğrenci Yurdu</option>
                            					<option value="Kız Öğrenci Yurdu">Kız Öğrenci Yurdu</option>
                            					<option value="Erkek Öğrenci Apartı">Erkek Öğrenci Apartı</option>
                            					<option value="Kız Öğrenci Apartı">Kız Öğrenci Apartı</option>
                          					</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Apart&Yurt Adresi*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="apartyurt_adres" placeholder="Apart veya Yurt adresi Giriniz..." class="span8" required="">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Apart&Yurt Telefon*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="apartyurt_gsm" placeholder="Apart veya Yurt Telefonunu Giriniz..." class="span8" required="">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Apart&Yurt Mail*</label>

											<div class="controls">
												<input type="email" id="basicinput" name="apartyurt_email" placeholder="Apart veya Yurt Mail Adresini Giriniz..." class="span8" required="" >
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Apart&Yurt Şehir*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="apartyurt_il" placeholder="Apart veya Yurt Bulunduğu Şehiri Giriniz..." class="span8" required="">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Apart&Yurt İlçe*</label>

											<div class="controls">
												<input type="text" id="basicinput" name="apartyurt_ilce" placeholder="Apart veya Yurt Bulunduğu İlçeyi Giriniz..." class="span8" required="">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Apart&Yurt Durum*</label>
											<div class="controls">
											<select id="heard"  name="apartyurt_durum" required="">
                            		
                            					<option value="1">Aktif</option>
                            					<option value="0">Pasif</option>

                          					</select>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="apartyurtkaydet" class="btn btn-success">Kaydet</button>
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