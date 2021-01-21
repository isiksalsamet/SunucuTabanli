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
                                        İletişim Detayı</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <tbody>
                                       

                                           
                                              
                                        
                                        
                                          <?php 

                                          

                                          $iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC); ?>
                              
                                           <tr>
                                                <td>ADI:</td>
                                                <td><?php echo $iletisimcek['iletisim_ad']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>SOYADI:</td>
                                                <td><?php echo $iletisimcek['iletisim_soyad']; ?></td>
                                            </tr>    

                                            <tr>
                                                <td>TELEFON:</td>
                                                <td><?php echo $iletisimcek['iletisim_gsm']; ?></td>
                                            </tr>   
                                                    
                                            <tr>
                                                <td>EMAİL:</td>
                                                <td><?php echo $iletisimcek['iletisim_email']; ?></td>
                                            </tr> 
                                                
                                            <tr>
                                                <td>TARİH:</td>
                                                <td><?php echo $iletisimcek['iletisim_tarih']; ?></td>
                                            </tr> 
                                                
                                            <tr>
                                                <td>MESAJ:</td>
                                                <td><?php echo $iletisimcek['iletisim_mesaj']; ?></td>
                                            </tr> 
                       
                       
                       
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