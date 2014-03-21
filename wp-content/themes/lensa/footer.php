  
</div>

<!-- Progress bar for supersized -->
<div class="progress-wrapper">
  <div class="progress-bar"></div>
</div>

<footer class="footer-section container">
  <div class="row">
    <?php colabs_social_net("social-links") ?>
    <div class="copyrights"><?php if (get_option('colabs_credit_footer')!=''){ ?>
    <?php
        $test = get_option('colabs_credit_footer');
        echo $test;
    ?>
    <?php }else{ ?>
    <?php colabs_credit(); ?>
    <?php } ?></div>
  </div>
</footer><!-- .footer-section -->

<?php wp_footer(); ?>
</body>
</html>