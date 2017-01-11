<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>

<div class="main-content-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 main-content">
        <div class="row main-content-top">
          <div class="col-sm-5 main-content-heading">
            <p class="main-content-heading-txt">
              <?php the_title();?>
            </p>
          </div>
          <div class="col-sm-7 breadcrumb hidden-xs">
            <p class="pull-right">
              <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </p>
          </div>
        </div>
        <div class="row main-content-top-pad"><!-- Begin first section holds the right content columns-->
          <div class="pull-left"><?php get_search_form(); ?>
          </div>
          <div class="push"></div>
          
          <!--content--> 
          
        </div>
      </div>
    </div>
  </div>
</div>
<!--end news block-->
<?php get_footer(); ?>
