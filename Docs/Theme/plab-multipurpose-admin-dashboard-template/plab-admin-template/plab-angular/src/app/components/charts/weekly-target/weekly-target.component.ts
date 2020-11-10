import { Component, OnInit } from '@angular/core';
import ApexCharts from 'apexcharts';

@Component({
  selector: 'app-weekly-target',
  templateUrl: './weekly-target.component.html',
  styleUrls: ['./weekly-target.component.scss']
})

export class WeeklyTargetComponent implements OnInit {

    constructor() { }

    ngOnInit() {
        const options = {
            chart: {
                height: 370,
                type: 'radialBar',
            },
            colors:['#2962ff'],
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '80%',
                    },
                    dataLabels: {
                        name: {
                            show: true,
                            fontSize: '30px',
                        },
                        value: {
                            show: true,
                        }
                    },
                },
            },
            series: [85],
            labels: ['$20,456'],
        };
        const chart = new ApexCharts(
            document.querySelector('#weekly-target-chart'),
            options
        );
        chart.render();
    }

}
