<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Car</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: url("https://img.freepik.com/premium-photo/photorealistic-diorama-car-repair-shop-scene-photoshoot_950002-78463.jpg");
      background-size: cover;
      color: white;
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    @keyframes glow {
  0% {
    transform: scale(1);
    box-shadow: 0 0 10px rgba(52, 152, 219, 0.7), 0 0 10px rgba(52, 152, 219, 0.7), 0 0 10px rgba(52, 152, 219, 0.7);
  }
  50% {
    transform: scale(1.1);
    box-shadow: 0 0 20px rgba(52, 152, 219, 0.7), 0 0 20px rgba(52, 152, 219, 0.7), 0 0 20px rgba(52, 152, 219, 0.7);
  }
  100% {
    transform: scale(1);
    box-shadow: 0 0 10px rgba(52, 152, 219, 0.7), 0 0 10px rgba(52, 152, 219, 0.7), 0 0 10px rgba(52, 152, 219, 0.7);
  }
}


.option-heading {
  font-size: 20px;
  font-weight: bold;
  margin-top: 10px;
  animation: glow 2s infinite alternate;
}
   
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
    }

  
    .top-nav {
  background-color: #ff0000;
  color: #fff;
  padding: 10px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  display: flex;
  align-items: center;
  text-align: center;
}

.logo p {
  position: relative;
  font-size: 70min;
  font-weight: 900;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left: 14cm; 
}

after {
  box-sizing: border-box;
}



h1 {
  font-size: clamp(3rem, 15vmin, 8rem);
  font-family: sans-serif;
  color: hsl(0 0% 98%);
}

.underlined {

  position: relative;
}







.underline-clip:after {
  content: '';
  position: absolute;
  top: 95%;
  width: 150%;
  aspect-ratio: 3 / 1;
  left: 50%;
  transform: translate(-50%, 0);
  border-radius: 50%;
  border: 6px solid hsl(130 80% 50%);

  clip-path: polygon(0 0, 50% 50%, 100% 0);
}
.fancy {
  font-family: 'Arial', sans-serif; 
  font-size: 26px; 
  text-transform: uppercase; 
  letter-spacing: 4px; 
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
  color: #FFFF00; 
  background-image: linear-gradient(to right, #ffcc00, #ff6600); 
  -webkit-background-clip: text; 
  background-clip: text; 
}
.logo img {
  width: 100px;
  height: auto;
  border-radius: 50%;
}

.logo strong {
  font-weight: bold;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}




.user-profile {
  display: flex;
  align-items: center;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-menu {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.user-avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  cursor: pointer;
}

/* New styles */
.user-name {
  text-decoration: none;
  color: black;
  font-weight: bold;
  font-size: 18px;
  display: block;
  padding: 10px;
  transition: background-color 0.3s, color 0.3s;
}

.dropdown-menu a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  font-size: 16px;
  padding: 8px 12px;
  display: block;
  transition: background-color 0.3s, color 0.3s;
}

.dropdown-menu a:hover {
  background-color: yellow;
  color: rgb(0, 0, 0);
}
.btn.btn-primary {
  border: 2px solid black;
  color: black;
  text-decoration: none;
  padding: 10px 20px;
  border-radius: 5px;
  background-color: yellow;
  transition: background-color 0.3s, color 0.3s, border-color 0.3s;
}

.btn.btn-primary:hover {
  background-color: black;
  color: yellow;
  border-color: yellow;
}
   
    .sidebar {
      width: 250px;
      background-color: #2c3e50;
      color: #fff;
      padding: 20px;
      height: calc(100vh - 60px);
      position: fixed;
    }

  


.dashboard {
  display: flex;
  height: 100%; 
}

.sidebar {
  width: 250px; 
  background-color: #333; 
  padding: 20px;
}

.menu {
  list-style: none;
  padding: 0;
}

.menu li {
  margin-bottom: 10px;
  position: relative; 
}

.menu a {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  font-size: 16px;
  display: block;
  padding: 10px;
  transition: background-color 0.3s, color 0.3s;
}

.menu li:not(:last-child)::after {
  content: '';
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: #444; 
  bottom: 0;
  left: 0;
}

.menu a:hover {
  color: #3498db;
  background-color: #444; 
}



    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .add-car-form {
      text-align: center;
      background-color: rgba(255, 255, 255, 0.7);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgb(255, 255, 255);
      max-width: 400px;
      width: 100%;
    }

    .add-car-form h2 {
      margin-bottom: 20px;
      color: #000000;
    }

    .add-car-form input[type="text"],
    .add-car-form textarea {
      width: 85%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #131313;
      border-radius: 5px;
      background-color: #ffffff;
      color: #000000;
    }

    .add-car-form input[type="text"]:focus,
    .add-car-form textarea:focus {
      background-color: #f9f9f9;
      outline: none;
    }

    .add-car-form button[type="submit"] {
      background-color: #000000;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .add-car-form button[type="submit"]:hover {
      background-color: #5324ca;
    }
    
    .error-message {
      color: red;
      font-size: 15px;
      text-align: middle;
    }
  </style>
</head>
<body>
  <div class="top-nav">
    <div class="logo">
      <img src="https://media.istockphoto.com/id/1383540443/vector/car-repair-icon-service-sign-logo-editable-vector.jpg?s=612x612&w=0&k=20&c=eiY5q_tHi6PHgUk0fWVFZXoisJyOFVWm2N-9HBLaNAs=" alt="Car Logo">
      <p>
        <span class="underlined underline-clip fancy ">CAR History</span>
      </p>
    </div>
  
  <div class="user-profile">
    @if(session('customer'))
      <div class="dropdown">
        <img src="{{ asset('https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=2000') }}" alt="User Avatar" class="user-avatar" data-bs-toggle="dropdown">
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
        </div>
      </div>
      <div class="user-name">{{ session('customer')->name }}</div>
    @else
      <a href="{{ route('login-view') }}" class="btn btn-primary">Login</a>
    @endif
  </div>
  </div>

  <div class="container">
    <div class="container">
      <form class="add-car-form" action="{{ route('add-maintenance') }}" method="POST">
          @csrf
          <h2>Add Maintenance Record</h2>
          @if(session('Car_ID'))
              <input type="hidden" name="Car_id" value="{{ session('Car_ID') }}">
          @endif
          <input type="text" placeholder="Car Number" name="Car_Number" value="{{ old('Car_Number') }}">
          @error('Car_Number')
              <div class="error-message">{{ $message }}</div>
          @enderror
  
          <input type="text" placeholder="Maintenance Name" name="Maintence_Name" value="{{ old('Maintence_Name') }}">
          @error('Maintence_Name')
              <div class="error-message">{{ $message }}</div>
          @enderror
  
          <input type="text" placeholder="Maintenance Worth" name="Maintence_Worth" value="{{ old('Maintence_Worth') }}">
          @error('Maintence_Worth')
              <div class="error-message">{{ $message }}</div>
          @enderror
        
  
          <textarea placeholder="Maintenance Description" name="Maintence_Description">{{ old('Maintence_Description') }}</textarea>
          @error('Maintence_Description')
              <div class="error-message">{{ $message }}</div>
          @enderror
  
          <button type="submit">Add Maintenance</button>
      </form>
  </div>
  
</div>
  </div>
</body>
</html>
