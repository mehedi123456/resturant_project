@extends('layouts.app');
@section('content')

<section>
  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error )
              <li>{{ $error }}</li>

              @endforeach

            </ul>

          </div><br />

        @endif

            <form action="{{ route('addfood') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}" placeholder="The name of the product">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input name="price" type="text" class="form-control" id="price" value="{{ old('price') }}" placeholder="Price of the Product">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Food Image</label>
                    <input name="image" type="file" class="form-control" id="price" value="{{ old('image') }}">
                </div>

                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <input name="description" type="text" class="form-control" id="description" value="{{ old('description') }}" placeholder="Enter Food Discription">
                </div>

                
                <button type="submit" class="btn btn-primary" value="save">Upload</button>
              </form>
        </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <table>
          <tr>
            <th style="padding:30px">price</th>
            <th style="padding:30px">Title</th>
            <th style="padding:30px">Food Image</th>
            <th style="padding:30px">Description</th>
            <th style="padding:30px">Action</th>
          </tr>

          @foreach ($lists as $list)
            
          
          <tr align="center">
            <td>{{ $list->price }}</td>
            <td>{{ $list->title }}</td>
            <td><img height="200" width="200" src="/foodimage/{{ $list->image }}" ></td>
            <td>{{ $list->description }}</td>
            <td>
              <a href="{{ url('/foodmenu/deletefood') }}/{{ $list->id }}" class="btn-sm btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </table>

      </div>

    </div>
  </div>
</section>


@endsection