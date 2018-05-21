@extends('admin_view.layouts.master')
@section('content')
<div class="x_panel">
  <div class="x_content">
    <form action="{{ route('update_products', $product_id->id)  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
      {{ csrf_field()  }}
      <div class="form-group">
        <label class="control-label col-md-3">Product Name <span class="required">*</span>
        </label>
        <div class="col-md-7">
          <input type="text" name="prod_name" value="{{$product_id->prod_name}}" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Product Details <span class="required">*</span>
        </label>
        <div class="col-md-7">
         <textarea  required="required" class="form-control" rows="10" cols="80" name="prod_details" data-parsley-trigger="keyup" data-parsley-minlength="50" data-parsley-maxlength="50" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
         data-parsley-validation-threshold="10">{{ $product_id->prod_details }}</textarea>
       </div>
     </div>
     
     <div class="form-group">
      <label class="control-label col-md-3">
        <span class="required">Category Name * </span>
      </label>
      <div class="col-md-7">
       <select  class="form-control col-md-7 col-xs-12" name="prod_categoryName">
         <option value="{{(!is_null($product_id->product_category)) ? $product_id->product_category->id : ''}}"  selected="true">
          {{(!is_null($product_id->product_category)) ? $product_id->product_category->prod_categoryName : ''}}
        </option>
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
      <div class="col-md-7" style="margin-top:13px;">
       @if(!empty($product_id->prod_picture))
       <img src="{{('/assets/upload/product_upload/'.$product_id->prod_picture)}}" >
       <input type="file" name="prod_picture" value="{{ ( asset('/assets/upload/product_upload/').'/'.$product_id->prod_picture) }}" accept="image/*">
       @else
       <input type="file" name="prod_picture"     accept="image/*">
       @endif
     </div>
   </div>
   <div class="form-group">
    <label class="control-label col-md-3" for="prod_description">Product Description<span class="required">*</span>
    </label>
    <div class="col-md-7">
      <textarea   class="form-control" name="description"  id="description" >{!! $product_id->prod_description !!}</textarea>
    </div>
  </div>


  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
    <button type="submit" class="btn btn-success">Update</button>
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