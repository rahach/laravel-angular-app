import { Component, OnInit } from '@angular/core';
import { Title } from '@angular/platform-browser';
import * as $ from 'jquery';
import { CategoryService } from 'src/app/pages/categories/_service/category.service';
import { Category } from 'src/app/pages/categories/category';


@Component({
  selector: 'app-nav',
  templateUrl: './nav.component.html',
  styleUrls: ['./nav.component.scss']
})


export class NavComponent implements OnInit {
  public categories: any[];
  public requestError: any;
  public isLoading: Boolean = false;  


  public constructor( 
    private titleTagService: Title,
    private categoriesService: CategoryService    
  ) {  }


  public setTitle( pageTitle: string ) { 
    this.titleTagService.setTitle( pageTitle );
  }

  ngOnInit() {

    this.getCategories();        

    $(document).ready(function() {
      // executes when HTML-Document is loaded and DOM is ready
    
    // breakpoint and up  
      $(window).resize(function(){
        if ($(window).width() >= 980){	
      
            // when you hover a toggle show its dropdown menu
            $(".navbar .dropdown-toggle").hover(function () {
                $(this).parent().toggleClass("show");
                $(this).parent().find(".dropdown-menu").toggleClass("show"); 
              });
      
              // hide the menu when the mouse leaves the dropdown
            $( ".navbar .dropdown-menu" ).mouseleave(function() {
              $(this).removeClass("show");  
            });
        }	
      });  
    });    
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
//    return this.categories = this.createMenu(response);
    return this.categories = response;
  }

  private createMenu (categories: Category[]){
    var menu = new Array();      

    for(let category of categories){
      var menuItem = { topCategory: {}, subCategories: []};
      var subCategories = new Array();          

      if(category.parent_id == 1){
        subCategories = this.getSubCategories(categories, category.id)
        menuItem.topCategory = category;
        menuItem.subCategories = subCategories;        
        var length = menu.push(menuItem);
      }
    }
    console.log(menu);
    return menu;      
  }

  private getSubCategories(categories: Category[], parentId: number){
    var subCategories = new Array();
    for(let category of categories){
      if(category.parent_id == parentId){
        var length = subCategories.push(category);
      }
    }  
    return subCategories;
  }

  protected handleError (error: any) {
    return this.requestError = error;
  }


}