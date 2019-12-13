<html>
<?php include('header.php'); ?>
<body>

<?php
    // Gets user input
	// $name = $_POST["horse_name_forelimb"];
	if($_POST["submit_forelimb"]){
		// Forelimb data
		$date = $_POST["euthanasia_date_forelimb"];
		$caseNo = $_POST["case_number_forelimb"];
		$rrCaseNo = $_POST["rr_case_number_forelimb"];
		$leg = $_POST["left_right_forelimb"];
		$phantom = $_POST["PDN_forelimb"];
		$a1  = $_POST["distal-radius"];
		$a2  = $_POST["distal-dorsomedial"];
		$a3  = $_POST["distal-dorsolateral"];
		$a4  = $_POST["distal-palmar"];
		$a5  = $_POST["radiocarpal-bone"];
		$a6  = $_POST["radiocarpal-proximal-medial"];
		$a7  = $_POST["radiocarpal-proximal-lateral"];
		$a8  = $_POST["radiocarpal-distal-medial"];
		$a9  = $_POST["radiocarpal-distal-lateral"];
		$a10 = $_POST["metacarpal-3"];
		$a11 = $_POST["metacarpal-3-proximal"];
		$a12 = $_POST["metacarpal-3-proximal-dorsal"];
		$a13 = $_POST["metacarpal-3-proximal-palmar"];
		$a14 = $_POST["metacarpal-3-diaphysis"];
		$a15 = $_POST["metacarpal-3-diaphysis-dorsal"];
		$a16 = $_POST["metacarpal-3-diaphysis-palmar"];
		$a17 = $_POST["metacarpal-3-distal-dorsal-medial"];
		$a18 = $_POST["metacarpal-3-distal-dorsal-lateral"];
		$a19 = $_POST["metacarpal-3-distal-dorsal-sagittal-ridge"];
		$a20 = $_POST["metacarpal-3-distal-palmar-medial"];
		$a21 = $_POST["metacarpal-3-distal-palmar-lateral"];
		$a22 = $_POST["metacarpal-3-distal-palmar-sagittal-ridge"];
		$a23 = $_POST["medial-sesamoid"];
		$a24 = $_POST["medial-sesamoid-apical-articular"];
		$a25 = $_POST["medial-sesamoid-apical-non-articular"];
		$a26 = $_POST["medial-sesamoid-milbody-articular"];
		$a27 = $_POST["medial-sesamoid-milbody-nonarticular"];
		$a28 = $_POST["medial-sesamoid-base-articular"];
		$a29 = $_POST["medial-sesamoid-base-non-articular"];
		$a30 = $_POST["medial-sesamoid-axial-articular"];
		$a31 = $_POST["medial-sesamoid-axial-non-articular"];
	} elseif($_POST["submit_hindlimb"]) {
		// Hindlimb data
		$hname = $_POST["horse_name_hindlimb"];
		$hdate = $_POST["euthanasia_date+hindlimb"];
		$hcase = $_POST["case_number_hindlimb"];
		$hrrcase = $_POST["rr_case_number_hindlimb"];
		$hlr = $_POST["left_right_hindlimb"];
		$hpdn = $_POST["PDN_hindlimb"];
		$h1 = $_POST["distal-tibia"];	
		$h2 = $_POST["distal-tibia-dorsomedial"];
		$h3 = $_POST["distal-tibia-dorsolateral"];
		$h4 = $_POST["distal-tibia-palmar"];
		$h5 = $_POST["central-tarsal"];
		$h6 = $_POST["central-tarsal-dorsal"];
		$h7 = $_POST["central-tarsal-plantar"];
		$h8 = $_POST["central-tarsal-proximal"];
		$h9 = $_POST["central-tarsal-distal"];
		$h10 = $_POST["metatarsal-3"];
		$h11 = $_POST["metatarsal-3-proximal"];
		$h12 = $_POST["metatarsal-3-proximal-dorsal"];
		$h13 = $_POST["metatarsal-3-proximal-palmar"];
		$h14 = $_POST["metatarsal-3-diaphysis"];
		$h15 = $_POST["metatarsal-3-diaphysis-dorsal"];
		$h16 = $_POST["metatarsal-3-diaphysis-palmar"];
		$h17 = $_POST["metatarsal-3-distal"];
		$h18 = $_POST["metatarsal-3-distal-dorsal-medial"];
		$h19 = $_POST["metatarsal-3-distal-dorsal-lateral"];
		$h20 = $_POST["metatarsal-3-dorsal-sagittal-ridge"];
		$h21 = $_POST["metatarsal-3-distal-palmar-medial"];
		$h22 = $_POST["metatarsal-3-distal-palmar-lateral"];
		$h23 = $_POST["metatarsal-3-distal-palmar-sagittal-ridge"];
		$h24 = $_POST["medial-sesamoid"];
		$h25 = $_POST["medial-sesamoid-apical-articular"];
		$h26 = $_POST["medial-sesamoid-apical-non-articular"];
		$h27 = $_POST["medial-sesamoid-milbody-articular"];
		$h28 = $_POST["medial-sesamoid-milbody-non-articular"];
		$h29 = $_POST["medial-sesamoid-base-articular"];
		$h30 = $_POST["medial-sesamoid-base-non-articular"];
		$h31 = $_POST["medial-sesamoid-axial-articular"];
		$h32 = $_POST["medial-sesamoid-axial-non-articular"];
	}

	

        // Connects to SQL Database
        $host = 'localhost';
        $userName = 'root';
        $password = 'pwd';
        $DB = 'equine';
        $mysqli = mysqli_connect($host, $userName, $password, $DB);

        if(!$mysqli){
            echo "Dead Connection: ".mysqli_connect_error();
        } else {
			if($_POST["submit_forelimb"]){
				// Forelimb data entry
				echo 'trying to submit forelimb data';
				$sql = "INSERT INTO Forelimb (vdl,rood,leg,norm,doe,distalradius,distalradiusdm,distalradiusdl,distalradiusp,radiocarpal,radiocarpalpm,radiocarpalpl,radiocarpaldm,radiocarpaldl,mcarpal3,mcarpal3p,mcarpal3pd,mcarpal3pp,mcarpal3dia,mcarpal3diad,mcarpal3diap,mcarpal3dis,mcarpal3disdm,mcarpal3disdl,mcarpal3disdsr,mcarpal3dispm,mcarpal3displ,mcarpal3dispsr,medialaa,medialana,medialma,medialmna,medialba,medialbna,medialaxa,medialaxana) VALUES ('$caseNo', '$rrCaseNo', '$leg', '$phantom', '$date','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31')";
				if(!(mysqli_query($mysqli, $sql))){
					echo "Error: ". $sql . "<br>" . mysqli_error($mysqli);
				}		
			} elseif($_POST["submit_hindlimb"]){
				// Hindlimb data entry
				echo 'trying to submit hindlimb data';
				$sql2 = "INSERT INTO Hindlimb (vdl,rood,leg,norm,doe,distaltibia,distaltibiadm,distaltibiadl, distaltibiatp,centraltarsal,centraltarsald,centraltarsalp,centraltarsalpr,centraltarsaldis,metatarsal3,metatarsal3p,metatarsal3pd,metatarsal3pp,metatarsal3dia,metatarsal3diad,metatarsal3diap,metatarsal3dis,metatarsal3disdm,metatarsal3disdl,metatarsal3disdsr,metatarsal3dispm,metatarsal3displ,metatarsal3displ,metatarsal3dispsr,medialsesamoidaa,medialsesamoidana,medialsesamoiddma,medialsesamoiddmna,medialsesamoiddba,medialsesamoiddbna,medialsesamoidaxa,medialsesamoidaxana,medialsesamoid) VALUES ('$hcase', '$hrrcase', '$hlr', '$hpdn', '$hdate','$h1','$h2','$h3','$h4','$h5','$h6','$h7','$h8','$h9','$h10','$h11','$h12','$h13','$h14','$h15','$h16','$h17','$h18','$h19','$h20','$h21','$h22','$h23','$h25','$h26','$h27','$h28','$h29','$h30','$h31','$h32','$h24')";
			}
			if(!(mysqli_query($mysqli, $sql2))){
               	echo "Error: ". $sql2 . "<br>" . mysqli_error($mysqli);
            }
		}
        mysqli_close($mysqli);
?>

<?php include('footer.php'); ?>
</body>
</html>
