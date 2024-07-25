const ctx = document.getElementById('myChart');
const ctx2 = document.getElementById('myChart2');
const ctx3 = document.getElementById('myChart3');

const chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Questions'],
        datasets: [{
            label: 'Number of Questions',
            data: [questionCount],
            backgroundColor: '#F9C74F',
        }],
    },
    options: {
        indexAxis: 'y', // <-- here
        responsive: true,
        maxBarThickness: 50,
        scales: {
            x: {
                max: 20,
                ticks: {
                    stepSize: 5,
                    beginAtZero: true,
                }
            }
        },

    }
});
new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Answers'],
        datasets: [{
            label: 'Number of Answers',
            data: [questionCount2],
            backgroundColor: '#90BE6D',

        }]
    },
    options: {
        indexAxis: 'y', // <-- here
        responsive: true,
        maxBarThickness: 50,
        scales: {
            x: {
                max: 20,
                ticks: {
                    stepSize: 5,
                    beginAtZero: true,
                }
            }
        },

    }
});
new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: ['Reports'],
        datasets: [{
            label: 'Number of Reports',
            data: [questionCount3],
            borderWidth: 1,
            backgroundColor: '#F94144',
        }]
    },
    options: {
        scales: {
            y: {
                max: 20,
                ticks: {
                    stepSize: 5,
                    beginAtZero: true,
                }
            }
        },
        maxBarThickness: 50

    }
});
const ctx4 = document.getElementById('myChart4');

const chartData4 = {
  labels: ['Questions', 'Answers', 'Reports'],
  datasets: [{
    label: 'Number of Questions',
    data: [questionCount, questionCount2, questionCount3],
    backgroundColor: ['#F9C74F', '#90BE6D', '#F94144'],
  }]
};

const chartOptions4 = {
  cutout: '70%',
  responsive: true,
  plugins: {
    legend: {
      position: 'bottom',
    },
    tooltip: {
      enabled: false
    },
    datalabels: {
      color: '#fff',
      font: {
        weight: 'bold'
      },
      formatter: (value) => {
        return value;
      },
      anchor: 'end',
      align: 'start',
      offset: -10
    }
  }
};

const chart4 = new Chart(ctx4, {
    type: 'doughnut',
    data: chartData4,
    options: {
        ...chartOptions4,
        elements: {
            arc: {
                borderWidth: 2,
                borderColor: '#fff',
            },
        },
    },
});
ctx4.style.width = '300px';
ctx4.style.height = '300px';
ctx4.style.marginLeft = '140px';