@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<h1 class="dashboard-title">Dashboard</h1>

<div class="panel panel-info dashboard-panel">

	<div class="panel-heading">
		<span>รายชื่อวิชาที่สอน</span>
		<a href="/dashboard/course/add" class="btn btn-raised-success pull-right">
			เพิ่มรายวิชาใหม่
		</a>
		<div class="clearfix"></div>
	</div>

	<div class="panel-body">
		<table class="table">
			<thead>
				<th>รหัสวิชา</th><th>ชื่อวิชา</th><th>ปีการศึกษา</th><th>จัดการ</th>
			</thead>
			<tbody>
				<tr>
					<td>PreAD</td><td>ปรับพื้นฐาน ม.4-ม.5</td>
					<td>2560 (SUMMER)</td>
					<td>
						<a href="/dashboard/course/1106209-59" class="btn btn-raised-primary">
							จัดการ
						</a>
					</td>
				</tr>
				<tr>
					<td>ADMISSION1</td><td>อัพเดท PAT ญี่ปุ่น</td>
					<td>2560 (SUMMER)</td>
					<td>
						<button class="btn btn-raised-primary">
							จัดการ
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection