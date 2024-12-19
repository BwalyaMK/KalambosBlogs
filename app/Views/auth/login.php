<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #283048;
            background: linear-gradient(to right, #859398, #283048);
        }

        .login-box {
            width: 360px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
        }

        h1 {
            font-size: 24px;
            color: #283048;
            margin-bottom: 15px;
        }

        form {
            width: 100%;
            margin-top: 15px;
        }

        form label {
            display: block;
            text-align: left;
            font-size: 14px;
            color:rgb(29, 29, 29);
            margin-top: 20px;
        }

        form input {
            width: 350px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            outline: none;
            margin-top: 5px;
            font-size: 14px;
        }

        form input:focus {
            border-color: #007bff;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        p.para-2 {
            margin-top: 15px;
            font-size: 14px;
            color: white;
            text-align: center;
        }

        p.para-2 a {
            color:rgb(76, 162, 255);
            font-weight: bold;
            text-decoration: none;
        }

        p.para-2 a:hover {
            text-decoration: underline;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-box">
        <h1>Login</h1>
        <form action="/auth/login" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>

    <p class="para-2">You don't have an account ka?? <a href="/auth/signup">Sign Up</a> here!</p>
</div>

</body>
</html>
