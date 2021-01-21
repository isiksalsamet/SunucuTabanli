<?php 

    include 'header.php'; 
    //belirli veriyi çekme işlemi
    $apartsor=$db->prepare("SELECT * FROM apartyurt");
    $apartsor->execute();

?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Apartlar & Yurtların Listesi</h3>
                                      
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
                                        Apartlar & Yurtların Tablosu</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Apart ismi</th>

                                                <th>Apart Bilgi</th>

                                                <th>Apart Türü</th>

                                                <th>Apart Telefon</th>

                                                <th>Apart Mail</th>

                                                <th></th>
                                                <th><a href="apartyurt-ekle.php"><button class="btn btn-success btn-xs">Yeni Ekle</button></a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                                while ($apartcek=$apartsor->fetch(PDO::FETCH_ASSOC)) { ?>
                              
                                                <tr>
                                                    <td><?php echo $apartcek['apartyurt_isim']; ?></td>
                                                    <td><?php echo $apartcek['apartyurt_bilgi']; ?></td>
                                                    <td><?php echo $apartcek['apartyurt_tur']; ?></td>
                                                    <td><?php echo $apartcek['apartyurt_gsm']; ?></td>
                                                    <td><?php echo $apartcek['apartyurt_email']; ?></td>

                                                    <td><center><a href="apartyurt-duzenle.php?apartyurt_id=<?php echo $apartcek['apartyurt_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                                                    <td><center><a href="../netting/islem.php?apartyurt_id=<?php echo $apartcek['apartyurt_id']; ?>&apartyurtsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
