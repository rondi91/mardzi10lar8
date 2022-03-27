<x-app-layout>

  {{-- {{ dd($productall); }} --}}

    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Bordered table</h4>
            <p class="card-description">
              Add class <code>.table-bordered</code>
            </p>
            <button type="button" class="btn btn-dark btn-icon-text">
                add product
                <i class="ti-file btn-icon-append"></i>                          
              </button>

              <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
              <div class="float-right">
                <a href="{{ asset('product/create') }}" class="btn btn-primary btn-sm">Tambah</a>
            </div>
            
    
       

            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Nama Product
                    </th>
                    <th>
                      Slug
                    </th>
                    <th>
                      Category
                    </th>
                    <th>
                     harga
                    </th>
                    <th>
                      qty
                    </th>
                    <th>
                      image
                    </th>
                    <th>
                      ACTION
                    </th>
                    
                  </tr>
                </thead>
               
                <tbody>
                  <?php $i=1; ?>
                  <tr>
                    @foreach ($product as $pr )
                    
                    <td>
                     {{ $i }}
                    </td>
                    <td>
                      {{ $pr->nama_product }}
                    </td>
                    
                    <td>
                     {{ $pr->slug_product }}
                    </td>
                    
                    <td>
                       {{-- {{ $pr->category->name_category }} --}}
                        
                       {{ $pr->category->name_category }}
                    </td>
                  
                    <td>
                     {{ $pr->harga }}
                      
                     </td>
                    <td>
                      {{ $pr->qty }}
                    </td>

                    <td>
                     <img src="{{ asset('storage/'.$pr->image) }}" alt=""> 
                    </td>

                    <td>
                      <a href="/product/{{ $pr->id}}/edit">Edit</a>

                     <form action="/product/{{ $pr->id }}" method="post">
                      
                      @method('delete')
                      @csrf

                      <button type="submit">delete</button>
                    </form>
                    </td>
                  </tr>
                 <?php $i++ ?>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>
    





</x-app-layout>