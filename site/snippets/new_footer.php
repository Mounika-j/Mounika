        <section class="footer-container ">
            <div class="container footer-inner-wrap">
                <div class="footer-graphic-image">
                    <img src="../assets/images/GraphicLogoFooter.png" alt="no-image"/>
                </div>
                <ul class="footer-links">
                    <li><a href="<?= $site->url() ?>/mac/">Graphic <strong>Mac</strong></a></li>
                    <li><a href="<?= $site->url() ?>/docs/">Learn</a></li>
                    <li><a href="<?= $site->url() ?>/ipad/">Graphic <strong>iPad</strong></a></li>
                    <li><a href="<?= $site->url() ?>/tutorials/">Tutorials</a></li>
                    <li><a href="<?= $site->url() ?>/iphone/">Graphic <strong>iPhone</strong></a></li>
                    <li><a href="mailto:help@graphic.com">Support</a></li>
                </ul>
                <div class="social-icons">
                    <ul class="social-media-links">
                        <li>
                            <a href="mailto:help@graphic.com">
                                <img src="../assets/images/footer-email.svg" alt="no-image"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/GraphicApps" target="_blank">
                                <img src="../assets/images/footer-twitter.svg" alt="no-image"/>
                            </a>
                        </li>
                        <li>
                            <a  href="https://www.facebook.com/idraw" target="_blank">
                                <img src="../assets/images/footer-facebook.svg" alt="no-image"/>
                            </a>
                        </li>
                    </ul>
                    <p class="copy-right-text">2018 Picta Inc. All Rights Reserved.</p>
                </div>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <?php echo js('assets/js/flexslider/jquery.flexslider.js') ?>
        <?php echo js('assets/js/all.js') ?>
    </body>
</html>