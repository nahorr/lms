
@extends('admin.layouts.app')

@section('content')
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href=""><i class="fas fa-user-plus" style="font-size: 24px"></i></a>
        <h1>Add a New User</h1>
      </div>  
    </div>
    @include('flash::message')
    @include('form-error')
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{route('addnewuser')}}">
                @csrf()
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="first_name" class="form-control" required autocomplete="first_name" autofocus>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Last Name</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="last_name" class="form-control" required autocomplete="last_name" autofocus>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="email" class="form-control" required autocomplete="email">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">User Role</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="is_admin" id="is_admin">
                      <option value="0">Regular User</option>
                      <option value="1">Administrator</option>    
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control inputtags" name="password" required>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Confirm Password</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="password_confirmation" class="form-control inputtags" required>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
