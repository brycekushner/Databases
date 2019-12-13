<html>
    <?php include('header.php'); ?>
    <body>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawForelimbChart);
        google.charts.setOnLoadCallback(drawHindlimbChart);
        function drawForelimbChart() {
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
        function drawHindlimbChart() {
            var data = google.visualization.arrayToDataTable([
                ['Breed', 'Fracture', 'Lysis', 'Sclerosis', 'Within Normal Limits'],
                ['Thoroughbred', 30, 15, 10, 45],
                ['Arabian', 10, 10, 20, 60],
                ['Quarter Horse', 5, 10, 5, 80],
                ['Standardbred', 10, 5, 10, 75]
            ]);
            var options = {
                title: 'Horse Breed vs Hindlimb Abnormality in Percentages'
            };
            var chart = new google.charts.Bar(document.getElementById('hindlimb_abnormality'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        </script>
        <div id="forelimb_abnormality" style="width: 900px; height: 500px; padding: 30px;"></div>
        <div id="hindlimb_abnormality" style="width: 900px; height: 500px; padding: 30px;"></div>
    </body>
</html>