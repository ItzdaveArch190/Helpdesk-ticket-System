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
    
    *{
        margin: 0 !important; 
        padding: 0 !important;
    }
    #company-image {
        flex:1;
        height:100vh;
        width:100%;
        border-radius: 12px;
        object-fit: cover;
    }

    #company-image:hover {
        
    }


    .left-side {
        flex: 1;
        position: relative;
        
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

    .company-info h2 {
        font-size: 3em;
        font-weight: bold;
    }

    .company-info p{
        font-size: 1.1rem;
    }

    .right-side {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content:center;
        align-items: center;

    }
</style>
<body>
    <main class="container vh-100 w-100 d-flex">
        <div class="left-side">
            <img src="../../public/assets/images/company-headquarter.jpg" style="" id="company-image" alt="company-image">
            <div class="company-info">
                <h2>My Side<span style="color: #CFB31D;">Desk</span></h2>
                <p>Help is on it's way.</p>
            </div>
        </div>

        <div class="right-side">
            <div class="welcome-page">
                <h1>Everything starts here.</h1>
                <p>Log in your account</p>
            </div>
            <form class="needs-validation" method="post" novalidate>
                <div class="form-floating mb-4">
                    <input type="email" class="form-control" id="username" name="username" placeholder="Ex..example@gmail.com" required>
                    <label for="username" class="form-label">Email</label>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ex..example@gmail.com" required>
                    <label for="username" class="form-label">password</label>
                    <div class="invalid-feedback"></div>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>