@extends('layouts.app');
@section('content')

<section>
  
    <div class="container">
      <div style="background-color: #85929E">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h4 align='center'>Employee Details</h4>
          <table>
            <tr>
              <th style="padding:30px">ID</th>
              <th style="padding:30px">Employee Name</th>
              <th style="padding:30px">Employee Contract Number</th>
              <th style="padding:30px">Job Title</th>
              <th style="padding:30px">Employee Address</th>
              <th style="padding:30px">Action</th>
            </tr>
  
            @foreach ($lists as $list)
              
            
            <tr align="center">
              <td style="padding: 20px;">{{ $list->id }}</td>
              <td style="padding: 20px;">{{ $list->name }}</td>
              <td style="padding: 20px;">{{ $list->number }}</td>
              <td style="padding: 20px;">{{ $list->title }}</td>
              <td style="padding: 20px;">{{ $list->address }}</td>
              <td>
                <a href="{{ url('/deleteEmployee') }}/{{ $list->id }}" class="btn-sm btn-danger">Remove</a>
              </td>
            </tr>
            @endforeach
          </table>
  
        </div>
  
      </div>
    </div>
  </div> 
  </section>



@endsection