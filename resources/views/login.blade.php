@extends('layouts.main')

@section('content')
<div class="row" style="position: absolute; width: inherit; justify-content: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
                <form accept-charset="UTF-8" role="form">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                            </label>
                        </div>
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

    @endsection