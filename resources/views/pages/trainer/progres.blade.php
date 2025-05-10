<x-app>
    <div class="bg-white rounded-xl shadow-md p-6 w-full max-w-4xl mx-auto">
        <h2 class="text-xl font-semibold mb-2">Progress Kalori Trainee</h2>
        <p class="text-sm text-gray-500 mb-4">Perbandingan Kalori Makanan dan Latihan</p>

        <!-- Dropdown Pilih Trainee -->
        <div class="mb-4">
            <label for="traineeSelect" class="block text-sm font-medium text-gray-700 mb-1">Pilih Trainee</label>
            <select id="traineeSelect" class="w-full md:w-1/2 border rounded-md px-3 py-2">
                <option value="alif">Rivaldo Francisco</option>
                <option value="nina">Syahriandi TUF Gemink</option>
                <option value="doni">Adrian</option>
            </select>
        </div>

        <!-- Container Grafik -->
        <div class="relative w-full" style="aspect-ratio: 4 / 3;">
            <canvas id="kaloriChart" class="w-full h-full"></canvas>
        </div>
    </div>

    <!-- Script Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('kaloriChart').getContext('2d');

        const traineeData = {
            alif: {
                makanan: [500, 450, 400, 420, 460, 480],
                latihan: [200, 180, 160, 170, 190, 210]
            },
            nina: {
                makanan: [550, 500, 470, 490, 530, 510],
                latihan: [250, 230, 200, 210, 220, 240]
            },
            doni: {
                makanan: [480, 430, 410, 400, 420, 450],
                latihan: [180, 160, 150, 140, 170, 190]
            }
        };

        const labels = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

        let kaloriChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Kalori Makanan',
                        data: traineeData['alif'].makanan,
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        tension: 0.4,
                        fill: true
                    },
                    {
                        label: 'Kalori Latihan',
                        data: traineeData['alif'].latihan,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        tension: 0.4,
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Perbandingan Kalori Makanan dan Latihan per Hari',
                        font: { size: 18 }
                    },
                    legend: { position: 'bottom' },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return `${context.dataset.label}: ${context.parsed.y} kalori`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Kalori'
                        },
                        ticks: { stepSize: 100 }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Hari'
                        }
                    }
                }
            }
        });

        document.getElementById('traineeSelect').addEventListener('change', function () {
            const selected = this.value;
            kaloriChart.data.datasets[0].data = traineeData[selected].makanan;
            kaloriChart.data.datasets[1].data = traineeData[selected].latihan;
            kaloriChart.update();
        });
    </script>
</x-app>
