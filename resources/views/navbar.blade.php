<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}"> <img class="logo" src="{{asset('img/favicon.jpg')}}" height="40"> {{config('app.name' , 'فكر بغيرك')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="btn  ml-2 btn-primary" href="{{url('/data/create')}}" >Create</a></li>
            <li class="nav-item">
                <a class="btn ml-2 btn-warning" href="{{url('/login')}}" >Login</a></li>


        </ul>
    </div>
</nav>
