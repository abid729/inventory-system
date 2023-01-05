@extends('admin_assets.layouts.app')
@section('title', 'Brand')
@section('content')
<div role="main" class="main-content">
 <div class="page-content container container-plus">
   <div class="card acard mt-2 mt-lg-3">
    <div class="card-header">
      <h3 class="card-title text-125 text-primary-d2">
        <i class="far fa-edit text-dark-l3 mr-1"></i>
       Brand
      </h3>
    </div>

    <div class="card-body px-3 pb-1">
      <form class="mt-lg-3" enctype="multipart/form-data" autocomplete="off" method="POST" action="{{ route('update-brand', $brand->id) }}">
        @csrf
        <div class="form-group row">
          <div class="col-sm-6">
               Name *
               <input type="text" name="name" value="{{$brand->name}}" class="form-control brc-on-focus brc-success-m1" id="product_name" />
               @if ($errors->has('name'))
               <span class="text-danger">{{ $errors->first('name') }}</span>
               @endif
          </div>
          <div class="col-sm-6">
         
            Image *
            <label class="ace-file-input"><input type="file" class="ace-file-input" name="image" id="ace-file-input1"><div class="ace-file-container d-flex flex-column border-1 brc-grey-l2 brc-h-warning-m1"><div class="ace-file-placeholder h-100">
              <span class="ace-file-icon align-self-center mx-2px">
                <i class="fa fa-upload bgc-grey-m1 text-white w-4 py-2 text-center"></i>
              </span>
              <span class="ace-file-name text-grey-m2 px-1">
                No file chosen
              </span><span class="ace-file-btn ml-auto bgc-default text-white px-2 pt-2 text-90 my-1px mr-1px">Choose</span></div></div><a title="" class="remove position-rc text-danger mr-n25 w-3 radius-2 border-1 brc-h-danger-m4 text-center" href="#"><i class="fa fa-times"></i></a></label>
              @if ($errors->has('image'))
              <span class="text-danger">{{ $errors->first('image') }}</span>
              @endif
            
         </div>
       </div>
         <div class="form-group row">
            <div class="col-sm-6">
              Description 
              <textarea type="text"  value="" class="form-control brc-on-focus brc-success-m1" id="description" name="description">{{$brand->description}}</textarea>
              @if ($errors->has('description'))
              <span class="text-danger">{{ $errors->first('description') }}</span>
              @endif
              </div>
           <div class="col-sm-6">
            @if ("/storage/images/{{ $brand->image }}")
            <img src="{{ asset('images/'.$brand->image) }}" style="width: 50%">
            @else
                <p>No image found</p>
            @endif
           </div>
            </div>
        
        <div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
          <div class="offset-md-3 col-md-9 text-nowrap">

            <button class="btn btn-green radius-1 d-inline-flex align-items-center pr-0 py-3px btn-bold border-r-0 mb-1">
                <span class="px-4">
                    Save
                </span>
                <span class="bgc-black-tp9 h-5 px-25 pt-2 my-n1 ml-2 border-l-2 brc-inherit">
                    <i class="fa fa-check text-120 mt-3px"></i>
                </span>
              </button>
            <button class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
              <i class="fa fa-undo mr-1"></i>
              Reset
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
    </div>
</div>
@endsection
