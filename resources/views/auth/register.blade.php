<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{ asset('css/registerstyle.css') }}"a rel="stylesheet">
</head>
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container">
	
    <h1 class="heading"> Employee Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="POST" action="{{ route('register') }}">
                        @csrf
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control @error('first_name') is-invalid @enderror"  value="{{ old('first_name') }}">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}">
							</div>
						</div>		
						<div class="form-group">
								<label>Username</label>
								<input type="text" placeholder="Enter Username Here.." class="form-control @error('username') is-invalid @enderror"  value="{{ old('username') }}">
							</div>
						<div class="form-group ">
						       <label>Email Address</label>
						       <input type="email" placeholder="Enter Email Address Here.." class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
					   </div>					  				
						
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" placeholder="Enter Password Here.." class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
							</div>	
							<div class="col-sm-6 form-group">
								<label> Confirm Password</label>
								<input type="password" placeholder="Enter Confirmed Password Here.." class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
							</div>			
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control @error('address') is-invalid @enderror"   value="{{ old('address') }}"></textarea>
						</div>
						<div class="form-group">
								<label>Experience</label>
								<input type="text" placeholder="Enter Experience Here.." class="form-control @error('experience') is-invalid @enderror" value="{{ old('experience') }}">
							</div>	
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Designation</label>
								<input type="text" placeholder="Enter Designation Here.." class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation') }}">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Date Of Birth </label>
								<input type="date" placeholder="Enter Company Name Here.." class="form-control @error('dob') is-invalid @enderror" value="{{ old('dob') }}">
							</div>	
						</div>		
						<div class="form-group">
						       <label>Employee ID</label>
						       <input type="text" placeholder="Enter Employee Id Here.." class="form-control @error('emp_id') is-invalid @enderror" value="{{ old('emp_id') }}">
					   </div>	
					   <div class="row">
					   <div class="col-sm-6 form-group">
							<label>Joining Date</label>
							<input type="date" placeholder="Enter Joining Date Here.." class="form-control @error('joining_date') is-invalid @enderror" value="{{ old('joining_date') }}">
						</div>					
					<div class="col-sm-6 form-group">
						<label>Mobile Number</label>
						<input type="text" placeholder="Enter Mobile Number Here.." class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}">
					</div>		
					</div>	
					<div class="row">
					<div class="col-sm-6 form-g form-group" >
						<label>Gender</label>
						<select  class="form-control @error('gender') is-invalid @enderror " value="{{ old('gender') }}">
						<option>-------------------------select---------------------</option>
						<option>Male</option>
						<option>Female</option>
						<option>Others</option>
						</select>
					</div>
					<div class="col-sm-6 form-g form-group">
						<label>Salary</label>
						<input type="text" placeholder="Enter Salary Here.." class="form-control @error('first_name') is-invalid @enderror" value="{{ ('salary') }}">
					</div>
					</div>
					<div class="col-sm-6 form-g form-group">
						<label>Employee Image</label>
						<input type="file" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}"><br><input name="Upload Now" type="submit" value="Upload Image">
					</div>
					</div>
					<div class="col-sm-6 form-g form-group">
					<button type="submit" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
	</body>
</html>
