@extends('admin_assets.layouts.app')
@section('title', 'Base Units')
@section('content')



  <div class="page-content container container-plus">
    <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
      <h1 class="page-title text-primary-d2 text-140">
        Units
        <small class="page-info text-dark-m3">
         <a href="{{ route('create-baseunit') }}"> <i class="fa fa-plus" data-toggle="tooltip" data-placement="top" data-original-title="Add New Unit"></i></a>
        </small>
      </h1>

      <div class="page-tools mt-3 mt-sm-0 mb-sm-n1">
        <!-- dataTables search box will be inserted here dynamically -->
      </div>
    </div>

    <div class="card bcard h-auto">
      <table id="datatable" class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed">
          <!-- add `collapsed` by default ... it will be removed by default -->
          <!-- thead with .sticky-nav -->
          <thead class="sticky-nav text-secondary-m1 text-uppercase text-85">
            <tr>
              <th class="td-toggle-details border-0 bgc-white shadow-sm">
                <i class="fa fa-angle-double-down ml-2"></i>
              </th>

            

              <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                Name
              </th>
             
              <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                Status
              </th>
              <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                Created date
              </th>

             

              <th class="border-0 bgc-white shadow-sm w-2">
                <!-- the TD will have edit icon -->
              </th>
            </tr>
          </thead>

          <tbody class="pos-rel">
            @foreach ($units as $row)
              
           
            <tr class="d-style bgc-h-default-l4">
              <td class="td-toggle-details pos-rel">
              
                <div class="position-lc h-95 ml-1px border-l-3 brc-purple-m1">
                </div>
              </td>

              <td class="pl-3 pl-md-4 align-middle pos-rel">
                {{$row->name}}
           
              </td>
             
           
              <td>  <input data-id="{{$row->id}}" class="toggle-class ace-switch input-lg ace-switch-bars-h ace-switch-check ace-switch-times text-grey-l2 bgc-orange-d2 radius-2px"  type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $row->status ? 'checked' : '' }}>
              </td>
              <td class="text-grey">
                <?php echo date('m/d/Y h:i:s a', strtotime($row->created_at));?>
              </td>
              <td class="align-middle">
                <span class="d-none d-lg-inline">
                    <a data-rel="tooltip"  title="Edit" href="{{ route('edit-baseunit', $row->id ) }}" class="v-hover">
                        <i class="fa fa-edit text-blue-m1 text-120"></i>
                    </a>
                    <a title="Delete" href=" {{ route('delete-baseunit', $row->id ) }}" class="btn btn-outline-info shadow-sm px-4 btn-bgc-white">
                      <i class="fa fa-trash-alt mx-1"></i>
                      <span class="ml-1 d-md-none">Delete</span>
              </a>

                </span>

                <span class="d-lg-none text-nowrap">
                    <a title="Edit" href="{{ route('edit-baseunit', $row->id ) }}" class="btn btn-outline-info shadow-sm px-4 btn-bgc-white">
                        <i class="fa fa-pencil-alt mx-1"></i>
                        <span class="ml-1 d-md-none">Edit</span>
                </a>
                <a title="Delete" href=" {{ route('delete-baseunit', $row->id ) }}" class="btn btn-outline-info shadow-sm px-4 btn-bgc-white">
                  <i class="fa fa-trash-alt mx-1"></i>
                  <span class="ml-1 d-md-none">Delete</span>
                 </a>
                </span>
              </td>
            </tr>
            @endforeach 
          </tbody>
        </table>
   
    </div>
  </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

  <script>
  
      $('.toggle-class').change(function() {
        console.log('sss')
          var status = $(this).prop('checked') == true ? 1 : 0; 
          var user_id = $(this).data('id'); 
           
          $.ajax({
              type: "GET",
              dataType: "json",
              url: '/changeStatus',
              data: {'status': status, 'id': user_id},
              success: function(data){
                console.log(data.success)
              }
          });
      })

  </script>
@endsection
