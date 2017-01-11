<div class="article-content-list">
  <div class="row mobile-content-padding">
    <div class="col-sm-2 hidden-xs"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
      <?php cinecschools_check_thumbnail(70); ?>
      </a></div>
			<div class="col-xs-3 visible-xs margin-l-10"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
      <?php cinecschools_check_thumbnail(160); ?>
      </a></div>
    <div class="col-xs-9 col-sm-10 article-content-list-text margin-l-10">
      <p><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        <?php the_title();?>
        </a><br>
        <span class="news-date">
        <?php the_time(get_option('date_format')); ?>
        </span></p>
    </div>
  </div>
</div>
