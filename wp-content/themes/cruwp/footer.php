<?php $options = get_option('pb_options'); if ($options['return_top']) : ?>
<div id="return_top">
 <a href="#header">&nbsp;</a>
</div>
<?php endif; ?>

<div id="footer">
  <span id="copy">&copy; Copyright <?php $date = date('Y'); echo "$date"; ?></span><!--/#copy-->
  <br />
  <span id="name">Cornell Campus Crusade for Christ</span><!--/#name-->
  <?php wp_footer(); ?>
</div><!--/#footer-->
</body>
</html>
