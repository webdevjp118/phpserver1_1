<?php
get_header();
?>

<main>
    <section class="page _service">
        <h1 class="pageTitle">施工実績</h1>
        <h2 class="xl_en">WORKS</h2>
        <div class="breadcrumb">
            <span class="bread_top"><a href="<?php echo get_site_url(); ?>/">TOP</a></span>
            <span>&nbsp; &gt; &nbsp;</span>
            <span>施工実績</span>
        </div>
    </section>
<?php
 $query = new WP_Query([
  'post_type'      => 'work',
  'nopaging'       => true,
  'posts_per_page' => -1,
]);
$work_list = [];
if($query->have_posts() ) {
  while ( $query->have_posts() ){
    $query->the_post();
    $loop_id = get_the_id();
    $loop_title = get_the_title();
    $loop_cat = get_post_meta($loop_id, 'work_cat', true);
    if(!array_key_exists($loop_cat, $work_list)) {
      if(!empty($loop_cat)) {
        $work_list[$loop_cat] = [];
        array_push($work_list[$loop_cat], $loop_id);
      }
    }
    else {
      array_push($work_list[$loop_cat], $loop_id);
    }
  } 
}
?>

    <sectino class="works">
        <div class="flex">
            <a href="#roofing" class="btn -type4">屋根工事</a>
            <a href="#exterior" class="btn -type4">外壁工事</a>
            <a href="#rain" class="btn -type4">雨樋工事</a>
            <a href="#sheet" class="btn -type4">板金工事</a>
        </div>
    </sectino>
    <div class="wrapper">
        <section class="exterior" id="roofing">
            <h2 class="_en">ROOFING</h2>
            <h2 class="section_title">屋根工事</h2>
<?php
  $loop_work_cat = '屋根工事';
  if(array_key_exists($loop_work_cat, $work_list)) {
    for($i=0;$i<count($work_list[$loop_work_cat]);$i++) {
      $loop_id = $work_list[$loop_work_cat][$i];
      $loop_title = get_the_title($loop_id);
      $loop_content = get_post_meta($loop_id, 'work_content', true);
      $loop_before = get_field('before', $loop_id);
      $loop_after = get_field('after', $loop_id);
?>
            <div class="worksBox">
                <h3 class="worksTitle"><?php echo $loop_title; ?></h3>
                <div class="flex">
                    <p class="worksText">
                        <?php echo $loop_content; ?>
                    </p>
                    <div class="fiugreBox">
                        <fiugre class="worksFigure">
                            <img src="<?php echo $loop_before; ?>" alt="">
                            <figcaption>Before</figcaption>
                        </fiugre>
                        <fiugre class="worksFigure">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works_02.png" alt="">
                        </fiugre>
                        <fiugre class="worksFigure">
                            <img src="<?php echo $loop_after; ?>" alt="">
                            <figcaption>After</figcaption>
                        </fiugre>
                    </div>
                </div>
            </div>
<?php
    }
  }
?>
        </section>
        <section class="exterior" id="exterior">
            <h2 class="_en">EXTERIOR WALL</h2>
            <h2 class="section_title">外壁工事</h2>
<?php
  $loop_work_cat = '外壁工事';
  if(array_key_exists($loop_work_cat, $work_list)) {
    for($i=0;$i<count($work_list[$loop_work_cat]);$i++) {
      $loop_id = $work_list[$loop_work_cat][$i];
      $loop_title = get_the_title($loop_id);
      $loop_content = get_post_meta($loop_id, 'work_content', true);
      $loop_before = get_field('before', $loop_id);
      $loop_after = get_field('after', $loop_id);
?>
            <div class="worksBox">
                <h3 class="worksTitle"><?php echo $loop_title; ?></h3>
                <div class="flex">
                    <p class="worksText">
                        <?php echo $loop_content; ?>
                    </p>
                    <div class="fiugreBox">
                        <fiugre class="worksFigure">
                            <img src="<?php echo $loop_before; ?>" alt="">
                            <figcaption>Before</figcaption>
                        </fiugre>
                        <fiugre class="worksFigure">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works_02.png" alt="">
                        </fiugre>
                        <fiugre class="worksFigure">
                            <img src="<?php echo $loop_after; ?>" alt="">
                            <figcaption>After</figcaption>
                        </fiugre>
                    </div>
                </div>
            </div>
<?php
    }
  }
