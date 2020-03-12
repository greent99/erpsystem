@extends('admin.layouts.master')

@section('css')
    <link href="{{asset('asset_admin/css/custom/product-custom.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset_admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />

    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset_admin/css/custom/input-number-custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset_admin/css/custom/search-modal-custom.css')}}">
@endsection

@section('page-content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Products</h4>


                </div>
            </div>
        </div>
        <!-- end page title -->
        {{--list product--}}
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h4 class="mb-3 text-truncate"><a href="#" class="text-dark">Table name</a></h4>

                        </div>
                        <div class="product-img position-relative">
                            <img src="https://loremflickr.com/800/800" alt="" class="img-fluid mx-auto d-block">
                            <div class="card-img-overlay overlay-custom">
                                {{--hidden overlay--}}
                                <i style="position: absolute;top: 10px;right: 10px; font-size: 2em" class="dripicons-cross"></i>

                                <p>Order table</p>
                                <ul>
                                    <li>Product: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Quantity: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Table: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Price: <i class="mdi mdi-cash-usd-outline"></i></li>
                                </ul>
                            </div>
                            {{--end card-overlay--}}
                        </div>
                        <div class="text-center">
                            <h5 style="margin-top: 8px"><a  href="javascript:void(0)" class="text-muted">Detail</a></h5>
                            <h5 class="my-0"><b>$450</b></h5>
                        </div>
                        <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target=".bs-example-modal-lg">Order</a>
                        <a style="position: absolute; right: 20px" href="#"  class="btn btn-primary">Pay</a>

                    </div>
                    {{-- end card-body--}}


                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h4 class="mb-3 text-truncate"><a href="#" class="text-dark">Table name</a></h4>

                        </div>
                        <div class="product-img position-relative">
                            <img src="https://loremflickr.com/800/800" alt="" class="img-fluid mx-auto d-block">
                            <div class="card-img-overlay overlay-custom">
                                {{--hidden overlay--}}
                                <i style="position: absolute;top: 10px;right: 10px; font-size: 2em" class="dripicons-cross"></i>

                                <p>Order table</p>
                                <ul>
                                    <li>Product: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Quantity: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Table: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Price: <i class="mdi mdi-cash-usd-outline"></i></li>
                                </ul>
                            </div>
                            {{--end card-overlay--}}
                        </div>
                        <div class="text-center">
                            <h5 style="margin-top: 8px"><a  href="javascript:void(0)" class="text-muted">Detail</a></h5>
                            <h5 class="my-0"><b>$450</b></h5>
                        </div>
                        <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target=".bs-example-modal-lg">Order</a>
                        <a style="position: absolute; right: 20px" href="#"  class="btn btn-primary">Pay</a>

                    </div>
                    {{-- end card-body--}}


                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h4 class="mb-3 text-truncate"><a href="#" class="text-dark">Table name</a></h4>

                        </div>
                        <div class="product-img position-relative">
                            <img src="https://loremflickr.com/800/800" alt="" class="img-fluid mx-auto d-block">
                            <div class="card-img-overlay overlay-custom">
                                {{--hidden overlay--}}
                                <i style="position: absolute;top: 10px;right: 10px; font-size: 2em" class="dripicons-cross"></i>

                                <p>Order table</p>
                                <ul>
                                    <li>Product: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Quantity: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Table: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Price: <i class="mdi mdi-cash-usd-outline"></i></li>
                                </ul>
                            </div>
                            {{--end card-overlay--}}
                        </div>
                        <div class="text-center">
                            <h5 style="margin-top: 8px"><a  href="javascript:void(0)" class="text-muted">Detail</a></h5>
                            <h5 class="my-0"><b>$450</b></h5>
                        </div>
                        <a href="#" class="btn btn-outline-success">Order</a>
                        <a style="position: absolute; right: 20px" href="#"  class="btn btn-primary">Pay</a>

                    </div>
                    {{-- end card-body--}}


                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h4 class="mb-3 text-truncate"><a href="#" class="text-dark">Table name</a></h4>

                        </div>
                        <div class="product-img position-relative">
                            <img src="https://loremflickr.com/800/800" alt="" class="img-fluid mx-auto d-block">
                            <div class="card-img-overlay overlay-custom">
                                {{--hidden overlay--}}
                                <i style="position: absolute;top: 10px;right: 10px; font-size: 2em" class="dripicons-cross"></i>

                                <p>Order table</p>
                                <ul>
                                    <li>Product: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Quantity: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Table: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Price: <i class="mdi mdi-cash-usd-outline"></i></li>
                                </ul>
                            </div>
                            {{--end card-overlay--}}
                        </div>
                        <div class="text-center">
                            <h5 style="margin-top: 8px"><a href="javascript:void(0)" class="text-muted">Detail</a></h5>
                            <h5 class="my-0"><b>$450</b></h5>
                        </div>
                        <a href="#" class="btn btn-outline-success">Order</a>
                        <a style="position: absolute; right: 20px" href="#"  class="btn btn-primary">Pay</a>

                    </div>
                    {{-- end card-body--}}


                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h4 class="mb-3 text-truncate"><a href="#" class="text-dark">Table name</a></h4>

                        </div>
                        <div class="product-img position-relative">
                            <img src="https://loremflickr.com/800/800" alt="" class="img-fluid mx-auto d-block">
                            <div class="card-img-overlay overlay-custom">
                                {{--hidden overlay--}}
                                <i style="position: absolute;top: 10px;right: 10px; font-size: 2em" class="dripicons-cross"></i>

                                <p>Order table</p>
                                <ul>
                                    <li>Product: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Quantity: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Table: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Price: <i class="mdi mdi-cash-usd-outline"></i></li>
                                </ul>
                            </div>
                            {{--end card-overlay--}}
                        </div>
                        <div class="text-center">
                            <h5 style="margin-top: 8px"><a  href="javascript:void(0)" class="text-muted">Detail</a></h5>
                            <h5 class="my-0"><b>$450</b></h5>
                        </div>
                        <a href="#" class="btn btn-outline-success">Order</a>
                        <a style="position: absolute; right: 20px" href="#"  class="btn btn-primary">Pay</a>

                    </div>
                    {{-- end card-body--}}


                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h4 class="mb-3 text-truncate"><a href="#" class="text-dark">Table name</a></h4>

                        </div>
                        <div class="product-img position-relative">
                            <img src="https://loremflickr.com/800/800" alt="" class="img-fluid mx-auto d-block">
                            <div class="card-img-overlay overlay-custom">
                                {{--hidden overlay--}}
                                <i style="position: absolute;top: 10px;right: 10px; font-size: 2em" class="dripicons-cross"></i>

                                <p>Order table</p>
                                <ul>
                                    <li>Product: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Quantity: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Table: <i class="mdi mdi-cash-usd-outline"></i></li>
                                    <li>Price: <i class="mdi mdi-cash-usd-outline"></i></li>
                                </ul>
                            </div>
                            {{--end card-overlay--}}
                        </div>
                        <div class="text-center">
                            <h5 style="margin-top: 8px"><a  href="javascript:void(0)" class="text-muted">Detail</a></h5>
                            <h5 class="my-0"><b>$450</b></h5>
                        </div>
                        <a href="#" class="btn btn-outline-success">Order</a>
                        <a style="position: absolute; right: 20px" href="#"  class="btn btn-primary">Pay</a>

                    </div>
                    {{-- end card-body--}}


                </div>
            </div>
        </div>
        {{--end list product--}}

        {{--modal--}}
        <div class="row">
            <div class="col-sm-6 col-md-4 col-xl-3">

                <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Order</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!--modal-body -->
                            <div class="modal-body">
                                <!--search-->
                                <div  class="row">
                                    <div class="col-sm-4">
                                        <div id="search-box" class="search-box mr-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                                <input id="modal-search" style="border-radius: 0" type="text" class="form-control" placeholder="Search...">
                                            </div>
                                            <!--suggest search-->
                                            <ul id="suggest-search-result" class="list-group ul-custom">
                                            </ul><!--end suggest search-->
                                        </div>

                                    </div>

                                </div><!--end row-->
                                <!--search-->
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0 table-nowrap">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th class="product-picture-custom">Product Image</th>
                                                    <th class="product-item-custom">Product Desc</th>
                                                    <th class="quantity-item-custom">Quantity</th>
                                                    <th class="delete-item-custom">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody id="modal-table-content">
                                                <tr>
                                                    <td class="product-picture-custom">
                                                        <img src="asset_admin/images/product/img-1.png" alt="product-img"
                                                             title="product-img" class="avatar-md" />
                                                    </td>
                                                    <td class="product-item-custom">
                                                        <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Half sleeve T-shirt</a></h5>
                                                        <p class="mb-0">Price : <span class="font-weight-medium">250.000</span></p>
                                                    </td>
                                                    <td class="quantity-item-custom">
                                                        <div style="text-align: center">
                                                            <a id="decrease-input"><i class="mdi mdi-minus btn btn-sm btn-rounded btn-light font-size-4"></i></a>
                                                            <input type="number" value="2" min="0" name="demo_vertical">
                                                            <a id="increase-input"><i class="mdi mdi-plus btn btn-sm btn-rounded btn-light font-size-4"></i></a>
                                                        </div>
                                                    </td>

                                                    <td class="delete-item-custom">
                                                        <a href="javascript:void(0);" class="action-icon text-danger"> <i class="mdi mdi-trash-can font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                            </div> <!-- end col -->
                                            <div class="col-sm-6">
                                                <div class="text-sm-right mt-2 mt-sm-0">
                                                    <a href="#" class="btn btn-success">
                                                        <i class="mdi mdi-cart-arrow-right mr-1"></i> Checkout </a>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
                                    </div><!-- end col-->
                                </div><!-- end row -->
                            </div><!-- end modal-body-->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>
        {{--end modal--}}
    </div> <!-- container-fluid -->
@endsection

@section('custom-js')
    <!-- Ion Range Slider-->
    <script src="{{asset('asset_admin/libs/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <!-- init js -->
    <script src="{{asset('asset_admin/js/pages/product-filter-range.init.js')}}"></script>

    <!-- custom js -->
    <script src="{{asset('asset_admin/js/custom/mobile-detection.js')}}"></script>
    <script src="{{asset('asset_admin/js/custom/overlay-custom.js')}}"></script>
    <script src="{{asset('asset_admin/js/custom/input-number-custom.js')}}"></script>
    <script src="{{asset('asset_admin/js/custom/handle-search-modal.js')}}"></script>
    <script>
        $(document).ready(function () {
            // suggest search handle

            {{--$("#modal-search").on("keyup", function() {--}}
            {{--    let query = $(this).val().toLowerCase();--}}
            {{--    if (query != '' && query.length > 2){--}}
            {{--        let route = '{{route('product.store')}}';--}}
            {{--        $.when(sendQuery(route,query))--}}
            {{--            .then(data => {--}}
            {{--                //render suggest search list--}}
            {{--                let html = ``;--}}
            {{--                data.forEach(function (item) {--}}
            {{--                    html += `--}}
            {{--                        <li class="list-group-item list-item-custom">--}}
            {{--                            <a class="btn btn-light" onclick="testAlert('${item.image}', '${item.name}', '${item.price}')">--}}
            {{--                                <div>--}}
            {{--                                    <img src="${item.image}"/>--}}
            {{--                                </div>--}}
            {{--                                <div class="inner-content">--}}
            {{--                                    <h6>${item.name}</h6>--}}
            {{--                                    <p>Price: ${item.price} VND</p>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </li>`;--}}
            {{--                });--}}
            {{--                $('#suggest-search-result').fadeIn();--}}
            {{--                $('#suggest-search-result').html(html);--}}

            {{--            })--}}
            {{--            .catch(err => {--}}
            {{--                console.log( "Suggest search ajax ERROR:");--}}
            {{--                console.log(err);--}}
            {{--            });--}}
            {{--    }else{--}}
            {{--        $('#suggest-search-result').html('');--}}
            {{--    }--}}
            {{--});--}}
            //end suggest search handle
            let route = '{{route('product.store')}}';
            $('#modal-search').autocomplete({
                source: sendQuery(route,(this).val().toLowerCase()),
                
            });
        });
        function testAlert(img, name, price){
            let tableData = `
                    <tr>
                        <td class="product-picture-custom">
                            <img src="${img}" alt="product-img"
                                 title="product-img" class="avatar-md" />
                        </td>
                        <td class="product-item-custom">
                            <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">${name}</a></h5>
                            <p class="mb-0">Price : <span class="font-weight-medium">${price}</span></p>
                        </td>
                        <td class="quantity-item-custom">
                            <div style="text-align: center">
                                <a id="decrease-input"><i class="mdi mdi-minus btn btn-sm btn-rounded btn-light font-size-4"></i></a>
                                <input type="number" value="1" min="0" name="demo_vertical">
                                <a id="increase-input"><i class="mdi mdi-plus btn btn-sm btn-rounded btn-light font-size-4"></i></a>
                            </div>
                        </td>

                        <td class="delete-item-custom">
                            <a href="javascript:void(0);" class="action-icon text-danger"> <i class="mdi mdi-trash-can font-size-18"></i></a>
                        </td>
                    </tr>
                `;
            $('#modal-table-content').fadeIn();
            $('#modal-table-content').append(tableData);
            $('#suggest-search-result').fadeOut();

        };
    </script>
@endsection
