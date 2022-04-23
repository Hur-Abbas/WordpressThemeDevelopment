<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        // Display post content
        ?>
<div class="card mb-3 shadow rounded" style="">
    <div class="card-body">
        <div class="card-header">
            <?php single_post_title(); ?>
        </div>
        <?php the_content();?>
        <?php
          $fname = get_the_author_meta('first_name');
          $lname = get_the_author_meta('last_name');
         ?>
        <span class="badge bg-primary">Posted By
            <?php echo $fname.' '.$lname;?>
        </span>
        <span class="badge bg-primary">Posted On
            <?php echo get_the_date()?>
        </span>
    </div>
</div>
<?php //comments_template(); ?>   


<?php
    endwhile; 
endif; 
?>