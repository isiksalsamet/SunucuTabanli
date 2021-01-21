<?php 

include 'header.php'; 
//belirli veriyi çekme işlemi
$menusor=$db->prepare("SELECT * FROM menu");
$menusor->execute();

?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Menü Listesi</h3>
                                      
                                </div>
                                
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Menü Tablosu</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    S.no
                                                </th>
                                                <th>
                                                    Menü Adı
                                                </th>
                                                <th>
                                                    Menü Url
                                                </th>
                                                <th>
                                                    Menü Sıra
                                                </th>
                                                <th>
                                                    Menü Durum
                                                </th>
                                                <th></th>
                                                <th>
                                                    <a href="menu-ekle.php"><button class="btn btn-success btn-xs">Yeni Ekle</button></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 

                          $say=0;

                          while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {  $say++;?>
                              
                            <tr>                             
                              <td width="20" ><?php echo $say; ?></td>
                              <td><?php echo $menucek['menu_ad']; ?></td>
                              <td><?php echo $menucek['menu_url']; ?></td>
                              <td><?php echo $menucek['menu_sira']; ?></td>
                              <td><center><?php

                                if($menucek['menu_durum']==1){ ?>

                                  <button class="btn btn-success btn-xs">Aktif</button>

                                <?php   }  else { ?>
                                  <button class="btn btn-danger btn-xs">Pasif</button>

                                <?php  } ?>

                                <!-- 
                                success -> Yeşil
                                success -> Turuncu
                                success -> Kırmızı
                                success -> Beyaz
                                success -> Mavi Buton
                                
                                btn-xs -> Küçük buton

                                -->

                              </center></td>


                              <td><center><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                              <td><center><a href="../netting/islem.php?menu_id=<?php echo $menucek['menu_id']; ?>&menusil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                            </tr>

                        <?php }

                        ?>
                       
                       
                      </tbody>
                    </table>  
                    <!-- Div komutunun bitişi -->
                  </div>
                </div>
              </div>
            </div>
            
           
          
           
          </div>
        </div>
    </div>
        <!-- /page content -->

        <?php include 'footer.php'; ?>