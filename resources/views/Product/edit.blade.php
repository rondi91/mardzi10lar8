<x-app-layout>
  {{-- {{ dd($productall); }} --}}
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Product</h4>
           
           
            <form action="/product/{{ $product->id  }}"  method="post"  enctype="multipart/form-data">

                               
                @method('put')
                @csrf
                        
              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nama Product</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="name" name="name" value="{{ $product->nama_product }}"  placeholder="Nama Product">
                </div>
              </div>
              <div class="form-group row">
                <label for="slug" class="col-sm-3 col-form-label">SLUG </label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="slug" name="slug" value="{{ $product->slug_product }}" placeholder="slug">
                </div>
            </div>

            <div class="form-group row">
              <label for="category" class="col-sm-3 col-form-label">Category </label>
              <div class="col-sm-5">
                <select name="categoryid" class="js-example-basic-single w-100">
                  @foreach ($category as $cat )
                    
                  <option  value="{{ $product->category->id }}">{{ $cat->name_category }}</option>
                  @endforeach
                  
                </select>
              </div>            
          </div>
                
                
               
              <div class="form-group row">
                <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="harga" name="harga" value="{{ $product->harga }}" placeholder="Harga">
                </div>
              </div>
              <div class="form-group row">
                <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $product->qty }}" placeholder=Quantity">
                </div>
              </div>

              <div class="form-group row">
                <label for="image"  class="col-sm-3 col-form-label">upload image</label>
                <div class="col-sm-9">               
                <input class="form-control form-control-lg" id="image" name="image" type="file" />
              </div>
              </div>
              
             
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>

</x-app-layout>