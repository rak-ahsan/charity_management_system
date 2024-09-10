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
<div class="container d-flex justify-content-center align-item-center">
    <div class="row">
        <div class="login-container col-md-12">
            <h2 class="text-center">Edit User</h2>
            <form action="/update/user/<?= $user['id'] ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="password">Full Name</label>
                    <input type="text" id="password" name="fullname" required value="<?= $user['fullname'] ?>">
                </div>

                <div class="form-group">
                    <label for="password">Address</label>
                    <input type="text" id="password" name="address" required value="<?= $user['address'] ?>">
                </div>
                <div class="form-group">
                    <label for="password">Email</label>
                    <input type="email" id="password" name="email" required value="<?= $user['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="password">Number</label>
                    <input type="text" id="password" name="number" required value="<?= $user['number'] ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required value="<?= $user['username'] ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" required value="<?= $user['password'] ?>">
                </div>
                <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Photo</label>
                        <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" name="u_photo" value="<?= $user['u_photo'] ?>">
                    </div>
                <div class="mb-3 form-group">
                    <label for="larea" class="form-label ">User Role</label>
                    <select class="form-select form-select-sm in p-2 w-100"  name="u_role" value="<?= $user['u_role'] ?>">
                        <option selected>Open this select menu</option>
                        <?php foreach ($rakib as $row) : ?>
                            <option value="<?= $row['role_id'] ?>" <?= $row['role_id'] == $user['u_role'] ? 'selected' : '' ?>> <?= $row['role_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>


                <button type="submit">Update User</button>

            </form>
        </div>
    </div>
</div>