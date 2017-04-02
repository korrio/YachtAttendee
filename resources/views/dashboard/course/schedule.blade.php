@extends('layouts.dashboard')

@section('title', 'Manage Vendor A - Attendee')

@section('content')
<h1 class="dashboard-title">
	Attendee
	<br>
	<small>Vendor A</small>
</h1>

<ol class="breadcrumb">
	<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
	<li><a href="{{ url('/dashboard/course/1106209-59') }}">Vendor A</a></li>
	<li class="active">4 Mar (8.30 - 11.30)</li>
</ol>

<div class="panel panel-info dashboard-panel">

	<div class="panel-heading">
		<span>4 Mar (8.30 - 11.30)</span>
	</div>

	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<th>(ID) Name</th>
				<th>Nationality</th>
				<th>Email</th>
				<th>Attendance</th>
			</thead>
			<tbody>
				<tr>
					<td><a href="#">5611400924 Mr.Donald Trump</a></td>
					<td><span class="text-success">American</span></td>
					<td>d.trump@gmail.com</td>
					<td>
						<input type="checkbox" checked="checked"/>
<!-- 						<span class="text-success">
							<i class="check-button fa fa-2x fa-check" data-stuid="5611400924"></i>
						</span> -->
					</td>
				</tr>
				<tr>
					<td><a href="#">5611400939 Mr. Barack Obama</a></td>
					<td><span class="text-danger">American</span></td>
					<td>b.obama@gmail.com</td>
					<td>
						<input type="checkbox" checked="checked" />
<!-- 						<span class="text-danger">
							<i class="check-button fa fa-2x fa-times" data-stuid="5611400924"></i>
						</span> -->
					</td>
				</tr>
				<tr>
					<td><a href="#">5611400946 Mr. John Doe</a></td>
					<td><span class="text-warning">American</span></td>
					<td>john.doe@gmail.com</td>
					<td>
						<input type="checkbox"checked="checked" />
<!-- 						<span class="text-success">
							<i class="check-button fa fa-2x fa-check" data-stuid="5611400924"></i>
						</span> -->
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection

@section('js')
@endsection