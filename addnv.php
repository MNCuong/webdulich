<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thêm nhân viên</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
	<link href="style.css" rel="stylesheet">
	
	
</head>

<body>
	
	<!-- The fixed navbar will overlay your other content, unless you add padding to the bottom of the <body>. Tip: By default, the navbar is 50px high.  -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success" type="button">Search</button>
      </form>
  </div>
</nav>
	

	
	
	
	
	
	<div class="container">
		<div class="row" style="margin-top: 100px;"  >
			<div class="col-sm-4 offset-sm-4" >					
				<form style="border: solid 1px black; padding: 12px; border-radius: 8px">
				  <div class="form-group row mb-3" >
					<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
					</div>
				  </div>
				  <div class="form-group row mb-3">
					<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
					  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
					</div>
				  </div>
				  <div class="form-group row mb-3">
					<label for="inputPassword3" class="col-sm-2 col-form-label">Date</label>
					<div class="col-sm-10">
					  <input type="datetime-local" class="form-control" id="inputPassword3" >
					</div>
				  </div>
				  <fieldset class="form-group">
					<div class="row">
					  <legend class="col-form-label col-sm-3 pt-0">Giới tính</legend>
					  <div class="col-sm-9">
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Nam" checked>
						  <label class="form-check-label" > Nam </label>
						</div>
						
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Nu">
						  <label class="form-check-label" > Nữ </label>
						</div>
						
					  </div>
					</div>
				  </fieldset>
				  <div class="form-group row mb-3">
					  <label class="col-sm-2 col-form-label">Khoa</label>
							<div class="col-sm-10">
					  			<select name="khoa"  class="form-control" id="inputcombobox1">
							  <option value="CNTT">CNTT</option>
							  <option value="Kinhte">Kinh tế</option>
							  <option value="GTVT">GTVT</option>
							  <option value="Dientu">Điện tử</option>
							</select>
					  
					  		</div>
				  </div> 
				  <div class="form-group row mb-3">
					  <label  class="col-sm-2 col-form-label">Lớp</label>
						<div class="col-sm-10">
						<select name="lop"  class="form-control" id="inputcombobox2">
						  <option value="">7DCTT24</option>
						  <option value="">72DCTT22</option>
						  <option value="">72DCTT23</option>
						  <option value="">72DCTT21</option>
						</select>
						</div>
					  
				  </div> 
				  <div class="form-group row mb-3">
					<label class="col-sm-2 col-form-label">IMG</label>
					<div class="col-sm-10">
					  <input type="file" class="form-control" id="img" placeholder="Note">
					</div>
					</div>
				  <div class="form-group row mb-3">
					<label class="col-sm-2 col-form-label">Note</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputNote3" placeholder="Note">
					</div>
					  </div>
				  <div class="form-group row">
					<div class="col-sm-12 offset-4">
					  <button type="submit" class="btn btn-primary" id="signin" onClick="myfunction()" >Sign in</button>
					  <button type="reset" class="btn btn-primary" >Reset</button>
					</div>
				  </div>
				</form>
				<script>
				function myfunction(){				
					alert("Them thanh cong");
				}
				
				</script>
	
					
				
				
				
					
					
					
			</div><!--Het col-6-->
		</div><!--Het row-->
	</div><!--Het container-->
	

	

	
</body>
</html>