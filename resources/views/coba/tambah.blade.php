<x-app-layout>

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Product</h4>
           
           
            <form action="/product"  method="post">

                @csrf

              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nama Product</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="name" name="name"  placeholder="Nama Product">
                </div>
              </div>
              <div class="form-group row">
                <label for="slug" class="col-sm-3 col-form-label">SLUG </label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                </div>
              </div>
              <div class="form-group row">
                <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                </div>
              </div>
              <div class="form-group row">
                <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder=Quantity">
                </div>
              </div>
              
             
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>


</x-app-layout>