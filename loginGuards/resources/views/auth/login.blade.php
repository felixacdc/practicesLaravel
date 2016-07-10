<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">Menu</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('/home') }}">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/auth/login') }}">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- resources/views/auth/login.blade.php -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <br><br><br>
                <form method="POST" action="/auth/login" class="form-horizontal">

                    <fieldset>
                        <legend>Login</legend>

                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                            <input type="password" name="password" class="form-control" id="password">
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</body>
</html>