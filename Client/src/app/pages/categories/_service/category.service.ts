import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { Observable } from 'rxjs';
import { catchError } from 'rxjs/operators';

// App import
import { environment } from '../../../../environments/environment';
import { Category } from '../category';

@Injectable({
  providedIn: 'root'
})

export class CategoryService {

  private readonly apiUrl = environment.apiUrl;
  private categoryUrl = this.apiUrl + '/categories';
  
  constructor(private http: HttpClient) { }

  getCategoryList(): Observable<Category[]> {
    return this.http.get<Category[]>(this.categoryUrl)
    .pipe(catchError(error => this.handleError(error)));
  }

  private handleError(error: HttpErrorResponse) {
    return Observable.throw(error);
  }

}
