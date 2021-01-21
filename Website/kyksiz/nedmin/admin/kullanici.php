<?php 

    include 'header.php'; 
    //belirli veriyi çekme işlemi
    $kullanicisor=$db->prepare("SELECT * FROM kullanici");
    $kullanicisor->execute();

?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Kullanıcı Listesi</h3>
                                      
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
                                        Kullanıcı Tablosu</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Kayıt Tarihi
                                                </th>
                                                <th>
                                                    Adı Soyadı
                                                </th>
                                                <th>
                                                    Mail Adresi
                                                </th>
                                                <th>
                                                    Telefon
                                                </th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                                while ($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) { ?>
                              
                                                <tr>
                                                    <td><?php echo $kullanicicek['kullanici_zaman']; ?></td>
                                                    <td><?php echo $kullanicicek['kullanici_adsoyad']; ?></td>
                                                    <td><?php echo $kullanicicek['kullanici_mail']; ?></td>
                                                    <td><?php echo $kullanicicek['kullanici_gsm']; ?></td>
                                                    <td><center><a href="kullanici-duzenle.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                                                    <td><center><a href="../netting/islem.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>&kullanicisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
