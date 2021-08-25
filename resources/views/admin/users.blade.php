@extends('layouts.adminapp')
@section('content')
<div class="breadcrumbbar">
    <div class="align-items-center">
       <h3 class="text-center">All Users</h3>
    </div>          
</div>
<div class="contentbar"> 
    <div class="card">
        <div class="card-body">
    <div class="table-responsive">
        <table id="default-datatable" class=" display table table-striped table-bordered" id="edit-btn">
    <tr>
        <th>Phone</th>
        <th>Balance</th>
       <th>Amount</th>
    </tr>   
    @if (!empty($users))
        
    @foreach ($users as $user)
    @php
        $credit = \App\wallet::where('credit',1)->where('user_id',$user->id)->sum('balance');
        $debit = \App\wallet::where('debit',1)->where('user_id',$user->id)->sum('balance');
        $balance = $credit - $debit;
    @endphp
    <tr>
    <td>{{$user->phone}}</td>  
    <td>{{$balance}}</td>  
    <td>
       <a href="{{route('admin.balanceadd',['id'=>$user->id])}}" class="btn btn-success">Send </a>
       {{-- <a href="{{route('admin.balancecut',['id'=>$user->id])}}" class="btn btn-danger"> cut </a> --}}
    </td>           
               
    </tr> 
    @endforeach
    @endif
    </table> 
    </div>
        </div>
    </div>
</div>
@endsection