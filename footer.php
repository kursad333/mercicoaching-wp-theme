<?php wp_footer(); ?>

<?php //variables for better readability
$phonenumber = get_theme_mod('merci-footer-section-phone-number');
$phonetimes = get_theme_mod('merci-footer-section-phone-times');

$email = get_theme_mod('merci-footer-section-email');

$address = get_theme_mod('merci-footer-section-location-address');
$area = get_theme_mod('merci-footer-section-location-area');

// detects the user agent of the visitor to link to the corresponding navigation app. apple- or google maps
$addressurl = 0;
$useragent = $_SERVER['HTTP_USER_AGENT'];
if (strpos(strtolower($useragent), 'apple') == TRUE) {
    $addressurl = 'https://maps.apple.com/?q=' . $address . ' ' . $area;
} else {
    $addressurl = 'https://maps.google.com/?q=' . $address . ' ' . $area;
}
?>

<footer class="footer">
    <div class="container-fluid footer-wrap">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center contact">
                <div class="icon">
                    <i class="material-icons md-40" id="icon-location">place</i>
                </div>
                <a href="<?php echo $addressurl; ?>" target="blank">
                    <?php echo $address; ?>
                    <br>
                    <?php echo $area ?>
                </a>
            </div>
            <div class="col-md-3 text-center contact">
                <div class="icon">
                    <i class="material-icons md-40" id="icon-email">email</i>
                </div>
                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            </div>
            <div class="col-md-3 text-center contact">
                <div class="icon">
                    <i class="material-icons md-40" id="icon-phone">phone</i>
                </div>
                <a href="tel:<?php echo $phonenumber; ?>"><?php echo $phonenumber; ?></a>
                <br>
                <a><?php echo $phonetimes; ?></a>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>