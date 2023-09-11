<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: url('https://static.vecteezy.com/system/resources/previews/002/037/924/original/abstract-blue-background-with-beautiful-fluid-shapes-free-vector.jpg') no-repeat center center fixed;
      background-size: cover;
      color: white;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .signup-form {
      text-align: center;
      background-color: rgba(0, 0, 0, 0.7);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(199, 136, 136, 0.1);
      max-width: 400px;
      width: 100%;
    }

    .signup-form h2 {
      margin-bottom: 20px;
      color: #fff;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
      width: 85%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #444;
      border-radius: 5px;
      background-color: #222;
      color: #fff;
    }

    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="email"]:focus {
      background-color: #333;
      outline: none;
    }

    button[type="submit"] {
      background-color: #444;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button[type="submit"]:hover {
      background-color: #5324ca;
    }

    .login-link {
      color: #fff;
      text-decoration: none;
      display: block;
      margin-top: 10px;
      transition: color 0.3s;
    }

    .login-link:hover {
      color: #ccc;
    }

    .error-message {
      color: red;
      font-size: 15px;
      text-align: middle;
    
      
    }
  </style>
</head>
<body>
  <div class="container">
    <form class="signup-form" action="{{ route('registeruser') }}" method="POST" enctype="multipart/form-data">


      @csrf
      <h2>Signup</h2>
      <input type="text" placeholder="Full Name" name="name" value="{{ old('name') }}">
      @error('name')
        <div class="error-message">{{ $message }}</div>
      @enderror
      <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
      @error('email')
        <div class="error-message">{{ $message }}</div>
      @enderror
      <input type="password" placeholder="Password" name="password">
      @error('password')
        <div class="error-message">{{ $message }}</div>
      @enderror
      <input type="password" placeholder="Confirm Password" name="password_confirmation">
      @error('password_confirmation')
        <div class="error-message">{{ $message }}</div>
      @enderror
      @if(session('success'))
<div class="success-message">{{ session('success') }}</div>
@endif
      <button type="submit">Register</button>
      <a href="login" class="login-link">Already have an account? Login</a>
    </form>
  </div>
</body>
</html>