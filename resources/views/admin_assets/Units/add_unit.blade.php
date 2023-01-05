@extends('admin_assets.layouts.app')
@section('title', 'Units')
@section('content')
<div role="main" class="main-content">
 <div class="page-content container container-plus">
   <div class="card acard mt-2 mt-lg-3">
    <div class="card-header">
      <h3 class="card-title text-125 text-primary-d2">
        <i class="far fa-edit text-dark-l3 mr-1"></i>
       Units
      </h3>
    </div>

    <div class="card-body px-3 pb-1">
      <form class="mt-lg-3" enctype="multipart/form-data" autocomplete="off" method="POST" action="{{route('store-unit')}}">
        @csrf
        <div class="form-group row">
          <div class="col-sm-6">
               Name *
               <input type="text" name="name" value="" class="form-control brc-on-focus brc-success-m1" id="product_name" />
               @if ($errors->has('name'))
               <span class="text-danger">{{ $errors->first('name') }}</span>
               @endif
          </div>
          <div class="col-sm-6">
            Short Name *
            <input type="text" name="short_name" value="" class="form-control brc-on-focus brc-success-m1" id="short_name" />
            @if ($errors->has('short_name'))
            <span class="text-danger">{{ $errors->first('short_name') }}</span>
            @endif
       </div>
       </div>
       <div class="form-group row">
        <div class="col-sm-6">
             Base Unit *
             <select id="form-field-chosen-1" data-placeholder="Choose a state..." name = "base_unit" class="chosen-select form-control">
              <option value=""></option>
              <option value="Bore" >Bore</option>
              <option value="Liter" >Liter</option>
              <option value="KG" >KG</option>
            </select>
             @if ($errors->has('base_unit'))
             <span class="text-danger">{{ $errors->first('base_unit') }}</span>
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
