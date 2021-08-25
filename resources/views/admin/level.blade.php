@extends('layouts.adminapp')
@section('content')
<div class="breadcrumbbar">
    <div class="align-items-center">
       <h3 >Levels</h3>
    </div> 
    <div class="text-right">
    <a href="{{route('admin.addLevel')}}" class="btn btn-info">+ Add Level</a>    
    </div>         
</div>
<div class="contentbar"> 
    <div class="card">
        <div class="card-body">
    <div class="table-responsive">
        <table id="default-datatable" class=" display table table-striped table-bordered" id="edit-btn">
    <tr>
        <th>Level</th>
        <th>Income</th>
        <th>Direct</th>
       <th>Action</th>
    </tr>   
    @if (!empty($levels))
        
    @foreach ($levels as $level)
    <tr>
    <td>{{$level->level}}</td>  
    <td>{{$level->income}}</td>   
    <td>{{$level->direct}}</td>   
    <td style="white-space: nowrap; width: 15%;">
        <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
        <div class="btn-group btn-group-sm" style="float: none;">
        <a  href="{{route('admin.editLevel',['id'=>$level->id])}}"   class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></a>
         <a href="{{route('admin.deleteLevel',['id'=>$level->id])}}" class="tabledit-delete-button btn btn-sm btn-danger" style="float: none; margin: 5px;"  id="delete"><span class="ti-trash"></span></a> 
        </div>
        </div>
</td>              
    </tr> 
    @endforeach
    @endif
    </table> 
    </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  $(document).ready(function(){
  $("#delete").click(function(){
    if (!confirm("Do you want to delete")){
        return false;
        }
        else{
            return true;
        }
    });
  });
  </script>
@endsection