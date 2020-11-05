import { Component, OnInit } from '@angular/core';
import { ApiService } from '../services/api.service';

@Component({
	selector: 'app-report-component',
	templateUrl: './report-component.component.html',
	styleUrls: ['./report-component.component.scss']
})
export class ReportComponentComponent implements OnInit {

	dataReport:any =[];

	constructor(private api: ApiService) { }

	ngOnInit() {
		this.getDataReport();
	}

	getDataReport() {
		this.api.get('acmesa/report-car')
			.subscribe(
				resp => {
					this.dataReport = resp.response;
				}
			);
	}

}
