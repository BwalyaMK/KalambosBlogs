<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog <?= $id ?></title>
    <style>
        body {
    display: flex;
    flex-direction: column;
    align-items: center; 
    background: #283048;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #859398, #283048);
    height: auto; 
    margin: 0;
    color: white; 
    padding: 20px; 
}

h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #fff; 
    text-align: center;
}

.blog-box {
    width: auto; 
    max-width: 80%; 
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
    color: #000;
    font-size: 16px;
    word-wrap: break-word; /* Ensure long words break to fit within the box */
}

.blog-header {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

.blog-content {
    margin-bottom: 15px;
}

.blog-footer {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    color: #555;
    margin-top: 10px;
}


a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

.action-buttons {
    display: flex;
    justify-content: center; 
    gap: 15px; 
    margin-top: 20px;
}

.action-buttons a {
    display: flex;
    justify-content: center; 
    align-items: center; 
    width: 150px; 
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none; 
    border-radius: 6px;
    transition: background-color 0.3s ease;
    text-align: center; 
}

.action-buttons a:hover {
    background-color: #0056b3; 
}
    </style>
</head>
<body>

    <h2>Blog <?= $id ?></h2>

    <div class="blog-box">
    <div class="blog-header">Blog Title</div>
    <div class="blog-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero perspiciatis commodi veniam hic porro aliquam, deserunt dolorum saepe cupiditate quibusdam.</div>
    <div class="blog-footer">
        <span>Created: 2023-12-15 | Updated: 2023-12-17</span>
    </div>
</div>
    <div class="action-buttons">
    <a href="/dashboard/blogs">Back to Blogs</a>
    <a href="/dashboard/editBlog/<?= $id ?>">Edit Blog</a>
</div>

</body>
</html>
