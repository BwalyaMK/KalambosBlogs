<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #283048;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #859398, #283048);
            height: 100vh;
            margin: 0;
            color: white;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a, .home-button {
            display: block;
            width: 300px;
            padding: 15px;
            background-color: #007bff;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        ul li a:hover, .home-button:hover {
            background-color: #0056b3;
        }

        .home-button {
            margin-top: 15px; 
        }
    </style>
</head>
<body>

    <h2>This here is the Dashboard innit</h2>

    <ul>
        <li><a href="/dashboard/blogs">View Blogs</a></li>
        <li><a href="/dashboard/createBlog">Create Blog</a></li>
    </ul>

    
    <a href="/" class="home-button">Home</a>

</body>
</html>
