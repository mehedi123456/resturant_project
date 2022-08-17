@extends('layouts.app');
@section('content')

<section>
  <div class="container">
    <div style="background-color: #5D6D7E">
    <div class="row">
        <div class="col-md-8 offset-md-2">
          <div style="background-color: #5D6D7E">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error )
              <li>{{ $error }}</li>

              @endforeach

            </ul>

          </div><br />

        @endif

            <form action="{{ route('addemployee') }}" method="POST" enctype="multipart/form-data" >
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label"><h5>Employee Name</h5></label>
                    <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter Employee Name">
                </div>

                <div class="mb-3">
                    <label for="number" class="form-label"><h5>Contract Number</h5></label>
                    <input name="number" type="number" class="form-control" id="number" value="{{ old('number') }}" placeholder="Employee Contract Number">
                </div>

                <div class="mb-3">
                  <label for="title" class="form-label"><h5>Job Title</h5></label>
                  <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}" placeholder="Employee Job Title">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label"><h5>Employee Address</h5></label>
                    <input name="address" type="text" class="form-control" id="address" value="{{ old('address') }}" placeholder="Employee Address">
                  </div>

                
                <button type="submit" class="btn btn-primary" value="save">Submit</button>
              </form>
            </div>
        </div>
    </div>
  </div>
</section>



@endsection