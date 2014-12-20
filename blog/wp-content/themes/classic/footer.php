<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!-- begin footer -->
</div>

<?php get_sidebar(); ?>

<p class="credit"><!--<?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. --> 
<cite><?php echo sprintf(__("&copy;Saidur Rahman| <a href='http://saidurrahman.net/index.php' title='%s'><strong>Home</strong></a>"), __("Saidur Rahman")); ?></cite>

<cite><?php echo sprintf(__(" <a href='http://saidurrahman.net/saidurrahman.net/blog/index.php' title='%s'><strong>|Blog</strong></a>"), __("Saidur Rahman")); ?></cite>
<cite><?php echo sprintf(__(" <a href='http://saidurrahman.net/saidurrahman.net/saidurrahman/portfolio.php' title='%s'><strong>|Portfolio</strong></a>"), __("Saidur Rahman")); ?></cite>
<cite><?php echo sprintf(__(" <a href='http://saidurrahman.net/saidurrahman.net/saidurrahman/fun.php' title='%s'><strong>|Fun</strong></a>"), __("Saidur Rahman")); ?></cite>
<cite><?php echo sprintf(__(" <a href='http://saidurrahman.net/saidurrahman.net/saidurrahman/aboutme.php' title='%s'><strong>|AboutMe</strong></a>"), __("Saidur Rahman")); ?>
</cite>
<cite><?php echo sprintf(__(" <a href='http://saidurrahman.net/saidurrahman.net/saidurrahman/contact.php' title='%s'><strong>|Contact</strong></a>"), __("Saidur Rahman")); ?>
</cite>
</p>

</div>



<?php get_footer(); ?>


</body>
</html>