
	<div class="logo_products" style="padding-bottom:2em">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="{{url('home')}}">Bee-Pro</a></h1>
			</div>
 		


    <div class="w3l_search">
			<form action="{{url('/')}}" method="post">
				<input type="search" id="hashtag" name="Search" placeholder="#Search with Hashtag" required="" class-"ms-ctn form-control ms-ctn-focus">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>

 <script type="text/javascript">
      jQuery(function($) {
       
        $( "#hashtag" ).autocomplete({
          source: '{{url('autocomplete')}}'
        });
      } );
  </script>

			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs" style="margin-left:10%; padding-left:10%">
								<ul class="nav navbar-nav">
									<li class="active"><a href="{{url('home')}}" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Make Up<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Make Up</h6>
														<li><a href="{{ route('makeup.eh', ['isinya' => 'Face' ]) }}" >Face</a></li>
														<li><a href="{{ route('makeup.eh', ['isinya' => 'Lips' ]) }}">Lips</a></li>
														<li><a href="{{ route('makeup.eh', ['isinya' => 'Eyes' ]) }}">Eyes</a></li>
														<li><a href="{{ route('makeup.eh', ['isinya' => 'Make Up Kits' ]) }}"> Make Up Kits </a></li>
													</ul>
												</div>	
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Skin Care<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Skin Care</h6>
														<li><a href="{{ route('makeup.eh', ['isinya' => 'Cleanser' ]) }}">Cleanser</a></li>
														<li><a href="{{ route('makeup.eh', ['isinya' => 'Moisturizer' ]) }}">Moisturizer</a></li>
														<li><a href="{{ route('makeup.eh', ['isinya' => 'Lip Care' ]) }}">Lip Care</a></li>
													</ul>
												</div>		
											</div>
										</ul>
									</li>
								
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal Care<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Personal Care</h6>
														<li><a href="{{ route('makeup.eh', ['isinya' => 'Bath' ]) }}">Bath</a></li>
														<li><a href="{{ route('makeup.eh', ['isinya' => 'Body' ]) }}">Body</a></li>
														<li><a href="{{ route('makeup.eh', ['isinya' => 'Hands & Feet' ]) }}">Hands & Feet</a></li>
													</ul>
												</div>
												
											</div>
										</ul>
									</li>
									<li><a href="{{url('about-us')}}">About Us</a></li>
									<li><a href="{{url('contact-us')}}">Contact Us</a></li>
									

													

									<li class="dropdown">
									<?php if(session('user') != NULL){ ?>
															<h2><?php echo session ('user')["nama"]; ?></h2>
															<?php } else { ?>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login</a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown" style="min-width:300px;">
<!-- 														<a href=""><h6 class="col-md-6 col-xs-6">Login Form</h6></a>
														<a href=""><h6 class="col-md-6 col-xs-6">Signup</h6></a> -->
					<ul id="signform" class="nav nav-tabs" role="tablist">
					<?php $login = 'login'; 
						// if ($_SESSION != NULL)
						 	//$login = $_SESSION["nama"]; ?>
						

						<li id="login1" class="active" onclick="loginGanti()"><a href="#" style="padding:10%;color:white"><h5> <?php echo $login ?> 
						</h5></a></li>
						<li id="signup1" onclick="signupGanti()"><a href="#" style="padding:10%"><h5>Signup</h5></a></li>
					</ul>
														<div class="form-group" id="isi-up">
														<?php if(session('user') != NULL){ ?>
															<h2><?php echo session ('user')["nama"]; ?></h2>
															<?php } else { ?>
														<form action="loginx" method="POST">
														 {{ csrf_field() }}
															<span class="input input--ichiro">
																<input class="input__field input__field--ichiro" type="email" id="input-25" name="email" placeholder=" " required="" />
																<label class="input__label input__label--ichiro" for="input-25">
																	<span class="input__label-content input__label-content--ichiro">Email</span>
																</label>
															</span>
															<span class="input input--ichiro">
																<input class="input__field input__field--ichiro" type="password" id="input-26" name="password" placeholder=" " required="" />
																<label class="input__label input__label--ichiro" for="input-26">
																	<span class="input__label-content input__label-content--ichiro">Password</span>
																</label>
															</span>
															<button type="submit" class="btn btn-warning" style="margin-top:5%">submit</button>
														</form>
														<?php } ?>
														</div>
													</ul>
												</div><?php } ?>
											</div>
										</ul>
									</li>
									 	
				<div class="modal fade" id="id00" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	                <div class="modal-dialog" role="document">
	                  <div class="modal-content">
	                    <div class="modal-header">
	                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                      <h3 class="modal-title" id="myModalLabel">Wawancara</h3>
	                    </div>
	                    <div class="modal-body">
	                      <div class="row">
	                        <form method="post" action="">
	                          <div class="col-md-6">
	                            <div class="form-group">
	                              <label>Nama</label>
	                            </div>
	                            <div class="form-group">
	                              <label>Universitas</label>
	                            </div>
	                            <div class="form-group">
	                              <label>Nilai</label>
	                              <input class="form-control" name="nilai" type="number" value="" >
	                            </div>
	                          </div>
	                          <div class="col-md-6">
	                            <div class="form-group" style="text-align:center;"> 
	                              <label for="message" class="control-label">Foto Pendaftar</label>
	                            </div>
	                          </div>
	                          <div class="col-md-12">
	                            <div class="form-group">
	                              <label>Catatan / Komentar</label>
	                              <textarea rows="4" class="form-control" name="comment" type="text" id="comment"></textarea>
	                            </div>
	                          </div>
	                        </div>
	                        <div class="modal-footer">
	                          <button type="submit" class="btn btn-success">Save changes</button>
	                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                        </div>
	                      </form>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

                <div id="id01" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">                  
                  <div class="modal-dialog" action="login.php" method="post">
                    <div class="imgcontainer">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    <div class="modal-body" style="bgcolor:white">
					 	<div class="row">
							<!-- <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s"> -->
							

							<div class="col-md-6 top_brand_left">
								<h3>Login Form</h3><br>
								<div class="form-group">
								<form>
									<div class="forgot">Email</div>
									<input type="email" placeholder="Email Address" required=" " >
									<div class="forgot">Password</div>
									<input type="password" placeholder="Password" required=" " >
									<input type="submit" value="Login">
									<div class="forgot">
										<center><a href="#">Forgot Password?</a></center>
									</div>									
								</form>
								</div>

							</div>



							<div class="col-md-6 top_brand_left">
								<h3>Register Here</h3><br>
								<form>
									<div class="forgot">Email</div>
									<input type="email" placeholder="Email Address" required=" " >
									<div class="forgot">Password</div>
									<input type="password" placeholder="Password" required=" " >
									<input type="submit" value="Register">
									<div><br><center><a href="index.html">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
									</center></div>
								</form>
							</div>
							<!-- </div> -->
						</div>
	                </div>
		          </div>
		        </div>
                <script>
                // Get the modal
                var modal = document.getElementById('id01');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                </script>


                </li>
								</ul>
							</div>
					</nav>
			</div>
		</div>

