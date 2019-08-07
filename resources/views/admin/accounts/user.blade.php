@extends('admin.layouts.app')

@section('content')
  <section class="section">
    <div class="section-body">
      @include('flash::message')
      @include('form-error')
      <h2>
        <figure class="avatar mr-2 avatar-lg">
          <img src="{{asset('assets/img/avatar/avatar-1.png')}}" alt="...">
        </figure>
        {{$user->first_name}} {{$user->last_name}}'s Bank Accounts</h2>
      <div class="row">
        @foreach($user_accounts as $user_account)
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card card-secondary">
              <div class="card-header">
                <h4>
                  <button type="button" class="btn btn-warning btn-icon icon-left">
                    <i class="fas fa-money-check-alt"></i> <strong style="color: black">{{$user_account->account_type->type_of_account}}</strong>
                  </button>
                  {{$user_account->account_number}}</h4>
                <div class="card-header-action">
                  <a href="#" class="btn btn-primary">Edit</a>
                  <a href="#" class="btn btn-danger">Delete</a>
                  <a href="#" class="btn btn-info">Suspend</a>
                </div>
              </div>
              <div class="card-body">
                <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Account #:</strong>
                        <span class="badge badge-warning badge-pill"><strong style="color: black">{{$user_account->account_number}}</strong></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Account Balance:</strong>
                        <span class="badge badge-warning badge-pill"><strong style="color: black">${{$user_account->account_balance}}</strong></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>Date Opened:</strong>
                        <span class="badge badge-warning badge-pill"><strong style="color: black">{{$user_account->created_at->toFormattedDateString()}}</strong></span>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
