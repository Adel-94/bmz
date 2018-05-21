              @extends('admin_view.layouts.master')
              @section('content')
              
              <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="{{ url('/admin/add_products') }}">Add Products</a>
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content table-responsive">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         <th>Id</th>
                         <th>Product Name</th>
                         <th>Product Details</th>
                         <th>Product Category</th>
                         <th>Product Image</th>
                         <th>Product Description</th>
                         <th>Update</th>
                         <th>Delete</th>
                       </tr>
                     </thead>
                     <tbody>
                      <tr>
                       @foreach($products as $p)
                       <td>{{ $p->id  }}</td>
                       <td>{{ $p->prod_name  }}</td>
                       <td>{{str_limit("$p->prod_details",200)}}</td>
                       <td>{{(!is_null($p->product_category)) ? $p->product_category->prod_categoryName : 'boşdur'}}</td>
                       <td>
                        <img src="{{ asset('/assets/upload/product_upload/'.$p->prod_picture) }}" style="width: 50px; height: 50px;">
                      </td>
                      <td>
                       <td>{!! $p->prod_description !!}</td>
                     </td>
                     <td>
                      <a href="{{ route('edit_products', $p->id) }}"> <button type="button" class="btn btn-info">Edit</button> </a>
                    </td>
                    <td>
                      <a href="{{ route('delete_products', $p->id) }}">   <button type="button" class="btn btn-danger delete">Delete</button> </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
       {{ $message }}
     </div>
     @endif
     <script type="text/javascript">
      $(".delete").on("click", function(){
        return confirm("Do you want to delete this item?");
      });
    </script>          
    @stop