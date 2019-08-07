@extends('admin.layouts.app')

@section('content')
  <section class="section">
    <div class="section-body">
      @include('flash::message')
      @include('form-error')
      <h2 class="section-title">Manage Accounts</h2>
      <p class="section-lead">
        Manage all accounts. You can add new accounts, edit, delete, and more.
      </p>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Accounts Table</h4>             
                <a href="{{route('addaccounttype')}}" class="btn btn-icon icon-left btn-danger"><i class="fas fa-plus"></i> Add New Account Type</a>
              </div>         
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>                                 
                    <tr>
                      <th>#</th>
                      <th>Type</th>
                      <th>User</th>
                      <th>Account #</th>
                      <th>Approve Amt</th>
                      <th>Account Balance</th> 
                      <th>Added</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($accounts as $key=>$account)                                
                    <tr>
                      <td>
                        {{$key+1}}
                      </td>
                      <td>{{$account->account_type->type_of_account}}</td>
                      <td>{{$account->user->first_name}} {{$account->user->last_name}}</td>
                      <td>{{$account->account_number}}</td>
                      <td>{{$account->initial_account_balance}}</td>
                      <td>{{$account->initial_account_balance}}</td>            
                      <td>{{$account->created_at->toFormattedDateString()}}</td>
                      <td>
                        <a href="{{url('/admin/accounts/accountdetail/'.$account->id)}}" class="btn btn-icon btn-warning" title="account Detail" data-toggle="tooltip"><i class="fas fa-info-circle"></i></a>
                        <a href="{{url('/admin/accounts/editaccount/'.$account->id)}}" class="btn btn-icon btn-primary" title="Edit account" data-toggle="tooltip"><i class="far fa-edit"></i></a>
                          <a href="{{url('/admin/accounts/delete/'.$account->id)}}" class="btn btn-icon btn-danger" title="Delete account" data-toggle="tooltip" onclick="return confirm('Are you sure you want to delete this account?')"><i class="fas fa-times"></i></a>
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
