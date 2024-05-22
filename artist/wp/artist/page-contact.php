<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package artist
 */

get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field4 = isset($_POST['field5']) ? $_POST['field5']: '';
    
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    お名前 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    題名 : ".$field3."<br>
    メッセージ本文 : <br>".$field4."<br>
    ";

    $subject = 'CONTACT';

    $headers = "From: " . $field3 . "\r\n";
    $headers .= "Reply-To: " . $field3 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
      echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
      echo '<script>location.href="'.home_url().'/failed"</script>';
    }    
}
?>

<!-- CONTAIN_START -->
    <section id="contain"> 
    	<div class="breadcrumb_block_sdp">             
            <div class="container container_inner">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_sdp">
                        <div class="breadcrumb_middle_sdp">
                        	<ol class="breadcrumb">
                           		<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/">HOME</a></li>
                           		<li class="breadcrumb-item"><a href="javascript:void(0);">CONTACT</a></li>                                                              
                        	</ol>                                                                                             
                        </div>                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>         
        <div class="contact_block_cp">
        	<div class="common_shadow_1_hp">
          		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
        	</div>             
            <div class="common_ab_title_hp">
             	<h2>CONTACT</h2>
            </div>              
            <div class="container container_inner">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_cp">
                    	<div class="page_common_title_sdp">
                        	<h2>CONTACT</h2>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="contact_middle_cp">                        		                        
                            <div class="contact_info_cp">
                            	<p>下部のコンタクトフォームよりお問い合わせください。土日祝にいただいたお問い合わせは、翌営業日以降にご返答させていただきます。<br>フォームの入力項目は、全て入力必須となります。</p>                               
                            </div> 
                            
                            
                            <div class="contact_form_cp">                                                                
                                <div class="form_field_cp">
                                    <div class="form_field_lable_cp">お名前 <span>*</span></div>
                                    <div class="form_field_input_cp"><input type="text" name="field1" placeholder="山田　太郎" required></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form_field_cp">
                                    <div class="form_field_lable_cp">メールアドレス <span>*</span></div>
                                    <div class="form_field_input_cp"><input type="email" name="field2" placeholder="sample@email.com" required></div>
                                    <div class="clearfix"></div>
                                </div> 
                                <div class="form_field_cp">
                                    <div class="form_field_lable_cp">題名</div>
                                    <div class="form_field_input_cp"><input type="text" name="field3" placeholder="タイトルテキストがあります。"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form_field_cp">
                                    <div class="form_field_lable_cp">メッセージ本文 <span>*</span></div>
                                    <div class="form_field_input_cp"><textarea name="field4" placeholder="" required></textarea></div>
                                    <div class="clearfix"></div>
                                </div>                                                                                                                                        
                            </div>                            
                            <div class="contact_btn_cp">
                                <input type="hidden" name="submit-confirm" value="submit-confirm">
                            	<button class="btn_submit">送信する</button>  
                            </div>                                                                                                                                             
                        </div>        
                        </form>               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
          	                                                                                                                                       
        <div class="clearfix"></div>
    </section>
<!-- CONTAIN_END -->
<?php
get_footer();
