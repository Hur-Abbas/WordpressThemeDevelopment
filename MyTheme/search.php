<?php 
get_header();
?>

<div class="page-wrap">
   <div class="container mt-4">
      <h3 class="text-center mb-3"> Search Result For "<?php echo get_search_query();?>"</h3>
     <?php get_template_part('includes/section','searchresult'); ?>
      <?php previous_posts_link();?>
      <?php next_posts_link();?>
   </div>
</div>




<?php get_footer(); ?>