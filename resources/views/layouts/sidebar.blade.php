<div class="sidebar" data-background-color="brown" data-active-color="danger">
	    
			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text logo-mini">
					CT
				</a>

				<a href="http://www.creative-tim.com" class="simple-text logo-normal">
					Xem điểm 
				</a>
			</div>
	    	<div class="sidebar-wrapper">
				<div class="user">
	                <div class="info">
						{{-- <div class="photo">
		                    {{ Session::get('avata') }}
		                </div> --}}

	                    <a href="{{ route('student.index') }}">
	                        <span>
							<h6> {{ Session::get('lastName') }} {{ Session::get('firstName') }}</h6>
							</span>
	                    </a>
						<div class="clearfix"></div>

	                </div>
	            </div>
	            <ul class="nav">
	                <li class="active">
	                    <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
	                        <i class="ti-panel"></i>
	                        <p>Xem điểm Cụa Mik
                            </p>
	                    </a>
	                </li>
					<li>
	                    <a href="../calendar.html">
	                        <i class="ti-calendar"></i>
	                        <p>Calendar</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>