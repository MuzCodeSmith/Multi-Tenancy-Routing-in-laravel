<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

        .sidebar ul li:hover {
            background-color: #555;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #04AA6D;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li>Home</li>
            <li>Profile</li>
            <li>Settings</li>
            <li>
                <a href="<?php echo e(route('teacher.logout')); ?>">Logout</a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="header">
            Hello, <?php echo e(Auth::check() ? Auth::user()->name : 'Guest'); ?>! Welcome to Dashboard
        </div>
        <p>This is a simple dashboard layout with a sidebar.</p>
    </div>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\auth-app\resources\views/Teacher/teacher-dashboard.blade.php ENDPATH**/ ?>