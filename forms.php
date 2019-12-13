<html>
	<?php include('header.php'); ?>
<body>
<h1>Available Forms</h1>

<div class="tab">
	<button class="tablinks" onclick="openCity(event, 'General')">New Horse</button>
	<button class="tablinks" onclick="openCity(event, 'Forelimb')">Forelimb</button>
	<button class="tablinks" onclick="openCity(event, 'Hindlimb')">Hindlimb</button>
</div>

<!-- Tab content -->
<div id="General" class="tabcontent">
	<!-- START GENERAL FORM -->
	<div class="container">
		<h3>General Horse Information Form</h3>
		<form action="results.php" method="post">
			<label>Horse's Name: </label>
			<input type="text" name="horse_name_general"><br>
			<label>Horse's Date of Birth: </label>
			<input type="date" name="horse_dob_general"><br>
			<label>Horse's Breed: </label>
			<input type="text" name="horse_breed_general"><br>
			<label>Horse's Gender: </label>
			<input type="text" name="horse_gender_general"><br>
			<label>University of Kentucky Veterinary Diagnostic Laboratory Case Number: </label>
			<input type="text" name="case_number_general"><br>
			<label>Rood &amp; Riddle Equine Hospital Case Number: </label>
			<input type="text" name="rr_case_number_general"><br>
			<label>Was this horse ever in race training?<label>
			<div>
				<input type="radio" id="Racing_Yes" name="Racing_general" value="yes" checked>
				<label for="Racing_Yes">Yes</label>
			</div>
			<div>
				<input type="radio" id="Racing_No" name="Racing_general" value="no">
				<label for="Racing_No">No</label>
			</div>
			<br>
			<label>Did this horse ever in race outside of North America?<label>
			<div>
				<input type="radio" id="Outside_Yes" name="Outside_general" value="yes" checked>
				<label for="Outside_Yes">Yes</label>
			</div>
			<div>
				<input type="radio" id="Outside_No" name="Outside_general" value="no">
				<label for="Outside_No">No</label>
			</div>
			<br>
			<label>Horse's Age at First Race:</label>
			<input type="text" name="horse_first_race_general"><br>

			<input type="submit" value="Submit" name="submit_general">
		</form>
	</div> <!-- /container -->
	<!-- END GENERAL FORM -->
