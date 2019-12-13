<html>
    <?php include('header.php'); ?>
    <body>
    <?php
        // Connects to SQL Database
        // $host = 'localhost';
        // $userName = 'root';
        // $password = 'pwd';
        // $DB = 'equine';
        // $mysqli = mysqli_connect($host, $userName, $password, $DB);

        // if(!$mysqli){
        //     echo "Dead Connection: ".mysqli_connect_error();
        // }else{
        //     $first_histogram = ;
        // }
    ?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Breed', 'Fracture', 'Lysis', 'Sclerosis', 'Within Normal Limits'],
                ['Thoroughbred', 20, 15, 10, 55],
                ['Arabian', 10, 10, 10, 70],
                ['Quarter Horse', 10, 20, 10, 60],
                ['Standardbred', 40, 10, 20, 30]
            ]);
            var options = {
                title: 'Horse Breed vs Forelimb Abnormality in Percentages'
            };
            var chart = new google.charts.Bar(document.getElementById('forelimb_abnormality'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        </script>
        <div id="forelimb_abnormality" style="width: 900px; height: 500px;"></div>
    </body>
</html>