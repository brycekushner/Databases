<html>
<?php include('header.php'); ?>
<body>

<?php
        // Gets user input
        $name = $_POST["horse_name_forelimb"];
        $date = $_POST["euthanasia_date+forelimb"];
        $caseNo = $_POST["case_number_forelimb"];
        $rrCaseNo = $_POST["rr_case_number_forelimb"];
        $leg = $_POST["left_right_forelimb"];
        $phantom = $_POST["PDN_forelimb"];

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
                $sql = "INSERT INTO Forelimb (vdl,rood,leg,norm,doe,name) VALUES ('$caseNo', '$rrCaseNo', '$leg', '$phantom', '$date', '$name')";
                if(!(mysqli_query($mysqli, $sql))){
                        echo "Error: ". $sql . "<br>" . mysqli_error($mysqli);
                }
        }
        mysqli_close($mysqli);
?>

<?php include('footer.php'); ?>
</body>
</html>
