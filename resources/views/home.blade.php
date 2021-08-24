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
                                            <span class='ti-close'></span>  
                                        @else
                                            {{ $student->final1 }}  
                                        @endif
                                        </td>
                                        <td>@if ($student->final2 == NULL)
                                            <span class='ti-close'></span>  
                                        @else
                                            {{ $student->final2 }}  
                                        @endif
                                        </td>
                                        <td>
                                            @if ($student->skill1 == NULL)
                                            <span class='ti-close'></span>  
                                        @else
                                            {{ $student->skill1 }}  
                                        @endif 
                                        </td>
                                        <td>
                                            @if ($student->skill2 == NULL)
                                            <span class='ti-close'></span>  
                                        @else
                                            {{ $student->skill2 }}  
                                        @endif
                                        </td>
                                        <td>    
                                            @if ($student->final == 1 && $student->skill == 1)
                                                @if ($student->final1 >=5 && $student->skill1 >= 5 )
                                                    <span>Pass</span>
                                                @elseif($student->final1 < 5 || $student->skill1 < 5)
                                                    @if ($student->final2 >=5 && $student->skill2 >=5)
                                                        <span>Pass</span>
                                                    @elseif($student->final2 < 5 || $student->skill2 < 5)
                                                        <span>Tạch</span>
                                                    @else 
                                                         <span>Tạch</span>
                                                    @endif
                                                @endif
                                            @elseif($student->final == 1)
                                                    @if ($student->final1 >=5)
                                                        <span>Pass</span>
                                                    @elseif($student->final1 < 5)
                                                        @if ($student->final2 == NULL)
                                                            <span>Tạch</span>
                                                        @elseif($student->final2 < 5)
                                                            <span>Tạch</span>
                                                        @else 
                                                            <span>Pass</span>
                                                        @endif
                                                    @endif
                                            @elseif($student->skill == 1)
                                                 @if ($student->skill1 >=5)
                                                     <span>Pass</span>
                                                 @elseif($student->skill1 < 5)
                                                     @if ($student->skill2 == NULL)
                                                         <span>Tạch</span>
                                                     @elseif($student->skill2 < 5)
                                                         <span>Tạch</span>
                                                     @else 
                                                        <span>Pass</span>
                                                     @endif
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
	   