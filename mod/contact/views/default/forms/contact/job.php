<?php

$job_id = get_input('jobid');
$job = get_entity($job_id);
if ($job) {
	$job_name = $job->title;
}

$user = elgg_get_logged_in_user_entity();

require_once(dirname(__FILE__) . "/include/fgcontactform.php");
require_once(dirname(__FILE__) . "/include/simple-captcha.php");
$email=elgg_get_plugin_setting('email','contact');
$formproc = new FGContactForm();
$sim_captcha = new FGSimpleCaptcha('scaptcha');

$formproc->EnableCaptcha($sim_captcha);

elgg_load_js('contact:validator');

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient($email); //<<---Put your email address here

//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
//        $formproc->RedirectToURL(dirname(__FILE__) . "thank-you.php");
	//register_error(elgg_echo('contact:thanks_us'));
	system_message(elgg_echo('contact:thanks_job'));
	forward('');
   }
}

?>

<fieldset class='contact-fieldset'>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='contact-spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<input type='hidden' name='username' id='username' value='<?php echo $user->username; ?>' />
<input type='hidden' name='job' id='job' value='<?php echo $job_name; ?>' />

<div class='contact-short_explanation'>* <?php echo elgg_echo('contact:require'); ?></div>

<div><span class='contact-error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='contact-container'>
    <label for='jobname' class='contact-label'><?php echo elgg_echo('contact:jobname'); ?>: </label><br/>
    <input type='text' name='jobname' id='jobname' value='<?php echo $job_name; ?>' maxlength="50" class='contact-text' disabled /><br/>
    <span id='contactus_name_errorloc' class='contact-error'></span>
</div>

<div class='contact-container'>
    <label for='name' class='contact-label'><?php echo elgg_echo('contact:name'); ?>*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" class='contact-text' style='ime-mode: active;' /><br/>
    <span id='contactus_name_errorloc' class='contact-error'></span>
</div>
<div class='contact-container'>
    <label for='email' class='contact-label'><?php echo elgg_echo('contact:pcmail'); ?>*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" class='contact-text' style='ime-mode: disabled;' /><br/>
    <span id='contactus_email_errorloc' class='contact-error'></span>
</div>
<div class='contact-container'>
    <label for='phone' class='contact-label'><?php echo elgg_echo('contact:mobile'); ?>:</label><br/>
    <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="15" class='contact-text' style='ime-mode: disabled;' /><br/>
    <span id='contactus_phone_errorloc' class='contact-error'></span>
</div>
<div class='contact-container'>
    <label for='zip' class='contact-label'><?php echo elgg_echo('contact:zip'); ?>:</label><br/>
    <input type='text' name='zip' id='zip' value='<?php echo $formproc->SafeDisplay('zip') ?>' maxlength="8" class='contact-zip' style='ime-mode: disabled;' /><br/>
    <span id='contactus_zip_errorloc' class='contact-error'></span>
</div>
<div class='contact-container'>
    <label for='address' class='contact-label'><?php echo elgg_echo('contact:address'); ?>: </label><br/>
    <input type='text' name='address' id='address' value='<?php echo $formproc->SafeDisplay('address') ?>' maxlength="50" class='contact-text' style='ime-mode: active;' /><br/>
    <span id='contactus_address_errorloc' class='contact-error'></span>
</div>
<!--
<div class='contact-container'>
    <label for='message' class='contact-label'><?php echo elgg_echo('contact:message'); ?></label><br/>
    <span id='contactus_message_errorloc' class='contact-error'></span>
    <textarea rows="10" cols="50" name='message' id='message' class='contact-textarea' style='ime-mode: active;' ><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>
-->
<br>
<fieldset id='antispam' class='contact-antispam'>
<legend ><?php echo elgg_echo('contact:antispam'); ?></legend>
<span class='contact-short_explanation'><?php echo elgg_echo('contact:question'); ?></span>
<div class='contact-container'>
    <label for='scaptcha' class='contact-label'><?php echo $sim_captcha->GetSimpleCaptcha(); ?></label>
    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" class='contact-text' style='ime-mode: active;' /><br/>
    <span id='contactus_scaptcha_errorloc' class='contact-error'></span>
</div>
</fieldset>

<div class='contact-container'>
    <input type='submit' name='Submit' value='<?php echo elgg_echo('contact:send'); ?>' class='contact-submit' />
</div>

</fieldset>

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("entryjob");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","<?php echo elgg_echo('contact:error:no_name'); ?>");
    frmvalidator.addValidation("email","req","Please provide your email address");
    frmvalidator.addValidation("phone","req","Please provide your phone number");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");


    frmvalidator.addValidation("scaptcha","req","Please answer the anti-spam question");

// ]]>
</script>

