<?php 

include 'header.php'; 
//belirli veriyi çekme işlemi


?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Profil Bilgileri</h3>
                                      
                                </div>
                                
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Profil Bilgileri</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <tbody>
                              
                                           <tr>
                                                <td>ADI SOYADI:</td>
                                                <td><?php echo $kullanicicek['kullanici_adsoyad']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>TC NO:</td>
                                                <td><?php echo $kullanicicek['kullanici_tc']; ?></td>
                                            </tr>    

                                            <tr>
                                                <td>TELEFON:</td>
                                                <td><?php echo $kullanicicek['kullanici_gsm']; ?></td>
                                            </tr>   
                                                    
                                            <tr>
                                                <td>EMAİL:</td>
                                                <td><?php echo $kullanicicek['kullanici_mail']; ?></td>
                                            </tr> 
                                                
                                            <tr>
                                                <td>KAYIT TARİHİ:</td>
                                                <td><?php echo $kullanicicek['kullanici_zaman']; ?></td>
                                            </tr> 
                                                
                                            <tr>
                                                <td>ADRES:</td>
                                                <td><?php echo $kullanicicek['kullanici_adres']; ?></td>
                                            </tr> 
                                            
                                            <tr>
                                                <td>İL:</td>
                                                <td><?php echo $kullanicicek['kullanici_il']; ?></td>
                                            </tr> 
                       
                                            <tr>
                                                <td>İLÇE:</td>
                                                <td><?php echo $kullanicicek['kullanici_ilce']; ?></td>
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