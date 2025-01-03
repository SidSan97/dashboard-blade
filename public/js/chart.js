// Dados do gráfico
const data = {
    labels: ['23 SET', '24 SET', '25 SET', '26 SET', '27 SET', '28 SET', '29 SET', '30 SET', '01 OUT', '02 OUT', '03 OUT', '04 OUT', '05 OUT', '06 OUT'],
    datasets: [{
        label: 'Videos',
        data: [0, 40, 140, 160, 80, 50, 100, 120, 118, 90, 100, 140, 110, 80],
        borderColor: '#3ebfea', // Cor da linha
        backgroundColor: 'rgba(62, 191, 234, 0.1)', // Sombra no gráfico
        pointBorderColor: '#3ebfea',
        pointBackgroundColor: '#fff',
        pointRadius: 5, // Tamanho dos pontos
        pointHoverRadius: 8, // Tamanho do ponto no hover
        pointHoverBackgroundColor: '#3ebfea',
        pointHoverBorderColor: '#fff',
        borderWidth: 2,
        tension: 0.4, // Deixa a linha mais suave
    }]
};

// Configuração do gráfico
const config = {
    type: 'line',
    data: data,
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text: 'VIDEOS',
                align: 'start',
            },
        legend: {
            display: false, // Oculta o rótulo do dataset
        },
        tooltip: {
            enabled: true,
            callbacks: {
                title: function (context) {
                    return ''; // Remove o título padrão do tooltip
                },
                label: function (context) {
                    return ` ${context.raw} videos`; // Texto do tooltip
                }
            }
        },
        subtitle: {
            display: true,
            text: 'September 12, 2024 / December 12, 2024',
            color: 'black',
            font: {
                size: 12,
                family: 'tahoma',
                weight: 'normal',
                style: 'bold'
            },
            padding: {
                bottom: 10
            }
        }
    },
    scales: {
        x: {
            grid: {
                display: true, // Mostra o grid no eixo X
                color: '#eef2f5',
            },
            ticks: {
                color: '#212529', // Cor dos rótulos do eixo X
                font: {
                    size: 8,
                    style: 'bold',
                }
            }
        },
        y: {
            grid: {
                display: true, // Mostra o grid no eixo Y
                color: '#eef2f5',
            },
            ticks: {
                color: '#a0a0a0', // Cor dos rótulos do eixo Y
                stepSize: 20,
                maxTicksLimit: 10,
            },
            beginAtZero: true, // Começa do zero
            //max: 180, // Define o valor máximo
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

// Renderiza o gráfico
const ctx = document.getElementById('myChart').getContext('2d');
new Chart(ctx, config);
