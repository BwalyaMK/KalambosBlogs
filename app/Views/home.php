<!DOCTYPE html>
<html>
<head>
    <title>Kalambo's Blogs - Home</title>
    <style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    body {
        display: flex;
        flex-direction: column; 
        align-items: flex-start; 
        background: #283048;
        background: linear-gradient(to right, #859398, #283048);
    }

    header {
        width: 97%; 
        background-color: #283048;
        padding: 10px 20px;
        color: white;
    }

    h1 {
        margin: 0;
    }

    .button-container {
        display: flex;
        justify-content: center; 
        gap: 20px; 
        width: 100%; 
        margin-top: 100px; 
    }

    .btn {
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 25px;
        background-color: #007bff; 
        color: white;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.3s ease;
        text-align: center;
    }

    .btn:hover {
        background-color: #0056b3; 
        transform: scale(1.05); 
    }

    .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: auto;
}

.navbar h1 {
    margin: 0;
    font-size: 24px;
}

.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 15px; 
}

.navbar li {
    display: inline;
}

.navbar a {
    text-decoration: none;
    color: white;
    font-size: 16px;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.navbar a:hover {
    background-color: #007bff; 
    color: white;
}
</style>

</head>
<body>
<header>
    <nav class="navbar">
        <h1>Kalambo's Blogs</h1>

        <?php if (session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>
    
        <ul>
            <li><a href="/auth/login">Logout</a></li>
        </ul>
    </nav>
</header>

    <div class="button-container">
    <a href="/dashboard/dashboard" class="btn">Go to Dashboard</a>
        
    </div>

</body>
</html>
