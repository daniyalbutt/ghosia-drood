<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Account</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,body { 
        	height: 100%; 
        }
        
        .global-container{
        	height:100%;
        	display: flex;
        	align-items: center;
        	justify-content: center;
        	background-color: #f5f5f5;
        }
        
        form{
        	padding-top: 10px;
        	font-size: 14px;
        	margin-top: 30px;
        }
        
        .card-title{ font-weight:300; }
        
        .btn{
        	font-size: 14px;
        	margin-top:20px;
        }
        
        
        .login-form{ 
        	width:330px;
        	margin:20px;
        }
        
        .sign-up{
        	text-align:center;
        	padding:20px 0 0;
        }
        
        .alert{
        	margin-bottom:-30px;
        	font-size: 13px;
        	margin-top:20px;
        }
    </style>
</head>

<body>
    <div class="global-container">
    	<div class="card login-form">
    	    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p class="mb-0">{{ $message }}</p>
            </div>
            @endif
        	<div class="card-body">
        		<h3 class="card-title text-center">Delete Account</h3>
        		<div class="card-text">
        			<!--
        			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
        			<form method="post" action="{{ route('account.delete') }}">
        			    @csrf
        				<!-- to error: add class "has-danger" -->
        				<div class="form-group">
        					<label for="exampleInputEmail1">User Name</label>
        					<input type="text" class="form-control form-control-sm" name="name" required autocomplete="off" >
        				</div>
        				<div class="form-group">
        					<label for="exampleInputPassword1">Password</label>
        					<input type="password" class="form-control form-control-sm" name="password" required autocomplete="off" >
        				</div>
        				<button type="submit" class="btn btn-danger btn-block">Delete</button>
        			</form>
        		</div>
        	</div>
        </div>
    </div>

</body>

</html>
