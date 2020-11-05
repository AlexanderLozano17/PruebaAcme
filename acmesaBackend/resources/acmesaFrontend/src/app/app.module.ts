import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { PersonComponent } from './person-component/person.component';
import { CarComponent } from './car-component/car.component';
import { HomeComponent } from './home-component/home.component';
import { PersonEditComponent } from './person-edit-component/person-edit.component';
import { PageNoFoundComponent } from './page-no-found-component/page-no-found.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http'
import { ApiService } from './services/api.service';
import { NewPersonComponentComponent } from './new-person-component/new-person-component.component';
import { ReportComponentComponent } from './report-component/report-component.component';
import { CarAddComponentComponent } from './car-add-component/car-add-component.component';
import { CarEditComponentComponent } from './car-edit-component/car-edit-component.component';

@NgModule({
  declarations: [
    AppComponent,
    PersonComponent,
    CarComponent,
    HomeComponent,
    PersonEditComponent,
    PageNoFoundComponent,
    NewPersonComponentComponent,
    ReportComponentComponent,
    CarAddComponentComponent,
    CarEditComponentComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule
  ],
  exports:[
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule
  ],
  providers: [
    ApiService,
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
