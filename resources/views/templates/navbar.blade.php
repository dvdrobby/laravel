<nav class="row navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="col">
        <div class="container">
        <div class="row">
            <div class="col-md-3 text-left">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">E-COMMERCE</a>
            </div>


            <div class="col-md-2 float-left">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav mr-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('fashion') }}">Fashion</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>

                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" style="width:70%" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-3">
                <div class="row text-right">
                    <div class="col-sm-6">
                        <div class="nav-item" id="icon-wrapper">
                            <a class="nav-link" style="color:cornsilk" href="{{ route('cart') }}">
                                <span>Cart  </span>
                                <span class="fa fa-shopping-cart"></span>
                                <span id="cart-icon" class="badge badge-danger badge-counter">3+</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="nav-item" id="icon-wrapper">
                            <a class="nav-link" style="color:cornsilk" href="{{ route('cart') }}">
                                <span>Guest  </span>
                                <span class="fa fa-user"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

</nav>
