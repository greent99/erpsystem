@extends('admin.layouts.master')

@section('page-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">{{\Illuminate\Support\Facades\Lang::get('en.pt_add')}} {{\Illuminate\Support\Facades\Lang::get('en.pt_language')}}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{\Illuminate\Support\Facades\Lang::get('en.tb_content')}}</h4>
                    @if(isset($status) && $status==false)
                    <tag>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="mdi mdi-block-helper mr-2"></i>
                            {{$message}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </tag>
                    @endif
                    <form method="post" href="{{route('add_language')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                                <div class="col-sm-4">
                                    <div  class="form-group">
                                        <label for="name">{{\Illuminate\Support\Facades\Lang::get('en.pt_language')}}</label>
                                        <input id="name" name="name" type="text" @if(isset($data)) value="{{$data['name']}}" @endif
                                        @if (isset($error) && $error->has('name'))class="form-control parsley-error"@else class="form-control"@endif>
                                        @if (isset($error) && $error->has('name'))<p class="parsley-required text-danger">{{ $error->first('name') }}</p>   @endif
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="url">{{\Illuminate\Support\Facades\Lang::get('en.pt_url')}}</label>
                                        <input id="url" name="url" type="text" @if(isset($data)) value="{{$data['url']}}" @endif
                                        @if(isset($error) && $error->has('url')) class="form-control parsley-error" @else class="form-control" @endif>
                                        @if(isset($error) && $error->has('url'))<p class="parsley-required text-danger">{{$error->first('url')}}</p>@endif
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="icon">{{\Illuminate\Support\Facades\Lang::get('en.pt_icon')}}</label>
                                        <input id="icon" name="icon" type="text" class="form-control"
                                        @if(isset($data)) value="{{$data['icon']}}" @endif>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="sort">{{\Illuminate\Support\Facades\Lang::get('en.pt_sort')}}</label>
                                        <input id="sort" name="sort" type="text" class="form-control"
                                        @if(isset($data)) value="{{$data['sort']}}" @endif>
                                    </div>
                                </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="image">{{\Illuminate\Support\Facades\Lang::get('en.pt_image')}}</label>
                                    <input id="image" name="image" type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success waves-effect waves-light">
                            <i  class="bx bx-check-double font-size-16 align-middle mr-2"></i>{{\Illuminate\Support\Facades\Lang::get('en.pt_save')}}
                        </button>
                        <button type="button" class="btn btn-danger waves-effect waves-light"
                        onclick="window.location.href='{{route('language')}}'">
                            <i  class="bx bx-block font-size-16 align-middle mr-2"></i>{{\Illuminate\Support\Facades\Lang::get('en.pt_back')}}
                        </button>
                        <br>
                    </form>
                </div>

            </div>
        </div><!-- end col -->

    </div>
    <!-- end row -->
@endsection
