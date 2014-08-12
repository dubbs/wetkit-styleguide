<?php include '../includes/head.php' ?>

<div class="wb-frmvld">
<form action="#" method="get" id="validation-example">
<fieldset>
<legend>Contact information</legend>
<div class="form-group">
<label for="title1" class="required"><span class="field-name">Title</span> <strong class="required">(required)</strong></label>
<select class="form-control" id="title1" name="title1" required="required">
<option label="Select a title"></option>
<option value="dr">Dr.</option>
<option value="esq">Esq.</option>
<option value="mr">Mr.</option>
<option value="ms">Ms.</option>
</select>
</div>

<div class="form-group">
<label for="fname1" class="required"><span class="field-name">First Name</span> <strong class="required">(required)</strong></label>
<input class="form-control" id="fname1" name="fname1" type="text" required="required" pattern=".{2,}" data-rule-minlength="2"/>
</div>

<div class="form-group">
<label for="lname1" class="required"><span class="field-name">Last Name</span> <strong class="required">(required)</strong></label>
<input class="form-control" id="lname1" name="lname1" type="text" required="required" pattern=".{2,}" data-rule-minlength="2"/>
</div>

<div class="form-group">
<label for="tel1" class="required"><span class="field-name">Telephone Number</span> (999-999-9999) <strong class="required">(required)</strong></label>
<input class="form-control" id="tel1" name="tel1" type="tel" required="required" data-rule-phoneUS="true"/>
</div>

<div class="form-group">
<label for="email1"><span class="field-name">Email Address</span> (yourname@domain.com)</label>
<input class="form-control" id="email1" name="email1" type="email"/>
</div>
<div class="form-group">
<label for="url1"><span class="field-name">Website URL (http://www.url.com)</span></label>
<input class="form-control" id="url1" name="url1" type="url"/>
</div>

</fieldset>
<fieldset>
<legend>Other examples</legend>
<div class="form-group">
<label for="date1"><span class="field-name">Date</span><span class="datepicker-format"> (YYYY-MM-DD)</span></label>
<input class="form-control" id="date1" name="date1" type="date" data-rule-dateISO="true"/>
</div>

<div class="form-group">
<label for="time1"><span class="field-name">Time</span> (hh:mm)</label>
<input class="form-control" id="time1" name="time1" type="time"/>
</div>
<div class="form-group">
<label for="number1"><span class="field-name">Number</span> (between 5 and 40)</label>
<input class="form-control" id="number1" name="number1" type="number" min="5" max="40"/>
</div>
<div class="form-group">
<label for="an1"><span class="field-name">Alphanumeric</span> (at least 4 characters)</label>
<input class="form-control" id="an1" name="an1" type="text" pattern="[A-Za-z0-9\s]{4,}" data-rule-alphanumeric="true" data-rule-minlength="4"/>
</div>
<div class="form-group">
<label for="numeric1"><span class="field-name">Numeric</span> (digits only)</label>
<input class="form-control" id="numeric1" name="numeric1" type="number" data-rule-digits="true"/>
</div>
<div class="form-group">
<label for="letters1"><span class="field-name">Letters only</span> (maximum of 5 characters)</label>
<input class="form-control" id="letters1" name="letters1" type="text" size="5" maxlength="5" pattern="[A-Za-z\s]" data-rule-lettersonly="true"/>
</div>
<div class="form-group">
<label for="text1"><span class="field-name">Letters and punctuation only</span> (allowed punctuation: [. , ( ) "])</label>
<input class="form-control" id="text1" name="text1" type="text" pattern="[A-Za-z-.,()'&#34;\s]" data-rule-letterswithbasicpunc="true"/>
</div>
<div class="form-group">
<label for="password1"><span class="field-name">Password</span> (between 5 and 10 characters)</label>
<input class="form-control" id="password1" name="password1" type="password" maxlength="10" size="10" pattern=".{5,10}" data-rule-rangelength="[5,10]"/>
</div>
</fieldset>
<fieldset>
<legend class="required"><span class="field-name">Favourite pets</span> <strong class="required">(required)</strong></legend>
<div class="checkbox">
<label for="animal1"><input type="checkbox" name="animal" value="1" id="animal1" required="required"/>&#160;&#160;Dog</label>
</div>
<div class="checkbox">
<label for="animal2"><input type="checkbox" name="animal" value="2" id="animal2"/>&#160;&#160;Cat</label>
</div>
<div class="checkbox">
<label for="animal3"><input type="checkbox" name="animal" value="3" id="animal3"/>&#160;&#160;Fish</label>
</div>
<div class="checkbox">
<label for="animal4"><input type="checkbox" name="animal" value="4" id="animal4"/>&#160;&#160;Other</label>
</div>
</fieldset>
<fieldset>
<legend class="required"><span class="field-name">Citizenship status</span> <strong class="required">(required)</strong></legend>
<div class="radio">
<label for="status1"><input type="radio" name="status" value="1" id="status1" required="required"/>&#160;&#160;Canadian citizen</label>
</div>
<div class="radio">
<label for="status2"><input type="radio" name="status" value="2" id="status2"/>&#160;&#160;Permanent resident</label>
</div>
<div class="radio">
<label for="status3"><input type="radio" name="status" value="3" id="status3"/>&#160;&#160;Work permit</label>
</div>
<div class="radio">
<label for="status4"><input type="radio" name="status" value="4" id="status4"/>&#160;&#160;Other</label>
</div>
</fieldset>
<input type="submit" value="Submit" class="btn btn-primary"/> <input type="reset" value="Reset" class="btn btn-default"/>
</form>
</div>


<?php include '../includes/footer.php' ?>