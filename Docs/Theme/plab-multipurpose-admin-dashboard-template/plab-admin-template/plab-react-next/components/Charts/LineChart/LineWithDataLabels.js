import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class LineWithDataLabels extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
                chart: {
                    shadow: {
                        enabled: true,
                        color: '#000',
                        top: 18,
                        left: 7,
                        blur: 10,
                        opacity: 1
                    },
                    toolbar: {
                        show: false
                    }
                },
                colors: ['#77B6EA', '#545454'],
                dataLabels: {
                    enabled: true,
                },
                stroke: {
                    curve: 'smooth'
                },
                title: {
                    text: 'Average High & Low Temperature',
                    align: 'left',
                    style: {
                        fontSize:  '13px',
                        color:  '#686c71'
                    },
                },
                grid: {
                    borderColor: '#f6f6f7',
                    row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                    },
                },
                markers: {
                    size: 6
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    title: {
                        text: 'Month',
                        offsetY: 10,
                    }
                },
                yaxis: {
                    title: {
                        text: 'Temperature'
                    },
                    min: 5,
                    max: 40
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                    floating: true,
                    offsetY: -25,
                    offsetX: -5,
                    fontSize: '13px',
                }
            },
            series: [
                {
                    name: "High - 2013",
                    data: [28, 29, 33, 36, 32, 32, 33]
                },
                {
                    name: "Low - 2013",
                    data: [12, 11, 14, 18, 17, 13, 13]
                }
            ],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Line with Data Labels Chart</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="line" 
                        height={400} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default LineWithDataLabels;