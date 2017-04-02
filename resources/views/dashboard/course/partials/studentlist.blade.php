<div>
	<button class="btn btn-raised-primary pull-right">
		<i class="fa fa-download"></i> Export All
	</button>
	<div class="clearfix"></div>
</div> 
<table class="table table-hover">
	<thead>
		<th>(ID) Name</th>
		<th>Nationality</th>
		<th>Email</th>
		<th>Manage</th>
	</thead>
	<tbody>
		<tr class="clickable-row" 
		data-href="{{ url('/dashboard/student/5611400924') }}">
			<td>5611400924 Mr.Joshan Realm</td>
			<td>Singapore</td>
			<td><span class="text-success">josh12@gmail.com</span></td>
			<td>
				<a href="{{ url('/dashboard/student/5611400924') }}" class="btn btn-raised-primary">
					Manage
				</a>
				<a href="{{ url('/dashboard/student/5611400924') }}" class="btn btn-raised-fail">
					Delete
				</a>
			</td>
		</tr>
	</tbody>
</table>