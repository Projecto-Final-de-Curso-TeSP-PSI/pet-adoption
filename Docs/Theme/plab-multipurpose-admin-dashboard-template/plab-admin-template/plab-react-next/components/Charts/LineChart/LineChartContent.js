import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class LineChartContent extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
                chart: {
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                title: {
                    text: 'Product Trends by Month',
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
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                }
            },
            series: [{
                name: "Desktops",
                data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
            }],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Basic Line Chart</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="line" 
                        height={380} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default LineChartContent;