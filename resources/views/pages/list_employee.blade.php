@extends('layouts.app')

@section('inner-title')
    List Employee <a href="#"></a>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">List of Employee</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>S/N</th>
          <th>Employee Name</th>
          <th>PSN No.</th>
          <th>Department</th>
          <th>Email ID</th>
          <th>Designation</th>
          <th>Appointment Type</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        
        <tr>
          <td>1</td>
          <td>Internet
            Explorer 6
          </td>
          <td>Win 98+</td>
          <td>6</td>
          <td>A</td>
          <td>Win 98+</td>
          <td>6</td>
          <td>A</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Internet
            Explorer 6
          </td>
          <td>Win 98+</td>
          <td>6</td>
          <td>A</td>
          <td>Win 98+</td>
          <td>6</td>
          <td>A</td>
        </tr>
      
        </tbody>
        <tfoot>
        <tr>
          <th>S/N</th>
          <th>Employee Name</th>
          <th>PSN No.</th>
          <th>Department</th>
          <th>Email ID</th>
          <th>Designation</th>
          <th>Appointment Type</th>
          <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

@section('scripts')
<script>
    $(function () {
      $('#example1').DataTable({
        "responsive": true,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>

@endsection