<?php 

include 'header.php'; 
//belirli veriyi çekme işlemi
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();

?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        İletişim Listesi</h3>
                                      
                                </div>
                                
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        İletişim Tablosu</h3>
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
                                                    Adı
                                                </th>

                                                <th>
                                                    Soyadı
                                                </th>

                                                <th>
                                                    Telefon
                                                </th>
                                                    
                                                <th>
                                                    Mail
                                                </th>
                                                <th>
                                                   Mesaj
                                                </th>
                                                <th></th>
                                                <th></th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 

                          $say=0;

                          while ($iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC)) {  $say++;?>
                              
                            <tr>                             
                              <td width="20" ><?php echo $say; ?></td>
                              <td><?php echo $iletisimcek['iletisim_ad']; ?></td>
                              <td><?php echo $iletisimcek['iletisim_soyad']; ?></td>
                              <td><?php echo $iletisimcek['iletisim_gsm']; ?></td>
                              <td><?php echo $iletisimcek['iletisim_email']; ?></td>
                              <td><?php echo $iletisimcek['iletisim_mesaj']?></td>

                              <td><center><a href="iletisim-detay.php?iletisim_id=<?php echo $iletisimcek['iletisim_id']; ?>"><button class="btn btn-primary btn-xs">Detay</button></a></center></td>
                              <td><center><a href="../netting/islem.php?iletisim_id=<?php echo $iletisimcek['iletisim_id']; ?>&iletisimsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                             
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