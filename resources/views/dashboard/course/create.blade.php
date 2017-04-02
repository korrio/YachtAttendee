@extends('layouts.dashboard')

@section('title', 'New Charter Form')

@section('content')
<h1 class="dashboard-title">Create New Charter</h1>

<ol class="breadcrumb">
	<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
	<li class="active">Create New Charter Form</li>
</ol>

<div class="panel panel-info dashboard-panel">

	<div class="panel-heading">
		<span>Create</span>
	</div>

	<div class="panel-body">
		<form action="#" method="POST" enctype="multipart/form-data" 
		class="form-horizontal dashboard-form">
			
			<div class="row">
				<div class="col-sm-3 form-legend">
					<legend class="text-right">General</legend>
				</div>
			</div>

			<div class="form-group">
				<label for="code" class="col-sm-3 control-label">Company Name</label>
				<div class="col-sm-4">
					<input type="text" name="code" placeholder="" 
					class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<label for="name" class="col-sm-3 control-label">Marina Name</label>
				<div class="col-sm-4">
					<input type="text" name="name" placeholder="" 
					class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<label for="semester" class="col-sm-3 control-label">Country</label>
				<div class="col-sm-4">
					<select name="semester" class="form-control">
						<option value="1">Singapore</option>
						<option value="2">Malaysia</option>
						<option value="3">Indonesia</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3 form-legend">
					<legend class="text-right">Main client</legend>
				</div>
			</div>

			<div class="form-group">
				<label for="code" class="col-sm-3 control-label">First name</label>
				<div class="col-sm-4">
					<input type="text" name="code" placeholder="" 
					class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<label for="code" class="col-sm-3 control-label">Last name</label>
				<div class="col-sm-4">
					<input type="text" name="code" placeholder="" 
					class="form-control" required>
				</div>
			</div>

		<!-- 	<div class="form-group">
				<label for="section" class="col-sm-3 control-label">Section</label>
				<div class="col-sm-4">
					
					<input type="number" name="section" placeholder="section" 
					class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<label for="section" class="col-sm-3 control-label">รอบ</label>
				<div class="col-sm-4">
					
					<ul class="list-group">
                    <li class="list-group-item">
                        เช้า
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionDefault" class="label-default"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        บ่าย
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionSuccess" class="label-success"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        เย็น
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionWarning" class="label-warning"></label>
                        </div>
                    </li>
                </ul>
				</div>
			</div>

			<div class="form-group">
				<label for="semester" class="col-sm-3 control-label">ภาคการศึกษา</label>
				<div class="col-sm-4">
					<select name="semester" class="form-control">
						<option value="1">SUMMER</option>
						<option value="2">เทอม 1</option>
						<option value="3">เทอม 2</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="semester" class="col-sm-3 control-label">ปีการศึกษา</label>
				<div class="col-sm-4">
					<select name="semester" class="form-control">
						@for($i  = ((int) date("Y")) + 543 - 1; 
							 $i <= ((int) date("Y")) + 543; 
							 $i++)
						<option value="{{$i}}">{{$i}}</option>
						@endfor
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="studentsList" class="col-sm-3 control-label">รายชื่อนักเรียน</label>
				<div class="col-sm-4">
					<label class="btn btn-raised-default" style="display: inline-block;">
    					เลือกไฟล์ <input type="file" 
    					accept=".xls,.xlsx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel" 
    					style="display: none;">
					</label>
					<span id="filename">ยังไม่ได้เลือกไฟล์</span>
					<span class="help-block">
					สามารถอัพโหลดภายหลังได้ 
					<a href="#">ดูรูปแบบไฟล์ Excel ที่เหมาะสม</a></span>
				</div>
			</div> -->
			
			<div class="row">
				<div class="col-sm-3 form-legend">
					<legend class="text-right">Charter time</legend>
				</div>
			</div>

			<div class="form-group">
				<label for="times" class="col-sm-3 control-label">Duration</label>
				<div class="col-sm-9">
					<div class="form-inline">
						<!-- <div class="form-group">
							<label for="day">Day</label>
							<select name="day[]" class="form-control">
								@foreach(getDaysOfWeek() as $value => $day)
								<option value="{{$value}}">{{$day}}</option>
								@endforeach
							</select>
						</div> -->
						<div class="form-group">
							 
							<select name="start_time[]" class="form-control">
								@foreach(hoursRange(800, 1800) as $value => $time)
								<option value="{{$value}}">{{$time}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							to
							<select name="end_time[]" class="form-control">
								@foreach(hoursRange(900, 2000) as $value => $time)
								<option value="{{$value}}">{{$time}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="start_date" class="col-sm-3 control-label">Date</label>
				<div class="col-sm-4">
					<div class='input-group date' id="start_date">
                		<input type='text' class="form-control" name="start_date" placeholder="3/3/2017" />
                		<span class="input-group-addon">
                    		<span class="fa fa-calendar">
                    		</span>
                		</span>
            		</div>
				</div>
						</div>
					</div>

					<span class="help-block">
						<a href="#">+ Add more</a>
					</span>
				</div>
			</div>

<!-- 				<div class="form-group">
					<label for="times" class="col-sm-3 control-label"></label>
				</div> -->

		<!-- 	<div class="form-group">
				<label for="start_date" class="col-sm-3 control-label">วันที่เริ่มเรียนคาบแรก</label>
				<div class="col-sm-4">
					<div class='input-group date' id="start_date">
                		<input type='text' class="form-control" name="start_date" placeholder="วันที่เริ่มเรียนคาบแรก" />
                		<span class="input-group-addon">
                    		<span class="fa fa-calendar">
                    		</span>
                		</span>
            		</div>
				</div>
			</div>

			<div class="form-group">
				<label for="end_date" class="col-sm-3 control-label">วันที่เริ่มเรียนคาบสุดท้าย</label>
				<div class="col-sm-4">
					<div class='input-group date' id="end_date">
                		<input type='text' class="form-control" name="end_date" placeholder="วันที่เริ่มเรียนคาบสุดท้าย"/>
                		<span class="input-group-addon">
                    		<span class="fa fa-calendar">
                    		</span>
                		</span>
            		</div>
				</div>
			</div> -->

			<div class="row">
				<div class="col-sm-3 form-legend">
					<legend class="text-right">Option</legend>
				</div>
			</div>
			
			<div class="form-group">
				<label for="start_date" class="col-sm-3 control-label">First option</label>
				<div class="col-sm-4">
					<div class="radio">
						<label>
							<input type="radio" name="random_method" value="1" checked>
							option 1
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="random_method" value="2">
							option 2
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="late_time" class="col-sm-3 control-label">Specific needs (If any)</label>
				<div class="col-sm-4">
					<input type="number" name="late_time" placeholder="" 
					value="15" class="form-control" required>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3 col-sm-offset-3">
					<button type="submit" class="btn btn-raised-success">
						Create
					</button>
					<a href="#">Dismiss</a>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@section('js')
<script src="/js/form-createcourse.js"></script>
@endsection