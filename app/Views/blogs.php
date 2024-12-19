<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>

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
            margin-bottom: 15px;
            color: #fff; 
        }

        .blog-box {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            margin-bottom: 15px;
            color: rgb(19, 19, 19);
        }

        .blog-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .blog-content {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .blog-info {
            font-size: 12px;
            color: #777;
            margin-bottom: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: none;
        }

        .create-blog-button {
            width: 320px; 
            padding: 10px ; 
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center; 
            border: none;
            border-radius: 6px;
            margin-top: 20px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-block; 
        }
  
        .create-blog-button:hover {
            background-color: #0056b3;
        }
        h3.para-2 {
            margin-top: 15px;
            font-size: 20px;
            color: white;
            text-align: center;
        }

        h3.para-2 a {
            color:rgb(255, 255, 255);
            font-weight: bold;
            text-decoration: none;
        }

        h3.para-2 a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <h2>All Blogs</h2>
    
    <a href="/dashboard/createBlog" class="create-blog-button">Create New Blog</a>

    <div class="blog-box">
    <!--Placeholder data, will be replaced when db is running-->
        <div class="blog-title">Blog 1</div>
        <div class="blog-content">This is the content of blog #1.</div>
        <div class="blog-info">Created on: 01/01/2024 | Updated on: 01/10/2024</div>
        <a href="/dashboard/blog/1">Read More</a>
    </div>

    <div class="blog-box">
        <div class="blog-title">Blog 2</div>
        <div class="blog-content">This is the content of blog #2.</div>
        <div class="blog-info">Created on: 01/02/2024 | Updated on: 01/15/2024</div>
        <a href="/dashboard/blog/2">Read More</a>
    </div>

    <div class="blog-box">
        <div class="blog-title">Blog 3</div>
        <div class="blog-content">This is the content of blog #3.</div>
        <div class="blog-info">Created on: 01/03/2024 | Updated on: 01/20/2024</div>
        <a href="/dashboard/blog/3">Read More</a>
    </div>

    <h3 class="para-2"><a href="/dashboard/dashboard">Back to Dashboard</a></h3>

    

</body>
</html>
