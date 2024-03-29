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
              <div class="card">
                  <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #274CBF; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>Manage Lead Users
                      </h4>
                  </div>
                </div>
                <div class="card-body">
              @if(session()->has('success'))
              <div class="alert alert-success">

                   {{ session()->get('success') }}
                  <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              </div>
              @endif
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-no-bordered" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th style="font-weight: bold;">#</th>
                          <th style="font-weight: bold;">Name</th>
                          <th style="font-weight: bold;">Email</th>
                          <th style="font-weight: bold;">Mobile</th>
                          <th style="font-weight: bold;">Budget</th>
                          <th style="font-weight: bold;" >Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th style="font-weight: bold;">#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                         <th >Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                  @php $i = 1; @endphp
                  @foreach($applyuser as $row)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$row->Name}}</td>
                          <td>{{$row->Email}}</td>
                          <td>{{$row->Mobile}}</td>
                          <td>{{$row->Budget}}</td>
                            <form action="{{route('Admin/Lead/EditSession')}}" method="post">
                              {{csrf_field()}}
                            <td class="td-actions text-right">
                              <input type="hidden" name="Edit" value="{{$row->id}}">
                            <button type="submit" rel="tooltip" class="btn btn-success" style="background-color: #274CBF; padding:10px; padding-left: 20px; box-shadow: none; margin-right: 10px; padding-right: 20px;">
                              Remark
                            </button>
                            </form>
                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#myModal" class="btn btn-danger pull-right" onclick="delete_function('{{$row->id}}')" style="background-color: #274CBF; padding:10px; box-shadow: none; padding-left: 15px; padding-right: 15px;">
                              Delete
                            </button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>
</div>

<div class="modal" id="SndMail">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header"  style="background-color: #FFC627; color:white;">
          <h4 class="modal-title" style="margin-top: -10px; margin-bottom: 10px;">Are You Sure Rechedule it ?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
        </div>

        <div style="padding-bottom: 50px;">
          <div class="col-sm-2"></div>
        </div>

      </div>
    </div>
  </div>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"  style="background-color: #274CBF; color:white;">
        <h4 class="modal-title" style="margin-top: -10px; margin-bottom: 10px;">Are You Sure Delete It ?</h4>
        <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
      </div>
      <div class="modal-body" style="text-align: center; padding-top: 50px;">
        If you are delete it. you can't get it after
      </div>
      <div class="row" style="padding-bottom: 50px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
          <form action="{{route('Admin/Lead/Delete')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" id="delete_id" name="Delete">

          <button type="submit" class="btn btn-success" style="color:white; background:#274CBF;  margin-right: 50px; width: 100%;">Yes</button>
          </form>
        </div>
        <div class="col-sm-4">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="color:white;background: #274CBF; width: 100%; ">No</button>
        </div>
        <div class="col-sm-2"></div>
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