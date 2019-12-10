<html>
	<?php include('header.php'); ?>
<body>
<h1>Available Forms</h1>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Forelimb')">Forelimb</button>
  <button class="tablinks" onclick="openCity(event, 'Hindlimb')">Hindlimb</button>
</div>

<!-- Tab content -->
<div id="Forelimb" class="tabcontent">
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

		<h3>Forelimb</h3>
		<div class="container">
			
			<!-- Start Distal Radius -->
			<div class="row">
				<div class="col">
					<label for="distal-radius">Distal Radius</label><br>
					<select id="distal-radius" name="distal-radius">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="distal-dorsomedial">Distal Dorsomedial</label><br>
					<select id="distal-dorsomedial" name="distal-dorsomedial">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="distal-dorsolateral">Distal Dorsolateral</label><br>
					<select id="distal-dorsolateral" name="distal-dorsolateral">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="distal-palmar">Distal Palmar</label><br>
					<select id="distal-palmar" name="distal-palmar">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>
			<!-- End Distal Radius -->
			

		
			<!-- Start Radiocarpal Bone -->
			<div class="row">
				<div class="col">
					<label for="radiocarpal-bone">Radiocarpal Bone</label><br>
					<select id="radiocarpal-bone" name="radiocarpal-bone">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="radiocarpal-proximal-medial">Radiocarpal Proximal Medial</label><br>
					<select id="radiocarpal-proximal-medial" name="radiocarpal-bone-medial">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="radiocarpal-proximal-lateral">Radiocarpal Proximal Lateral</label><br>
					<select id="radiocarpal-proximal-lateral" name="radiocarpal-proximal-lateral">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
				
				<div class="col">
					<label for="radiocarpal-distal-medial">Radiocarpal Distal Medial</label><br>
					<select id="radiocarpal-distal-medial" name="radiocarpal-distal-medial">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="radiocarpal-distal-lateral">Radiocarpal Distal Lateral</label><br>
					<select id="radiocarpal-distal-lateral" name="radiocarpal-distal-lateral">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>
			<!-- End Radiocarpal Bone -->
			

		<!-- Start Metacarpal 3 -->
		<label for="metacarpal-3">Metacarpal 3</label><br>
		<select id="metacarpal-3" name="metacarpal-3">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-proximal">Metacarpal 3 Proximal</label><br>
		<select id="metacarpal-3-proximal" name="metacarpal-3-proximal">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-proximal-dorsal">Metacarpal 3 Proximal Dorsal</label><br>
		<select id="metacarpal-3-proximal-dorsal" name="metacarpal-3-proximal-dorsal">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-proximal-palmar">Metacarpal 3 Proximal Palmar</label><br>
		<select id="metacarpal-3-proximal-palmar" name="metacarpal-3-proximal-palmar">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-diaphysis">Metacarpal 3 Diaphysis</label><br>
		<select id="metacarpal-3-diaphysis" name="metacarpal-3-diaphysis">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-diaphysis-dorsal">Metacarpal 3 Diaphysis Dorsal</label><br>
		<select id="metacarpal-3-diaphysis-dorsal" name="metacarpal-3-diaphysis-dorsal">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-diaphysis-palmar">Metacarpal 3 Diaphysis Palmar</label><br>
		<select id="metacarpal-3-diaphysis-palmar" name="metacarpal-3-diaphysis-palmar">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-distal">Metacarpal 3 Distal</label><br>
		<select id="metacarpal-3-distal" name="metacarpal-3-distal">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-distal-dorsal-medial">Metacarpal 3 Distal Dorsal Medial</label><br>
		<select id="metacarpal-3-distal-dorsal-medial" name="metacarpal-3-distal-dorsal-medial">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-distal-dorsal-lateral">Metacarpal 3 Distal Dorsal Lateral</label><br>
		<select id="metacarpal-3-distal-dorsal-lateral" name="metacarpal-3-distal-dorsal-lateral">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-dorsal-sagittal-ridge">Metacarpal 3 Distal Dorsal Sagittal Ridge</label><br>
		<select id="metacarpal-3-dorsal-sagittal-ridge" name="metacarpal-3-dorsal-sagittal-ridge">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-distal-palmar-medial">Metacarpal 3 Distal Palmar Medial</label><br>
		<select id="metacarpal-3-distal-palmar-medial" name="metacarpal-3-distal-palmar-medial">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-distal-palmar-lateral">Metacarpal 3 Distal Palmar Lateral</label><br>
		<select id="metacarpal-3-distal-palmar-lateral" name="metacarpal-3-distal-palmar-lateral">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="metacarpal-3-distal-palmar-sagittal-ridge">Metacarpal 3 Distal Palmar Sagittal Ridge</label><br>
		<select id="metacarpal-3-distal-palmar-sagittal-ridge" name="metacarpal-3-distal-palmar-sagittal-ridge">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>
		<!-- End Metacarpal 3 -->

		<!-- Start Medial Sesamoid -->
		<label for="medial-sesamoid">Medial Sesamoid</label><br>
		<select id="medial-sesamoid" name="medial-sesamoid">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="medial-sesamoid-apical-articular">Medial Sesamoid Apical Articular</label><br>
		<select id="medial-sesamoid-apical-articular" name="medial-sesamoid-apical-articular">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="medial-sesamoid-apical-non-articular">Medial Sesamoid Apical Non-Articular</label><br>
		<select id="medial-sesamoid-apical-non-articular" name="medial-sesamoid-apical-non-articular">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="medial-sesamoid-milbody-articular">Medial Sesamoid Milbody Articular</label><br>
		<select id="medial-sesamoid-milbody-articular" name="medial-sesamoid-milbody-articular">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="medial-sesamoid-milbody-non-articular">Medial Sesamoid Milbody Non-Articular</label><br>
		<select id="medial-sesamoid-milbody-non-articular" name="medial-sesamoid-milbody-non-articular">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="medial-sesamoid-base-articular">Medial Sesamoid Base Articular</label><br>
		<select id="medial-sesamoid-base-articular" name="medial-sesamoid-base-articular">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="medial-sesamoid-base-non-articular">Medial Sesamoid Base Non-Articular</label><br>
		<select id="medial-sesamoid-base-non-articular" name="medial-sesamoid-base-non-articular">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="medial-sesamoid-axial-articular">Medial Sesamoid Axial Articular</label><br>
		<select id="medial-sesamoid-axial-articular" name="medial-sesamoid-axial-articular">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>

		<label for="medial-sesamoid-axial-non-articular">Medial Sesamoid Axial Non-Articular</label><br>
		<select id="medial-sesamoid-axial-non-articular" name="medial-sesamoid-axial-non-articular">
			<option value="Not-Assessed" selected>Not Assessed</option>
			<option value="Fracture">Fracture</option>
			<option value="Lysis">Lysis</option>
			<option value="Sclerosis">Sclerosis</option>
			<option value="Within-Normal-Limits">Within Normal Limits</option>
		</select>
		<br><br>
		<!-- End Medial Sesamoid -->
		</div> <!-- /container -->

		<input type="submit" value="Submit" name="submit_forelimb">
	</form>
	<!-- END FORELIMB FORM -->
