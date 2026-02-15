<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Enrollment System</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 20px;
            }

            .container {
                background: white;
                border-radius: 10px;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
                max-width: 900px;
                width: 100%;
                padding: 40px;
            }

            .header {
                text-align: center;
                margin-bottom: 40px;
                color: #333;
            }

            .header h1 {
                font-size: 32px;
                margin-bottom: 10px;
                color: #667eea;
            }

            .header p {
                color: #666;
                font-size: 16px;
            }

            .success-message {
                background: #d4edda;
                color: #155724;
                padding: 15px;
                border-radius: 5px;
                margin-bottom: 20px;
                border-left: 4px solid #28a745;
            }

            .forms-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 30px;
                margin-bottom: 30px;
            }

            .form-section h2 {
                font-size: 22px;
                margin-bottom: 20px;
                color: #333;
                text-align: center;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            input {
                padding: 12px 15px;
                margin-bottom: 12px;
                border: 2px solid #e0e0e0;
                border-radius: 5px;
                font-size: 14px;
                transition: border-color 0.3s;
            }

            input:focus {
                outline: none;
                border-color: #667eea;
                box-shadow: 0 0 5px rgba(102, 126, 234, 0.1);
            }

            button {
                padding: 12px 20px;
                background: #667eea;
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
                transition: background 0.3s;
                margin-top: 10px;
            }

            button:hover {
                background: #5568d3;
            }

            .action-buttons {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 15px;
                margin-top: 30px;
            }

            .action-buttons form {
                display: flex;
            }

            .action-buttons button {
                width: 100%;
                background: #764ba2;
                padding: 15px;
                font-size: 16px;
            }

            .action-buttons button:hover {
                background: #653a82;
            }

            @media (max-width: 768px) {
                .forms-grid {
                    grid-template-columns: 1fr;
                    gap: 20px;
                }

                .action-buttons {
                    grid-template-columns: 1fr;
                }

                .container {
                    padding: 25px;
                }

                .header h1 {
                    font-size: 24px;
                }
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <div class="header">
                <h1>Student Enrollment System</h1>
                <p>Manage your course enrollments easily</p>
            </div>

            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <div class="forms-grid">
                <div class="form-section">
                    <h2>Register</h2>
                    <form action="/register" method="POST">
                        @csrf
                        <input name="first_name" type="text" placeholder="First Name" required>
                        <input name="last_name" type="text" placeholder="Last Name" required>
                        <input name="student_number" type="text" placeholder="Student Number" required>
                        <input name="email" type="email" placeholder="Email Address" required>
                        <input name="password" type="password" placeholder="Password" minlength="8" required>
                        <button type="submit">Register</button>
                    </form>
                </div>

                <div class="form-section">
                    <h2>Login</h2>
                    <form action="/login" method="POST">
                        @csrf
                        <input name="email" type="email" placeholder="Email Address" required>
                        <input name="password" type="password" placeholder="Password" required>
                        <button type="submit">Login</button>
                    </form>
                </div>
            </div>

            <div class="action-buttons">
                <form action="/courses" method="GET">
                    <button type="submit">View Courses</button>
                </form>

                <form action="/students" method="GET">
                    <button type="submit">View All Students</button>
                </form>
            </div>
        </div>
    </body>
</html>
