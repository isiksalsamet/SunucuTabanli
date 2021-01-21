<?php 

    include 'header.php'; 
    //belirli veriyi çekme işlemi
    $ilansor=$db->prepare("SELECT * FROM ilanlar");
    $ilansor->execute();

    $ilan1sor=$db->prepare("SELECT * FROM evine_arkadas_ilan");
    $ilan1sor->execute();

    $ilan2sor=$db->prepare("SELECT * FROM ev_ilan_ver");
    $ilan2sor->execute();


?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Ev Arayanlar Listesi</h3>
                                      
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Ev Arayanlar</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>İlan ID</th>

                                                <th>Adı</th>

                                                <th>Telefon</th>

                                                <th>Bilgi</th>

                                                <th>İlan Tarihi</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                                while ($ilancek=$ilansor->fetch(PDO::FETCH_ASSOC)) { ?>
                              
                                                <tr>
                                                    <td><?php echo $ilancek['ilan_id']; ?></td>
                                                    <td><?php echo $ilancek['ilan_veren_adi']; ?></td>
                                                    <td><?php echo $ilancek['ilan_veren_tel']; ?></td>
                                                    <td><?php echo $ilancek['bilgi']; ?></td>
                                                    <td><?php echo $ilancek['ilan_tarihi']; ?></td>

                                                    <td><center><a href="../netting/islem.php?ilan_id=<?php echo $ilancek['ilan_id']; ?>&ilansil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                                                </tr>

                                            <?php }

                                            ?>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div><br><br><hr><br><br>
                    <!--/.span9-->

                    <div class="span9">
                        <div class="content">
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Evine Arkadaş Arayanlar</h3>
                                      
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Evine Arkadaş Arayanlar</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>İlan ID</th>

                                                <th>Adı</th>

                                                <th>Mail</th>

                                                <th>Adres</th>

                                                <th>Ev Bilgileri</th>

                                                <th>Kriterler</th>

                                                <th>İlan Tarihi</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                                while ($ilan1cek=$ilan1sor->fetch(PDO::FETCH_ASSOC)) { ?>
                              
                                                <tr>
                                                    <td><?php echo $ilan1cek['ilan_id']; ?></td>
                                                    <td><?php echo $ilan1cek['ad_soyad']; ?></td>
                                                    <td><?php echo $ilan1cek['mail']; ?></td>
                                                    <td><?php echo $ilan1cek['adres']; ?></td>
                                                    <td><?php echo $ilan1cek['ev_bilgi']; ?></td>
                                                    <td><?php echo $ilan1cek['kriter']; ?></td>
                                                    <td><?php echo $ilan1cek['tariih']; ?></td>

                                                    <td><center><a href="../netting/islem.php?ilan1_id=<?php echo $ilan1cek['ilan_id']; ?>&ilansil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                                                </tr>

                                            <?php }

                                            ?>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->

                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Ev İlanları</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>İlan ID</th>

                                                <th>Adı Soyadı</th>

                                                <th>Mail</th>

                                                <th>Adres</th>

                                                <th>Ev Bilgileri</th>

                                                <th>Kriterler</th>

                                                <th>İlan Tarihi</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                                while ($ilan2cek=$ilan2sor->fetch(PDO::FETCH_ASSOC)) { ?>
                              
                                                <tr>
                                                    <td><?php echo $ilan2cek['ev_ilan_id']; ?></td>
                                                    <td><?php echo $ilan2cek['ad_soyad']; ?></td>
                                                    <td><?php echo $ilan2cek['ev_acik_adres']; ?></td>
                                                    <td><?php echo $ilan2cek['ev_telefon_numarasi']; ?></td>
                                                    <td><?php echo $ilan2cek['ev_bilgisi']; ?></td>
                                                    <td><?php echo $ilan2cek['ev_kriterler']; ?></td>
                                                    <td><?php echo $ilan2cek['ev_ilan_tarih']; ?></td>

                                                    <td><center><a href="../netting/islem.php?ilan2_id=<?php echo $ilan2cek['ev_ilan_id']; ?>&ilansil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                                                </tr>

                                            <?php }

                                            ?>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->

                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->

                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
<?php include 'footer.php'; ?>
