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
                <form accept-charset="UTF-8" role="form" method="post" action="{{route('login')}}">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Example" name="name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>

                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" style="margin-top: 20px">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

    @endsection