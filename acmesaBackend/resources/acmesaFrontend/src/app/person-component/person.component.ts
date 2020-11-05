import { Component, OnInit } from '@angular/core';
import { ApiService } from '../services/api.service';
declare var $: any;


@Component({
	selector: 'app-person',
	templateUrl: './person.component.html',
	styleUrls: ['./person.component.scss']
})
export class PersonComponent implements OnInit {

	listDataPerson:any = [];
	cities:any = [];
	idList = 0;
	singlePerson:number = 0;

	constructor(private api: ApiService) { }

	ngOnInit() {
		this.getListPerson();
	}

	getListPerson() {
		this.api.get('acmesa/person')
			.subscribe(
				resp => {
					this.listDataPerson = resp.response;
				}
			);
	}


	openModalEditPerson(id, idList) {

		this.idList = idList;
		this.api.get(`acmesa/person/${id}`)
			.subscribe(
				resp => {
					this.singlePerson = resp.response;
				}
			);

		$('#editPerson').modal('show')
	}

}
