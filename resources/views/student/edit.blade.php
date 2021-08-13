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
	                                            <label class="col-sm-2 control-label">Tên sinh viên</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="name" class="form-control" 
													value="{{ $student->nameStudent}}" >
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
	                                            <label class="col-sm-2 control-label">Tên Lớp</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" name="nameGrade"  class="form-control" value="{{ $student->nameGrade }}" >
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