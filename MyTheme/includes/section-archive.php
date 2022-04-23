<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        // Display post content
        ?>

<div class="card mb-3 shadow rounded ">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4">
                <?php if(has_post_thumbnail()){?>
                <img src="<?php the_post_thumbnail_url('blog-large') ?>" alt="<?php the_title() ?>"
                    class="shadow-lg rounded img-fluid mb-3 ">
                <?php
      } ?>
            </div>
            <div class="col-lg-8">
                <h3>
                    <?php the_title(); ?>
                </h3>
                <?php the_excerpt();?>
                <a href="<?php the_permalink();?>" class="btn btn-primary">Read More</a>
            </div>
        </div>


    </div>
</div>



<?php
    endwhile; 
endif; 
?>