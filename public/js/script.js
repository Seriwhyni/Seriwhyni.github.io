

// Tanggal dan dua set data suhu
const dates = ["2023-10-01", "2023-10-02", "2023-10-03", "2023-10-04"];
const suhu = [10, 20, 12, 27];
const gas = [5.5, 19.5, 40.5, 98.9];

// Ambil elemen canvas untuk menggambar grafik
const ctx = document.getElementById('temperatureChart').getContext('2d');

// Konfigurasi grafik
const chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: dates,
        datasets: [
            {
                label: 'Suhu',
                data: suhu,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            },
            {
                label: 'Gas',
                data: gas,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }
        ]
    },
    options: {
        scales: {
            x: [{
                type: 'time',
                time: {
                    unit: 'day'
                },
                title: {
                    display: true,
                    text: 'Tanggal'
                }
            }],
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Suhu (°C)'
                }
            }
        },
    }
});

