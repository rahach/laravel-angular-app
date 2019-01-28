import { NgModule } from '@angular/core';
import { BrowserModule, Title } from '@angular/platform-browser';
import { HttpClientModule, HTTP_INTERCEPTORS } from '@angular/common/http'; 

import { HomeModule } from './pages/home/home.module';
import { ProductsModule } from './pages/products/products.module';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ServiceWorkerModule } from '@angular/service-worker';
import { environment } from '../environments/environment';
import { NavComponent } from './layout/nav/nav.component';
import { HttpErrorHandler } from './shared/_services/http-handle-error.service';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';

import { FormsModule } from '@angular/forms';
import { FooterComponent } from './layout/footer/footer.component';

import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import { RequestCache } from './shared/_services/request-cache.service';
import { CachingInterceptor } from './shared/_services/caching-interceptor.service';


@NgModule({
  imports: [
    BrowserModule,
    BrowserAnimationsModule,    
    HttpClientModule,    
    AppRoutingModule,
    HomeModule,
    ProductsModule,
    FormsModule,
    ServiceWorkerModule.register('ngsw-worker.js', { enabled: environment.production }), NgbModule.forRoot()    
  ],  
  declarations: [
    AppComponent,
    NavComponent,
    FooterComponent
  ],
  providers: [ 
    Title, 
    HttpErrorHandler,
    RequestCache,
    { provide: HTTP_INTERCEPTORS, useClass: CachingInterceptor, multi: true }
  ],
  bootstrap: [AppComponent]
})


export class AppModule { }
