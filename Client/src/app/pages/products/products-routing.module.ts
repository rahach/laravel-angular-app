import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ProductDetailComponent } from './product-detail/product-detail.component';
import { ProductListComponent } from './product-list/product-list.component';

const routes: Routes = [
  {
    path: '',
    children: [
      {
        path: ':slug',
        component: ProductDetailComponent        
      }
    ]    
  },
  {
    path: 'category',
    children: [
      {
        path: ':slug',
        component: ProductListComponent        
      }
    ]    
  }      
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ProductsRoutingModule { }
