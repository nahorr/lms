@extends('admin.layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1><i class="fas fa-fire"></i> Dashboard</h1>
  </div>

  <div class="section-body">
    <div class="row">           
      <div class="col-lg-6">
        <div class="card card-large-icons">
          <div class="card-icon bg-primary text-white">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-body">
            <h4>Users</h4>
            <p>You can view and manage all users here. You can also add, edit and, delete users.</p>
            <a href="features-setting-detail.html" class="card-cta">Manage Users <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-large-icons">
          <div class="card-icon bg-primary text-white">
            <i class="fas fa-hand-holding-usd"></i>
          </div>
          <div class="card-body">
            <h4>Loans</h4>
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
            <h4>Messages</h4>
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
            <h4>Logout</h4>
            <p>PHP version settings, time zones and other environments.</p>
            <a href="features-setting-detail.html" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-large-icons">
          <div class="card-icon bg-primary text-white">
            <i class="fas fa-lock"></i>
          </div>
          <div class="card-body">
            <h4>Security</h4>
            <p>Security settings such as firewalls, server accounts and others.</p>
            <a href="features-setting-detail.html" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-large-icons">
          <div class="card-icon bg-primary text-white">
            <i class="fas fa-stopwatch"></i>
          </div>
          <div class="card-body">
            <h4>Automation</h4>
            <p>Settings about automation such as cron job, backup automation and so on.</p>
            <a href="features-setting-detail.html" class="card-cta text-primary">Change Setting <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>           
    </div>
  </div>
</section>
@endsection
