const data2 = {
    labels: ['23 SET', '24', '25', '26', '27', '28', '29', '30', '01 OUT', '02', '03', '04', '05', '06'],
    datasets: [
      {
        label: 'Dataset 1',
        data: [1000, 2000, 1500, 3000, 2500, 1000, 2000, 1500, 2850, 2500, 2200, 3000, 2700, 2000],
        borderColor: '#FF3F8E',
        backgroundColor: 'rgba(255, 63, 142, 0.1)',
        pointBorderColor: '#FF3F8E',
        pointBackgroundColor: '#fff',
        pointRadius: 0,
        pointHoverRadius: 8,
        tension: 0.4,
      },
      {
        label: 'Dataset 2',
        data: [1500, 1200, 1000, 2500, 2800, 1800, 2000, 1700, 2000, 1900, 2200, 2600, 2400, 1500],
        borderColor: '#4FC3F7',
        backgroundColor: 'rgba(79, 195, 247, 0.1)',
        pointBorderColor: '#4FC3F7',
        pointBackgroundColor: '#fff',
        pointRadius: 0,
        pointHoverRadius: 8,
        tension: 0.4,
      },
      {
        label: 'Dataset 3',
        data: [800, 1400, 1200, 2000, 1700, 1900, 2500, 1800, 2300, 2100, 1800, 2400, 2600, 1900],
        borderColor: '#FFA726',
        backgroundColor: 'rgba(255, 167, 38, 0.1)',
        pointBorderColor: '#FFA726',
        pointBackgroundColor: '#fff',
        pointRadius: 0,
        pointHoverRadius: 8,
        tension: 0.4,
      }
    ]
};

const config2 = {
    type: 'line',
    data: data2,
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
            display: true,
            text: 'VIEWS',
            align: 'start',
            color: '#333',
            font: {
                size: 16,
                weight: 'bold',
            },
            padding: {
                top: 10,
                bottom: 10,
            },
            },
            tooltip: {
            enabled: true,
            callbacks: {
                label: function (context) {
                return ` ${context.raw} views`;
                }
            }
            },
            legend: {
                display: false,
                labels: {
                    color: '#333',
                    font: {
                        size: 12,
                    }
                }
            }
        },
        scales: {
            x: {
                grid: {
                    display: true,
                    color: '#eef2f5',
                },
                ticks: {
                    color: '#a0a0a0',
                }
            },
            y: {
                grid: {
                    display: true,
                    color: '#eef2f5',
                },
                ticks: {
                    color: '#a0a0a0',
                    stepSize: 500,
                    maxTicksLimit: 10,
                },
                beginAtZero: true,
            }
      },
      interaction: {
        mode: 'nearest',
        axis: 'x',
        intersect: false,
      },
      hover: {
        mode: 'nearest',
        intersect: false,
      }
    }
};

const ctx2 = document.getElementById('multiLineChart').getContext('2d');
new Chart(ctx2, config2);
