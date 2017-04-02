@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<h1 class="dashboard-title">ABC Pte.Ltd.</h1>

<div class="panel panel-info dashboard-panel">

	<div class="panel-heading">
		<span>Charters (2/3) -- Upgrade to Pro package unlock form/vendor limitation</span>
		<a href="/dashboard/course/add" class="btn btn-raised-success pull-right">
			Create new form
		</a>
		<div class="clearfix"></div>
	</div>

	<div class="panel-body">
		<table class="table">
			<thead>
				<th>Vendor</th><th>Main Organiser</th><th>Date</th><th>Form URL</th><th>Manage</th>
			</thead>
			<tbody>
				<tr>
					<td>Vendor A</td><td>Mr.Lee Jung</td>
					<td>3/1/2017</td>
					<td><input type="text" value="http://yac.ht/aKcs2" /></td>
					<td>
						<a href="/dashboard/course/1106209-59" class="btn btn-raised-primary">
							Manage
						</a>
					</td>
				</tr>
				<tr>
					<td>Vendor B</td><td>Mr.John Doe</td>
					<td>1/3/2017</td>
					<td><input type="text" value="http://yac.ht/kNmn5" /></td>
					<td>
						<a href="/dashboard/course/1106209-59" class="btn btn-raised-primary">
							Manage
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection