import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

var generateDayWiseTimeSeries = function (baseval, count, yrange) {
    var i = 0;
    var series = [];
    while (i < count) {
        var x = baseval;
        var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
        series.push([x, y]);
        baseval += 86400000;
        i++;
    }
    return series;
}

class WebsiteAnalytics extends Component {

    constructor(props) {
        super(props);

        this.state = {
            chart: {
                foreColor: "#999",
                scroller: {
                    enabled: true,
                    track: {
                        height: 7,
                        background: '#e0e0e0'
                    },
                    thumb: {
                        height: 10,
                        background: '#94E3FF'
                    },
                    scrollButtons: {
                        enabled: true,
                        size: 5,
                        borderWidth: 1,
                        borderColor: '#008FFB',
                        fillColor: '#008FFB'
                    },
                    padding: {
                        left: 30,
                        right: 20
                    }
                },
                stacked: true,
                dropShadow: {
                    enabled: true,
                    enabledSeries: [0],
                    top: -2,
                    left: 2,
                    blur: 5,
                    opacity: 0.06
                }
            },
             
            options: {
                chart: {
                    stacked: true,
                    events: {
                        selection: function (chart, e) {
                            console.log(new Date(e.xaxis.min))
                        }
                    },
                },
                colors: ['#f5f5f5', '#2962ff'],
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 1
                },
                markers: {
                    size: 0,
                    strokeColor: "#fff",
                    strokeWidth: 3,
                    strokeOpacity: 1,
                    fillOpacity: 1,
                    hover: {
                        size: 5
                    }
                },
                fill: {
                    type: 'solid',
                    fillOpacity: 0.7
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'left'
                },
                xaxis: {
                    type: 'datetime',
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    }
                },
                yaxis: {
                    labels: {
                        offsetX: -10,
                        offsetY: -5
                    },
                    tooltip: {
                        enabled: true,
                    }
                },
                grid: {
                    show: true,
                    borderColor: '#f6f6f7',
                    padding: {
                        left: -5,
                        right: 5
                    }
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'left'
                }
            },
            series: [
                {
                    name: 'Total Views',
                    data: generateDayWiseTimeSeries(new Date('11 Feb 2018 GMT').getTime(), 20, {
                        min: 10,
                        max: 60
                    })
                },
                {
                    name: 'Unique Views',
                    data: generateDayWiseTimeSeries(new Date('11 Feb 2018 GMT').getTime(), 20, {
                        min: 10,
                        max: 15
                    })
                }
            ],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Website Analytics</h5>
                    </div>
 
                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="area" 
                        className="mh-100" 
                        height={346}  
                    />
                </div>
            </div>
        );
    }
}

export default WebsiteAnalytics;