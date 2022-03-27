<x-app-layout>

  {{-- {{ dd($product); }} --}}

    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Bordered table</h4>
            <p class="card-description">
              Add class <code>.table-bordered</code>
            </p>
            <button type="button" class="btn btn-dark btn-icon-text">
                add category
                <i class="ti-file btn-icon-append"></i>                          
              </button>

              <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
              <div class="float-right">
                <a href="{{ asset('category/create') }}" class="btn btn-primary btn-sm">Tambah</a>
            </div>
            
    
       

            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Nama category
                    </th>
                   
                    <th>
                      ACTION
                    </th>
                    
                  </tr>
                </thead>
               
                <tbody>
                  <?php $i=1; ?>
                  <tr>
                    @foreach ($category as $pr )
                    
                    <td>
                     {{ $i }}
                    </td>
                    <td>
                      {{ $pr->name_category }}
                    </td>
                    
                   

                    <td>
                      <a href="/category/{{ $pr->category_id}}/edit">Edit</a>

                     <form action="/category/{{ $pr->category_id }}" method="post">
                      
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