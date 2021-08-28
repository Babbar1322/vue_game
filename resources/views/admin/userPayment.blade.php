@extends('layouts.adminapp')
@section('content')
<div class="breadcrumbbar">
    <div class="align-items-center">
       <h3 >User Payments</h3>
    </div> 
    <div class="text-right">
    <a href="" class="btn btn-info"> Edit Payment</a>    
    </div>         
</div>
<div class="contentbar"> 
    <div class="card">
        <div class="card-body">
    <div class="table-responsive">
        <table id="default-datatable" class=" display table table-striped table-bordered" id="edit-btn">
    <tr>
        <th>User ID</th>
        <th>User Name</th>
        <th>Amount</th>
        <th>UPI ID</th>
       <th>Action</th>
    </tr>   
    @if(!empty($pays))
    @foreach($pays as $pay)
    <tr>
    <td> {{$pay->user_id}}</td>  
    <td>{{$pay->user_name}}</td>   
    <td>{{$pay->amount}}</td>   
    <td>{{$pay->upi_id}}</td>   
    <td>
        @if ($pay->status == 0)
        <button type="button" id="accept" data-id="{{$pay->user_id}}" data-amount="{{$pay->amount}}" data-ref="{{$pay->ref_no}}" data-target="#paymentModal"  data-toggle="modal" class="btn btn-success" >Accept</button>
        @elseif($pay->status == 1)
        <div class="text-success"> Accepted</div>
        @endif

        <form  action="{{ route('admin.reject') }}" method="POST"  class="d-inline">
            @csrf
            <input type="hidden" name="user_id" value="{{$pay->user_id}}">
            <input type="hidden" name="ref_no" value="{{$pay->ref_no}}">
            @if ($pay->status ==0)
            <button type="submit"  class="btn btn-danger" {{$pay->status == -1?'disabled':''}}>{{$pay->status == -1?'Rejected':'Reject'}}</button>
            @elseif($pay->status == -1)
                <div class="text-danger">Rejected</div>
            
            @endif
        </form>
    </td>          
    </tr> 
   @endforeach
   @endif
    </table> 
    </div>
        </div>
    </div>
</div>
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Accept Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form  action="{{ route('admin.accept') }}" method="POST" >
            @csrf
        <div class="modal-body">
                <div class="form-group">
                    <label > Amount</label>
                    <input type="text" name="amount" value="" class="form-control" id="amount">
                </div>
                <input type="hidden" name="user_id" value="" id="id">
                <input type="hidden" name="ref_no" value="" id="ref">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Accept</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
      $(document).ready(function(){
          $("#accept").click(function(){
              var id = $(this).data("id");
              var amount = $(this).data("amount");
              var ref = $(this).data("ref");
              console.log("id:"+id);
              console.log("amount:"+amount);
              console.log("ref:"+ref);
              $("#id").val(id);
              $("#amount").val(amount);
              $("#ref").val(ref);
          })
      })
  </script>
@endsection