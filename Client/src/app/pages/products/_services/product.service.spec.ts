import { TestBed } from '@angular/core/testing';

import { ProductsService } from './product.service';

describe('ProductsService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: ProductsService = TestBed.get(ProductsService);
    expect(service).toBeTruthy();
  });
});
