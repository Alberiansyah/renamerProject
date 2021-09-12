
$(document).ready(function() {
    
    "use strict";
    var options = {
            chart: {
                height: 350,
                type: 'bar',
                
    toolbar: {
      show: false
    }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'	
                },
            },
        
        colors:['#4897FB', '#6A4FFC', '#A64EDD'],

            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: 'Net Profit',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 63, 60]
            }, {
                name: 'Revenue',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94, 89, 95]
            }, {
                name: 'Free Cash Flow',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41, 39, 46]
            }],
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan'],
            },
            fill: {
                opacity: 1

            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "$ " + val + " thousands"
                    }
                }
            }
        }
    var chart = new ApexCharts(
        document.querySelector("#apex1"),
        options
    );

    chart.render();
    
    
    new Chart(document.getElementById("chartjs1"),{
        "type": "doughnut",
        "data": {
            "labels": ["Alpha","Space","Modern"],
            "datasets": [{
                "label": "My First Dataset",
                "data": [327,82,145],
                "backgroundColor": ["#6A4FFC","#4897FB","#D9E7F9"]
            }]
        },
        options: {
            legend: {
                display: false
            }
        }
    });

});