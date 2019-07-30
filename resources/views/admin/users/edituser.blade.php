
@extends('admin.layouts.app')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Edit user: {{$user->name}}</h1>
    </div>
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card profile-widget">
            <div class="profile-widget-header">                     
              <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">
              <div class="profile-widget-items">
                <div class="profile-widget-item">
                  <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Block User</a>
                </div>
                <div class="profile-widget-item">
                  <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Edit User</a>
                </div>
                <div class="profile-widget-item">
                  <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Transactions</a>
                </div>
              </div>
            </div>
            <div class="profile-widget-description">
              <div class="table-responsive">
                <table class="table table-striped table-md">
                  <tbody>
                    <tr>
                      <th>Name</th>
                        <td>{{$user->name}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer text-right">
              <nav class="d-inline-block">
                <ul class="pagination mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>                      
    </div>
  </section>
@endsection
