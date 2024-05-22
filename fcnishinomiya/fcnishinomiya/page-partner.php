<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_partner.jpg);"></div>
        <div class="pgfv_front">
            <div class="pgfv_title">
                <h1 class="lang_en">PARTNER</h1>
                <p>パートナー</p>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="partner_ttl pioup"><span>TOP</span>&nbsp;PARTNER</div>
    <div class="cwidth12">
        <div class="partner_row">
<?php
if( have_rows('top_partner', 'option') ):
    while( have_rows('top_partner', 'option') ) : the_row();
?>            
            <div class="partner_wrap pioup"><img src="<?php echo get_sub_field('logo'); ?>"></div>
<?php
    endwhile;
endif;
?>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="partner_ttl pioup"><span>UNIFORM</span>&nbsp;SUPPLIER</div>
    <div class="cwidth12">
        <div class="partner_row">
<?php
if( have_rows('uniform_supplier', 'option') ):
    while( have_rows('uniform_supplier', 'option') ) : the_row();
?>            
            <div class="partner_wrap pioup"><img src="<?php echo get_sub_field('logo'); ?>"></div>
<?php
    endwhile;
endif;
?>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="partner_ttl pioup"><span>PLATINUM</span>&nbsp;PARTNER</div>
    <div class="cwidth12">
        <div class="partner_row">
<?php
if( have_rows('platinum_partner', 'option') ):
    while( have_rows('platinum_partner', 'option') ) : the_row();
?>            
            <div class="partner_wrap pioup"><img src="<?php echo get_sub_field('logo'); ?>"></div>
<?php
    endwhile;
endif;
?>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="partner_ttl pioup"><span>GOLD</span>&nbsp;PARTNER</div>
    <div class="cwidth12">
        <div class="partner_row">
<?php
if( have_rows('gold_partner', 'option') ):
    while( have_rows('gold_partner', 'option') ) : the_row();
?>            
            <div class="partner_wrap pioup"><img src="<?php echo get_sub_field('logo'); ?>"></div>
<?php
    endwhile;
endif;
?>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="partner_ttl pioup"><span>SILVER</span>&nbsp;PARTNER</div>
    <div class="cwidth12">
        <div class="partner_row">
<?php
if( have_rows('silver_partner', 'option') ):
    while( have_rows('silver_partner', 'option') ) : the_row();
?>            
            <div class="partner_wrap pioup"><img src="<?php echo get_sub_field('logo'); ?>"></div>
<?php
    endwhile;
endif;
?>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
