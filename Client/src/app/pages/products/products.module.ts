
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';

import { ProductsRoutingModule } from './products-routing.module';
import { ProductsComponent } from './products.component';
import { ProductDetailComponent } from './product-detail/product-detail.component';
import { ProductListComponent } from './product-list/product-list.component';
import { HttpClientModule } from '@angular/common/http';

import { ProductsService } from './_services/product.service';

import { FormsModule } from '@angular/forms';

import { InfiniteScrollModule } from 'ngx-infinite-scroll';

@NgModule({
  declarations: [ProductsComponent, ProductDetailComponent, ProductListComponent],
  imports: [
    CommonModule,
    ProductsRoutingModule,
    HttpClientModule,
    NgbModule,
    InfiniteScrollModule,
    FormsModule    
  ],
  exports: [
    InfiniteScrollModule
  ],
  providers: [ ProductsService ]
})
export class ProductsModule { }
