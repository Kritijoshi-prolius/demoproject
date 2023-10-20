

<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

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
                    <a class="nav-link" href="{{url('/customer')}}">Customer</a>
                </li>
            </ul>
        </div>
    </nav>
    <form method="POST" action="{{ route('customer.edit', $customer->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $customer->name }}" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $customer->email }}" required>
        <label for="gender">Gender:</label>
        <input type="gender" id="gender" name="gender" value="{{ $customer->gender}}" required>
        <label for="Address">Address:</label>
        <input type="Address" id="Address" name="Address" value="{{ $customer->Address }}" required>
        <label for="dob">dob:</label>
        <input type="dob" id="dob" name="dob" value="{{ $customer->dob}}" required>
        <label for="State">State:</label>
        <input type="State" id="State" name="State" value="{{ $customer->State }}" required>

                <label for="country">Country</label>
                <input type="Country" id="Country" name="Country" value="{{ $customer->Country }}" required>
                <select name="country" id="country" class="form-control" required>
                    <option value="India">India</option>
                    <option value="UK">UK</option></select>

        <label for="Password">Password:</label>
        <input type="Password" id="Password" name="Password" value="{{ $customer->Password }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>