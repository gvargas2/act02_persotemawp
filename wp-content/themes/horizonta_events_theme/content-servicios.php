<section class="section" id="section1">
  <h2>Nuestros servicios</h2>

  <div class="masonry">
    <?php
      $arg = array(
        'posts_per_page' => -1 ,
        'order' => 'ASC'
      );

      $get_arg = new WP_Query( $arg );

      while ( $get_arg->have_posts() ) {
        $get_arg->the_post();
      ?>

      <figure class="item">
        <div class="img-container"><?php the_post_thumbnail() ?></div>
        <figcaption>
          <h3><?php the_title() ?></h3>
          <p><?php the_excerpt() ?></p>
        </figcaption>
      </figure>

      <?php } wp_reset_postdata();
    ?>
  </div>
</section>
