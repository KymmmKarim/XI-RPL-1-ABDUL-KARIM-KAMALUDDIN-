<?php
// You can use PHP to include common elements or set variables if needed
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        /* Basic reset and styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #e9ecef; /* Light background color for the entire page */
        }

        /* Header styling */
        .header {
            background-color: #007BFF; /* Bright blue background color */
            color: #fff; /* White text color */
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow below the header */
        }

        /* Main content area styling */
        .main-content {
            display: flex;
            padding: 20px;
            gap: 20px; /* Space between sidebar and content */
        }

        /* Sidebar styling */
        .sidebar {
            background-color: #fff; /* White background color */
            padding: 20px;
            width: 250px; /* Fixed width for sidebar */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for sidebar */
            border-radius: 8px; /* Rounded corners for the sidebar */
        }

        .sidebar h2 {
            margin-top: 0;
            color: #007BFF; /* Blue color for sidebar heading */
        }

        .sidebar ul {
            list-style: none; /* Remove default list styling */
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px; /* Space between list items */
        }

        .sidebar ul li a {
            text-decoration: none; /* Remove underline from links */
            color: #333; /* Dark grey color for links */
            font-weight: bold;
        }

        .sidebar ul li a:hover {
            color: #007BFF; /* Change link color on hover */
            text-decoration: underline; /* Underline link on hover */
        }

        /* Content area styling */
        .content {
            flex: 1;
            background-color: #fff; /* White background color */
            padding: 20px;
            border-radius: 8px; /* Rounded corners for the content area */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for content area */
        }

        /* Footer styling */
        .footer {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 15px;
            position: fixed;
            width: 100%;
            bottom: 0;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow above the footer */
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Halaman Utama</h1>
    </div>

    <div class="main-content">
        <div class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="profilabdul.php">Profile</a></li>
                <li><a href="anotherpage.php">Another Page</a></li>
            </ul>
        </div>

        <div class="content">
            <h2>Konten Utama</h2>
            <p>Selamat datang di halaman utama. Ini adalah area konten utama di mana Anda dapat menambahkan informasi atau fitur tambahan.</p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Your KreeM</p>
    </div>
</body>
</html>