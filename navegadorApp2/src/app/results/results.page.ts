import { Component, OnInit } from '@angular/core';
import {HttpClient} from '@angular/common/http'

@Component({
  selector: 'app-results',
  templateUrl: './results.page.html',
  styleUrls: ['./results.page.scss'],
})
export class ResultsPage implements OnInit {

  constructor(private http:HttpClient) { }

  ngOnInit() {
  }

  valorBusqueda : string = "";

  toResult(){
    // console.log(JSON.stringify({ value: this.valorBusqueda}));
    // console.log(this.http.post("http://127.0.0.1:8000/api/busqueda", JSON.stringify({ value: this.valorBusqueda})));
  }
}
