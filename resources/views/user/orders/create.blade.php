@extends('layouts.user.user')
@section('content')

    <section class="container ">
        <h3 class="h1 fw-semibold">
            Pickup Request
        </h3>
        <div class="row p-2 py-3 rounded" style="background-color:var(--form-color)">
            <form action="" id="addPickupRequestForm">
                @csrf
                <div id="itemsContainer">
                    <div id="item1">
                        <div class="d-flex justify-content-between">
                            <label class="fw-medium" for="">Item Details</label>
                            <button type="button" class="btn btn-sm btn-danger" onclick="deleteItem('#item1')"><i
                                    class="fa-regular fa-trash"></i> Delete
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="items[0][name]" class="form-control my-2"
                                       placeholder="Item Name"
                                       required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="items[0][price]" class="form-control my-2"
                                       placeholder="Item Price"
                                       required>
                            </div>
                        </div>
                        <label class="fw-medium  mt-3 mb-2" for="">Select Item Size</label>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="small-size0" class="size-active p-2 px-3 rounded">S</label>
                                <label for="large-size0" class="size-non-active p-2 px-3 rounded">L</label>
                                <input type="radio" name="items[0][size]" id="small-size0" class="d-none"
                                       placeholder="Item Name" value="small" checked required>
                                <input type="radio" name="items[0][size]" id="large-size0" class="d-none"
                                       placeholder="Item Price" value="large" required>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row my-3">
                    <div class="w-100 d-flex justify-content-center">
                        <div class="col-md-4 col-12 ">

                            <button id="addNewItem" type="button" style="border: 2px dotted var(--primary-color)"
                                    class="size-active w-100 p-2 rounded"><i class="fa fa-plus"></i> Add More Items
                            </button>
                        </div>
                    </div>
                </div>
                <label class="fw-medium  mt-3 mb-2" for="">Deliver To</label>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control my-2" name="city">

                            <option value="">Select City</option>

                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control my-2" name="province">

                            <option value="">Select Province</option>
                            @foreach($provinces as $province)
                                <option value="{{$province->id}}">{{$province->name}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control my-2" placeholder="Address" name="address" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control my-2" placeholder="Phone1" name="phone1" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control my-2" placeholder="Phone2" name="phone2">
                    </div>
                </div>
                <label class="fw-medium  mt-3 mb-2" for="">Notes</label>
                <div class="row">
                    <div class="col-md-12">
                        <textarea type="text" class="form-textarea form-control my-2"
                                  placeholder="Write A Note For Driver Here..." name="driver_notes"></textarea>
                    </div>
                    <div class="col-md-12">
                        <textarea type="text" class="form-textarea form-control my-2"
                                  placeholder="Write A Note For Company Here..." name="company_notes"></textarea>
                    </div>

                </div>

                <div class="row my-3">
                    <div class="w-100 d-flex justify-content-center">
                        <div class="col-md-4 col-12 ">

                            <button type="submit" style="background-image: linear-gradient(#F55C2299,#F55C22)"
                                    class="btn border-0 text-white w-100 p-3 rounded"
                                    for="">Send Pickup Request
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
@section('scripts')
    <script>
        $('.size-active').click(function () {
            $(this).addClass('size-active');
            $(this).removeClass('size-non-active');
            $(this).siblings().removeClass('size-active');
            $(this).siblings().addClass('size-non-active');
        });
        $('.size-non-active').click(function () {
            $(this).removeClass('size-non-active');
            $(this).addClass('size-active');
            $(this).siblings().removeClass('size-active');
            $(this).siblings().addClass('size-non-active');

        })
    </script>
    <script !src="">
        let addPickupRequestForm = $('#addPickupRequestForm');
        addPickupRequestForm.submit(function (e) {
            e.preventDefault();
            let formData = new FormData(this);

            axios.post('{{route('user.orders.store')}}', formData)
                .then(function (response) {
                    console.log(response.data);
                    if (response.data.status == 200) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.data.message,
                            icon: 'success',
                            confirmButtonText: 'Ok'
                        }).then(function (result) {
                            if (result.isConfirmed) {

                            }
                        })
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: response.data.message,
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        })
                    }
                })
                .catch(function (error) {
                    console.log(error.response.data);
                    if (error.response.data.errors) {
                        let errors = error.response.data.errors;
                        let errorsHtml = '';
                        $.each(errors, function (key, value) {
                            errorsHtml += '<li>' + value + '</li>';
                        });
                        Swal.fire({
                            title: 'Error!',
                            html: errorsHtml,
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        })
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: error.response.data.message,
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        })
                    }
                })
        });
    </script>
    <script>
        let itemsContainer = document.getElementById('itemsContainer');
        let addNewItem = document.getElementById('addNewItem');
        let items = 1;
        addNewItem.addEventListener('click',function () {

            items++;
            let newItem=document.createElement('div');
            newItem.id=`item${items}`;
            newItem.innerHTML=`

                        <div class="d-flex justify-content-between my-3">
                        <label class="fw-medium" for="">Item Details</label>
                            <button type="button" class="btn btn-sm btn-danger" onclick="deleteItem('#item${items}')"><i class="fa-regular fa-trash"></i> Delete</button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="items[${items - 1}][name]" class="form-control my-2" placeholder="Item Name"
                                       required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="items[${items - 1}][price]" class="form-control my-2" placeholder="Item Price"
                                       required>
                            </div>
                        </div>
                        <label class="fw-medium  mt-3 mb-2" for="">Select Item Size</label>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="small-size${items-1}" class="size-active p-2 px-3 rounded">S</label>
                                <label for="large-size${items-1}" class="size-non-active p-2 px-3 rounded">L</label>
                                <input type="radio" name="items[${items - 1}][size]" id="small-size${items-1}" class="d-none"
                                       placeholder="Item Name" value="small" checked required>
                                <input type="radio" name="items[${items - 1}][size]" id="large-size${items-1}" class="d-none"
                                       placeholder="Item Price" value="large" required>
                            </div>
                        </div>

            `


            itemsContainer.appendChild(newItem);

            $('.size-active').click(function () {
                $(this).addClass('size-active');
                $(this).removeClass('size-non-active');
                $(this).siblings().removeClass('size-active');
                $(this).siblings().addClass('size-non-active');
            });
            $('.size-non-active').click(function () {
                $(this).removeClass('size-non-active');
                $(this).addClass('size-active');
                $(this).siblings().removeClass('size-active');
                $(this).siblings().addClass('size-non-active');

            })
        })

        function deleteItem(item) {
            let itemsContainer = document.getElementById('itemsContainer');
            if (itemsContainer.childElementCount > 1) {

                $(item).remove();
            }else {
                Swal.fire({
                    title: 'Error!',
                    text: 'You Can\'t Delete All Items',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                })
            }
        }
    </script>
@endsection
