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
        <div class="row">
            <div class="meta-content col-lg-6">
                <div class="custom-fields">
                    <ul class="list-group">
                        <?php if ( get_post_meta($post->ID,'Color',true) ):?>
                        <li class="list-group-item shadow bg-primary text-white mb-2 rounded" style="width:80%">
                            Color:
                            <?php echo get_post_meta( $post->ID, 'Color', true )?>
                        </li>
                        <?php endif; ?>
                        <?php if ( get_post_meta($post->ID,'Registration',true) ):?>
                        <li class="list-group-item shadow bg-primary text-white mb-2 rounded" style="width:80%">
                            Registration:
                            <?php echo get_post_meta( $post->ID, 'Registration', true )?>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
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
            <div class="query-form col-lg-6">
                <?php gravity_form(1,'Car Enquery',null,false,[],true,100,true); ?>
            </div>
        </div>
    </div>
</div>
<?php //comments_template(); ?>


<?php
    endwhile; 
endif; 
?>