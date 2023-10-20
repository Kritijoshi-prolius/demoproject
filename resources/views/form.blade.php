<!DOCTYPE html>
<head>   
 
    <title>Welcome!</title>
    
    <style>
       
        .navbar {
            background-color: #258edf;
            color: rgb(0, 0, 0);
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
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
      
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">HOME</a>
        

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/employee">Employee</a>
                </li>
            </ul>
        </div>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* Basic CSS styling for the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 10px;
            background-color: #fffbfb;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select,
        textarea,
        input[type="date"] {
            width: 1000px;
            padding: 5px;
            margin-bottom: 25px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        select {
            appearance: none;
            padding: 10px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="{{ url('/') }}/register" method="POST">
            @csrf

            <label for="name">Name</label>
            <input type="text" id="name" name="name" style=" text-transform: capitalize "  required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email"style=" text-transform: capitalize "  required>

            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="NA">Prefer not to say</option>
            </select>


            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        
        @error('password_confirmation')
            <span class="text-danger">{{ $message }}</span>
        @enderror


            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
