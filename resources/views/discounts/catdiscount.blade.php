@extends('layouts.admin')

@section('title', 'Category Based Discount')
@section('content-header', 'Category Based Discount')
@section('content-actions')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Discount
    </button>
    <button onclick="window.print()"><span class="fas fa-print"></span></button>
@endsection

@section('content')

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category Based Discount</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('catdiscounts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Vendor</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="vendor_id"
                                            required>
                                            <option>Choose Vendor</option>
                                            @foreach ($vendors as $ven)
                                                <option value="{{ $ven->id }}">{{ $ven->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Dhaka Choice Ltd. Discount</label>
                                        <input type="text" name="dcl_discount" class="form-control"
                                            placeholder="DCL discount percentage" required>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Category</label>
                                        <select class="form-control" name="category_id" required>
                                            <option>Choose Category</option>
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Vendor Discount</label>
                                        <input type="text" name="vendor_discount" class="form-control"
                                            placeholder="Vendor discount percentage" required>
                                    </div>

                                </div>
                            </div>

                            <input type="submit" name="assign" value="Save Discount" class="btn btn-primary">
                            <button type="button" class="btn btn-danger float-right" data-dismiss="modal"
                                aria-label="Close">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>BDT</h4>
                        <p>Total Commission</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-comment-dollar"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>2%</h4>
                        <p>Average Commission</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-percent"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4>BDT 200000</h4>
                        <p>Commission Target</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-donate"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4>sad</h4>
                        <p>Total Vendor</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>BDT</h4>
                        <p>Collection Processing</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th>Vendor Name</th>
                    <th>Category Name</th>
                    <th>DCL Discount (%)</th>
                    <th>Vendor Discount (%)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catDiscounts as $discount)
                    <tr>
                        <td>
                            @foreach($vendors as $ven)
                                @if($discount->vendor_id == $ven->id)
                                    {{ $ven->name }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($categories as $cat)
                                @if($discount->category_id == $cat->id)
                                    {{ $cat->category_name }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $discount->dcl_discount }}</td>
                        <td>{{ $discount->vendor_discount }}</td>
                        <td><a href="{{ route('catdiscounts.edit', $discount) }}" class="btn btn-primary"><i
                                    class="fas fa-edit"></i></a>
                            <button class="btn btn-danger btn-delete"
                                data-url="{{ route('catdiscounts.destroy', $discount) }}"><i
                                    class="fas fa-trash"></i></button>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.btn-delete', function() {
                $this = $(this);
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "Do you really want to delete this Category based discount?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        $.post($this.data('url'), {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        }, function(res) {
                            $this.closest('tr').fadeOut(500, function() {
                                $(this).remove();
                            })
                        })
                    }
                })
            })
        })
    </script>
@endsection
