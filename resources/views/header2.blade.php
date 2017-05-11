
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="{{url('home')}}">Bee-Pro</a></h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
			<!--yang ditambah ini-->
				<a href="{{url('makeup-face')}}">
			<!--batasan yang ditambah diatas-->
				<input type="search" name="Search" placeholder="#Search with Hashtag" required="">
					<button type="submit" class="btn btn-default search" aria-label="Left Align">
						<i class="fa fa-search" aria-hidden="true"> </i>
					</button>
					<div class="clearfix"></div>
				</a>
		<!--batas diganti-->

				
			</form>
		</div>
			
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
														<li><a href="{{url('makeup-face')}}">Face</a></li>
														<li><a href="{{url('makeup-lips')}}">Lips</a></li>
														<li><a href="{{url('makeup-eyes')}}">Eyes</a></li>
														<li><a href="{{url('makeup-kits')}}"> Make Up Kits </a></li>
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
														<li><a href="{{url('skincare-cleanser')}}">Cleanser</a></li>
														<li><a href="{{url('skincare-moisturizer')}}">Moisturizer</a></li>
														<li><a href="{{url('skincare-lipcare')}}">Lip Care</a></li>
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
														<li><a href="{{url('personalcare-bath')}}">Bath</a></li>
														<li><a href="{{url('personalcare-body')}}">Body</a></li>
														<li><a href="{{url('personalcare-handsfeets')}}">Hands & Feet</a></li>
													</ul>
												</div>
												
											</div>
										</ul>
									</li>
									<li><a href="{{url('about-us')}}">About Us</a></li>
									<li><a href="{{url('contact-us')}}">Contact Us</a></li>
									
									<li><a href="{{url('newreview')}}">New Review</a></li>
									 	
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