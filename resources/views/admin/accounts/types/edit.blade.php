
@extends('admin.layouts.app')

@section('content')
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href=""><i class="fas fa-money-check-alt" style="font-size: 24px; color: red"></i></a> 
        <h1><?php  echo strtoupper('Editing Account Type:'); ?> <span style="color: red">{{ strtoupper($type->type_of_account)}}</span></h1>
        <span class="float-right">
          <a href="{{route('addaccounttype')}}" class="btn btn-sm btn-icon icon-left btn-primary">
            <i class="fas fa-arrow-alt-circle-left"></i> Back
          </a>
        </span>
      </div>  
    </div>
    @include('flash::message')
    @include('form-error')
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">            
            <div class="card-body">
              <form method="POST" action="{{url('admin/accounts/types/postedit/'.$type->id)}}">
                @csrf()
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type of Account - <span style="color: red">credit cards, Loans, etc. Just give it any name you want.</span></label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="type_of_account" class="form-control" value="{{$type->type_of_account}}" autofocus>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description - <span style="color: red">You can leave this empty is you like.</span></label>
                  <div class="col-sm-12 col-md-7">
                    <textarea name="description" class="form-control"  autofocus>{{$type->description}}</textarea>
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
