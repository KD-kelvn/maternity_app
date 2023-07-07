<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/animations.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <center>
        <div class="container">
            <table border="0" style="margin: 0;padding: 0;width: 60%;">
                <tr>
                    <td>
                        <p class="header-text">Welcome Back!</p>
                    </td>
                </tr>
            <div class="form-body">
                <tr>
                    <td>
                        <p class="sub-text">Login with your details to continue</p>
                    </td>
                </tr>
                <tr>
                    <form action="/doctors/login" method="POST" >
                        @csrf
                    <td class="label-td">
                      @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="useremail" class="form-label">Email: </label>
                    </td>
                </tr>
                <tr>
                    <td class="label-td">
                        <input type="email" name="email" class="input-text" placeholder="Email Address" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-td">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="password" class="form-label">Password: </label>
                    </td>
                </tr>
    
                <tr>
                    <td class="label-td">
                        <input type="password" name="password" class="input-text" placeholder="Password" required>
                    </td>
                </tr>
    
                <tr style="margin-top: 4rem;">
                    <td>
                        <input type="submit" value="Login" class="login-btn btn-primary btn">
                    </td>
                </tr>
            </div>
                            
                        </form>
            </table>
    
        </div>
    </center>
</body>
</html>