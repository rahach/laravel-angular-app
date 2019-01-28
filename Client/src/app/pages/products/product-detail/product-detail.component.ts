import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { ProductsService } from '../_services/product.service';

@Component({
  selector: 'app-product-detail',
  templateUrl: './product-detail.component.html',
  styleUrls: ['./product-detail.component.scss']
})


export class ProductDetailComponent implements OnInit {

  public product: any;
  public isLoading: Boolean = false;

  constructor(
    private productsService: ProductsService,
    private route: ActivatedRoute,
  ) { }

  ngOnInit() {
    this.getProductDetails();
  }

  getProductDetails(): void {
    this.isLoading = true;
    const slug = this.route.snapshot.paramMap.get('slug');
    this.productsService.getProductDetail(slug)
      .subscribe(
         (details) => {
           this.isLoading = false;
           this.product = details;
      });
  }



}    