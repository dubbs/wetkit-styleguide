<?php include '../../../includes/head.php' ?>

<div class="wb-frmvld">
	<form action="#" method="get" id="validation-example">

<?php patternize('Text',     'text.php'); ?>
<?php patternize('Tel',      'tel.php'); ?>
<?php patternize('Email',    'email.php'); ?>
<?php patternize('Url',      'url.php'); ?>
<?php patternize('Date',     'date.php'); ?>
<?php patternize('Number',   'number.php'); ?>
<?php patternize('Time',     'time.php'); ?>
<?php patternize('Password', 'password.php'); ?>
<?php patternize('Select',   'select.php'); ?>
<?php patternize('Checkbox', 'checkbox.php'); ?>
<?php patternize('Radio',    'radio.php'); ?>
<?php patternize('Submit',   'submit.php'); ?>

	</form>
</div>

<?php include '../../../includes/footer.php' ?>