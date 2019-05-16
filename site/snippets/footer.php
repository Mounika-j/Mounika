<section class="footer-container ">
            <div class="container footer-inner-wrap">
                <div class="footer-graphic-image">
                    <img src="<?= $site->url?>/assets/images/GraphicLogoFooter.png" alt="no-image"/>
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120"><defs><style>.cls-1{fill:#a0a5c8;}</style></defs><g id="Layer_14" data-name="Layer 14"><path class="cls-1" d="M100,0H20A20,20,0,0,0,0,20v80a20,20,0,0,0,20,20h80a20,20,0,0,0,20-20V20A20,20,0,0,0,100,0ZM99,80a8,8,0,0,1-8,8H29a8,8,0,0,1-8-8V51a3,3,0,0,1,6,0V80a2,2,0,0,0,2,2H91a2,2,0,0,0,2-2V42L62.06,71.18a3,3,0,0,1-4.12,0L25.6,40.63A5,5,0,0,1,29,32H80a3,3,0,0,1,0,6H31.55L60,64.87,90.57,36A5,5,0,0,1,99,39.64Z"/></g></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/GraphicApps" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120"><defs><style>.cls-1{fill:#a0a5c8;}</style></defs><g id="Layer_14" data-name="Layer 14"><path class="cls-1" d="M100,0H20A20,20,0,0,0,0,20v80a20,20,0,0,0,20,20h80a20,20,0,0,0,20-20V20A20,20,0,0,0,100,0ZM87.4,45.93l0,1.83C87.44,66.45,73.22,88,47.21,88a40,40,0,0,1-21.68-6.36,31.28,31.28,0,0,0,3.37.19,28.39,28.39,0,0,0,17.57-6A14.15,14.15,0,0,1,33.26,66a13,13,0,0,0,2.66.27,14.35,14.35,0,0,0,3.73-.5A14.16,14.16,0,0,1,28.3,51.86v-.17a14.06,14.06,0,0,0,6.41,1.77,14.17,14.17,0,0,1-4.38-18.88A40.16,40.16,0,0,0,59.48,49.36a14.15,14.15,0,0,1,24.1-12.89,28.62,28.62,0,0,0,9-3.44,14.2,14.2,0,0,1-6.22,7.82,28.38,28.38,0,0,0,8.12-2.22A28.2,28.2,0,0,1,87.4,45.93Z"/></g></svg>                            </a>
                        </li>
                        <li>
                            <a  href="https://www.facebook.com/idraw" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120"><defs><style>.cls-1{fill:#a0a5c8;}</style></defs><g id="Layer_14" data-name="Layer 14"><path class="cls-1" d="M100,0H20A20,20,0,0,0,0,20v80a20,20,0,0,0,20,20h80a20,20,0,0,0,20-20V20A20,20,0,0,0,100,0ZM72.06,60H64.42V88H53.92V60h-7V50.35h7l0-5.69C53.9,36.79,56,32,65.31,32H73v9.65H68.2c-3.61,0-3.78,1.35-3.78,3.87l0,4.83h8.68Z"/></g></svg>                            </a>
                        </li>
                    </ul>
                    <p class="copy-right-text">2018 Picta Inc. All Rights Reserved.</p>
                </div>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <?php echo js('assets/js/flexslider/jquery.flexslider.js') ?>
        <?php echo js('assets/js/all.js') ?>
        <script type="text/javascript">
            $( document ).ready(function() {
                $('.customCls').next().removeClass()

                let depth = $('.customCls').parent().attr('class')
                depth = depth.match(/\d/g)
                depth = depth.join("")
                if (Number(depth) >= 3) {
                    $('.customCls').parent().parent().removeClass()
                }
            });
        </script>
    </body>
</html>