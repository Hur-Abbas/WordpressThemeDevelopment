<?php 
get_header();
?>

<div class="page-wrap">
   <div class="container mt-4">
      <div class="row">
         <div class="col-lg-9">
            <h3>
               <?php the_title(); ?>
            </h3>
            <?php get_template_part('includes/section','content'); ?>
         </div>
         <div class="col-lg-3">
            <div id="sidebar-primary" class="sidebar card shadow rounded">
               <div class="card-body">
                  <?php dynamic_sidebar( 'page-sidebar' ); ?>
               </div>
            </div>
         </div>
      </div>



   </div>
</div>




<?php get_footer(); ?>