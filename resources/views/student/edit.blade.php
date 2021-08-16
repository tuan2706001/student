@extends('layouts.app')
@section('content')		
<div class="card">
	                            <div class="card-header">
	                                <h4 class="card-title">Thông tin cá nhân </h4>
	                            </div>
	                            <div class="card-content">
	                                <form method="post" action="{{ route('student.update', $student->idStudent) }}">
										@method("PUT")
           								@csrf 
	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Họ</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="lastName" class="form-control" 
													value="{{ $student->lastName}}">
	                                            </div>
	                                        </div>
	                                    </fieldset>

										<fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Tên</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="firstName" class="form-control" 
													value="{{ $student->firstName}}" >
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Email</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="email" class="form-control" 
													value="{{ $student->email }}" >
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Password</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="password" class="form-control" value="{{ $student->passWord }}" >
	                                            </div>
	                                        </div>
	                                    </fieldset>
                                        <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Ngày sinh</label>
	                                            <div class="col-sm-10">
	                                                <input type="date" name="DoB" class="form-control" value="{{ $student->DoB }}" >
	                                            </div>
	                                        </div>
	                                    </fieldset>
                                        
	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Số điện thoại</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="phone" class="form-control" value="{{ $student->phone }}" >
	                                            </div>
	                                        </div>
	                                    </fieldset>
										<button type="submit" class="btn btn-info btn-fill btn-wd">Lưu thay đổi</button>
	                                </form>
	                            </div>
	                        </div>
@endsection 