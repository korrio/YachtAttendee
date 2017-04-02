<!-- <div>
	<button class="btn btn-raised-primary pull-right">
		<i class="fa fa-download"></i> Export ทั้งหมด
	</button>
	<div class="clearfix"></div>
</div> -->
<table class="table table-hover">
	<thead>
		<th>Charter date</th>
		<th>Attendee(s)</th>
		<th>Status</th>
		<th>Manage</th>
	</thead>
	<tbody>
		<tr class="success clickable-row" 
		data-href="{{ url('/dashboard/course/1106209-59/1') }}">
			<td>3/3/2017 (9:00-17:00)</td>
			<td>43</td>
			<td><span class="text-success">Departing</span></td>
			<td>
				<a href="{{ url('/dashboard/course/1106209-59/1') }}" class="btn btn-raised-primary">
					ดูข้อมูล
				</a>
			</td>
		</tr>
	</tbody>
</table>