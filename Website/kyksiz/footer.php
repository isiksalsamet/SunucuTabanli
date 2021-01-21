<footer class="footer">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/css"></script>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logo4.png" alt="">
                        </div>
                        <p> </p>
                        
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Bağlantıları</h3>
                        </div>

                        <ul class="twitter-widget footer-links">
                            <li><a href="index.php"> Anasayfa </a></li>
                            <li><a href="hakkimizda.php"> Hakkımızda </a></li>
                            <li><a href="arkadasbul.php"> Ev Arkadaşı Bul</a></li>
                            <li><a href="evine-arkadas-bul.php"> Evine Arkadaş Bul</a></li>
                            <li><a href="tum-ilanlar.php"> Tüm İlanlar</a></li>
                            <li><a href="iletisim.php"> İletişim</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
                
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>İletişim Detayları</h3>
                        </div>

                        <ul class="footer-links">
                            <li><?php echo $ayarcek['ayar_mail']?></li>
                            <li><a href="http://www.kyksiz.com">www.kyksiz.com</a></li>
                            <li><?php echo $ayarcek['ayar_adres']?> - <?php echo $ayarcek['ayar_ilce']?> / <?php echo $ayarcek['ayar_il']?></li>
                            <li><?php echo $ayarcek['ayar_tel']?> - <?php echo $ayarcek['ayar_gsm']?></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
                
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Sosyal</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="<?php echo $ayarcek['ayar_facebook']?>"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href="<?php echo $ayarcek['ayar_instagram']?>"><i class="fa fa-github"></i>Instagram</a></li>
                            <li><a href="<?php echo $ayarcek['ayar_twitter']?>"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a href="<?php echo $ayarcek['ayar_mail']?>"><i class="fa fa-dribbble"></i> Mail</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
                
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">Tüm Haklar Saklıdır. &copy; 2019 <a href="https://www.kyksiz.com">KYKSIZ</a></p>
                </div>

                <div class="footer-right">
                    <form method="get" action="#">
                        <input placeholder="Sitede Arama Yap..." name="Arama">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/data-table.js"></script>
    <script src="js/data-table2.js"></script>
    <script src="js/ililce.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>
</html>