<?php
$fh = Loader::helper('form'); /* @var $fh FormHelper */

$field = str_replace(array('[', ']'), array('\\\\[', '\\\\]'), $fieldName);
$attributes = array();
if ($textConfig['valMaxInputLength'] > 0) {
    $attributes['maxlength'] = $textConfig['valMaxInputLength'];
}

switch ($textConfig['valControl']) {
	case LertecoTextAttributeTypeController::CONTROL_TEXT:
                $attributes['class'] = 'span3';
		echo $fh->text($fieldName, $value, $attributes);
		break;
	case LertecoTextAttributeTypeController::CONTROL_TEXTAREA:
		echo $fh->textarea($fieldName, $value, $attributes);
		break;
}
?>

<?php if ($textConfig['valInputLength'] == 1) { ?>
<div>
    <span id="lerteco_text_at_chars_<?php echo $fieldName?>"></span>
    <?php echo t('characters left') ?>
</div>
<script type="text/javascript">
$(function() {
            $elem = $("#lerteco_text_at_chars_<?php echo $field?>");
            $("#<?php echo $field?>").inputLengthRestrictor(<?php echo $textConfig['valMaxInputLength']?>, $elem);
});
</script>
<?php } ?>

<?php if ($mustVal) {
	
?>

	<script type="text/javascript">
		$(function() {
			// attach jquery validation to the form
			$('#<?php echo $field ?>').closest('form').validate();
			// bind the form-pre-serialize watcher to the form. this intercepts calls by .ajaxSubmit (used on the dashbaord pages)
			$('#<?php echo $field ?>').closest('form').bind('form-pre-serialize', function(event, form, opts, veto) {
				if (! form.valid()) {
					$($(this).closest('tr').find('a')[0]).trigger('click');
					veto.veto = true;
				}
			});

			// add rules one at a time... can't add them as part of validate (commas get messy. also, might be more than one attribute per a page.)
			<?php if ($textConfig['valReq']) { ?>
				$('#<?php echo $field ?>').rules('add', { required: true });
			<?php } ?>

			<?php if ($textConfig['valType'] == LertecoTextAttributeTypeController::TYPE_EMAIL) { ?>
				$('#<?php echo $field ?>').rules('add', { email: true });
			<?php } else if ($textConfig['valType'] == LertecoTextAttributeTypeController::TYPE_URL) { ?>
				$('#<?php echo $field ?>').rules('add', { url: true });
			<?php } else if ($textConfig['valType'] == LertecoTextAttributeTypeController::TYPE_REGEXP && $textConfig['valRegExp']) { ?>
				$('#<?php echo $field ?>').rules('add', { regex: '<?php echo str_replace('\\', '\\\\', $textConfig['valRegExp']) ?>'});
			<?php } ?>                           
		});
	</script>
<?php } ?>