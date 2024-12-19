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
    }

    .signup-box {
        width: 360px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        text-align: center;
    }

    h1 {
        font-size: 24px;
        color: #283048;
        margin-bottom: 15px;
    }

    h4 {
        font-size: 14px;
        color:rgb(19, 19, 19);
        margin-top: 20px;
    }

    h4 a {
        color: #007bff;
        text-decoration: none;
    }

    h4 a:hover {
        text-decoration: underline;
    }

    form {
        width: 100%;
        margin-top: 15px;
    }

    form label {
        display: block;
        text-align: left;
        font-size: 14px;
        color:rgb(19, 19, 19);
        margin-top: 12px;
    }

    form input {
        width: 100%;
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

    .flash-message {
        margin: 15px 0;
        font-size: 14px;
    }

    .flash-message p {
        margin: 0;
    }

    .flash-message ul {
        padding-left: 20px;
        text-align: left;
    }

    p.para-2 {
        margin-top: 15px;
        font-size: 14px;
        color:rgb(255, 255, 255);
    }

    p.para-2 a {
        color:rgb(105, 190, 255);
        text-decoration: none;
    }

    p.para-2 a:hover {
        text-decoration: underline;
    }
</style>

<div class="signup-box">
    <h1>Sign Up</h1>

    <div class="flash-message">
        <?php if (session()->getFlashdata('success')): ?>
            <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>

        <?php if (session()->getFlashdata('errors')): ?>
            <ul style="color: red;">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <form method="post" action="/auth/register">
        <?= csrf_field() ?>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?= old('username') ?>" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= old('email') ?>" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit">Sign Up</button>
    </form>

    <h4>Ahh Ts and Cs are <a href="#">here</a> if you want eksay.</h4>
</div>

<p class="para-2">Already have an account? <a href="/auth/login">Login here</a>.</p>

