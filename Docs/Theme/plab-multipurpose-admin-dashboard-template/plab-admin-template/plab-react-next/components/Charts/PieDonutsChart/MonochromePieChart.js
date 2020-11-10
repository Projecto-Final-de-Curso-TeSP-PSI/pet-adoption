import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class MonochromePieChart extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
                labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                theme: {
                    monochrome: {
                        enabled: true
                    }
                },
                title: {
                    text: "Number of leads"
                },
                responsive: [{
                    breakpoint: 320,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            },
            series: [25, 15, 44, 55, 41, 17],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Monochrome Pie Chart</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="pie" 
                        height={420} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default MonochromePieChart;