<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Klassy Cafe</title>
</head>
<body>
    
    <div class="container">
        <div style="text-align: right; padding-top:50px;">
            <a href="{{ url('/') }}" class="btn-sm btn-primary" >Back</a>
        </div>
    </div>

<div id="top">

    <section>
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2">
                <table>
                    <tr>
                      <th style="padding:30px">price</th>
                      <th style="padding:30px">Title</th>
                      <th style="padding:30px">Image</th>
                      <th style="padding:30px">Description</th>
                      
                    </tr>
          
                    <tr>
                      <td>{{ $list->price }}</td>
                      <td>{{ $list->title }}</td>
                      <td><img height="200" width="200" src="/foodimage/{{ $list->image }}" ></td>
                      <td>{{ $list->description }}</td>
                    </tr>
                 
                  </table>


      
            </div>
      
          </div>
        </div>
      </section>
</div>



<section>
    <div class="container">
      <div class="row">
          <div class="col-md-8 offset-md-2">
  
            <h4 align='center' style="padding-top: 100px;">Give Your Information to Order this Food</h4>
            <br>

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
  
                @endforeach
  
              </ul>
  
            </div><br />
  
          @endif
           
              <form action="{{ route('details',$list->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
  

                  <div class="mb-3">
                    <input name="title" type="hidden" class="form-control" id="title"  value="{{ $list->title }}">
                 </div>

                 <div class="mb-3">
                    <input name="price" type="hidden" class="form-control" id="price"  value="{{ $list->price }}">
                 </div>

                  <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter Your Name">
                  </div>
  
                  <div class="mb-3">
                      <label for="number" class="form-label">Phone Number</label>
                      <input name="number" type="number" class="form-control" id="number" value="{{ old('number') }}" placeholder="Your Phone Number">
                  </div>

                  <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input name="quantity" type="number" class="form-control" id="number"  value="{{ old('quantity') }}" placeholder="Food Quantity">
                </div>
  
                  <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input name="address" type="text" class="form-control" id="address"  value="{{ old('address') }}" placeholder="Give Your Address">
                  </div>
  
                  
                  <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
          </div>
      </div>
    </div>
  </section>
  


   
</body>
</html>