<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Maintenance Dashboard</title>
  <style>
   
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




    .main-content {
      margin-left: 250px;
      padding: 20px;
    }

    .header h1 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #000000;
    }


    .content-container {
      background-image: url('your-background-image.jpg'); 
      background-size: cover;
      background-repeat: no-repeat;
      height: calc(100vh - 60px); 
      display: flex;
    }

 
    .option-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: stretch;
      width: 100%;
    }
    .image {
      width: 100%;
      height: 260px; 
      object-fit: cover;
      border-radius: 5px;
    }


   
    .option {
      flex-basis: calc(50% - 20px); 
      margin: 10px;
      cursor: pointer;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 10px;
      border-radius: 5px;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      background-image: url();
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }


  
  </style>
</head>
<body>
  <div class="top-nav">
    <div class="logo">
      <img src="https://media.istockphoto.com/id/1383540443/vector/car-repair-icon-service-sign-logo-editable-vector.jpg?s=612x612&w=0&k=20&c=eiY5q_tHi6PHgUk0fWVFZXoisJyOFVWm2N-9HBLaNAs=" alt="Car Logo">
      <p>
        <span class="underlined underline-clip fancy ">CAR MAINTENANCE</span>
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
  <div class="dashboard">
    <div class="sidebar">
      <ul class="menu">
        <li><a href="{{ route('car-maintenance-view') }}">Maintenance History</a></li>
        
        <li><a href="{{ route('carHistory-view') }}">Car History</a></li>
        <li><a href="#">Fuel Log</a></li>
        <li><a href="#">Mechanic History</a></li>
    
      </ul>
    </div>
  </div>
  
    <div class="main-content">
    
      <div class="content-container">
       
        <div class="option-container">
          <div class="option" onclick="window.location.href='maintenance.html'">
            <img src="https://img.freepik.com/free-photo/repair-man-making-car-service_1303-26862.jpg" alt="Maintenance Option" class="image">
            <div class="option-heading"> Maintenance</div>
          </div>
          <div class="option" onclick="window.location.href='service-history.html'">
            <img src="https://images.assetsdelivery.com/compings_v2/fototocam/fototocam2111/fototocam211102964.jpg" class="image">
            <div class="option-heading">Spare Parts</div>
          </div>
          <div class="option" onclick="window.location.href='fuel-log.html'">
            <img src="data:image/jpeg;base64,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" alt="Fuel Log Option" class="image">
            <div class="option-heading">Body Protection</div>
          </div>
          <div class="option" onclick="window.location.href='tire-rotation.html'">
            <img src="data:image/jpeg;base64,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" alt="Tire Rotation Option" class="image">
            <div class="option-heading">Tire Rotation</div>
          </div>
      
        </div>
      </div>
    </div>
  </div>

</body>
</html>
