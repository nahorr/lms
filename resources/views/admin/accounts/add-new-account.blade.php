
@extends('admin.layouts.app')

@section('content')
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href=""><i class="fas fa-money-check-alt" style="font-size: 24px; color: red"></i></a>
        <h1>Adding a new account for  <span style="color: red">{{$user->first_name}} {{$user->last_name}}</span></h1>
      </div>  
    </div>
    @include('flash::message')
    @include('form-error')
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{url('/admin/accounts/postnewaccount/'.$user->id)}}">
                @csrf()
                <input type="hidden" name="user_id">
                <input type="hidden" name="account_number">
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <p style="font-size: 14px; color: red"> Please note that when creating a new account, account number will be auto generated.</p>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Account Type</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control" name="account_type_id" id="account_type_id">
                      <option selected disabled>Please select an account type</option>
                      @foreach($account_types as $key=>$account_type)                    
                        <option value="{{ $account_type->id }}">{{$account_type->type_of_account}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Approved Loan dollar Amount <br> <span style="color: red">This is the starting balance.</span></label>
                  <div class="col-sm-12 col-md-7">
                    <input type="number" name="initial_account_balance" class="form-control" required autocomplete="initial_account_balance" autofocus>
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
