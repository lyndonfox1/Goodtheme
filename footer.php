<footer>
<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>

Copyright <?php echo date('Y'); ?>
</footer>
<?php wp_footer(); ?>

                <div class="social-footer">
                    <span class="center">
                        <i class="fab fa-twitter"></i>
                    </span>
                </div>
                <div class="social-footer">
                    <span class="center">
                        <i class="fab fa-linkedin-in"></i>
                    </span>
                </div>
                <div class="social-footer">
                    <span class="center">
                        <i class="fab fa-instagram"></i>
                    </span>
                </div>
                <div class="social-footer">
                    <span class="center">
                        <i class="fab fa-facebook"></i>
                    </span>
                </div>
               
                <p class="logo-small">
                    <!-- <img src="/assets/img/headers/ugne-vasyliute-557433-unsplash.jpg" width="1200px"> -->
                    <?php get_the_thumbnail('assets/img/headers/ugne-vasyliute-557433-unsplash.jpg'); ?>
                </p>
                <span class="copyright">&copy; Copyright 2018 Tree Cut &amp; Trim Ltd - Made with &hearts; in
                    Christchurch</span>


 </body>
 <script>
  var nav = responsiveNav(".nav-collapse");
</script>
</html>