<?php 

    include 'header.php'; 
    //belirli veriyi çekme işlemi
    $uyesor=$db->prepare("SELECT * FROM uyeler");
    $uyesor->execute();

?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Üye Listesi</h3>
                                      
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
                                        Üye Tablosu</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Adı</th>

                                                <th>Soyadı</th>

                                                <th>Doğum Tarihi</th>

                                                <th>Telefon</th>

                                                <th>Email</th>

                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                                while ($uyecek=$uyesor->fetch(PDO::FETCH_ASSOC)) { ?>
                              
                                                <tr>
                                                    <td><?php echo $uyecek['uye_ad']; ?></td>
                                                    <td><?php echo $uyecek['uye_soyad']; ?></td>
                                                    <td><?php echo $uyecek['uye_dogum']; ?></td>
                                                    <td><?php echo $uyecek['uye_gsm']; ?></td>
                                                    <td><?php echo $uyecek['uye_email']; ?></td>

                                                    <td><center><a href="uye-duzenle.php?uye_id=<?php echo $uyecek['uye_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                                                    <td><center><a href="../netting/islem.php?uye_id=<?php echo $uyecek['uye_id']; ?>&uyesil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
