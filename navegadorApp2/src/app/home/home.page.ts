import { Component } from '@angular/core';
import {Router} from '@angular/router';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  valorBusqueda : string = "";

  constructor(private router :Router ) {}
  toResult(){
    console.log(this.valorBusqueda);
    this.router.navigate(['/results']);
  }
}
