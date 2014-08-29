<?php include '../../includes/head.php'; ?>

<div class="wb-frmvld">
	<form action="#" method="get" id="validation-example">

<?php
patternize('TEXT', '../input-text.html');
patternize('SEARCH', '../input-search.html');
patternize('TEL', '../input-tel.html');
patternize('URL', '../input-url.html');
patternize('EMAIL', '../input-email.html');
patternize('PASSWORD', '../input-password.html');
// patternize('DATETIME', '../input-datetime.html');
patternize('DATE', '../input-date.html');
// patternize('MONTH', '../input-month.html');
// patternize('WEEK', '../input-week.html');
patternize('TIME', '../input-time.html');
patternize('NUMBER', '../input-number.html');
// patternize('RANGE', '../input-range.html');
// patternize('COLOR', '../input-color.html');
patternize('CHECKBOX', '../input-checkbox.html');
patternize('RADIO', '../input-radio.html');
// patternize('FILE', '../input-file.html');
patternize('SUBMIT', '../input-submit.html');
// patternize('IMAGE', '../input-image.html');
patternize('RESET', '../input-reset.html');
// patternize('BUTTON', '../input-button.html');
// patternize('BUTTON', '../button.html');
patternize('SELECT', '../select.html');
// patternize('DATALIST', '../datalist.html');
// patternize('OPTGROUP', '../optgroup.html');
// patternize('OPTION', '../option.html');
patternize('TEXTAREA', '../textarea.html');
// patternize('KEYGEN', '../keygen.html');
// patternize('OUTPUT', '../output.html');
// patternize('PROGRESS', '../progress.html');
// patternize('METER', '../meter.html');
// patternize('FIELDSET', '../fieldset.html');
// patternize('LEGEND', '../legend.html');
?>

	</form>
</div>

<?php include '../../includes/footer.php';
