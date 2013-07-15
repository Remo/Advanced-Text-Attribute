<?php
$fh = Loader::helper('form'); /* @var $fh FormHelper */
/* @var $controller LertecoTextAttributeTypeController */
?>

<fieldset>
	<legend><?php echo t('Validation')?></legend>
	
	<div class="clearfix control-group">
		<label class="control-label"><?php echo t('Input Control')?></label>
		<div class="input controls">
			<?php echo $fh->select('valControl', $controlOptions, $textConfig['valControl']); ?>
		</div>
	</div>
	<div class="clearfix control-group">
		<label class="control-label"><?php echo t('Input Type')?></label>
		<div class="input controls">
			<?php echo $fh->select('valType', $typeOptions, $textConfig['valType']); ?>
		</div>
	</div>
	<div id="control-regexp" class="clearfix control-group">
		<label class="control-label"><?php echo t('Regular Expression')?></label>
		<div class="input controls">
			<?php echo $fh->text('valRegExp', $textConfig['valRegExp']); ?>
		</div>
	</div>
	<div class="clearfix control-group">
		<label class="control-label"><?php echo t('Required')?></label>
		<div class="input controls">
			<?php echo $fh->checkbox('valReq', '1', $textConfig['valReq']); ?>
		</div>
	</div>
	<div id="control-regexp" class="clearfix control-group">
		<label class="control-label"><?php echo t('Maximum Input Length')?></label>
		<div class="input controls">
			<?php echo $fh->text('valMaxInputLength', $textConfig['valMaxInputLength']); ?>
			<br/>
			<?php echo $fh->checkbox('valInputLength', '1', $textConfig['valInputLength']); ?>
			<?php echo t('Display character count') ?>
		</div>
	</div>        
</fieldset>
<fieldset id="set-display">
	<legend><?php echo t('Display')?></legend>
	
	<div id="control-regexp" class="clearfix control-group">
		<label class="control-label"><?php echo t('Format As Type')?></label>
		<div class="input controls">
			<?php echo $fh->checkbox('formatType', '1', $textConfig['formatType']); ?>
		</div>
	</div>
</fieldset>