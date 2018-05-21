                @extends('admin_view.layouts.master')
                @section('content')
                <div class="x_panel">
                 <div class="x_content">
                  <form action="{{ url ('/admin/save_products')  }}" method="POST"  class="form-horizontal form-label-left" enctype="multipart/form-data">
                   {{ csrf_field()  }}
                   <div class="form-group">
                    <label class="control-label col-md-3">Product Name <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" name="prod_name" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Product Details <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                     <textarea  required="required" class="form-control" rows="10" cols="80" name="prod_details" data-parsley-trigger="keyup" data-parsley-minlength="50" data-parsley-maxlength="50" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                     data-parsley-validation-threshold="10"></textarea>
                   </div>
                 </div>
                 <div class="form-group">
                  <label class="control-label col-md-3">
                    <span class="required">Category Name * </span>
                  </label>
                  <div class="col-md-7">
                    <select  class="form-control col-md-7 col-xs-12" name="prod_categoryName">
                     @foreach($categories  as $c)
                     <option value="{{ $c->id }}">
                      {{  $c->prod_categoryName }}</option>     
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">

                  <label class="control-label col-md-3">Product Image <span class="required">*</span>
                  </label>
                  <div class="col-md-7">
                   <input  type="file" name="prod_picture"   accept="image/*"   required="required" class="form-control col-md-7 col-xs-12" />
                 </div>
               </div>

               <div class="form-group">
                <label class="control-label col-md-3" for="prod_description">Product Description<span class="required">*</span>
                </label>
                <div class="col-md-7">
                  <textarea   class="form-control" name="description"  id="description" ></textarea>
                </div>
              </div>

              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Insert</button>
              </div>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
          </div>
        </div>
        <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
        <script>
          CKEDITOR.replace( 'description');
        </script>
        @stop