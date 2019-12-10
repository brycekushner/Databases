<html>
<?php include('header.php'); ?>
<body>

<?php
        // Gets user input
       // $name = $_POST["horse_name_forelimb"];
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

        // Connects to SQL Database
        $host = 'localhost';
        $userName = 'root';
        $password = 'pwd';
        $DB = 'equine';
        $mysqli = mysqli_connect($host, $userName, $password, $DB);

        if(!$mysqli){
                echo "Dead Connection: ".mysqli_connect_error();
        }
        else{
                $sql = "INSERT INTO Forelimb (vdl,rood,leg,norm,doe,distalradius,distalradiusdm,distalradiusdl,distalradiusp,radiocarpal,radiocarpalpm,radiocarpalpl,radiocarpaldm,radiocarpaldl,mcarpal3,mcarpal3p,mcarpal3pd,mcarpal3pp,mcarpal3dia,mcarpal3diad,mcarpal3diap,mcarpal3dis,mcarpal3disdm,mcarpal3disdl,mcarpal3disdsr,mcarpal3dispm,mcarpal3displ,mcarpal3dispsr,medialaa,medialana,medialma,medialmna,medialba,medialbna,medialaxa,medialaxana) VALUES ('$caseNo', '$rrCaseNo', '$leg', '$phantom', '$date','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31')";
                if(!(mysqli_query($mysqli, $sql))){
                        echo "Error: ". $sql . "<br>" . mysqli_error($mysqli);
                }
        }
        mysqli_close($mysqli);
?>

<?php include('footer.php'); ?>
</body>
</html>