</div>
<div id="Forelimb" class="tabcontent">
  	<!-- START FORELIMB FORM -->
	<div class="container">
	<h3>Forelimb Pathology Form</h3>
	<form action="results.php" method="post">
		<label>Horse's Name: </label>
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
			<hr>
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
			<hr>
			<!-- Start Metacarpal 3 -->
			<div class="row">
				<div class="col">
					<label for="metacarpal-3">Metacarpal 3</label><br>
					<select id="metacarpal-3" name="metacarpal-3">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metacarpal-3-proximal">Metacarpal 3 Proximal</label><br>
					<select id="metacarpal-3-proximal" name="metacarpal-3-proximal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metacarpal-3-proximal-dorsal">Metacarpal 3 Proximal Dorsal</label><br>
					<select id="metacarpal-3-proximal-dorsal" name="metacarpal-3-proximal-dorsal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metacarpal-3-proximal-palmar">Metacarpal 3 Proximal Palmar</label><br>
					<select id="metacarpal-3-proximal-palmar" name="metacarpal-3-proximal-palmar">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<label for="metacarpal-3-diaphysis">Metacarpal 3 Diaphysis</label><br>
					<select id="metacarpal-3-diaphysis" name="metacarpal-3-diaphysis">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metacarpal-3-diaphysis-dorsal">Metacarpal 3 Diaphysis Dorsal</label><br>
					<select id="metacarpal-3-diaphysis-dorsal" name="metacarpal-3-diaphysis-dorsal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metacarpal-3-diaphysis-palmar">Metacarpal 3 Diaphysis Palmar</label><br>
					<select id="metacarpal-3-diaphysis-palmar" name="metacarpal-3-diaphysis-palmar">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<label for="metacarpal-3-distal">Metacarpal 3 Distal</label><br>
					<select id="metacarpal-3-distal" name="metacarpal-3-distal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metacarpal-3-distal-dorsal-medial">Metacarpal 3 Distal Dorsal Medial</label><br>
					<select id="metacarpal-3-distal-dorsal-medial" name="metacarpal-3-distal-dorsal-medial">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metacarpal-3-distal-dorsal-lateral">Metacarpal 3 Distal Dorsal Lateral</label><br>
					<select id="metacarpal-3-distal-dorsal-lateral" name="metacarpal-3-distal-dorsal-lateral">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metacarpal-3-dorsal-sagittal-ridge">Metacarpal 3 Distal Dorsal Sagittal Ridge</label><br>
					<select id="metacarpal-3-dorsal-sagittal-ridge" name="metacarpal-3-dorsal-sagittal-ridge">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metacarpal-3-distal-palmar-medial">Metacarpal 3 Distal Palmar Medial</label><br>
					<select id="metacarpal-3-distal-palmar-medial" name="metacarpal-3-distal-palmar-medial">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metacarpal-3-distal-palmar-lateral">Metacarpal 3 Distal Palmar Lateral</label><br>
					<select id="metacarpal-3-distal-palmar-lateral" name="metacarpal-3-distal-palmar-lateral">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metacarpal-3-distal-palmar-sagittal-ridge">Metacarpal 3 Distal Palmar Sagittal Ridge</label><br>
					<select id="metacarpal-3-distal-palmar-sagittal-ridge" name="metacarpal-3-distal-palmar-sagittal-ridge">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>
			<!-- End Metacarpal 3 -->
			<hr>
			<!-- Start Medial Sesamoid -->
			<div class="row">
				<div class="col">
					<label for="medial-sesamoid">Medial Sesamoid</label><br>
					<select id="medial-sesamoid" name="medial-sesamoid">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="medial-sesamoid-apical-articular">Medial Sesamoid Apical Articular</label><br>
					<select id="medial-sesamoid-apical-articular" name="medial-sesamoid-apical-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="medial-sesamoid-apical-non-articular">Medial Sesamoid Apical Non-Articular</label><br>
					<select id="medial-sesamoid-apical-non-articular" name="medial-sesamoid-apical-non-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
				
				<div class="col">
					<label for="medial-sesamoid-milbody-articular">Medial Sesamoid Milbody Articular</label><br>
					<select id="medial-sesamoid-milbody-articular" name="medial-sesamoid-milbody-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
				
				<div class="col">
					<label for="medial-sesamoid-milbody-non-articular">Medial Sesamoid Milbody Non-Articular</label><br>
					<select id="medial-sesamoid-milbody-non-articular" name="medial-sesamoid-milbody-non-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<label for="medial-sesamoid-base-articular">Medial Sesamoid Base Articular</label><br>
					<select id="medial-sesamoid-base-articular" name="medial-sesamoid-base-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="medial-sesamoid-base-non-articular">Medial Sesamoid Base Non-Articular</label><br>
					<select id="medial-sesamoid-base-non-articular" name="medial-sesamoid-base-non-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="medial-sesamoid-axial-articular">Medial Sesamoid Axial Articular</label><br>
					<select id="medial-sesamoid-axial-articular" name="medial-sesamoid-axial-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="medial-sesamoid-axial-non-articular">Medial Sesamoid Axial Non-Articular</label><br>
					<select id="medial-sesamoid-axial-non-articular" name="medial-sesamoid-axial-non-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>
			<!-- End Medial Sesamoid -->
		</div> <!-- /container -->

		<input type="submit" value="Submit" name="submit_forelimb">
	</form>
	<!-- END FORELIMB FORM -->
</div>

