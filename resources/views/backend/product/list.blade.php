@extends('backend.layouts.app')

@section('style')
	<style type="text/css">
		
	</style>
@endsection

@section('content')

          <ul class="breadcrumb">
            <li><a href="">Product</a></li>
            <li><a href="">Product List</a></li>
          </ul>
       {{--  https://www.webslesson.info/2018/01/how-to-insert-data-using-ajax-in-laravel-with-datatables.html --}}
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Product List</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    {{-- start --}}
                   @include('message')

                     <div class="alert alert-success alert-dismissible fade in" style="display: none;" id="getSuccessmessage" role="alert"></div>

                   <button class="btn btn-primary" data-toggle="modal" data-target="#AddModal" title="Add New Product"><i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">Add New Product</span></button>
          
                    {{-- End --}}

                      <a href="{{ url('admin/product/product_excel_import') }}" class="btn btn-primary" title="Add Excel Import Product"><i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">Add Excel Import Product</span></a>


                      <a href="{{ url('admin/product/product_excel_export') }}" class="btn btn-primary" title="Excel Export Product"><i class="fa fa-download"></i>&nbsp;&nbsp;<span class="bold">Excel Export Product</span></a>


                    {{-- Section Start --}}
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Product List</h3>
                  </div>
                 

              <div class="panel-body" style="overflow: auto;">
                  <table  class="table table-striped table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Recipient</th>
                              <th>Message</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody id="tbody">
                  
                      </tbody>

                  </table>
                  <div style="float: right">
                      
                  </div>
              </div>

              </div>
              {{-- Section End --}}

                </div>
            </div>
        </div>


        {{-- Add Model --}}
        
        <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
              </div>
               <form method="POST" id="AddForm">
                {{ csrf_field() }}
              <div class="modal-body">
                 <span id="form_output"></span>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" name="recipient" class="form-control" id="recipient">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" name="message" id="message"></textarea>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="storeData();">Save Submit</button>
              </div>
               </form>
            </div>
          </div>
        </div>


        {{-- Edit Model --}}

        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
              </div>
               <form method="POST" id="UpdateForm">
                {{ csrf_field() }}
              <div class="modal-body">
                 <input type="text" id="edit_modal_id">
                 <span id="form_output"></span>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" name="recipient" class="form-control" id="edit_name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" name="message" id="edit_address"></textarea>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="submit" name="submit" class="btn btn-primary">Update Submit</button>
              </div>
               </form>
            </div>
          </div>
        </div>

{{-- View --}}

  <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Product</h5>
              </div>
               <form method="POST" id="AddForm">
                {{ csrf_field() }}
              <div class="modal-body">
                 <span id="form_output"></span>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                     <span id="view_recipient"></span>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <span id="view_message"></span>
                    
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
              </div>
               </form>
            </div>
          </div>
        </div>


@endsection
  @section('script')
  <script type="text/javascript">
  
  function storeData(){
        var recipient = $('#recipient').val();
        var message = $('#message').val();
        var token = $('input[name="_token"]').val();
        // alert(token);
        $.ajax({
          type:"POST",
          url: "{{ url('admin/product/store') }}",
          data: {recipient: recipient, message: message, _token: token},
          success: function(data){
            fetch();
            $('#AddModal').modal('hide');
            $('#getSuccessmessage').show();
            $('#getSuccessmessage').html(data.success);
          }
        });
    }


  function fetch(){
    $.ajax({
      url: "{{ url('admin/product/index_show') }}",
      type: "POST",
      dataType: "json",
      data:{
        _token: '{{ csrf_token() }}'
      },
      cache: false,
      success: function(data){
        $("#tbody").html(data.html);
      }
    });
  }
fetch();


$('table').delegate('.editrecord', 'click', function(){
  var id = $(this).attr('id');
  // var id = $(this).attr('value');
  // alert(id);
  $.ajax({
     url:"{{ url('admin/product/edit_show') }}/"+id,
      type: "GET",
            data:{
              id:id,
              "_token": "{{ csrf_token() }}"
            },
            dataType:'json',
            success:function(data)
            {
              $('#editModal').modal('show');
              $('#edit_name').val(data.recipient);
              $('#edit_address').val(data.message);
              $('#edit_modal_id').val(id);
              
              // $('#id').val(id);
            
            }
  });
});


// Update
$('#UpdateForm').on('submit', function(event){
 event.preventDefault();
    var edit_id = $("#edit_modal_id").val();
    //alert(edit_id);
    var edit_name = $("#edit_name").val();
    //alert(edit_name);
    var edit_address = $("#edit_address").val();
    // alert(edit_address);
    var token   = $('input[name="_token"]').val();
    //alert(token);
    $.ajax({
      url: "{{ url('admin/product/update_show') }}",
      method: "POST",
      data: {
         edit_id: edit_id,
          edit_name: edit_name,
          edit_address: edit_address,
          _token: token
      },
       dataType:"json",
       success: function(response)
        {
          fetch();
           $('#editModal').modal('hide');
           $('#getSuccessmessage').show();
           $('#getSuccessmessage').html(response.success);
        }
    });
});
// view

$('table').delegate('.viewrecord', 'click', function(){
  var id = $(this).attr('id');
  // alert(id);
  $.ajax({
    url: "{{ url('admin/product/view_show') }}/"+id,
    type: "GET",
    data:{id: id, "_token": "{{ csrf_token() }}"},
    dataType: 'json',
    success:function(data){
        $('#viewModal').modal('show');
        $('#view_recipient').html(data.recipient);
        $('#view_message').html(data.message);
        $('#view_modal_id').val(id);
    }
  });
});


// Delete Start
  $('table').delegate('.deleterecord', 'click', function(){
    var id = $(this).attr('id');
    // alert(id);
    var token = $(this).data("token");
    $.ajax({
      url:"{{ url('admin/product/delete_record') }}/"+id,
      type: "POST",
      dataType: "JSON",
      data: {
        "id" : id,
        "_token" : "{{ csrf_token() }}"
      },
      success: function(response){
         $('#getSuccessmessage').show();
                $('#getSuccessmessage').html(response.success);
                fetch();
      } 
    });
  });
// Delete End
  </script>
@endsection
