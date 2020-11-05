import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CarEditComponentComponent } from './car-edit-component.component';

describe('CarEditComponentComponent', () => {
  let component: CarEditComponentComponent;
  let fixture: ComponentFixture<CarEditComponentComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CarEditComponentComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CarEditComponentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
