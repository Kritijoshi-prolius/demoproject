<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1000px;
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
            margin-bottom: 15px;
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
   <div class="container">
     
   </div>

       <div class="collapse navbar-collapse" id="collapsibleNavId">
           <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               <li class="nav-item">
                   <a class="nav-link" href="{{url('/')}}">Home</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{url('/register')}}">Register</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{url('/employee')}}">Employee</a>
               </li>
           </ul>
       </div>
   </nav>


    </style>
</head>
<body>
    <form action="{{$url}}" method="post" name="employeeform" id="employeeform">


        @csrf

        <div class="container">
            

                <label for="name">Name</label>
                <input type="text" id="name"  name="name" required value="{{$employee->name}}"/>
    
                <label for="email">Email</label>
                <input type="text" id="email" name="email"  required value="{{$employee->email}}"/>
                
@error('email')
    <span class="text-danger">{{ $message }}</span>
@enderror
    
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required value="{{$employee->gender}}">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="NA">Prefer not to say</option>
                </select>
    
                <label for="address">Address</label>
                <textarea id="address" name="address"  required></textarea value="{{$employee->address}}" >
    
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required value="{{$employee->dob}}"/>
    
                <label for="state">State</label>
                <input type="text" id="state" name="state" required value="{{$employee->state}}"/>
    
                <label for="country">Country</label>
                 <select name="country" id="country" class="form-control"  required value="{{$employee->country}}">
                    <option value="India">India</option>
                    <option value="UK">UK</option></select>
    
                <button type="submit">Register</button>
           </div>
            </form>
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // form has an ID of 'employeeForm' and the email field has an ID of 'email'
        const form = document.getElementById('employeeform');
        const emailField = document.getElementById('email');
        form.addEventListener('submit', function (event) {
            if (!isValidEmail(emailField.value)) {
                alert('Invalid email format');
                event.preventDefault(); // Prevent the form from submitting
            }
        });
        function isValidEmail(email) {
           
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          
            return emailRegex.test(email);
        }
    });

    </script>
</html>
