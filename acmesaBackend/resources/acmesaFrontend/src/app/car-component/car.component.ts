import { Component, OnInit } from '@angular/core';
import { ApiService } from '../services/api.service';

@Component({
	selector: 'app-car',
	templateUrl: './car.component.html',
	styleUrls: ['./car.component.scss']
})
export class CarComponent implements OnInit {

	listCars:any =[];

	constructor(private api: ApiService) { }

	ngOnInit() {
		this.getAllCar();
	}

	getAllCar() {
		this.api.get('acmesa/car')
			.subscribe(
				resp => {
					this.listCars = resp.response;
				}
			);
	}

}
