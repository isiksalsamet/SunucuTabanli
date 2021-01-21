<?php 

include 'header.php'; 
error_reporting(0);
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
  $ayarsor->execute(array(
    'id'=>0
  ));
  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
      <head>
        <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
      </head>
        <div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h3>Genel Ayarlar</h3>
              
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
                      <label class="control-label" for="basicinput">Yüklü Logo*</label>
                      <div class="controls">

                       <?php
                        if (strlen($ayarcek['ayar_logo'])>0) { ?>
                        
                          <img width="200" src="../../<?php echo $ayarcek['ayar_logo'];?>">
                        
                        <?php } else{ ?>

                          <img width="200" src="../../images/resimyok.png">

                        <?php } ?>
                        
                      </div>
                    </div>

                    

                      <div class="control-group">
                      <label class="control-label" for="basicinput">Resim Seç*</label>

                      <div class="controls">
                        <input type="file" id="basicinput" name="ayar_logo" value="<?php echo $ayarcek['ayar_logo']?>" class="span8">
                        
                      </div>
                    </div>

                    <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_logo']; ?>">

                     <div class="control-group">
                      <div class="controls">
                        <button type="submit" name="logoduzenle" class="btn btn-primary">Güncelle</button>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Site Başlığı*</label>

                      <div class="controls">
                        <input type="text" id="basicinput" name="ayar_title" value="<?php echo $ayarcek['ayar_title']?>" class="span8">
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Site Açıklaması*</label>

                      <div class="controls">
                        <input type="text" id="basicinput" name="ayar_description" value="<?php echo $ayarcek['ayar_description']?>" class="span8">
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Site Anahtar Kelime*</label>

                      <div class="controls">
                        <input type="text" id="basicinput" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords']?>" class="span8">
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Site Yazar*</label>

                      <div class="controls">
                        <input type="text" id="basicinput" name="ayar_author" value="<?php echo $ayarcek['ayar_author']?>" class="span8">
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" name="genelayarkaydet" class="btn btn-success">Güncelle</button>
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