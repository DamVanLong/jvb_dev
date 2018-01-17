@extends('templates.master')
@section('title')
INDEX PAGE
@endsection
@section('content')
<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Table With Full Features</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>STT</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>CREATED DATE</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $key => $user)
				<tr>
					<td>{{$key+=1}}</td>
					<td>{{$user['name']}}</td>
					<td>{{$user['email']}}</td>
					<td>{{$user['created_at']}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
@endsection
@push('scripts')
<script>
	$(document).ready(function(){
		$('#example1').DataTable();
	})
</script>
@endpush