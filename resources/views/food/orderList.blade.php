@extends('layouts.app');
@section('content')
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Food Name</th>
                        <th scope="col">Food Price</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>


                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($lists as $list )
                        
                        
                      <tr>
                        <th scope="row">{{ $list->id }}</th>
                        <td>{{ $list->title }}</td>
                        <td>{{ $list->price }}</td>
                        <td>{{ $list->name }}</td>
                        <td>{{ $list->number }}</td>
                        <td>{{ $list->quantity }}</td>
                        <td>{{ $list->address }}</td>
                        <td>
                          <a href="{{ url('/order/details/orderDelivered') }}/{{ $list->id }}" class="btn-sm btn-danger">Delivered</a>
                        </td>
                      </tr>
                    @endforeach  
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
    
</body>
@endsection



