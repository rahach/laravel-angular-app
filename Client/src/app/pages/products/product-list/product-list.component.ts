import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { ProductsService } from '../_services/product.service';

@Component({
  selector: 'app-product-list',
  templateUrl: './product-list.component.html',
  styleUrls: ['./product-list.component.scss'],
  styles: [
    `.search-results {
      height: 100px;
      overflow: scroll;
      flex: none;
    }`
  ]  
})
export class ProductListComponent implements OnInit {
  products: any[];
  page = 1;
  requestError: any;
  isLoading: Boolean = false;  

  constructor(
    private productsService: ProductsService,
    private route: ActivatedRoute    
  ) { }

  ngOnInit() {
    this.getProducts();
  }

  public getProducts () {
    this.isLoading = true;
    const slug = this.route.snapshot.paramMap.get('slug');
    this.productsService.getProductList(slug)
      .subscribe(
        (details) => {
          this.isLoading = false;
          this.products = details;
        });

    // this.isLoading = true;    
    // return this.productsService.getProductList(page).subscribe(
    //   response => this.handleResponse(response['data']),
    //   error => this.handleError(error)
    // );
  }

  protected handleResponse (response: any[]) {
    this.requestError = null;
    this.isLoading = false;
    console.log(this.products);
    console.log(response);    
    return this.products = this.products.concat(response);
  }

  protected handleError (error: any) {
    return this.requestError = error;
  }


  public scrollDistance: 2; 
  public scrollUpDistance: 2 ;
  public throttle: 5 ;

  public onScrollDown(){
    this.page ++;
    this.getProducts();
  } 

}