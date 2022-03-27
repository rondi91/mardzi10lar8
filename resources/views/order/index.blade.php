<x-app-layout>

  {{-- {{ dd($orderall); }} --}}

    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Bordered table</h4>
            <p class="card-description">
              Add class <code>.table-bordered</code>
            </p>
            <button type="button" class="btn btn-dark btn-icon-text">
                add order
                <i class="ti-file btn-icon-append"></i>                          
              </button>

              <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
              <div class="float-right">
                <a href="{{ asset('order/create') }}" class="btn btn-primary btn-sm">Tambah</a>
            </div>
            
    
       

            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      no.
                    </th>
                    <th>
                      Nama user
                    </th>
                    <th>
                      Nama produk
                    </th>
                   
                    <th>
                      jumlah order
                    </th>
                    
                    <th>
                      ACTION
                    </th>
                    
                  </tr>
                </thead>
               
                <tbody>
                  <?php $i=1; ?>
                  <tr>
                    @foreach ($order as $od )
                    
                    <td>
                     {{ $i }}
                    </td>
                    <td>
                      {{ $od->nama_order }}
                    </td>
                    
                    <td>
                     {{ $od->slug_order }}
                    </td>
                    
                    <td>
                       {{-- {{ $od->category->name_category }} --}}
                        
                       {{ $od->category->name_category }}
                    </td>
                  
                    <td>
                     {{ $od->harga }}
                      
                     </td>
                    <td>
                      {{ $od->qty }}
                    </td>

                    <td>
                     <img src="{{ asset('storage/'.$od->image) }}" alt=""> 
                    </td>

                    <td>
                      <a href="/order/{{ $od->id}}/edit">Edit</a>

                     <form action="/order/{{ $od->id }}" method="post">
                      
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