@extends('layouts.app')
@section('content')		
<div class="card">
	                            <div class="card-header">
	                                <h4 class="card-title">Thông tin cá nhân </h4>
	                            </div>
	                            <div class="card-content">
	                                <form method="get" action="/" class="form-horizontal">
	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Họ</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="lastName" class="form-control" 
													value="{{ $student->lastName}}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>

										<fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Tên</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="firstName" class="form-control" 
													value="{{ $student->firstName}}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Email</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="email" class="form-control" 
													value="{{ $student->email }}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Password</label>
	                                            <div class="col-sm-10">
	                                                <input type="password" name="password" class="form-control" value="{{ $student->passWord }}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>
                                        <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Ngày sinh</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="DoB" disabled="" class="form-control" value="{{ $student->DoB }}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>
                                        <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Tên Lớp</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="nameGrade" disabled="" class="form-control" value="{{ $student->nameGrade }}" readonly>
	                                            </div>
	                                        </div>
	                                    </fieldset>
	                                    
										<a class="btn btn-info btn-fill btn-wd" href="{{ route('student.edit',$student->idStudent) }}">Cập nhập</a>
	                                </form>
	                            </div>
	                        </div>
@endsection 