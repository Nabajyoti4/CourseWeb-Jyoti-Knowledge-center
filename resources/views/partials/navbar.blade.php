<nav class="navbar navbar-expand-lg p-1 navbar-dark fixed-top shadow" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="">
            <img src="{{asset('images/69.png')}}" style="height:60px;" alt=""/></a>
        <button class="navbar-toggler navbar-toggler-right text-black-50" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">

            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto  font-weight-bold padd">
                <li class="nav-item  "><a class="nav-link" style="color:black" href="{{route('welcome')}}">Home</a></li>
                <li class="nav-item "><a class="nav-link" style="color:black" href="#about">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color:black" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Courses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($courses as $course)
                            <a class="dropdown-item" style="color:black" href="{{route('course',$course->id)}}">{{$course->title}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" style="color:black" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