?>
        </section>
        <section class="rain" id="rain">
            <h2 class="_en">RAIN GUTTER</h2>
            <h2 class="section_title">雨樋工事</h2>
<?php
  $loop_work_cat = '雨樋工事';
  if(array_key_exists($loop_work_cat, $work_list)) {
    for($i=0;$i<count($work_list[$loop_work_cat]);$i++) {
      $loop_id = $work_list[$loop_work_cat][$i];
      $loop_title = get_the_title($loop_id);
      $loop_content = get_post_meta($loop_id, 'work_content', true);
      $loop_before = get_field('before', $loop_id);
      $loop_after = get_field('after', $loop_id);
?>
            <div class="worksBox">
                <h3 class="worksTitle"><?php echo $loop_title; ?></h3>
                <div class="flex">
                    <p class="worksText">
                        <?php echo $loop_content; ?>
                    </p>
                    <div class="fiugreBox">
                        <fiugre class="worksFigure">
                            <img src="<?php echo $loop_before; ?>" alt="">
                            <figcaption>Before</figcaption>
                        </fiugre>
                        <fiugre class="worksFigure">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works_02.png" alt="">
                        </fiugre>
                        <fiugre class="worksFigure">
                            <img src="<?php echo $loop_after; ?>" alt="">
                            <figcaption>After</figcaption>
                        </fiugre>
                    </div>
                </div>
            </div>
<?php
    }
  }
?>
        </section>
        <section class="sheet" id="sheet">
            <h2 class="_en">SHEET METAL</h2>
            <h2 class="section_title">板金工事</h2>
<?php
  $loop_work_cat = '板金工事';
  if(array_key_exists($loop_work_cat, $work_list)) {
    for($i=0;$i<count($work_list[$loop_work_cat]);$i++) {
      $loop_id = $work_list[$loop_work_cat][$i];
      $loop_title = get_the_title($loop_id);
      $loop_content = get_post_meta($loop_id, 'work_content', true);
      $loop_before = get_field('before', $loop_id);
      $loop_after = get_field('after', $loop_id);
?>
            <div class="worksBox">
                <h3 class="worksTitle"><?php echo $loop_title; ?></h3>
                <div class="flex">
                    <p class="worksText">
                        <?php echo $loop_content; ?>
                    </p>
                    <div class="fiugreBox">
                        <fiugre class="worksFigure">
                            <img src="<?php echo $loop_before; ?>" alt="">
                            <figcaption>Before</figcaption>
                        </fiugre>
                        <fiugre class="worksFigure">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works_02.png" alt="">
                        </fiugre>
                        <fiugre class="worksFigure">
                            <img src="<?php echo $loop_after; ?>" alt="">
                            <figcaption>After</figcaption>
                        </fiugre>
                    </div>
                </div>
            </div>
<?php
    }
  }
?>
        </section>
    </div>
    <section class="contact_top ">
        <h2 class="xl_en">CONTACT</h2>
        <h2 class="section_title">お問い合わせ</h2>
        <p class="contact_topText">
            サービスに関するご質問やご相談は、お電話またはフォームからお問い合せください。
        </p>
        <div class="btnBox">
            <a href="tel:123-456-7890" class="btn -type3">
      <i class="fa-solid fa-phone"></i>123-456-7890
      <span>[営業時間] 平日9:00~18:00</span>
    </a>
            <a href="<?php echo get_site_url(); ?>/company" class="btn -type2">会社概要を見る</a>
        </div>
    </section>
</main>
<?php
get_footer();
