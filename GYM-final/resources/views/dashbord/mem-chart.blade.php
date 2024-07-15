<!-- resources/views/dashbord/mem-chart.blade.php -->


    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div style="width: 100%; ">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var ctx = document.getElementById('myChart').getContext('2d');
            var chartData = {!! $chartData !!};

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: chartData,
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

