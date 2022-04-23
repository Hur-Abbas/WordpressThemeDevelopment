<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        // Display post content
        ?>

<div class="card mb-3 shadow rounded" style="width:80%">
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
    endwhile;else: 
?>
<div class="container card shadow rounded mt-5 pt-3 pb-3" style="width:60%">
<h3 class="text-center">
      Didn't Find Anything For <?php echo get_search_query()?>
      <br>
      <a class="btn btn-danger mt-3" href="<?php get_template_directory_uri().'../front-page.php' ?>" role="button">Go Back</a>
  </h3>
</div>

    <?php
endif; 
?>