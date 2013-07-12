<?php
$fh = Loader::helper('form'); /* @var $fh FormHelper */
/* @var $controller LertecoTextAttributeTypeController */
?>

<fieldset>
	<legend><?php echo t('Validation')?></legend>

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