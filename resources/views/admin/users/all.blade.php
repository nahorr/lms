@extends('admin.layouts.app')

@section('content')
  <section class="section">
    <div class="section-body">
      @include('flash::message')
      @include('form-error')
      <h2 class="section-title">Manage Users</h2>
      <p class="section-lead">
        Manage users. You can add new users, edit, delete, and more.
      </p>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Users Table</h4>
              <a href="{{route('adduser')}}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Add New User</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>                                 
                    <tr>
                      <th>#</th>
                      <th>Picture</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>    
                      <th>Added</th>
                      <th>Accounts</th>
                      <th>Verified</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $key=>$user)                                
                    <tr>
                      <td>
                        {{$key+1}}
                      </td>
                      <td>
                        <img alt="image" src="{{asset('assets/img/avatar/avatar-5.png')}}" class="rounded-circle" width="35" data-toggle="tooltip" title="{{$user->name}}">
                        @if($user->is_admin === 1)
                          <i class="fas fa-wrench" title="Administrator" data-toggle="tooltip"></i>
                        @endif
                      </td>
                      <td>{{$user->first_name}}</td>
                      <td>{{$user->last_name}}</td>
                      <td>{{$user->email}}</td>          
                      <td>{{$user->created_at->toFormattedDateString()}}</td>
                      <td>
                        <a href="{{url('/admin/accounts/'.$user->id)}}">
                          <button type="button" class="btn btn-sm btn-danger btn-icon icon-left">
                            <i class="fas fa-money-check-alt"></i> Accounts<span class="badge badge-transparent">{{$user->accounts->count()}}</span>
                          </button>
                        </a>
                      </td>
                      <td>
                        @if($user->email_verified_at != NULL)
                          <div class="badge badge-success">
                            Verified
                          </div>
                        @else
                          <div class="badge badge-danger">
                            Pending
                          </div>
                        @endif
                      </td>
                      <td>
                        <a href="{{url('/admin/users/userdetail/'.$user->id)}}" class="btn btn-icon btn-warning" title="User Detail" data-toggle="tooltip"><i class="fas fa-info-circle"></i></a>
                        <a href="{{url('/admin/users/edituser/'.$user->id)}}" class="btn btn-icon btn-primary" title="Edit User" data-toggle="tooltip"><i class="far fa-edit"></i></a>
                        @if($user->is_admin === 0)
                          <a href="{{url('/admin/users/delete/'.$user->id)}}" class="btn btn-icon btn-danger" title="Delete User" data-toggle="tooltip" onclick="return confirm('Are you sure you want to delete this user?')"><i class="fas fa-times"></i></a>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
