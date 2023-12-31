@extends('layouts.app')

@section('title','Visitor')

@section('content')
    
<div class="container">
    <div class="row">
    <div class="col-md-12 p-5">
    <table id="VisitorDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">NO</th>
          <th class="th-sm">IP</th>
          <th class="th-sm">Date & Time</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($visitor as $data)
          <tr>
            <td>{{ $data['id'] }}</td>
            <td>{{ $data['ip_address'] }}</td>
            <td>{{ $data['visit_time'] }}</td>
          </tr>
        @endforeach
        
      </tbody>
    </table>
    
    </div>
    </div>
    </div>

@endsection

{{-- javascript section add --}}

@push('script')

<script> 

    //visitor page table
  $(document).ready(function () {
  $('#VisitorDt').DataTable({"order":false});
  $('.dataTables_length').addClass('bs-select');
  });

</script>

@endpush