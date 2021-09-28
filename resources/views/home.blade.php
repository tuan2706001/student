@extends('layouts.app')
@section('content')	
	<div class="content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Danh sách điểm các môn học</h4><br> 
                <form class="navbar-form navbar-left navbar-search-form" role="search">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" value="{{$search}}" name="search" class="form-control" placeholder="Search...">
                    </div>
                </form>                        
                <div class="card-content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th>Tên môn học  </th>
                            <th>Điểm thi lần 1(F)</th>
                            <th>Điểm thi lần 2(F)</th>
                            <th>Điểm thi lần 1(S)</th>
                            <th>Điểm thi lần 2(S)</th>
                            <th>Trạng thái</th>
                        </thead>
                        @foreach ($students as $student )
                        <tbody> 
                                <tr>    
                                        <td>{{$student->nameSubject}}</td> 
                                        <td>
                                            @if ($student->final1 == NULL)
                                            <span class='ti-na'></span>  
                                        @else
                                            {{ $student->final1 }}  
                                        @endif
                                        </td>
                                        <td>@if ($student->final2 == NULL)
                                            <span class='ti-na'></span>  
                                        @else
                                            {{ $student->final2 }}  
                                        @endif
                                        </td>
                                        <td>
                                            @if ($student->skill1 == NULL)
                                            <span class='ti-na'></span>  
                                        @else
                                            {{ $student->skill1 }}  
                                        @endif 
                                        </td>
                                        <td>
                                            @if ($student->skill2 == NULL)
                                            <span class='ti-na'></span>  
                                        @else
                                            {{ $student->skill2 }}  
                                        @endif
                                        </td>
                                        <td>    
                                            {{-- Có cả 2 --}}
                                            @if ($student->final == 1 && $student->skill == 1)

                                                @if ($student->final1 >=5 && $student->skill1 >= 5 && $student->final2 == NULL && $student->skill2 == NULL )
                                                    <h6><h6><span class="text-primary">Qua môn</span></h6></h6>

                                                @elseif ($student->final1 >=5 && $student->skill1 < 5 && $student->final2 == NULL && $student->skill2 == NULL )
                                                    <h6><span class="bg-warning text-warning">Thi lại</span></h6>

                                                @elseif ($student->final1 < 5 && $student->skill1 >= 5 && $student->final2 == NULL && $student->skill2 == NULL )
                                                    <h6><span class="bg-warning text-warning">Thi lại</span></h6>

                                                @elseif ($student->final1 >= 5 && $student->skill1 < 5 && $student->final2 == NULL && $student->skill2 >= 5 )
                                                    <h6><h6><span class="text-primary">Qua môn</span></h6></h6>
                                                
                                                @elseif ($student->final1 < 5 && $student->skill1 >= 5 && $student->final2 >= 5 && $student->skill2 == NULL )
                                                    <h6><h6><span class="text-primary">Qua môn</span></h6></h6>

                                                @elseif ($student->final1 < 5 && $student->skill1 >= 5 && $student->final2 < 5  && $student->skill2 == NULL)
                                                    <h6><span class="text-danger bg-danger">Học lại</span></h6>
                                                
                                                @elseif ($student->final1 == NULL && $student->skill1 >= 5 && $student->final2 == NULL  && $student->skill2 == NULL)
                                                    <h6><span class="text-danger bg-danger">Học lại</span></h6>

                                                @elseif ($student->final1 >= 5 && $student->skill1 < 5 && $student->final2 == NULL && $student->skill2 >= 5 )
                                                    <h6><h6><span class="text-primary">Qua môn</span></h6></h6>

                                                @elseif ($student->final1 < 5 && $student->skill1 < 5 && $student->final2 == NULL && $student->skill2 == NULL )
                                                    <h6><span class="bg-warning text-warning">Thi lại</span></h6>

                                                @elseif ($student->final1 < 5 && $student->skill1 < 5 && $student->final2 >= 5 && $student->skill2 < 5 )
                                                    <h6><span class="text-danger bg-danger">Học lại</span></h6>

                                                @elseif ($student->final1 < 5 && $student->skill1 < 5 && $student->final2 >= 5 && $student->skill2 >= 5 )
                                                    <h6><h6><span class="text-primary">Qua môn</span></h6></h6>

                                                @elseif ($student->final1 < 5 && $student->skill1 < 5 && $student->final2 < 5 && $student->skill2 >=5  )
                                                    <h6><span class="text-danger bg-danger">Học lại</span></h6>
                                                
                                                @elseif ($student->final1 < 5 && $student->skill1 < 5 && $student->final2 < 5 && $student->skill2 < 5  )
                                                    <h6><span class="text-danger bg-danger">Học lại</span></h6>

                                                @elseif ($student->final1 < 5 && $student->skill1 < 5 && $student->final2 >=5 && $student->skill2 == NULL )
                                                    <h6><span class="bg-warning text-warning">Thi lại</span></h6>
                                                @endif
                                            @elseif ($student->final == 1 && $student->skill == 0)    
                                                @if ($student->final1 >=5 && $student->final2 == NULL )
                                                    <h6><h6><span class="text-primary">Qua môn</span></h6></h6>
                                                @elseif ($student->final1 < 5 && $student->final2 < 5 )
                                                    <h6><span class="text-danger bg-danger">Học lại</span></h6>
                                                @elseif ($student->final1 < 5 && $student->final2 >= 5 )
                                                    <h6><h6><span class="text-primary">Qua môn</span></h6></h6>
                                                @elseif ($student->final1 < 5 && $student->final2 == NULL )
                                                    <h6><span class="bg-warning text-warning">Thi lại</span></h6>
                                                @endif
                                            @elseif ($student->final == 0 && $student->skill == 1)    
                                                @if ($student->skill1 >=5 && $student->skill2 == NULL )
                                                    <h6><h6><span class="text-primary">Qua môn</span></h6></h6>
                                                @elseif ($student->skill1 < 5 && $student->skill2 < 5 )
                                                    <h6><span class="text-danger bg-danger">Học lại</span></h6>
                                                @elseif ($student->skill1 < 5 && $student->skill2 >= 5 )
                                                    <h6><h6><span class="text-primary">Qua môn</span></h6></h6>
                                                @elseif ($student->skill1 < 5 && $student->skill2 == NULL )
                                                    <h6><span class="bg-warning text-warning">Thi lại</span></h6>
                                                @endif
                                            @endif
                                        </td>
                                </tr> 
                                                   
                        </tbody>
                        @endforeach   
                    </table>
                    <div class="text-center">
                        {{ $students->appends(['search' => $search])->links() }}
                    </div>
 	</div>
@endsection          
	   