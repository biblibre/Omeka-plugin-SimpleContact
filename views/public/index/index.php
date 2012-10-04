<?php head(); ?>
<div id="primary">
<h1><?php echo html_escape(settings('simple_contact_form_contact_page_title')); ?></h1>

<div id="simple-contact">
	<div id="form-instructions">
		<?php echo get_option('simple_contact_form_contact_page_instructions'); // HTML ?>
	</div>
	<?php echo flash(); ?>
	<form name="contact_form" id="contact-form"  method="post" enctype="multipart/form-data" accept-charset="utf-8">

        <fieldset>

        <div class="field">
		<?php
		    echo $this->formLabel('name', __('Your name:'));
		    echo $this->formText('name', $name, array('class'=>'textinput')); ?>
		</div>

        <div class="field">
            <?php
            echo $this->formLabel('email', __('Your email:'));
		    echo $this->formText('email', $email, array('class'=>'textinput'));  ?>
        </div>

		<div class="field">
		  <?php
		    echo $this->formLabel('message', __('Your message:'));
		    echo $this->formTextarea('message', $message, array('class'=>'textinput', 'rows' => '10')); ?>
		</div>

		</fieldset>

        <fieldset>
        <?php if ($captcha): ?>
        <div class="field">
            <?php echo $captcha; ?>
        </div>
        <?php endif; ?>

		<div class="field">
		  <?php echo $this->formSubmit('send', __('Send message')); ?>
		</div>

	    </fieldset>
	</form>
</div>

</div>
<?php foot();
