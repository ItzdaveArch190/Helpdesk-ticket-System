<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="/public/assets/css/style.css">-->
    <title>Login</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    * {
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    body {
        margin: 0;
    }

    .login-layout {
        width: 100%;
        min-height: 100vh;
    }

    #company-image {
        display: block;
        width: 100%;
        height: 100%;
        border-radius: 12px;
        object-fit: cover;
    }

    .left-side {
        flex: 1 1 50%;
        position: relative;
        min-width: 0;
        padding: 20px;
    }



    .left-side::before {
        content: "";
        position: absolute;
        inset: 20px;
        background: rgba(0, 0, 0, 0.4);
        border-radius: 12px;
        z-index: 1;
    }

    .company-info {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
        z-index: 2;
    }

    .company-info h1 {
        font-size: 5em;
        font-weight: bold;
    }

    .company-info p{
        font-size: 1em;
    }

    .company-info p{
        font-size: 1.1rem;
    }

    .right-side {
        flex: 1 1 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-width: 0;
        padding: 40px;
    }

    .welcome-page,
    .right-side form {
        width: min(100%, 420px);
    }
    .welcome-page h1,p{
        margin: 0px;
    }

    

    .welcome-page{
        padding-bottom: 40px;
    }

    .btn-access{
        display: flex;
        flex-direction:column;
        justify-content: center;
    }

    .btn-access,
    .divider a{
        text-align: center;
        padding-top:25px;
    }

    .btn-access a{
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .btn-access a:hover{
        color: rgba(31, 30, 30, 0.94);
    }

    .login-btn{
        padding:10px;
        border: none;
        border-radius: 10px;
        background-color:rgb(0, 0, 0);
        color: white;
        transition: all ease-in-out; 
    }

    .login-btn:hover{
        background-color:rgba(0, 0, 0, 0.7);    
    }



    

    @media (max-width: 767.98px) {
        .login-layout {
            flex-direction: column;
        }

        .left-side {
            height: 40vh;
        }

        .right-side {
            padding: 32px 20px;
        }
    }
</style>
<body>
    <main class="login-layout d-flex">
        <div class="left-side">
            <img src="../../public/assets/images/company-headquarter.jpg" style="" id="company-image" alt="company-image">
            <div class="company-info">
                <h1>My Side<span style="color: #CFB31D;">Desk</span></h1>
                <p>Help is on it's way.</p>
            </div>
        </div>

        <div class="right-side">
            <div class="welcome-page">
                <h1>Everything starts here.</h1>
                <p>Log in your account</p>
            </div>
            <form class="needs-validation" method="post" novalidate>
                <div class="form-floating mb-5">
                    <input type="email" class="form-control" id="username" name="username" placeholder="Ex..example@gmail.com" required>
                    <label for="username" class="form-label">Email</label>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ex..example@gmail.com" required>
                    <label for="username" class="form-label">password</label>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="btn-access">
                    <button class="login-btn" type="button">Log in</button>
                    <br>
                    <strong class="divider">or</strong>
                    <br>
                    <a href="#" class="forgot-password-link">Forgot Password</a>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>