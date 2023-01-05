@extends('admin_assets.layouts.app')
@section('title', 'Application Setting')
@section('content')
{{-- @php
print_r(sidebar());

exit;
@endphp --}}
  <div class="page-content container container-plus">
    <div class="mt-3 mt-lg-4">
        <div class="card bcard pt-1 pt-lg-2">
          <div class="card-header brc-primary-l3">
            <h5 class="card-title pl-1 text-120">
              Latest Members
            </h5>

            <div class="card-toolbar align-self-center no-border">
              <button type="button" class="btn border-2 btn-outline-default btn-sm">
                View All
              </button>
            </div>

            <div class="card-toolbar align-self-center">
              <a href="#" data-action="toggle" class="card-toolbar-btn text-grey text-110">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div>


          <div class="card-body p-0 border-0">
            <div class="table-responsive-md">
              <table class="table table-striped-primary table-borderless border-0 mb-0">
                <tbody>
                  <tr></tr>
                  <tr>
                    <td class="text-secondary-d2 pl-2 pl-lg-4">
                      <img alt="Bob Doe's avatar" src="assets/image/avatar/avatar1.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                      Bob Doe
                    </td>

                    <td class="text-secondary text-85 font-bolder">
                      Moderator
                    </td>

                    <td class="text-grey-m1 text-85">
                      London
                    </td>

                    <td class="text-85">
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                    </td>

                    <td class="font-bolder text-80 text-right pr-2 pr-lg-3">
                      <span class="badge bgc-green text-white-tp1">Approved</span>


                    </td>

                    <td class="px-2 px-lg-3 text-right" style="width:40px;">
                      <label>
                        <input type="checkbox" class="ace-switch" checked />
                      </label>


                    </td>
                  </tr>
                  <tr>
                    <td class="text-secondary-d2 pl-2 pl-lg-4">
                      <img alt="Maria Doe's avatar" src="assets/image/avatar/avatar4.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                      Maria Doe
                    </td>

                    <td class="text-secondary text-85 font-bolder">
                      Customer
                    </td>

                    <td class="text-grey-m1 text-85">
                      Dubai
                    </td>

                    <td class="text-85">
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                    </td>

                    <td class="font-bolder text-80 text-right pr-2 pr-lg-3">
                      <span class="badge bgc-green text-white-tp1">Approved</span>


                    </td>

                    <td class="px-2 px-lg-3 text-right" style="width:40px;">
                      <label>
                        <input type="checkbox" class="ace-switch" checked />
                      </label>


                    </td>
                  </tr>
                  <tr>
                    <td class="text-secondary-d2 pl-2 pl-lg-4">
                      <span class="d-inline-block text-center mr-2 pt-2 w-5 h-5 radius-round bgc-primary-l2 text-primary font-bolder text-90">
                                  <span>JS</span>
                      </span>
                      John Smith
                    </td>

                    <td class="text-secondary text-85 font-bolder">
                      Customer
                    </td>

                    <td class="text-grey-m1 text-85">
                      Istanbul
                    </td>

                    <td class="text-85">
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                    </td>

                    <td class="font-bolder text-80 text-right pr-2 pr-lg-3">

                      <span class="badge bgc-default text-white-tp1">Pending</span>

                    </td>

                    <td class="px-2 px-lg-3 text-right" style="width:40px;">

                      <label>
                        <input type="checkbox" class="ace-switch" />
                      </label>

                    </td>
                  </tr>
                  <tr>
                    <td class="text-secondary-d2 pl-2 pl-lg-4">
                      <img alt="Jim Doe's avatar" src="assets/image/avatar/avatar6.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                      Jim Doe
                    </td>

                    <td class="text-secondary text-85 font-bolder">
                      Tester
                    </td>

                    <td class="text-grey-m1 text-85">
                      Unknown
                    </td>

                    <td class="text-85">
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                    </td>

                    <td class="font-bolder text-80 text-right pr-2 pr-lg-3">


                      <span class="badge bgc-red text-white-tp1">Banned</span>
                    </td>

                    <td class="px-2 px-lg-3 text-right" style="width:40px;">


                      <a href="#" class="action-btn text-danger-m1 mr-1"><i class="fa fa-trash-alt text-125"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-secondary-d2 pl-2 pl-lg-4">
                      <img alt="Alex's avatar" src="assets/image/avatar/avatar2.png" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                      Alex
                    </td>

                    <td class="text-secondary text-85 font-bolder">
                      Moderator
                    </td>

                    <td class="text-grey-m1 text-85">
                      Santiago
                    </td>

                    <td class="text-85">
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                    </td>

                    <td class="font-bolder text-80 text-right pr-2 pr-lg-3">

                      <span class="badge bgc-default text-white-tp1">Pending</span>

                    </td>

                    <td class="px-2 px-lg-3 text-right" style="width:40px;">

                      <label>
                        <input type="checkbox" class="ace-switch" />
                      </label>

                    </td>
                  </tr>
                  <tr>
                    <td class="text-secondary-d2 pl-2 pl-lg-4">
                      <img alt="Susan's avatar" src="assets/image/avatar/avatar5.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                      Susan
                    </td>

                    <td class="text-secondary text-85 font-bolder">
                      Customer
                    </td>

                    <td class="text-grey-m1 text-85">
                      Los Angeles
                    </td>

                    <td class="text-85">
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                      <i class="fa fa-star text-orange-m2"></i>
                    </td>

                    <td class="font-bolder text-80 text-right pr-2 pr-lg-3">
                      <span class="badge bgc-green text-white-tp1">Approved</span>


                    </td>

                    <td class="px-2 px-lg-3 text-right" style="width:40px;">
                      <label>
                        <input type="checkbox" class="ace-switch" checked />
                      </label>


                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /.table-responsive-md -->

          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div>

<div class="modal fade modal-fs" id="modalFullscreen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">
                    Modal title
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                {{ Session::get('user_type');}}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>

                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
           @endsection
