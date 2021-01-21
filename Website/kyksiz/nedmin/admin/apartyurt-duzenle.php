<?php 

include 'header.php'; 
error_reporting(0);
$apartyurtsor=$db->prepare("SELECT * FROM apartyurt where apartyurt_id=:id");
  $apartyurtsor->execute(array(
    'id'=>$_GET['apartyurt_id']
  ));
  $apartyurtcek=$apartyurtsor->fetch(PDO::FETCH_ASSOC);
?>
      <head>
        <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
      </head>
        <div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h3>Apart & Yurt Ayarları</h3>
              
                  <?php if($_GET['durum']=="ok"){ ?>
                  <ul class="nav navbar-nav navbar" align="right" >
                  <li><b style="color:green;">İşlem Başarılı.</b></li>
                  </ul>
                                
                  <?php } elseif($_GET['durum']=="no"){ ?>
                  <ul class="nav navbar-nav navbar" align="right" >
                  <li><b style="color:red;">İşlem Başarısız.</b></li>
                  </ul>
                  <?php }  ?>
              </div>
              <div class="module-body">

                  <form method="POST" action="../netting/islem.php" class="form-horizontal row-fluid" enctype="multipart/form-data">

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Yüklü Fotoğraf*</label>
                      <div class="controls">

                       <?php
                        if (strlen($apartyurtcek['apartyurt_foto'])>0) { ?>
                        
                          <img width="200" src="../../<?php echo $apartyurtcek['apartyurt_foto'];?>">
                        
                        <?php } else{ ?>

                          <img width="200" src="../../images/resimyok.png">

                        <?php } ?>
                        
                      </div>
                    </div>

                    

                      <div class="control-group">
                      <label class="control-label" for="basicinput">Fotoğraf Seç*</label>

                      <div class="controls">
                        <input type="file" name="apartyurt_foto" class="span8" value="<?php echo $apartyurtcek['apartyurt_foto']?>">
                        
                      </div>
                    </div>

                    <input type="hidden" name="eski_yol" value="<?php echo $apartyurtcek['apartyurt_foto']; ?>">

                     <div class="control-group">
                      <div class="controls">
                        <button type="submit" name="apartfotoduzenle" class="btn btn-primary">Güncelle</button>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Apart & Yurt İsmi*</label>

                      <div class="controls">
                        <input type="text" name="apartyurt_isim" value="<?php echo $apartyurtcek['apartyurt_isim']?>" class="span8">
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Apart&Yurt Açıklaması*</label>

                      <div class="controls">
                        <textarea style="resize:none;" rows="3" maxlength="255" name="apartyurt_bilgi" class="span8" ><?php echo $apartyurtcek['apartyurt_bilgi']?></textarea>
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Apart&Yurt Adresi*</label>

                      <div class="controls">
                        <input type="text" name="apartyurt_adres" value="<?php echo $apartyurtcek['apartyurt_adres']?>" class="span8">
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Apart&Yurt Mail*</label>

                      <div class="controls">
                        <input type="email" name="apartyurt_email" value="<?php echo $apartyurtcek['apartyurt_email']?>" class="span8">
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Apart&Yurt Telefon*</label>

                      <div class="controls">
                        <input type="text" name="apartyurt_gsm" value="<?php echo $apartyurtcek['apartyurt_gsm']?>" class="span8">
                        
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
                      <label class="control-label" for="basicinput">Apart&Yurt İl*</label>

                      <div class="controls">
                        <input type="text" name="apartyurt_il" value="<?php echo $apartyurtcek['apartyurt_il']?>" class="span8">
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Apart&Yurt ilçe*</label>

                      <div class="controls">
                        <input type="text" name="apartyurt_ilce" value="<?php echo $apartyurtcek['apartyurt_ilce']?>" class="span8">
                        
                      </div>
                    </div>

                    <input type="hidden" name="apartyurt_id" value="<?php echo $apartyurtcek['apartyurt_id']?>">
                    
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" name="apartyurtguncelle" class="btn btn-success">Güncelle</button>
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