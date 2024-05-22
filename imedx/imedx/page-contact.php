<?
/**
 * Template Name: お問い合わせ
 */
?>
<?php get_template_part('templates/head'); ?>
<?php get_template_part('templates/header'); ?>
<?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
<div class="l-wrap">
    <div class="p-mv-page">
        <p class="p-headline__en">Contact</p>
        <h1 class="p-headline__ja">お問い合わせ</h1>
        <a href="<?php echo get_site_url(); ?>/service/contact" class="c-btn__square">サービスへのお問合せはこちら</a>
    </div>
</div>
<div class="l-section l-section-contact">
    <div class="l-wrap">
        <?php remove_filter('the_content', 'wpautop'); ?>
        <?php echo do_shortcode('[contact-form-7 id="5" title="コーポレートサイトお問い合わせ"]'); ?>
    </div>
</div>
<?php get_template_part('templates/footer'); ?>

<script>
    // チェックが入ったら送信可能にする
    $(function(){
        $('input[name=checkagree]').on('change',function() {
            $('input.c-btn__curve').toggleClass('is_send');
        });
    });

    const companyInput = document.querySelector('input[name="company"]');
    const postInput = document.querySelector('input[name="post"]');
    const nameInput = document.querySelector('input[name="your_name"]');
    const emailInput = document.querySelector('input[name="email"]');
    const telInput = document.querySelector('input[name="tel"]');
    const bodyInput = document.querySelector('textarea[name="body"]');
    const submitButton = document.querySelector('input[type="submit"]');
    const inputMessage = document.createElement('p');
    inputMessage.className = 'error-msg';
    inputMessage.textContent = '電話番号またはメールアドレスは必須です。';
    const errorMessage = document.createElement('div');
    errorMessage.className = 'error-tip';
    errorMessage.textContent = '入力内容に問題があります。確認して再度お試しください。';

    /* 入力したら削除する */
    // メールに入力し、外したらエラーを削除
    emailInput.addEventListener('blur', () => {
        if (emailInput.value.length > 0) {
            inputMessage.remove();
        }
    });
    // 電話に入力し、外したらエラーを削除
    telInput.addEventListener('blur', () => {
        if (telInput.value.length > 0) {
            inputMessage.remove();
        }
    });

    /* submit時の処理 */
    submitButton.addEventListener('click', function(event) {
        errorMessage.remove();
        inputMessage.remove();
        console.log('1');
        if(!companyInput.value || !postInput.value || !nameInput.value || !bodyInput.value) {
            console.log('2');
            if (!emailInput.value && !telInput.value) {
                console.log('3');
                emailInput.parentNode.insertBefore(inputMessage, emailInput.nextSibling);
            }
        } else {
            console.log('4');
            if (!emailInput.value && !telInput.value) {
                console.log('5');
                event.preventDefault();
                emailInput.parentNode.insertBefore(inputMessage, emailInput.nextSibling);
                submitButton.parentNode.insertBefore(errorMessage, submitButton.nextSibling);
                console.log('6');
                // submitButton.parentNode.appendChild(errorMessage);
                // $('#submit-contact').insertAdjacentElement('afterend', errorMessage);
                // $(errorMessage).insertAfter(submitButton);
            }
        }
    });

    // お問い合わせ送信について
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '/contact/thanks';
    }, false );
</script>
</body>
</html>