@section('js')
<script type="text/javascript">

	function signupGanti(){
      document.getElementById("isi-up").innerHTML='<form action="register" method="post"> {{ csrf_field() }} <span class="input input--ichiro"><input class="input__field input__field--ichiro" type="nama" id="input-24" name="Name" placeholder=" " required="" /><label class="input__label input__label--ichiro" for="input-24"><span class="input__label-content input__label-content--ichiro">Nama Lengkap</span></label></span><span class="input input--ichiro"><input class="input__field input__field--ichiro" type="email" id="input-25" name="email" placeholder=" " required="" /><label class="input__label input__label--ichiro" for="input-25"><span class="input__label-content input__label-content--ichiro">email</span></label></span><span class="input input--ichiro"><input class="input__field input__field--ichiro" type="password" id="input-26" name="password" placeholder=" " required="" /><label class="input__label input__label--ichiro" for="input-26"><span class="input__label-content input__label-content--ichiro">password</span></label></span><button type="submit" class="btn btn-warning" style="margin-top:5%">submit</button></form>';
      document.getElementById("signform").innerHTML='<li id="login1" onclick="loginGanti()"><a href="#" style="padding:10%;color:white"><h5>Login</h5></a></li><li id="signup1" class="active" onclick="signupGanti()"><a href="#" style="padding:10%"><h5>Signup</h5></a></li>'
	}

	function loginGanti(){
      document.getElementById("isi-up").innerHTML='<form action="login" method="post"> {{ csrf_field() }} <span class="input input--ichiro"><input class="input__field input__field--ichiro" type="email" id="input-25" name="email" placeholder=" " required="" /><label class="input__label input__label--ichiro" for="input-25"><span class="input__label-content input__label-content--ichiro">email</span></label></span><span class="input input--ichiro"><input class="input__field input__field--ichiro" type="password" id="input-26" name="password" placeholder=" " required="" /><label class="input__label input__label--ichiro" for="input-26"><span class="input__label-content input__label-content--ichiro">Password</span></label></span><button type="submit" class="btn btn-warning" style="margin-top:5%">submit</button></form>';
      document.getElementById("signform").innerHTML='<li id="login1" class="active" onclick="loginGanti()"><a href="#" style="padding:10%;color:white"><h5>Login</h5></a></li><li id="signup1" onclick="signupGanti()"><a href="#" style="padding:10%"><h5>Signup</h5></a></li>'
	}

  $('#signup1').on('click', function(event){
      document.getElementById("isi-up").innerHTML='<form action="registerx" method="POST"> {{ csrf_field() }} <span class="input input--ichiro"><input class="input__field input__field--ichiro" type="nama" id="input-24" name="nama" placeholder=" " required="" /><label class="input__label input__label--ichiro" for="input-24"><span class="input__label-content input__label-content--ichiro">Nama Lengkap</span></label></span><span class="input input--ichiro"><input class="input__field input__field--ichiro" type="email" id="input-25" name="email" placeholder=" " required="" /><label class="input__label input__label--ichiro" for="input-25"><span class="input__label-content input__label-content--ichiro">Email</span></label></span><span class="input input--ichiro"><input class="input__field input__field--ichiro" type="password" id="input-26" name="password" placeholder=" " required="" /><label class="input__label input__label--ichiro" for="input-26"><span class="input__label-content input__label-content--ichiro">Password</span></label></span><button type="submit" class="btn btn-warning" style="margin-top:5%">submit</button></form>';

  });
</script>
@endsection