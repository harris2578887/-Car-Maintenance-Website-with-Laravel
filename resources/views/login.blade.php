<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Common CSS */
        *, *::before, *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('https://img.freepik.com/premium-photo/photorealistic-diorama-car-repair-shop-scene-photoshoot_950002-78463.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .forms-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

    .form-wrapper {
    background: rgba(255, 0, 0, 0.8); 
    backdrop-filter: blur(5px);
    border-radius: 8px;
    padding: 20px;
    width: 350px;
    text-align: center;
}

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

   
        .switcher {
    cursor: pointer;
    margin-bottom: 10px;
    padding: 10px 20px;
    font-size: 16px;
    text-transform: uppercase;
    background-color: #000000; 
    color: #FFFFFF; 
    border: 2px solid #f4f4f4; 
    border-radius: 25px;
    transition: all 0.3s ease;
}

.switcher:hover {
    background-color: #eaeaea;
}

        
        .form {
            display: none;
        }

        .form.active {
            display: block;
        }

        .form label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        .form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form button {
            display: block;
            width: 100%;
            padding: 10px;
            background: #333;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form button:hover {
            background: #eaeaea;
        }

       
        .error-message {
            color: red;
            margin-top: 5px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="forms-container">
        <div class="form-wrapper">
            <h1>Choose an Option</h1>
            <button class="switcher" id="loginSwitch">Login</button>
            <button class="switcher" id="signupSwitch">Sign Up</button>
            <form class="form" id="loginForm" action="{{ route('logins') }}" method="POST">
                @csrf
                <label for="loginEmail">Email</label>
                <input type="email" id="loginEmail" name="email" placeholder="Enter your email" required>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="password" placeholder="Enter your password" required>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <button type="submit">Login</button>
            </form>
            <form class="form" id="signupForm" action="{{ route('registeruser') }}" method="POST">
                @csrf
                <input type="text" id="signupName" name="name" placeholder="Enter your name" required>
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <label for="signupEmail">Email</label>
                <input type="email" id="signupEmail" name="email" placeholder="Enter your email" required>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <label for="signupPassword">Password</label>
                <input type="password" id="signupPassword" name="password" placeholder="Enter your password" required>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <label for="signupPasswordConfirmation">Confirm Password</label>
                <input type="password" id="signupPasswordConfirmation" name="password_confirmation" placeholder="Confirm your password" required>
                @error('password_confirmation')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <button type="submit">Sign Up</button>
            </form>
            <div id="errorMessages" class="error-message"></div>
        </div>
    </div>

    <script>
        const loginSwitch = document.getElementById("loginSwitch");
        const signupSwitch = document.getElementById("signupSwitch");
        const loginForm = document.getElementById("loginForm");
        const signupForm = document.getElementById("signupForm");
        const errorMessages = document.getElementById("errorMessages");

        loginSwitch.addEventListener("click", () => {
            loginForm.classList.add("active");
            signupForm.classList.remove("active");
            errorMessages.innerText = "";
        });

        signupSwitch.addEventListener("click", () => {
            signupForm.classList.add("active");
            loginForm.classList.remove("active");
            errorMessages.innerText = "";
        });
    </script>
</body>
</html>
