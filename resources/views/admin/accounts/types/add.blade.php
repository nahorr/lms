
@extends('admin.layouts.app')

@section('content')
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href=""><i class="fas fa-money-check-alt" style="font-size: 24px; color: red"></i></a> 
        <h1><?php  echo strtoupper('Add an Account Type'); ?></h1>
      </div>  
    </div>
    @include('flash::message')
    @include('form-error')
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              
              <a href="{{route('addaccounttype')}}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Add New Account</a>
              <a href="{{route('addaccounttype')}}" class="btn btn-icon icon-left btn-danger"><i class="fas fa-plus"></i> Add Account Type</a>
            </div>            
            <div class="card-body">
              <form method="POST" action="{{route('postaccounttype')}}">
                @csrf()
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type of Account - <span style="color: red">credit cards, Loans, etc. Just give it any name you want.</span></label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="type_of_account" class="form-control" required autocomplete="type_of_account" autofocus>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description - <span style="color: red">You can leave this empty is you like.</span></label>
                  <div class="col-sm-12 col-md-7">
                    <textarea name="description" class="form-control" required autocomplete="description" autofocus></textarea>
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
            <div class="card-body">
              <button type="button" class="btn btn-danger btn-icon icon-left">
                <i class="fas fa-money-check-alt"></i> Accounts Type Table <span class="badge badge-transparent">{{$account_types->count()}}</span>
              </button>
              <hr>
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>                                 
                    <tr>
                      <th>#</th>
                      <th>Type</th>
                      <th>Description</th>   
                      <th>Added</th>
                      <th>List Accounts</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($account_types as $key=>$account_type)                                
                    <tr>
                      <td>
                        {{$key+1}}
                      </td>
                      <td>{{$account_type->type_of_account}}</td>
                      <td>{{$account_type->description}}</td>          
                      <td>{{$account_type->created_at->toFormattedDateString()}}</td>
                      <td>
                        <a href="#" class="btn btn-sm btn-info">List Accounts</a>
                      </td>
                      <td>
                        <a href="{{url('/admin/accounts/types/edit/'.$account_type->id)}}" class="btn btn-icon btn-primary" title="Edit account type" data-toggle="tooltip"><i class="far fa-edit"></i></a>
                          <a href="{{url('admin/accounts/types/delete/'.$account_type->id)}}" class="btn btn-icon btn-danger" title="Delete {{$account_type->type_of_account}}" data-toggle="tooltip" onclick="return confirm('Are you sure you want to delete this account type?')"><i class="fas fa-times"></i></a>
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
