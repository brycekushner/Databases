<html>
    <?php include('header.php'); ?>
    <body>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Forelimb', 'Percentage'],
                ['Left Forelimb', 1]
                ['Right Forelimb', 2]
            ]);
            var options = {
                title: 'Percent of abnormal pathology designations in each forelimb bone',
                legend: { position: 'none' },
            };
            var chart = new google.visualization.Histogram(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
        </script>
        <div id="chart_div" style="width: 900px; height: 500px;"></div>
    </body>
</html>