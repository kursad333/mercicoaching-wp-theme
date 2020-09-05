<?php wp_footer();?>

<footer class="footer">
        <div class="container-fluid footer-wrap">
            <div class="row justify-content-center">
                <div class="col-md-3 text-center contact">
                    <div class="icon">
                        <i class="material-icons md-40" id="icon-location">place</i>
                    </div>
                    <a><?php echo get_theme_mod('merci-footer-callout-location');?></a>
                </div>
                <div class="col-md-3 text-center contact">
                    <div class="icon">
                        <i class="material-icons md-40" id="icon-email">email</i>
                    </div>
                    <a><?php echo get_theme_mod('merci-footer-callout-email');?></a>
                </div>
                <div class="col-md-3 text-center contact">
                    <div class="icon">
                        <i class="material-icons md-40" id="icon-phone">phone</i>
                    </div>
                    <a><?php echo get_theme_mod('merci-footer-callout-phone');?></a>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>