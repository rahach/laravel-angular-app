import { Component, OnInit } from '@angular/core';

import { CategoryService } from 'src/app/pages/categories/_service/category.service';

@Component({
  selector: 'app-category-list',
  templateUrl: './category-list.component.html',
  styleUrls: ['./category-list.component.scss']
})
export class CategoryListComponent implements OnInit {
  public categories: any[];
  public requestError: any;
  public isLoading: Boolean = false;  

  constructor(private categoriesService: CategoryService) { }

  ngOnInit() {
    this.getCategories();    
  }

  public getCategories () {
    this.isLoading = true;    
    return this.categoriesService.getCategoryList().subscribe(
      response => this.handleResponse(response),
      error => this.handleError(error)
    );
  }

  protected handleResponse (response: any) {
    this.requestError = null;
    this.isLoading = false;          
    return this.categories = response;
  }

  protected handleError (error: any) {
    return this.requestError = error;
  }


}
