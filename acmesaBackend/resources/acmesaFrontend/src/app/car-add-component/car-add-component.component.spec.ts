import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CarAddComponentComponent } from './car-add-component.component';

describe('CarAddComponentComponent', () => {
  let component: CarAddComponentComponent;
  let fixture: ComponentFixture<CarAddComponentComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CarAddComponentComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CarAddComponentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
