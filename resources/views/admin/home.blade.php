@extends('admin.layouts.app')

@section('content')
<section class="section"> 
  <div class="section-body">
    <div class="row">           
      <div class="col-lg-6">
        <div class="card card-large-icons">
          <div class="card-icon bg-primary text-white">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-body">
            <a href="{{route('all-users')}}" style="color: #FF5733"><h4>Manage Users</h4></a>
            <p>You can view and manage all users here. You can also add, edit and, delete users.</p>
            <a href="{{route('all-users')}}" class="card-cta">Manage Users <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-large-icons">
          <div class="card-icon bg-primary text-white">
            <i class="fas fa-hand-holding-usd"></i>
          </div>
          <div class="card-body">
            <a href="{{route('all-accounts')}}" style="color: #FF5733"><h4>Manage Loan Accounts</h4></a>
            <p>You can manage all loan applications here. You can approve,add, modify, and delete loans. </p>
            <a href="features-setting-detail.html" class="card-cta">Manage Loans <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-large-icons">
          <div class="card-icon bg-primary text-white">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="card-body">
            <a href="" style="color: #FF5733"><h4>View Messages</h4></a>
            <p>You can view messages from users here. You can also compose and send new messages.</p>
            <a href="features-setting-detail.html" class="card-cta">View Messages <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-large-icons">
          <div class="card-icon bg-primary text-white">
            <i class="fas fa-power-off"></i>
          </div>
          <div class="card-body">
            <a href="{{ route('logout') }}" style="color: #FF5733" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><h4>Log Out</h4></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <p>This will log you out of the platform. Click <a href="{{route('home')}}" style="color: #FF5733"><i class="fas fa-fire"></i></a> if you wish to switch to regular user dashboard.</p>
            <a href="{{ route('logout') }}" class="card-cta" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out <i class="fas fa-power-off"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </div>
      </div>      
    </div>
  </div>
</section>
@endsection
