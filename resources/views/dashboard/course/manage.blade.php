@extends('layouts.dashboard')

@section('title', 'Manage Vendor A - Attendee')

@section('content')
<h1 class="dashboard-title">
  Vendor A
	<br>
	<!-- <small>คอร์สภาษาญี่ปุ่นพื้นฐาน DREAM 1, DREAM 2, PRE-AD</small> -->
</h1>

<ol class="breadcrumb">
	<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
	<li class="active">Manage Vendor A</li>
</ol>

<div class="panel panel-info dashboard-panel">

	<div class="panel-heading">
		<span>Manage Vendor A</span>
	</div>

	<div class="panel-body">

		{{-- tabs list --}}
		<ul class="nav nav-tabs" id="coursetab">
			<li class="active">
				<a href="#schedule" aria-controls="schedule" role="tab" data-toggle="tab">
					Charter
				</a>
			</li>
<!-- 			<li>
				<a href="#students" aria-controls="students" role="tab" data-toggle="tab">
					Attendee
				</a>
			</li> -->
			<li>
				<a href="#info" aria-controls="info" role="tab" data-toggle="tab">
					Vendor Info
				</a>
			</li>
		</ul>
		{{-- tabs list --}}

		{{-- tabs content --}}
		<div class="tab-content dashboard-tab">
			<div class="tab-pane fade in active" id="schedule">
				@include('dashboard.course.partials.schedulelist')
			</div>
			<div class="tab-pane fade in" id="students">
				@include('dashboard.course.partials.studentlist')
			</div>
			<div class="tab-pane fade in" id="info">
				@include('dashboard.course.partials.info')
			</div>
		</div>
		{{-- tabs content --}}
	</div>
</div>
@endsection

@section('js')
<script src="/js/clickablerow.js"></script>
@endsection