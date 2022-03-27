<x-app-layout>

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add order</h4>
           
           
            <form action="/order"  method="post"  enctype="multipart/form-data">

                @csrf

              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nama order</label>
                <div class="col-sm-7">
                  {{-- <input type="text" class="form-control" id="name" name="name"  placeholder="Nama order"> --}}

                  <select name="user_name" class="js-example-basic-single w-100">
                    @foreach ($product as $pr )
                      
                    <option  value="{{ $pr->id }}">{{ $pr->nama_product }}</option>
                    @endforeach
                    
                  </select>

                </div>
              </div>



              <div class="form-group row">
                <label for="nama_produk" class="col-sm-3 col-form-label">nama produk </label>
                <div class="col-sm-5">
                  <select name="user_name" class="js-example-basic-single w-100">
                    @foreach ($user as $pr )
                      
                    <option  value="{{ $pr->id }}">{{ $pr->name }}</option>
                    @endforeach
                    
                  </select>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder=Quantity">
                </div>
              </div>
              <div class="form-group row">
                <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                </div>
              </div>
                          
              
             
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>

</x-app-layout>