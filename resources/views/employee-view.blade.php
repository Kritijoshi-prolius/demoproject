<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee  List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1faafa;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            padding: 20px 0;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #041120;
        }
        table th {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            
            
        }
        button{
            background-color: #c7dcc8; 
          
                    padding: 10px 20px;
            transition-duration: 0.4s;
          }
          
          button:hover {
            background-color: #4CAF50; 
            color: white;
          }
</style>
</head>
<body>
    <h1>EmployeeList</h1>
    <div class="container">
        <div class="row m-2">
    <form action=""class = "col-9">
        <div class="form-group">
       
    </form>
    
            <style>    
                .blue-button {
                    background-color: rgb(21, 125, 160);
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                    border-radius: 4px;
                }
            </style>
    <div class="form-group">
    <input type="search" id="search" name="search"  placeholder="Search by name"  value="{{ request('search') }}">
        <button class="btn primary" id="searchbtn">Search</buttton></a>
        
    </div>  
    

    <button >
    <a href="{{url()->previous()}}"  id="clear-button" class="btn primary">Refresh</a></button>

    <table> 
        <a href="{{route('employee.create')}}">
            <button class="btn btn-danger">Add</buttton></a>
        
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>DOB</th>
                <th>State</th>
                <th>Country</th>
                <th> Action </th>
                <th> </th>  
            </tr>
        </thead>
        <tbody id= "tbodyid">
            @foreach($employees as $employee)
            <tr>
            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->gender}}</td>
            <td>{{$employee->address}}</td>
            <td>{{$employee->dob}}</td>
            <td>{{$employee->state}}</td>
            <td>{{$employee->country}}</td>
        </td>
        <td>
        <a href="{{route('employee.delete', ['id' => $employee->id])}}">
            <button class="btn btn-danger">Delete</buttton></a>
            </td>
            <td>
                <a href="{{route('employee.edit', ['id' => $employee->id])}}">
                    <button class="btn btn-danger">Edit</buttton></a>
                    </td>
</tr> 
@endforeach

        </tbody>
    </table>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    //makes the document ready for actions
    $(document).ready(function () { 


        
      
      const url = "{{route('employee.search')}}";
      // displays data to html table
      function renderTable(dataArray) {
      var tbody = $('#tbodyid');
      tbody.empty(); 
      dataArray.forEach(function(employee) {
        var row = $('<tr>');
        row.append($('<td>').text(employee.name));
        row.append($('<td>').text(employee.email));
        row.append($('<td>').text(employee.gender));
        row.append($('<td>').text(employee.address));
        row.append($('<td>').text(employee.dob));
        row.append($('<td>').text(employee.state));
        row.append($('<td>').text(employeer.country));
          
      
         var deleteButton = $('<a>').attr('href', 'employee/delete/'  + employee.id)
            .append($('<button>').addClass('btn btn-danger').text('Delete'));                             
        var actionCell = $('<td>').addClass('delete-cell');
        actionCell.append(deleteButton);
        row.append(actionCell);
    
     
        var actionCell = $('<td>').addClass('edit-cell');
        var editButton = $('<a>').attr('href', '/employee/edit/' + employee.id)
            .append($('<button>').addClass('btn btn-danger').text('Edit'));
        actionCell.append(editButton);
        row.append(actionCell);
        tbody.append(row);
  
      });
    }

        $('#searchbtn').on('click', function (e) {
            e.preventDefault()
           const searchTerm = $('#search').val(); 
            
            $.ajax({
            
               url:"{{route('employee.search')}}",
               
                
                method: 'GET',
                data: { search: searchTerm },
              
                success: function (data) {
                    $('#search').html(data);
                  
                    renderTable(data);
                    },
                 
                error: function (error) {
                    console.error('Error:', error);
            }
            
            });
        });
    });
</script>
</html>




