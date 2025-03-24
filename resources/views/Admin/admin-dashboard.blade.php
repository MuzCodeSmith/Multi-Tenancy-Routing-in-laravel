<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }

        body {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            padding: 10px;
            margin: 5px 0;
            background-color: #444;
            cursor: pointer;
        }
        .sidebar ul li a{
            color: white;
            text-decoration: none;
        }

        .sidebar ul li:hover {
            background-color: #555;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #0D92F4;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div style="position:absolute; right: 30px; top:30px" >
        @if(Session::has('success'))
            <p class="alert alert-success" role="alert"  >{{ Session::get('success') }}</p>
        @endif
    </div>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li>Home</li>
            <li>Profile</li>
            <li>Settings</li>
            <li>
                <a  href="{{route('admin.logout')}}" >Logout</a>
            </li>
        </ul>
    </div>
    <div class="content">
    <div class="header">
    Hello, {{ Auth::check() ? Auth::user()->name : 'Guest' }}! Welcome to Dashboard
    </div>
        <p>This is a simple dashboard layout with a sidebar.</p>
    </div>
</body>
</html>
