
@extends('admin.layouts.app')

@section('content')
  <section class="section">
            <div class="section-header">
              <h1>Edit User</h1>
              <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
              </div>
            </div>
            <div class="section-body">

              <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                  <div class="card profile-widget">
                    <div class="profile-widget-header">                     
                      <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">
                      <div class="profile-widget-items">
                        <div class="profile-widget-item">
                          <div class="profile-widget-item-label">Accounts</div>
                          <div class="profile-widget-item-value">{{$accounts->count()}}</div>
                        </div>
                        <div class="profile-widget-item">
                          <div class="profile-widget-item-label">Loan Balance</div>
                          <div class="profile-widget-item-value">6,8K</div>
                        </div>
                        <div class="profile-widget-item">
                          <div class="profile-widget-item-label">Credit Card Balance</div>
                          <div class="profile-widget-item-value">2,1K</div>
                        </div>
                      </div>
                    </div>
                    <div class="profile-widget-description">
                      <div class="profile-widget-name">{{$user->first_name}} {{$user->last_name}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> {{$user->country}}</div></div>
                      Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                    </div>
                    <div class="card-footer text-center">
                      <div class="font-weight-bold mb-2"><a href="#" class="btn btn-warning">Add Note</a></div>
                      <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon btn-github mr-1">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon btn-instagram">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                  <div class="card">
                    <form method="post" class="needs-validation" novalidate="" action="{{url('/admin/users/postedituser/'.$user->id)}}">
                      <div class="card-header">
                        <h4>Edit User Information</h4>
                      </div>
                      <div class="card-body">
                          <div class="row">                               
                            <div class="form-group col-md-6 col-12">
                              <label>First Name</label>
                              <input type="text" class="form-control" value="{{$user->first_name}}" required="">
                              <div class="invalid-feedback">
                                Please fill in the first name
                              </div>
                            </div>
                            <div class="form-group col-md-6 col-12">
                              <label>Last Name</label>
                              <input type="text" class="form-control" value="{{$user->last_name}}" required="">
                              <div class="invalid-feedback">
                                Please fill in the last name
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6 col-12">
                              <label>Date of Birth:</label>
                              <input type="date" class="form-control" value="{{$user->dob}}" required="">
                              <div class="invalid-feedback">
                                Please fill in the email
                              </div>
                            </div>
                            <div class="form-group col-md-6 col-12">
                              <label>Phone</label>
                              <input type="text" class="form-control" value="{{$user->phone}}">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-12 col-12">
                              <label>Email</label>
                              <input type="email" class="form-control" value="{{$user->email}}" required="">
                              <div class="invalid-feedback">
                                Please fill in the email
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-12 col-12">
                              <label>Address</label>
                              <input type="email" class="form-control" value="{{$user->address}}" required="">
                              <div class="invalid-feedback">
                                Please fill in the email
                              </div>
                            </div>
                          </div>
                          <div class="row">                               
                            <div class="form-group col-md-6 col-12">
                              <label>City</label>
                              <input type="text" class="form-control" value="{{$user->city}}" required="">
                              <div class="invalid-feedback">
                                Please fill in the first name
                              </div>
                            </div>
                            <div class="form-group col-md-6 col-12">
                              <label>Postal Code</label>
                              <input type="text" class="form-control" value="{{$user->postal_code}}" required="">
                              <div class="invalid-feedback">
                                Please fill in the last name
                              </div>
                            </div>
                          </div>
                          <div class="row">                               
                            <div class="form-group col-md-6 col-12">
                              <label>State</label>
                              <input type="text" class="form-control" value="{{$user->state}}" required="">
                              <div class="invalid-feedback">
                                Please fill in the first name
                              </div>
                            </div>
                            <div class="form-group col-md-6 col-12">
                              <label>Country</label>
                              <input type="text" class="form-control" value="{{$user->country}}" required="">
                              <div class="invalid-feedback">
                                Please fill in the last name
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-primary">Save Changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection
