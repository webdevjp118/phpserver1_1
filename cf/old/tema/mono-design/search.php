<?php  /*Template name:product*/ ?>

<?php get_header(); ?>

<!-- InstanceBeginEditable name="pan" -->
<div id="pan">
<div class="txt">トップページ＞取扱い品目</div>
</div>
<!-- InstanceEndEditable -->


<!-- InstanceBeginEditable name="pageImage" -->

<!-- ---------------------------------------pageImage--------------------------------------- -->
<div id="pageImage">
<img src="/_img/pageImage/pageImage_handling.png" width="950" height="163" alt="取扱い品目" />
</div>
<!-- ---------------------------------------//pageImage--------------------------------------- -->
<!-- InstanceEndEditable -->


<!-- ------------------------------------------contentArea------------------------------------------ -->
<div id="contentArea" class="clearfix">

<!-- ---------------------MainArea----------------------------- -->
<!-- InstanceBeginEditable name="content" -->
<div id="mainArea">

<?php //検索結果件数表示  ?>
<?php if (have_posts()) :  ?>
<?php
$allsearch =& new WP_Query("s=$s&showposts=-1");
$key = wp_specialchars($s, 1);
$count = $allsearch->post_count;
echo '<h2>&#8216;'.$key.'&#8217; で検索した結果：'.$count.' 件</h2>';
?>
<?php while (have_posts()) : the_post(); ?>
<?php endwhile; endif; ?>



<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<div class="search_list">
<a href="<?php the_permalink(); ?>">
<?php the_title() ?>
</a>
</div>

<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

<?php endwhile; ?>
<?php else : ?>
該当する項目はありません。
<?php endif; ?>

<!--back button--> 
<div id="bt_back"> 
<a href="javascript:history.back()"><img src="/_img/common/bt_back.png" alt="戻る" width="111" height="28" class="mr10" /></a> 
<a href="#top"><img src="/_img/common/bt_top.png" alt="このページのトップへ" width="111" height="28" /></a> 
</div> 
<!-- //back button -->

</div>
<!-- InstanceEndEditable -->
<!-- ---------------------//MainArea----------------------------- -->

<!-- ---------------------contentsMenu----------------------------- -->    
<div id="contentsMenu">

<!-- InstanceBeginEditable name="tmpMenu" -->
<div id="tmpMenu">

</div>
<!-- InstanceEndEditable -->


<div id="sideMenu">
<?php get_sidebar(); ?>
</div>
<!-- ---------------------//contentsMenu----------------------------- -->

</div>
<!-- ------------------------------------------//contentArea------------------------------------------ -->

<?php get_footer(); ?>