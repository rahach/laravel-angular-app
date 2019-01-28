import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { Observable } from 'rxjs';
import { catchError } from 'rxjs/operators';

// App import
import { environment } from '../../../../environments/environment.prod';
import { Product } from '../product';

@Injectable({
  providedIn: 'root'
})
export class ProductsService {

  private readonly apiUrl = environment.apiUrl;
  private productsUrl = this.apiUrl + '/category';
  
  constructor(private http: HttpClient) { }

  getProductList(slug: string): Observable<Product[]> {
    return this.http.get<Product[]>(this.productsUrl + `/${slug}`)
    .pipe(catchError(error => this.handleError(error)));
  }

  getProductDetail (slug: string): Observable<Product> {
    return this.http.get<Product>(this.apiUrl + `/${slug}`)
      .pipe(catchError(error => this.handleError(error)));
  }

  private handleError(error: HttpErrorResponse) {
    return Observable.throw(error);
  }

}