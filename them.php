<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Them nhan vien</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
</head>

<body style="background-image: url(https://th.bing.com/th/id/OIP.QcbKF_LEEriOTLDTaWQ4KAHaFj?pid=ImgDet&rs=1);background-repeat: no-repeat;background-size: cover; ">
	
	
	
	
	
	
	<form action="demoadd.php" method="POST" >
		<div class="container-fluid col-sm-4 mt-5 " style=" padding: 12px;border-radius: 8px; border: solid 2px; background-image: url(https://th.bing.com/th/id/OIP.QcbKF_LEEriOTLDTaWQ4KAHaFj?pid=ImgDet&rs=1);background-repeat: no-repeat;background-size: cover; color: #0A0808">
		<form >
	  	<div class="form-group  " >
			<label for="exampleInputEmail1">Name</label>
			<input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name" required >
		</div>
	  	<div class="form-group">
		<label for="exampleInputPassword1">Giới tính</label>
		  
		  
		  <fieldset class="form-group ">
    <div class="row">
      
      <div class="col-sm-10">
        <div class="form-check "  >
          <input class="form-check-input" type="radio" name="gioitinh" id="gridRadios1" value="Nam" >
          <label class="form-check-label"  for="gridRadios1"> Nam </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gioitinh" id="gridRadios2" value="Nu">
          <label class="form-check-label" for="gridRadios2"> Nữ </label>
        </div>
        
      </div>
    </div>
  </fieldset>
	  </div>
		 <div class="form-group">
			<label for="exampleInputEmail1">Ngày sinh</label>
			<input name="ngaysinh" type="date" class="form-control" id="exampleInputEmail1"  required >  
		 </div>
		<div class="form-group">
			<label for="exampleInputEmail1">Địa chỉ</label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Địa chỉ" name="diachi" required >
		</div>
		<div class="form-group">
			<label>
				Chức vụ
			</label>
			<select name="chucvu" id="" class="form-control ">
				<option value="Admin">Admin</option>
				<option value="Nhân viên">Nhân viên</option>
			</select>
		</div>
			
	  		
				<button type="submit" class="btn btn-primary " style="margin-left: 40%">Submit</button>
			
	</form>
	
	</form>
</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		

	
	
	
	

	
	
</body>
</html>