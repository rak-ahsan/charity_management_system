<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f4;
    }

    .login-container {
        width: 400px;
        padding: 20px;
        border: 1px solid #ddd;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 10px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #007BFF;
        border: none;
        border-radius: 4px;
        color: white;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>
<div class="container d-flex justify-content-center align-item-center" >
    <div class="row">
        <div class="login-container col-md-12">
            <h2 class="text-center">Sign Up</h2>
            <form action="usersignup" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="password">Full Name</label>
                <input type="text" id="password" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="password">Address</label>
                <input type="text" id="password" name="address" required>
            </div>
            <div class="form-group">
                <label for="password">Email</label>
                <input type="email" id="password" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Number</label>
                <input type="text" id="password" name="number" required>
            </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group mb-3">
                    <label for="password">Upload Photo</label>
                    <input type="file" id="password" name="u_photo">
                    <input type="hidden" id="password" name="u_role" value='2'>
                </div>
                <button type="submit">Sign Up</button>

            </form>
            <a href="login"> <button class="">Have an Account? <br>Login</button></a>
        </div>
    </div>
</div>

