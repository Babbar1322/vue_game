@extends('layouts.adminapp')
@section('content')
<div class="breadcrumbbar">
    <div class="align-items-center">

       <h3 class="text-center">Cut Balance</h3>
        
        
    </div>          
</div>
<div class="contentbar">
    <div class="card">
        @if (session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif
    <div class="card-body">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route('admin.cutBalance',['id'=>$user->id])}}" method="post">
                @csrf
                {{-- <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div> --}}
                <div class="form-group">
                    <label for="bal">Balance</label>
                    <input type="text" class="form-control" name="bal" >
                </div>
                
                <button class="btn btn-primary" type="submit">Cut</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>    
    </div>    
    </div>  
</div>
@endsection