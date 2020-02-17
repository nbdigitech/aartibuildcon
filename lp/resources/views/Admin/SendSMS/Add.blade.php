@extends('Admin.layouts.Master')

@section('css')
<style type="text/css">
  #Category-error{
    margin-top: 40px;
  }

  .tox-notifications-container{
    display: none;
  }
</style>
@endsection


@section('MainSection')
 <div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="{{route('Admin/SendSMS/Update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="Update" value="@if(isset($edit->id)) {{$edit->id}} @endif">
                <div class="card ">
                  <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #274CBF; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>
                       Remark Update                     <a href="{{route('Admin/SendSMS')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; color:#274CBF;">Manage</a></h4>
                  </div>

                </div>
                  <div class="card-body">
                
                  <div class="row" style="margin-bottom: 30px;">
                    <label class="col-sm-2 col-form-label">Name :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <input type="text" name="Name" disabled class="form-control" value="@if(isset($edit->id)) {{$edit->Name}} @endif">
                      </div>
                    </div>

                     <label class="col-sm-2 col-form-label">Email :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <input type="text" name="Email" disabled class="form-control" value="@if(isset($edit->id)) {{$edit->Email}} @endif">
                      </div>
                    </div>
                      <input type="hidden" name="MobileNumber" value="@if(isset($edit->id)) {{$edit->Mobile}} @endif">
                     <label class="col-sm-2 col-form-label">Mobile :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <input type="text" name="Mobile" disabled class="form-control" value="@if(isset($edit->id)) {{$edit->Mobile}} @endif">
                      </div>
                    </div>

                     <label class="col-sm-2 col-form-label">PageLink :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <a href="@if(isset($edit->id)) {{$edit->URL}} @endif" target="_blank"><input type="text" name="URL" disabled class="form-control" value="ClickToView"></a>
                      </div>
                    </div>

                    <label class="col-sm-2 col-form-label">Budget :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                        <input type="text" name="Budget" disabled class="form-control" value="@if(isset($edit->id)) {{$edit->Budget}} @endif">
                      </div>
                    </div>

                     <label class="col-sm-2 col-form-label">Date :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <input type="text" name="Date" disabled class="form-control" value="@if(isset($edit->id)) {{$edit->created_at}} @endif">
                      </div>
                    </div><div class="col-sm-6"></div></div>
                    <div class="row">


                    <label class="col-sm-2 col-form-label">Message :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <textarea rows="5" name="Message" placeholder="SMS Type Here" class="form-control"></textarea>
                      </div>
                    </div>

                  </div>
                    <div class="card-footer ml-auto mr-auto">
                    <button type="submit" style="width: 100%; box-shadow: none; background:#274CBF;" class="btn btn-large btn-rose">
                       Submit                     
                     </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
</div>
</div>

</div>
</div>
@endsection

@section('js')

   <script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>


<script type="text/javascript">
  function SndDone(id){
    document.getElementById("Appointment_Done").value = id;
  }
</script>

<script type="text/javascript">
  function Remark(id){
    document.getElementById("remId").value = id;
  }
</script>



<script type="text/javascript">
    function email_function(User_id,Name_id,Email_id,Mobile_id,date_id,time_id){
      document.getElementById("User_id").value = User_id;
      document.getElementById("Name_id").value = Name_id;
      document.getElementById("Email_id").value = Email_id;
      document.getElementById("Mobile_id").value = Mobile_id;
      document.getElementById("date_id").value = date_id;
      document.getElementById("time_id").value = time_id;
    }
</script>

<script type="text/javascript">
    function sms_function(Sms_Name_id,Mobile_id){
      document.getElementById("Sms_Name_id").value = Sms_Name_id;
      document.getElementById("Mobile_id").value = Mobile_id;
    }
</script>

<script type="text/javascript">
    function delete_function(id){
      document.getElementById("delete_id").value = id;
    }
  </script>


@endsection
