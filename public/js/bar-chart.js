// Grouped Bar Chart 1
var barChartData = {
    labels: [
        "20.04.2023",
        "21.04.2023",
        "22.04.2023",
        "23.04.2023",
        "24.04.2023",
        "25.04.2023",
        "26.04.2023",
        "27.04.2023"
    ],
    datasets: [{
            label: "Art",
            backgroundColor: "pink",
            borderColor: "red",
            borderWidth: 1,
            data: [3, 5, 6, 7, 3, 5, 6, 7]
        },
        {
            label: "Programming",
            backgroundColor: "lightblue",
            borderColor: "blue",
            borderWidth: 1,
            data: [4, 7, 3, 6, 10, 7, 4, 6]
        },
        {
            label: "Trend",
            backgroundColor: "lightgreen",
            borderColor: "green",
            borderWidth: 1,
            data: [10, 7, 4, 6, 9, 7, 3, 10]
        },
        {
            label: "Science",
            backgroundColor: "yellow",
            borderColor: "orange",
            borderWidth: 1,
            data: [6, 9, 7, 3, 10, 7, 4, 6]
        }
    ]
};

var chartOptions = {
    responsive: true,
    legend: {
        position: "top"
    },
    title: {
        display: true,
        text: "Chart.js Bar Chart"
    },
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
};


var barChartData2 = {
    labels: [
        "20.04.2023",
        "21.04.2023",
        "22.04.2023",
        "23.04.2023",
        "24.04.2023",
        "25.04.2023",
        "26.04.2023",
        "27.04.2023"
    ],
    datasets: [{
            label: "science",
            backgroundColor: "#2eb1a3",
            borderColor: "#29a295",
            borderWidth: 2,
            data: [3, 5, 6, 7, 3, 5, 6, 7]
        },
        {
            label: "programming",
            backgroundColor: "#403d28",
            borderColor: "#322f1c",
            borderWidth: 1,
            data: [4, 7, 3, 6, 10, 7, 4, 6]
        },
        {
            label: "Technology",
            backgroundColor: "#807a4f",
            borderColor: "#67623e",
            borderWidth: 1,
            data: [10, 7, 4, 6, 9, 7, 3, 10]
        },
        {
            label: "Trending",
            backgroundColor: "#bbb375",
            borderColor: "#999260",
            borderWidth: 1,
            data: [6, 9, 7, 3, 10, 7, 4, 6]
        },
        {
            label: "Art",
            backgroundColor: "#eee286",
            borderColor: "#d7cc7b",
            borderWidth: 1,
            data: [4, 6, 2, 9, 5, 8, 5, 3]
        }
    ]
};

var chartOptions2 = {
    responsive: true,
    aspectRatio: 2.57,
    legend: {
        display: false,
        position: "top"
    },
    title: {
        display: false,
        text: "Chart.js Bar Chart"
    },
    scales: {
        xAxes: [{
            gridLines: {
                display: false
            }
        }],
        yAxes: [{
            gridLines: {
                display: false
            },
            ticks: {
                beginAtZero: true
            }
        }]
    }
}

window.onload = function() {
    var ctx = document.getElementById("canvas").getContext("2d");
    window.myBar = new Chart(ctx, {
        type: "bar",
        data: barChartData,
        options: chartOptions
    });
    var ctx2 = document.getElementById("canvas2").getContext("2d");
    window.myBar2 = new Chart(ctx2, {
        type: "bar",
        data: barChartData2,
        options: chartOptions2
    });
};