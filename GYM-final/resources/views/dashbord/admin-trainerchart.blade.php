<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<div style="width: 100%; ">
    <canvas id="trainerChart"></canvas>
</div>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
    var ct = document.getElementById('trainerChart').getContext('2d');
var trainerChartData = @json($trainer_chartData);
        var ct = document.getElementById('trainerChart').getContext('2d');
        new Chart(ct, {
            type: 'bar',
            data: trainerChartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
    </script>
