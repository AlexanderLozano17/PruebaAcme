import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { CarComponent } from './car-component/car.component';
import { HomeComponent } from './home-component/home.component';
import { PageNoFoundComponent } from './page-no-found-component/page-no-found.component';
import { PersonEditComponent } from './person-edit-component/person-edit.component';
import { PersonComponent } from './person-component/person.component';
import { NewPersonComponentComponent } from './new-person-component/new-person-component.component';
import { ReportComponentComponent } from './report-component/report-component.component';


const routes: Routes = [
	
	{
		path: '',
		component: HomeComponent
	},
	{
		path: 'person/list',
		component: PersonComponent
	},
	{
		path: 'person/add',
		component: NewPersonComponentComponent
	},
	{
		path: 'person:/id',
		component: PersonEditComponent
	},
	{
		path: 'car/list',
		component: CarComponent
	},
	{
		path: 'car/add',
		component: CarComponent
	},
	{
		path: 'car/edit/:id',
		component: CarComponent
	},
	{
		path: 'report',
		component: ReportComponentComponent
	},
	{
		path: '**',
		component: PageNoFoundComponent
	},

];

@NgModule({
	imports: [RouterModule.forRoot(routes)],
	exports: [RouterModule]
})
export class AppRoutingModule { }