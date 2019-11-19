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
<br><br>

<h3>Forelimb</h3>
<p>Multiple options can be selected using CTRL+Click.</p>
<br>
<label>Distal Radius</label><br>
<select multiple style="width: 320px;">
         <option value="Distal-Radius-Not-Assessed" selected>Not Assessed (for all)</option>
         <option value="Distal-Radius-Dorsomedial">Distal Radius Dorsomedial</option>
         <option value="Distal-Radius-Dorsolateral">Distal Radius Dorsolateral</option>
         <option value="Distal-Radius-Palmar">Distal Radius Palmar</option>
</select>
<br><br>

<label>Radiocarpal Bone</label><br>
<select multiple size="5" style="width: 320px;">
         <option value="Radiocarpal-Bone-Not-Assessed" selected>Not Assessed (for all)</option>
         <option value="Radiocarpal-Bone-Proximal-Medial">Radiocarpal Bone Proximal Medial</option>
         <option value="Radiocarpal-Bone-Proximal-Lateral">Radiocarpal Bone Proximal Lateral</option>
         <option value="Radiocarpal-Bone-Distal-Medial">Radiocarpal Bone Distal Medial</option>
         <option value="Radiocarpal-Bone-Distal-Lateral">Radiocarpal Bone Distal Lateral</option>
</select>
<br><br>

<label>Metacarpal 3</label><br>
<select multiple size="5" style="width: 320px;">
        <option value="Metacarpal-3-Not-Assessed" selected>Not Assessed (for all)</option>
        <optgroup label="Metacarpal 3 Proximal">
     		<option value="Metacarpal-3-Proximal-Not-Assessed">Not Assessed</option>
     		<option value="Metacarpal-3-Proximal-Dorsal">Metacarpal 3 Proximal Dorsal</option>
     		<option value="Metacarpal-3-Proximal-Palmar">Metacarpal 3 Proximal Palmar</option>
	</optgroup>
        <optgroup label="Metacarpal 3 Diaphysis">
     		<option value="Metacarpal-3-Diaphysis-Not-Assessed">Not Assessed</option>
     		<option value="Metacarpal-3-Diaphysis-Dorsal">Metacarpal 3 Diaphysis Dorsal</option>
     		<option value="Metacarpal-3-Diaphysis-Palmar">Metacarpal 3 Diaphysis Palmar</option>
	</optgroup>
        <optgroup label="Metacarpal 3 Distal">
     		<option value="Metacarpal-Distal-Not-Assessed">Not Assessed</option>
     		<option value="Metacarpal-3-Distal-Dorsal-Medial">Metacarpal 3 Distal Dorsal Medial</option>
     		<option value="Metacarpal-3-Distal-Dorsal-Lateral">Metacarpal 3 Distal Dorsal Lateral</option>
     		<option value="Metacarpal-3-Distal-Dorsal-Sagittal Ridge">Metacarpal 3 Distal Dorsal Sagittal Ridge</option>
     		<option value="Metacarpal-3-Distal-Palmar-Medial">Metacarpal 3 Distal Palmar Medial</option>
     		<option value="Metacarpal-3-Distal-Palmar-Lateral">Metacarpal 3 Distal Palmar Lateral</option>
     		<option value="Metacarpal-3-Distal-Palmar-Sagittal-Ridge">Metacarpal 3 Distal Palmar Sagittal Ridge</option>
	</optgroup>
</select>
<br><br>

<label>Medial Sesamoid</label><br>
<select multiple size="5" style="width: 320px;">
         <option value="Medial-Sesamoid-Not-Assessed" selected>Not Assessed (for all)</option>
         <option value="Medial-Sesamoid-Apical-Articular">Medial Sesamoid Apical Articular</option>
         <option value="Medial-Sesamoid-Apical-Non-Articular">Medial Sesamoid Apical Non-Articular</option>
         <option value="Medial-Sesamoid-Milbody-Articular">Medial Sesamoid Milbody Articular</option>
         <option value="Medial Sesamoid Milbody-Non-Articular">Medial Sesamoid Milbody Non-Articular</option>
         <option value="Medial-Sesamoid-Base-Articular">Medial Sesamoid Base Articular</option>
         <option value="Medial-Sesamoid-Base-Non-Articular">Medial Sesamoid Base Non-Articular</option>
         <option value="Medial-Sesamoid-Axial-Articular">Medial Sesamoid Axial Articular</option>
         <option value="Medial-Sesamoid-Axial-Non-Articular">Medial Sesamoid Axial Non-Articular</option>
</select>
<br><br>

<input type="submit" value="Submit" name="submit_forelimb">
</form>
<!-- END FORELIMB FORM -->

<?php include('footer.php'); ?>
</body>
</html>
