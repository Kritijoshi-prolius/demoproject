<!DOCTYPE html>
<html>
<head>
    <title>Welcome!</title>
    
    <style>
       
        .navbar {
            background-color: #258edf;
            color: white;
        }

      
        .navbar .nav-link {
            color: white;
        }

       
        .nav-item.active {
            background-color: #258edf;
        }

        .navbar-nav .nav-item {
            margin-right: 0 px;
        }

        .navbar-nav .nav-item:hover {
            background-color: #2c69ad;
        }

       
        .navbar-nav .nav-link {
            text-decoration: aliceblue;
        }
    </style>
</head>
<body>

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/register')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/employee')}}">Employee </a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
