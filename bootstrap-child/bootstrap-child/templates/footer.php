<!-- Footer -->
<footer class="bg-dark text-white py-4 mt-5">
  <div class="container text-center">
    <?php
      wp_nav_menu([
        'theme_location' => 'footer-menu',
        'container' => false,
        'menu_class' => 'list-inline',
        'fallback_cb' => false,
        'items_wrap' => '<ul id="%1$s" class="%2$s list-inline">%3$s</ul>',
      ]);
    ?>
    <p class="mt-3 mb-0">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
