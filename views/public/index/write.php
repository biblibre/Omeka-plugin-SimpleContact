<?php
$pageTitle = __('Contact Us');
echo head(array(
    'title' => $pageTitle,
    'bodyclass' => 'contact-us',
    'bodyid' => 'contact-us',
));
?>
<div id="primary">
    <?php echo flash(); ?>
    <h1><?php echo html_escape(get_option('simple_contact_page_contact_title')); ?></h1>
    <div id="form-instructions">
        <?php echo get_option('simple_contact_page_contact_text'); // HTML ?>
    </div>
    <?php
    $options = array(
        'form_attributes' => array(
            'id' => 'contact-form',
            'method' => 'post',
            'enctype' => 'multipart/form-data',
            'accept-charset' => 'utf-8',
            'class' => 'form-horizontal',
        ),
        'name' => $name,
        'email' => $email,
        'message' => $message,
        'captcha' => $captcha,
        'path' => 'contact',
    );
    echo $this->simpleContactForm($options);
    ?>
</div>
<?php echo foot();
