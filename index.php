
<?php get_header(); ?>
    <!-- Code pour les articles -->
    <?php if(have_posts()): ?>
        <?php while (have_posts()):the_post(); ?>
        <article style="background:yellow" class="container w-75 my-2">
            <h2 class="post-title text-center"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            <br>
            <p><?php the_content();?></p>
            <br>
            <?php if(the_author_meta()!== null):?>
            <p>Article rédigée par:
                
                <?php the_author_meta('first_name')?>
                <?php the_author_meta('last_name')?>
                <?php the_category()?>
            </p>
            <?php endif ?>
            <a href="#" class="btn btn-success">bouton</a>
        </article>
        <?php endwhile ?>
    <?php endif ?>
    <?php get_footer(); ?>