</div>

<div id="Hindlimb" class="tabcontent">
  <!-- START FORELIMB FORM -->
<h3>Hindlimb Pathology Form</h3>
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

<h3>Hindlimb</h3>

<div class="row">
<!-- Start Distal Radius -->
<div class="col-3">
<label for="distal-radius">Distal Radius</label><br>
<select id="distal-radius" name="distal-radius">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
</div>

<div class="col-3">
<label for="distal-dorsomedial">Distal Dorsomedial</label><br>
<select id="distal-dorsomedial" name="distal-dorsomedial">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
</div>

<div class="col-3">
<label for="distal-dorsolateral">Distal Dorsolateral</label><br>
<select id="distal-dorsolateral" name="distal-dorsolateral">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
</div>

<div class="col-3">
<label for="distal-palmar">Distal Palmar</label><br>
<select id="distal-palmar" name="distal-palmar">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
</div>
<!-- End Distal Radius -->
</div>

<!-- Start Radiocarpal Bone -->
<label for="radiocarpal-bone">Radiocarpal Bone</label><br>
<select id="radiocarpal-bone" name="radiocarpal-bone">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="radiocarpal-proximal-medial">Radiocarpal Proximal Medial</label><br>
<select id="radiocarpal-proximal-medial" name="radiocarpal-bone-medial">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="radiocarpal-proximal-lateral">Radiocarpal Proximal Lateral</label><br>
<select id="radiocarpal-proximal-lateral" name="radiocarpal-proximal-lateral">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="radiocarpal-distal-medial">Radiocarpal Distal Medial</label><br>
<select id="radiocarpal-distal-medial" name="radiocarpal-distal-medial">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="radiocarpal-distal-lateral">Radiocarpal Distal Lateral</label><br>
<select id="radiocarpal-distal-lateral" name="radiocarpal-distal-lateral">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>
<!-- End Radiocarpal Bone -->

