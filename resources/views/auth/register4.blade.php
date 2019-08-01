<!DOCTYPE html>
<html lang="en">
	<title>Employee</title>
	<head>
		 <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('css/registerstyle.css') }}"a rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
      </script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="POST" action="{{ route('register') }}">
                        @csrf
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
							</div>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}">
							</div>
						</div>	
						<div class="form-group">
						<label>Username</label>
						<input type="text" placeholder="Enter Username Here.." class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
					    </div>
					   </div>
						<div class="form-group">
						<label>Email Address</label>
						<input type="text" placeholder="Enter Email Address Here.." class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
					    </div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3"class="form-control @error('first_name') is-invalid @enderror" value="{{ old('address') }}"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Employee ID</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control @error('emp_id') is-invalid @enderror" value="{{ old('first_name') }}">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Password</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Confirm Password</label></label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>D.O.B</label>
								<input type="date" placeholder="Date Of Birth" class="form-control @error('dob') is-invalid @enderror" value="{{ old('dob') }}">
							</div>	
							<div class="row">
							<div class="col-sm-6 form-group">
								<label>Gender</label>
								<input type="radio" placeholder="Select Gender Here.." class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}">Male
								<input type="radio" placeholder="Select Gender Here.." class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}">Female
								<input type="radio" placeholder="Select Gender Here.." class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}">Others
							</div>	
							<div class="row">
							<div class="col-sm-6 form-group">
								<label>Salary</label>
								<input type="Text" placeholder="Enter Salary" class="form-control @error('salary') is-invalid @enderror" value="{{ old('salary') }}">
							</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Designation</label>
								<input type="text" placeholder="Enter Designation Here.." class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation') }}">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Experience </label>
								<input type="text" placeholder="Enter Experience In Months Here.." class="form-control @error('experience') is-invalid @enderror" value="{{ old('experience') }}">
							</div>	
						</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" placeholder="Enter Phone Number Here.." class="form-control @error('mobile invalid @enderror" value="{{ old('mobile') }}">
					</div>		
					
					<div class="form-group">
						<label>Joining Date</label>
						<input type="Date" placeholder="Enter Website Name Here.." class="form-control @error('joining_date') is-invalid @enderror" value="{{ old('joining_date') }}">
					</div>
					<button type="button" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
	</body>
	</html>
