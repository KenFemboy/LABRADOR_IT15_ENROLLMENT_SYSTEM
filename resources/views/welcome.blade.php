<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    
    <body>
        <div>
            <form action="/register" method="POST">
                @csrf
                <h1>Student Registration</h1>
                <input name="first_name" type="text" placeholder="Enter First Name" required>
                <input name="last_name" type="text" placeholder="Enter Last Name" required>
                <input name="student_number" type="text" placeholder="Enter Student Number" required>

                <input name="email" type="email" placeholder="Enter Email" required>
                <button type="submit">Register</button>

            </form>

            <form action="/register" method="POST">
                @csrf
                <h1>Student Login</h1>
                 <input name="first_name" type="text" placeholder="Enter First Name" required>
                <input name="last_name" type="text" placeholder="Enter Last Name" required>
                <input name="email" type="email" placeholder="Enter Email" required>
                <button type="submit">Login</button>
            
            </form>
        </div>
        


        <form action="/courses" method="POST">
            @csrf
            <button >Go to Courses</button>
        </form>
        
    </body>
</html>
