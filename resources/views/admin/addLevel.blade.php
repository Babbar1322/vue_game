@extends('layouts.adminapp')
@section('content')
<div class="breadcrumbbar">
    <div class="align-items-center">
       <h3 class="text-center">Add Level</h3>
        
        
    </div>          
</div>
<div class="contentbar">
    <div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route('admin.storeLevel')}}" method="post">
                @csrf
              
                <div class="form-group">
                    <label for="level">Level</label>
                    <input type="text" class="form-control" name="level">
                </div>
                <div class="form-group">
                    <label for="income">Income</label>
                    <input type="text" class="form-control" name="income">
                </div>
                <div class="form-group">
                    <label for="direct">Direct</label>
                    <input type="text" class="form-control" name="direct">
                </div>
                
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>    
    </div>    
    </div>  
</div>
@endsection