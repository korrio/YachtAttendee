@extends('layouts.dashboard')

@section('title', 'จัดการรายวิชา DREAM 1, DREAM 2, PRE-AD')

@section('content')
<h1 class="dashboard-title">
	จัดการรายวิชา
	<br>
	<small>คอร์สภาษาญี่ปุ่นพื้นฐาน DREAM 1, DREAM 2, PRE-AD</small>
</h1>

<ol class="breadcrumb">
	<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
	<li><a href="{{ url('/dashboard/course/1106209-59') }}">คอร์สภาษาญี่ปุ่นพื้นฐาน DREAM 1, DREAM 2, PRE-AD</a></li>
	<li class="active">4 มี.ค. 8.30 - 11.30</li>
</ol>

<div class="panel panel-info dashboard-panel">

	<div class="panel-heading">
		<span>4 มี.ค. 8.30 - 11.30</span>
	</div>

	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<th>ชื่อ</th>
				<th>สถานะ</th>
				<th>เช็คชื่อ</th>
			</thead>
			<tbody>
				<tr>
					<td><a href="#">5611400924 นายธนะพงศ์ ประทุมชาติ</a></td>
					<td><span class="text-success">เข้าเรียน</span></td>
					<td>
						<input type="checkbox" />
<!-- 						<span class="text-success">
							<i class="check-button fa fa-2x fa-check" data-stuid="5611400924"></i>
						</span> -->
					</td>
				</tr>
				<tr>
					<td><a href="#">5611400939 นายธนัช ประทุมชาติ</a></td>
					<td><span class="text-danger">ยังไม่เข้าเรียน</span></td>
					<td>
						<input type="checkbox" />
<!-- 						<span class="text-danger">
							<i class="check-button fa fa-2x fa-times" data-stuid="5611400924"></i>
						</span> -->
					</td>
				</tr>
				<tr>
					<td><a href="#">5611400946 นายธัชตะวัน จันทร์จำลอง</a></td>
					<td><span class="text-warning">สาย</span></td>
					<td>
						<input type="checkbox" />
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