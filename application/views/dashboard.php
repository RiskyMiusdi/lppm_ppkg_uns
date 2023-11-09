<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <!-- Load Chart.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
</head>

<body>
    <h1><?php echo $title; ?></h1>
    <div style="width: 50%;">
        <canvas id="genderChart"></canvas>
    </div>
    <script>
        // Get data from PHP
        var user_data = <?php echo json_encode($user_data); ?>;

        // Prepare data for chart
        var labels = [];
        var data = [];
        var colors = ['#FF6384', '#36A2EB', '#FFCE56']; // You can add more colors if needed

        user_data.forEach(function(item) {
            labels.push(item.jenis_kelamin);
            data.push(item.total);
        });

        var ctx = document.getElementById('genderChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: colors
                }]
            }
        });
    </script>
</body>

</html>