<!-- Start Metacarpal 3 -->
<label for="metacarpal-3">Metacarpal 3</label><br>
<select id="metacarpal-3" name="metacarpal-3">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-proximal">Metacarpal 3 Proximal</label><br>
<select id="metacarpal-3-proximal" name="metacarpal-3-proximal">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-proximal-dorsal">Metacarpal 3 Proximal Dorsal</label><br>
<select id="metacarpal-3-proximal-dorsal" name="metacarpal-3-proximal-dorsal">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-proximal-palmar">Metacarpal 3 Proximal Palmar</label><br>
<select id="metacarpal-3-proximal-palmar" name="metacarpal-3-proximal-palmar">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-diaphysis">Metacarpal 3 Diaphysis</label><br>
<select id="metacarpal-3-diaphysis" name="metacarpal-3-diaphysis">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-diaphysis-dorsal">Metacarpal 3 Diaphysis Dorsal</label><br>
<select id="metacarpal-3-diaphysis-dorsal" name="metacarpal-3-diaphysis-dorsal">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-diaphysis-palmar">Metacarpal 3 Diaphysis Palmar</label><br>
<select id="metacarpal-3-diaphysis-palmar" name="metacarpal-3-diaphysis-palmar">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-distal">Metacarpal 3 Distal</label><br>
<select id="metacarpal-3-distal" name="metacarpal-3-distal">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-distal-dorsal-medial">Metacarpal 3 Distal Dorsal Medial</label><br>
<select id="metacarpal-3-distal-dorsal-medial" name="metacarpal-3-distal-dorsal-medial">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-distal-dorsal-lateral">Metacarpal 3 Distal Dorsal Lateral</label><br>
<select id="metacarpal-3-distal-dorsal-lateral" name="metacarpal-3-distal-dorsal-lateral">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-dorsal-sagittal-ridge">Metacarpal 3 Distal Dorsal Sagittal Ridge</label><br>
<select id="metacarpal-3-dorsal-sagittal-ridge" name="metacarpal-3-dorsal-sagittal-ridge">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-distal-palmar-medial">Metacarpal 3 Distal Palmar Medial</label><br>
<select id="metacarpal-3-distal-palmar-medial" name="metacarpal-3-distal-palmar-medial">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-distal-palmar-lateral">Metacarpal 3 Distal Palmar Lateral</label><br>
<select id="metacarpal-3-distal-palmar-lateral" name="metacarpal-3-distal-palmar-lateral">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="metacarpal-3-distal-palmar-sagittal-ridge">Metacarpal 3 Distal Palmar Sagittal Ridge</label><br>
<select id="metacarpal-3-distal-palmar-sagittal-ridge" name="metacarpal-3-distal-palmar-sagittal-ridge">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>
<!-- End Metacarpal 3 -->

<!-- Start Medial Sesamoid -->
<label for="medial-sesamoid">Medial Sesamoid</label><br>
<select id="medial-sesamoid" name="medial-sesamoid">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="medial-sesamoid-apical-articular">Medial Sesamoid Apical Articular</label><br>
<select id="medial-sesamoid-apical-articular" name="medial-sesamoid-apical-articular">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="medial-sesamoid-apical-non-articular">Medial Sesamoid Apical Non-Articular</label><br>
<select id="medial-sesamoid-apical-non-articular" name="medial-sesamoid-apical-non-articular">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="medial-sesamoid-milbody-articular">Medial Sesamoid Milbody Articular</label><br>
<select id="medial-sesamoid-milbody-articular" name="medial-sesamoid-milbody-articular">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="medial-sesamoid-milbody-non-articular">Medial Sesamoid Milbody Non-Articular</label><br>
<select id="medial-sesamoid-milbody-non-articular" name="medial-sesamoid-milbody-non-articular">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="medial-sesamoid-base-articular">Medial Sesamoid Base Articular</label><br>
<select id="medial-sesamoid-base-articular" name="medial-sesamoid-base-articular">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="medial-sesamoid-base-non-articular">Medial Sesamoid Base Non-Articular</label><br>
<select id="medial-sesamoid-base-non-articular" name="medial-sesamoid-base-non-articular">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="medial-sesamoid-axial-articular">Medial Sesamoid Axial Articular</label><br>
<select id="medial-sesamoid-axial-articular" name="medial-sesamoid-axial-articular">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>

<label for="medial-sesamoid-axial-non-articular">Medial Sesamoid Axial Non-Articular</label><br>
<select id="medial-sesamoid-axial-non-articular" name="medial-sesamoid-axial-non-articular">
	<option value="Not-Assessed" selected>Not Assessed</option>
	<option value="Fracture">Fracture</option>
	<option value="Lysis">Lysis</option>
	<option value="Sclerosis">Sclerosis</option>
	<option value="Within-Normal-Limits">Within Normal Limits</option>
</select>
<br><br>
<!-- End Medial Sesamoid -->

<input type="submit" value="Submit" name="submit_forelimb">
</form>
<!-- END FORELIMB FORM -->
</div>



<?php include('footer.php'); ?>
</body>
</html>