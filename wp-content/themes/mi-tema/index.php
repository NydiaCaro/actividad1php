<?php get_header (); ?>

   <div class="container">
     <div class="row">
       <?php if (have_posts()) : while ( have_posts()) : the_post(); ?>
       <div col-md-8>
      
      <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumbnails', array ('class' =>'img-fluid')); }?></a> 

       <a href="<?php the_permalink(); ?>"><h1 class="my-4"><?php the_title(); ?>
        </h1></a>
        


         <p><?php the_content(); ?></p>
        

         <small><?php the_category(); ?> / <?php the_author(); ?> / <?php the_tags(); ?></small>
       
       <?php endwhile; endif; ?>

       </div>
     </div>

   </div>
<?php get_footer(); ?>
   