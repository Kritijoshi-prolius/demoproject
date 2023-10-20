<meta name="viewport" content="width=device-width, initial-scale=1.0">
<h2>Add an Employee</h2>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
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
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
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
        
        <form method="POST" action="{{ route('employee.store') }}">
            @csrf
            
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>
        
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
               
            </div>
            

            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="NA">Prefer not to say</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" class="form-control" rows="2" value="{{ old('address') }}" required></textarea>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control" min="2000-01-01" max= "2020-12-12" required>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" name="state" id="state" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <select name="country" id="country" class="form-control" required>
                    <option value="India">India</option>
                    <option value="UK">UK</option></select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control"  required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
