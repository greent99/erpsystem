@extends('admin.layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css"  href="{{asset('asset_admin/css/custom/product-order-custom.css')}}" />
@endsection


@section('page-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">{{\Illuminate\Support\Facades\Lang::get('en.pt_language')}}</h4>


            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- start table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box mr-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="{{\Illuminate\Support\Facades\Lang::get('en.pt_search')}}...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-right">
                                <a href="{{route('add_language')}}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-plus mr-1"></i>{{\Illuminate\Support\Facades\Lang::get('en.pt_add')}}</a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive-sm">
                        <table class="table table-centered table-nowrap">
                            <thead class="thead-light">
                            <tr>
                                <th class="checkbox-custom">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th class="order-id-custom">{{\Illuminate\Support\Facades\Lang::get('en.tb_id')}}</th>
                                <th class="name-custom">{{\Illuminate\Support\Facades\Lang::get('en.tb_name')}}</th>
                                <th class="icon-custom text-center">{{\Illuminate\Support\Facades\Lang::get('en.pt_icon')}}</th>
                                <th class="image-custom ">{{\Illuminate\Support\Facades\Lang::get('en.pt_image')}}</th>
                                <th class="url-custom text-center">{{\Illuminate\Support\Facades\Lang::get('en.pt_url')}}</th>
                                <th>
                                    <p hidden>magic frontend</p>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $language)
                            <tr>
                                <td class="checkbox-custom">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="order-id-custom"><a  class="text-body font-weight-bold">{{$language->id}}</a> </td>
                                <td class="name-custom">{{$language->name}}</td>
                                <td class="icon-custom text-center">
                                    @if($language->icon)
                                        <span  class="{!! $language->icon !!}"></span>
                                        @else
                                        <p>-</p>
                                        @endif
                                </td>
                                <td>
                                    <div class="team">
                                        <a class="image-custom team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Daniel Canales">
                                            <img src="{{config('app.path_public_storage')}}{{$language->image}}" class="rounded-circle avatar-xs m-1" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="url-custom text-center">{{$language->url}}</td>
                                <td class="action-custom">
                                    <a href="{{route('update_language',['id'=>$language->id])}}" class="text-primary btn btn-sm btn-rounded btn-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{\Illuminate\Support\Facades\Lang::get('en.pt_edit')}}"><i class="mdi mdi-pencil font-size-12"></i></a>
                                    <a href="javascript:void(0);" class="text-danger btn btn-sm btn-rounded btn-outline-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{\Illuminate\Support\Facades\Lang::get('en.pt_delete')}}"><i class="mdi mdi-close font-size-12"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                  {{$data->links()}}
                </div>
            </div>
        </div>
    </div><!-- end row -->
    <!-- end table -->

    <!-- Modal -->
    <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                    <p class="mb-4">Name: <span class="text-primary">Neal Matthews</span></p>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap">
                            <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="assets/images/product/img-7.png" alt="" class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                    </div>
                                </td>
                                <td>$ 255</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="assets/images/product/img-4.png" alt="" class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Hoodie (Blue)</h5>
                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                    </div>
                                </td>
                                <td>$ 145</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Shipping:</h6>
                                </td>
                                <td>
                                    Free
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{--    Add Quick Modal--}}
    <div class="modal fade addQuickModal" tabindex="-1" role="dialog" aria-labelledby="addQuickModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <section class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Form</h3>
                            </div>
                            <div class="panel-body">
                                <form action="designer-finish.html" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        </div>
                                    </div> <!-- form-group // -->
                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">Unit</label>
                                        <div class="col-sm-9">
                                            <select class="form-control">
                                                <option selected disabled>Select one</option>
                                                <option value="">Lon</option>
                                                <option value="texnolog2">Thùng</option>
                                                <option value="texnolog3">Lốc</option>
                                            </select>
                                        </div>
                                    </div> <!-- form-group // -->
                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control">
                                                <option selected disabled>Select one</option>
                                                <option value="">Cà phê</option>
                                                <option value="texnolog2">Bia</option>
                                                <option value="texnolog3">Nước ngọt</option>
                                            </select>
                                        </div>
                                    </div> <!-- form-group // -->
                                    <div class="form-group">
                                        <label for="about" class="col-sm-3 control-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div> <!-- form-group // -->
                                    <hr>

                                </form>

                            </div><!-- panel-body // -->
                        </section><!-- panel// -->


                    </div> <!-- container// -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

