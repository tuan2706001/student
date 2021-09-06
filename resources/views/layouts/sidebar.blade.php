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
	                <div class="photo">
	                    <img src="../../assets/img/faces/face-0.jpg" />
	                </div>
					<div class="info">
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
	                    <a  href="homeStudent">
	                        <i class="ti-panel"></i>
							<p>Xem điểm</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>