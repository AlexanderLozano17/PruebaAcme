import { Component, Input, OnInit } from '@angular/core';
import { ApiService } from '../services/api.service';
import { ActivatedRoute } from '@angular/router';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { HttpClient } from '@angular/common/http';

@Component({
	selector: 'app-person-edit',
	templateUrl: './person-edit.component.html',
	styleUrls: ['./person-edit.component.scss']
})
export class PersonEditComponent implements OnInit {

	message='';
	cities:any=[];
	field='';
	editPersonForm:FormGroup;
	dataEdit = {
		id: '',
		first_name: '',
		second_name: '',
		last_name: '',
		address: '',
		telephone: '',
		city: '',
		
	}

	@Input() set person(dataPerson) {
		this.dataEdit = dataPerson;
	}

	@Input() set newStore(field) {
		this.field = field;
	}

	constructor(private api:ApiService,
				private _route:ActivatedRoute,
				private formBuilder: FormBuilder,
				private http: HttpClient) { }

	ngOnInit() {
		
		this.getCities();
		this.buildForm();
	}

	buildForm() {

		this.editPersonForm = this.formBuilder.group({

            first_name: [
				this.dataEdit.first_name,
				Validators.compose([
                    Validators.required,
                    Validators.maxLength(30),
                ]),
            ],
            second_name: [
				this.dataEdit.second_name,
				Validators.compose([
                    Validators.maxLength(30),
                ]),
            ],
            //certificado escolar
            last_name: [
				this.dataEdit.last_name,
				Validators.compose([
                    Validators.required,
                    Validators.maxLength(60),
                ]),
            ],
            address: [
				this.dataEdit.address,
				Validators.compose([
                    Validators.required,
                    Validators.maxLength(60),
                ]),
            ],
            telephone: [
				this.dataEdit.telephone,
				Validators.compose([
                    Validators.required,
					Validators.minLength(10),
					Validators.maxLength(10),
					Validators.pattern('^[1-9]\\d{9}$'),
                ]),
			],
			city: [
				this.dataEdit.city,
				Validators.compose([
                    Validators.required,
                ]),
            ],
            
        });
	}

	getCities() {
		this.api.get('acmesa/cities')
			.subscribe(
				resp => {
					this.cities = resp.cities;
				}
			);
	}
	onSaveForm() {

		console.log(this.dataEdit)

		this.message = '';
		if (this.editPersonForm.valid) {

			if (this.field == '') {

				//this.api.put(`acmesa/person/${this.dataEdit.id}`, this.dataEdit)
				this.api.put(`acmesa/person/${this.dataEdit.id}`,this.dataEdit)
					.subscribe(
						resp => {
							console.log(resp)
						}
					);

			} else {

				this.api.post('acmesa/person', this.dataEdit)
					.subscribe(
						resp => {
							console.log(resp)
						}
					);
			}

		} else {
			this.message = 'Dilingencia adecuadamente el formulario'
		}
	}

}
