@extends('user.profile.profile')
@section('profile-content')
    <form action="">
        <div class="row">
            <div class="mb-2 col-12">
                <div class="form-floating my-2">
                    <input type="text" value="Ahmed" class="form-control" placeholder="Name">
                    <label for="" class="form-label">Name</label>
                </div>
                <div class="form-floating my-2">
                    <input type="text" value="ABC Company" class="form-control" placeholder="Company">
                    <label for="" class="form-label">Company</label>
                </div>
                <div class="form-floating my-2">
                    <input type="text" value="0123456789" class="form-control" placeholder="Phone1">
                    <label for="" class="form-label">Phone1</label>
                </div>
                <div class="form-floating my-2">
                    <input type="text" value="0123456789" class="form-control" placeholder="Phone2">
                    <label for="" class="form-label">Phone2</label>
                </div>
                <div class="form-floating my-2">
                    <select class="form-select" >
                        <option value="">Sydney</option>
                    </select>
                    <label for="" class="form-label">City</label>
                </div>

            </div>
        </div>

        <div class="row my-3">
            <div class="w-100 d-flex justify-content-center">
                <div class="col-md-4 col-12 ">

                    <button type="submit" style="background-image: linear-gradient(#F55C2299,#F55C22)"
                            class="btn border-0 text-white w-100 p-3 rounded"
                            for="">Save
                    </button>
                </div>
            </div>
        </div>

    </form>
@endsection
