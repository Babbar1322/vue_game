@extends('layouts.adminapp')
@section('content')
<div class="breadcrumbbar">
    <div class="align-items-center">
       <h3 class="text-center">Edit Level</h3>
        
        
    </div>          
</div>
<div class="contentbar">
    <div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route('admin.updateLevel',['id'=>$level->id])}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="level">Level</label>
                    <input type="text" class="form-control" name="level" value="{{$level->level}}">
                </div>
                <div class="form-group">
                    <label for="income">Income</label>
                    <input type="text" class="form-control" name="income" value="{{$level->income}}">
                </div>
                <div class="form-group">
                    <label for="direct">Direct</label>
                    <input type="text" class="form-control" name="direct" value="{{$level->direct}}">
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>    
    </div>    
    </div>  
</div>
@endsection