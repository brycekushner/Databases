<html>
	<?php include('header.php'); ?>
<body>
<h1>Available Forms</h1>

<!-- START FORELIMB FORM -->
<h3>Forelimb Pathology Form</h3>
<form action="results.php" method="post">
<label>Horse's name: </label>
<input type="text" name="horse_name_forelimb"><br>
<label>Date of Euthanasia or Antemortem Coputed Tomography (CT) Study: </label>
<input type="date" name="euthanasia_date_forelimb"><br>
<label>University of Kentucky Veterinary Diagnostic Laboratory Case Number: </label>
<input type="text" name="case_number_forelimb"><br>
<label>Rood &amp; Riddle Equine Hospital Case Number: </label>
<input type="text" name="rr_case_number_forelimb"><br>
<label>Leg Being Examined: </label>
<div>
	<input type="radio" id="left_forelimb" name="left_right_forelimb" value="left-forelimb" checked>
	<label for="left_forelimb">Left Forelimb</label>
</div>
<div>
	<input type="radio" id="right_forelimb" name="left_right_forelimb" value="right-forelimb">
	<label for="right_forelimb">Right Forelimb</label>
</div>
<br>
<label>Was the Phantom Density Nomalization Standard Included in the Scan?<label>
<div>
	<input type="radio" id="PDN_Yes" name="PDN_forelimb" value="yes" checked>
	<label for="PDN_Yes">Yes</label>
</div>
<div>
	<input type="radio" id="PDM_No" name="PDN_forelimb" value="no">
	<label for="PDN_No">No</label>
</div>
<br>

<input type="submit" value="Submit" name="submit_forelimb">
</form>
<!-- END FORELIMB FORM -->

<?php include('footer.php'); ?>
</body>
</html>