<div id="Hindlimb" class="tabcontent">
	<!-- START HINDLIMB FORM -->
 	<h3>Hindlimb Pathology Form</h3>
	<form action="results.php" method="post">
		<label>Horse's name: </label>
		<input type="text" name="horse_name_hindlimb"><br>
		<label>Date of Euthanasia or Antemortem Coputed Tomography (CT) Study: </label>
		<input type="date" name="euthanasia_date_hindlimb"><br>
		<label>University of Kentucky Veterinary Diagnostic Laboratory Case Number: </label>
		<input type="text" name="case_number_hindlimb"><br>
		<label>Rood &amp; Riddle Equine Hospital Case Number: </label>
		<input type="text" name="rr_case_number_hindlimb"><br>
		<label>Leg Being Examined: </label>
		<div>
			<input type="radio" id="left_hindlimb" name="left_right_hindlimb" value="left-hindlimb" checked>
			<label for="left_hindlimb">Left Hindlimb</label>
		</div>
		<div>
			<input type="radio" id="right_hindlimb" name="left_right_hindlimb" value="right-hindlimb">
			<label for="right_hindlimb">Right Hindlimb</label>
		</div>
		<br>
		<label>Was the Phantom Density Nomalization Standard Included in the Scan?<label>
		<div>
			<input type="radio" id="PDN_Yes" name="PDN_hindlimb" value="yes" checked>
			<label for="PDN_Yes">Yes</label>
		</div>
		<div>
			<input type="radio" id="PDM_No" name="PDN_hindlimb" value="no">
			<label for="PDN_No">No</label>
		</div>
		<br>

		<h3>Hindlimb</h3>
		<div class="container">
			
			<!-- Start Distal Tibia -->
			<div class="row">
				<div class="col">
					<label for="distal-tibia">Distal Tibia</label><br>
					<select id="distal-tibia" name="distal-tibia">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="distal-tibia-dorsomedial">Distal Tibia Dorsomedial</label><br>
					<select id="distal-tibia-dorsomedial" name="distal-tibia-dorsomedial">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="distal-tibia-dorsolateral">Distal Tibia Dorsolateral</label><br>
					<select id="distal-tibia-dorsolateral" name="distal-tibia-dorsolateral">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="distal-tibia-palmar">Distal Tibia Palmar</label><br>
					<select id="distal-tibia-palmar" name="distal-tibia-palmar">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>
			<!-- End Distal Tibia -->
			<hr>
			<!-- Start Central Tarsal -->
			<div class="row">
				<div class="col">
					<label for="central-tarsal">Central Tarsal</label><br>
					<select id="central-tarsal" name="central-tarsal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="central-tarsal-dorsal">Central Tarsal Dorsal</label><br>
					<select id="central-tarsal-dorsal" name="central-tarsal-dorsal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="central-tarsal-plantar">Central Tarsal Plantar</label><br>
					<select id="central-tarsal-plantar" name="central-tarsal-plantar">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
				
				<div class="col">
					<label for="central-tarsal-proximal">Central Tarsal Proximal</label><br>
					<select id="central-tarsal-proximal" name="central-tarsal-proximal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="central-tarsal-distal">Central Tarsal Distal</label><br>
					<select id="central-tarsal-distal" name="central-tarsal-distal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>
			<!-- End Central Tarsal -->
			<hr>
			<!-- Start Metatarsal 3 -->
			<div class="row">
				<div class="col">
					<label for="metatarsal-3">Metatarsal 3</label><br>
					<select id="metatarsal-3" name="metatarsal-3">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metatarsal-3-proximal">Metatarsal 3 Proximal</label><br>
					<select id="metatarsal-3-proximal" name="metatarsal-3-proximal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metatarsal-3-proximal-dorsal">Metatarsal 3 Proximal Dorsal</label><br>
					<select id="metatarsal-3-proximal-dorsal" name="metatarsal-3-proximal-dorsal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metatarsal-3-proximal-palmar">Metatarsal 3 Proximal Palmar</label><br>
					<select id="metatarsal-3-proximal-palmar" name="metatarsal-3-proximal-palmar">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<label for="metatarsal-3-diaphysis">Metatarsal 3 Diaphysis</label><br>
					<select id="metatarsal-3-diaphysis" name="metatarsal-3-diaphysis">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metatarsal-3-diaphysis-dorsal">Metatarsal 3 Diaphysis Dorsal</label><br>
					<select id="metatarsal-3-diaphysis-dorsal" name="metatarsal-3-diaphysis-dorsal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metatarsal-3-diaphysis-palmar">Metatarsal 3 Diaphysis Palmar</label><br>
					<select id="metatarsal-3-diaphysis-palmar" name="metatarsal-3-diaphysis-palmar">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<label for="metatarsal-3-distal">Metatarsal 3 Distal</label><br>
					<select id="metatarsal-3-distal" name="metatarsal-3-distal">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metatarsal-3-distal-dorsal-medial">Metatarsal 3 Distal Dorsal Medial</label><br>
					<select id="metatarsal-3-distal-dorsal-medial" name="metatarsal-3-distal-dorsal-medial">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metatarsal-3-distal-dorsal-lateral">Metatarsal 3 Distal Dorsal Lateral</label><br>
					<select id="metatarsal-3-distal-dorsal-lateral" name="metatarsal-3-distal-dorsal-lateral">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metatarsal-3-dorsal-sagittal-ridge">Metatarsal 3 Distal Dorsal Sagittal Ridge</label><br>
					<select id="metatarsal-3-dorsal-sagittal-ridge" name="metatarsal-3-dorsal-sagittal-ridge">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metatarsal-3-distal-palmar-medial">Metatarsal 3 Distal Palmar Medial</label><br>
					<select id="metatarsal-3-distal-palmar-medial" name="metatarsal-3-distal-palmar-medial">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metatarsal-3-distal-palmar-lateral">Metatarsal 3 Distal Palmar Lateral</label><br>
					<select id="metatarsal-3-distal-palmar-lateral" name="metatarsal-3-distal-palmar-lateral">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="metatarsal-3-distal-palmar-sagittal-ridge">Metatarsal 3 Distal Palmar Sagittal Ridge</label><br>
					<select id="metatarsal-3-distal-palmar-sagittal-ridge" name="metatarsal-3-distal-palmar-sagittal-ridge">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>
			<!-- End Metatarsal 3 -->
			<hr>
			<!-- Start Medial Sesamoid -->
			<div class="row">
				<div class="col">
					<label for="medial-sesamoid">Medial Sesamoid</label><br>
					<select id="medial-sesamoid" name="medial-sesamoid">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="medial-sesamoid-apical-articular">Medial Sesamoid Apical Articular</label><br>
					<select id="medial-sesamoid-apical-articular" name="medial-sesamoid-apical-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="medial-sesamoid-apical-non-articular">Medial Sesamoid Apical Non-Articular</label><br>
					<select id="medial-sesamoid-apical-non-articular" name="medial-sesamoid-apical-non-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
				
				<div class="col">
					<label for="medial-sesamoid-milbody-articular">Medial Sesamoid Milbody Articular</label><br>
					<select id="medial-sesamoid-milbody-articular" name="medial-sesamoid-milbody-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
				
				<div class="col">
					<label for="medial-sesamoid-milbody-non-articular">Medial Sesamoid Milbody Non-Articular</label><br>
					<select id="medial-sesamoid-milbody-non-articular" name="medial-sesamoid-milbody-non-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<label for="medial-sesamoid-base-articular">Medial Sesamoid Base Articular</label><br>
					<select id="medial-sesamoid-base-articular" name="medial-sesamoid-base-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="medial-sesamoid-base-non-articular">Medial Sesamoid Base Non-Articular</label><br>
					<select id="medial-sesamoid-base-non-articular" name="medial-sesamoid-base-non-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="medial-sesamoid-axial-articular">Medial Sesamoid Axial Articular</label><br>
					<select id="medial-sesamoid-axial-articular" name="medial-sesamoid-axial-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>

				<div class="col">
					<label for="medial-sesamoid-axial-non-articular">Medial Sesamoid Axial Non-Articular</label><br>
					<select id="medial-sesamoid-axial-non-articular" name="medial-sesamoid-axial-non-articular">
						<option value="Not-Assessed" selected>Not Assessed</option>
						<option value="Fracture">Fracture</option>
						<option value="Lysis">Lysis</option>
						<option value="Sclerosis">Sclerosis</option>
						<option value="Within-Normal-Limits">Within Normal Limits</option>
					</select>
				</div>
			</div>
			<!-- End Medial Sesamoid -->
		</div> <!-- /container -->

		<input type="submit" value="Submit" name="submit_hindlimb">
	</form>
	<!-- END HINDLIMB FORM -->
</div>



<?php include('footer.php'); ?>
</body>
</html>
