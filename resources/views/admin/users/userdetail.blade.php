
@extends('admin.layouts.app')

@section('content')
  <section class="section">
    <div class="row mt-sm-4">
      <div class="col-12 col-md-12 col-lg-6">
        <div class="section-header">   
          <h1>User Detail: {{$user->first_name}} {{$user->last_name}}</h1>
        </div>
      </div>
    </div>
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-6">
          <div class="card profile-widget">
            <div class="profile-widget-header">                     
              <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">
              <div class="profile-widget-items">
                <div class="profile-widget-item">
                  <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Block User</a>
                </div>
                <div class="profile-widget-item">
                  <a href="#" class="btn btn-icon icon-left btn-warning"><i class="fas fa-edit"></i> Edit User</a>
                </div>
                <div class="profile-widget-item">
                  <a href="#" class="btn btn-icon icon-left btn-success"><i class="fas fa-file-invoice-dollar"></i> Transactions</a>
                </div>
              </div>
            </div>
            <div class="profile-widget-description">
              <div class="table-responsive">
                <table class="table table-striped table-md">
                  <tbody>
                    <tr>
                      <th>First Name:</th>
                      <td>{{$user->first_name}}</td>
                    </tr>
                    <tr>
                      <th>Last Name:</th>
                      <td>{{$user->last_name}}</td>
                    </tr>
                    <tr>
                      <th>Date of Birth:</th>
                      <td>{{$user->dob}}</td>
                    </tr>
                    <tr>
                      <th>Email:</th>
                      <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                      <th>Phone #:</th>
                      <td>{{$user->phone}}</td>
                    </tr>
                    <tr>
                      <th>Address:</th>
                      <td>{{$user->address}}</td>
                    </tr>
                    <tr>
                      <th>City:</th>
                      <td>{{$user->city}}</td>
                    </tr>
                    <tr>
                      <th>State:</th>
                      <td>{{$user->state}}</td>
                    </tr>
                    <tr>
                      <th>Postal Code:</th>
                      <td>{{$user->postal_code}}</td>
                    </tr>
                    <tr>
                      <th>Country:</th>
                      <td>{{$user->country}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>                      
    </div>
  </section>
@endsection
