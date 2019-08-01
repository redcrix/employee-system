<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag to attach registration css---------->
    <link href="{{ asset('css/style.css') }}"a rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}">
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control @error('Address') is-invalid @enderror" value="{{ old('address') }}"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Email</label>
								<input type="text" placeholder="Enter Email Here.." class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Password</label>
								<input type="password" placeholder="Enter Password  Here.." class="form-control @error('password') is-invalid @enderror"  value="{{ old('password') }}">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Confirm Password</label>
								<input type="password" placeholder="Enter To Confirm Password" class="form-control"  value="{{ old('password') }}"  >
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Designation </label>
								<input type="text" placeholder="Enter Designation Here.." class="form-control @error('designation') is-invalid @enderror">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Experience</label>
								<input type="text" placeholder="Enter Company Name Here.." class="form-control @error('experience') is-invalid @enderror" value="{{ old('salary') }}">
							</div>	
						</div>
						<div class="form-control @error('gender') is-invalid @enderror" value="{{ old('salary') }}">
						<label>gender</label>
						<input type="radio"  class="form-control" > Male
							<input type="radio"  class="form-control" >Female
								<input type="radio"  class="form-control" >Others
					</div>	
						<div class="form-group">
						<label>Joining_date </label>
						<input type="Date" placeholder="Enter Email Address Here.." class="form-control @error('joining_date') is-invalid @enderror"  value="{{ old('joining_date') }}">
					</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" placeholder="Enter Phone Number Here.." class="form-control @error('obile') is-invalid @enderror"  value="{{ old('mobile') }}">
					</div>
					<div class="form-group">
						<label>gender</label>
						<input type="radio"  class="form-control @error('Mobile') is-invalid @enderror"  value="{{ old('gender) }}">
					</div>
					<div class="form-group">
						<label>DATE OF Birth </label>
						<input type="Date" placeholder="Enter Email Address Here.." class="form-control @error('dob') is-invalid @enderror" value="{{ old('dob') }}">
					</div>		
					<div class="form-group">
						<label>Employee Id </label>
						<input type="" placeholder="Enter Employee identity Address Here.." class="form-control @error('mobile') is-invalid @enderror" value="{{ old('emp_id') }}">
					</div>
					<div class="form-group">
						<label>Salary </label>
						<input type="Date" placeholder="Enter Email Address Here.." class="form-control @error('salary') is-invalid @enderror" value="{{ old('salary') }}">
					</div>	
					
					<button type="button" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
