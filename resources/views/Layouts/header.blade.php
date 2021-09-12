<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="background-image: linear-gradient(to right, green,black); color: #fff;">
    <div class="container-fluid" style="border-style: inset;">
        <a class="navbar-brand logo" href="#" style="color: white;"><img src="{{ URL('images/tech/plplogo.png') }}" alt="PLP Logo" style="width: 50px; height: 50px;">Thesis and Research</a>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item" role="presentation"><a class="nav-link" href="loginform.php" style="color:white;">Sign In</a></li>
        </ul>
    </div>
</nav>
<div>
    <br><br> <br> <br>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
       
    </nav>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-image: linear-gradient(to left, green,#fde8ec); color: #fff;">
        <div class="container"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav"></ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label><input class="form-control search-field" type="search" name="search" id="search-field" style="color:rgb(0,0,0);background-color:#e8e8e8;width:900px;"></div>
                </form><button class="btn btn-dark mr-auto" type="button" style="background-color:rgb(255,255,255);color:rgb(0,0,0);">Search</button></div>
        </div>
    </nav>
</div>
<div>

    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-image: linear-gradient(to left, green,#fde8ec); color: #fff;">
        <div class="container"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" style="margin-right: 125px;" role="presentation"><a class="nav-link" style="color:white;" href="{{ URL('GuestViews/guesteducation') }}">Education</a></li>
                    <li class="nav-item" style="margin-right: 130px;" role="presentation"><a class="nav-link" style="color:white;" href="{{ URL('GuestViews/guestcomputer') }}">Computer</a></li>
                    <li class="nav-item" style="margin-right: 115px;" role="presentation"><a class="nav-link" style="color:white;" href="{{ URL('GuestViews/guestnursing') }}">Nursing</a></li>
                    <li class="nav-item" style="margin-right: 50px;" role="presentation"><a class="nav-link" style="color:white;" href="{{ URL('GuestViews/guesthotelmanagement') }}">Hotel Management</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" style="color:white;" href="{{ URL('GuestViews/guestaccountancy') }}">Accountancy</a></li>
                </ul><span class="navbar-text actions"> </span></div>
        </div>
    </nav>
</div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 










 
 {{-- ----------if there is a Session---------- --}}
 {{-- <div> <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="background-image: linear-gradient(to left, black,green);">
    <div class="container-fluid" style="background-image: linear-gradient(to left, black,green);">
        <a class="navbar-brand logo" href="home.php" style="border-style: inset; color: white; "><img src="{{ URL('images/tech/plplogo.png') }}" alt="PLP Logo" style="width: 50px; height: 50px;">Thesis and Research</a>
    </div>
</nav>
</div>
<div class="row" style="margin:70px  0px 0px 0px;">
    
</div>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="margin:10px 0px 0px 0px;background-color:rgba(255,255,255,0); background-image: linear-gradient(to left, black,green);">
    <div class="container-fluid"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
            id="navcol-1">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" style="color: black; margin-right:10px;" href="{{ URL('SessionViews/home') }}">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" style="color: black; margin-right:10px;" href="{{ URL('SessionViews/education') }}">Education</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" style="color: black; margin-right:10px;" href="{{ URL('SessionViews/computer') }}">Computer</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" style="color: black; margin-right:10px;" href="{{ URL('SessionViews/nursing') }}">Nursing</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" style="color: black; margin-right:10px;" href="{{ URL('SessionViews/hotelmanagement') }}">Hotel Management</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" style="color: black; margin-right:140px;" href="{{ URL('SessionViews/accountancy') }}">Accountancy</a></li>
                
                
                <img class="rounded-circle"src="data:image/jpg;charset=utf8;base64,<?php //echo base64_encode($profilepic); ?>" style="width:40px;height:40px; border-style: solid; margin-right:10px;">
                <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="color: black;" href="#"><?php //echo $studentname ?></a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="profile.php">Profile</a><a class="dropdown-item" role="presentation" href="myfavorites.php">My Favorites</a><div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="logout.php">Log out</a></div>
                </li>
            </ul><span class="navbar-text actions"> </span></div>
    </div>

    <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("navcol-1");
var btns = header.getElementsByClassName("nav-link");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
}
</script>
</nav>

<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="margin:10px 0px 0px 0px;background-color:rgba(255,255,255,0);">
    <form class="form-inline mr-auto" target="_self">
        <div class="form-group"><label for="search-field"></label><input class="form-control search-field" type="search" name="search" id="search-field" style="color:rgb(0,0,0);background-color:#e8e8e8;width:900px; margin-left:150px;"></div>
    </form><button class="btn btn-dark mr-auto" type="button" style="background-color:rgb(255,255,255);color:rgb(0,0,0); margin-left: -100px;">Search</button></div>
</nav> --}}