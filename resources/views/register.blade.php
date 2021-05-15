<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Form </title>
    {{-- <link href="{{url('assets/css/styles.css')}}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
    </script>
    <style>
        body {
            padding: 0;
            margin: 0;

        }

        .container {
            background-color: #dcf4ff;
            background-image: url("https://images.pexels.com/photos/1363876/pexels-photo-1363876.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            width: 100%;
            height: 650px;
            border-radius: 8px;
            box-shadow: 0 0 20px black;
            background-repeat: no-repeat;

        }
      
        .card {
            background-color:#faf7f1;
           margin-left: 500px;
           font-size: 18px;
           width:450px;
        }
        .card-header{
          background-color: rgb(34, 32, 32);
          font-family: Arial;
          color:rgb(250, 240, 236);
           text-align: center;
           font-size: 20px;
           height:30px;

        } 
        .form-control {
        border-radius: 0;
        width: 80%;
        margin-left: 20px;
    }
    .form-check-input{
        margin-left:20px;
        position:relative;
    }
    .btn.btn-primary {
        margin-left: 40px;
        position: relative;
        cursor: pointer;
        font-size: 18px;
        font-family: 'Roboto Slab', serif;
        border-radius: 5px;
        border: none;
        color: white
    }
    #create{
        margin-left:20px;
        width:90%
    }
   #footer{
       margin-left:80%;
       font-size: 16px;
       color:white;
   }
   .text-muted{
    color:white;
   }

    </style>
</head>

<body >
    <div id="layoutContent">
        <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ url('post-register') }}" method="POST" id="formContainer">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label class="col-md-4 col-form-label text-md-right" for="inputFirstName">Full Name</label>
                                            <input class="form-control" id="inputFirstName" type="text" name="name"
                                                placeholder="Enter Full Name" />
                                            @if ($errors->has('name'))
                                                <span class="error">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 col-form-label text-md-right" for="inputEmailAddress">Email</label>
                                            <input class="form-control" id="inputEmailAddress" type="email"
                                                aria-describedby="emailHelp" name="email"
                                                placeholder="Enter email address" />
                                            @if ($errors->has('email'))
                                                <span class="error">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 col-form-label text-md-right" for="inputPassword">Password</label>
                                            <input class="form-control" id="inputPassword" type="password"
                                                name="password" placeholder="Enter password" />
                                            @if ($errors->has('password'))
                                                <span class="error">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block" type="submit" id="create">Create
                                                Account</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="btn btn-link"><a href="{{ url('login') }}">Have an account? Go to login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2019</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ url('assets/js/scripts.js') }}"></script>
</body>

</html>
