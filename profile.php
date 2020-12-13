<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel='icon' href='favicon.ico' type='image/x-icon'/>
    <script src="https://kit.fontawesome.com/c8879970d7.js" 
crossorigin="anonymous"></script>
<style type="text/css">
body {
    font-family: 'Roboto', sans-serif;
    text-align: center;
}

.card {
   
    max-width: fit-content;
    margin: auto;
    
}

.title {
    color: grey;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: black;
    cursor: pointer;
}
li{
    cursor: pointer;
}

img{
   position: relative;
    /* width: 10px; */
    /* height: 150px; */
    border-radius: 50%;
    max-height: 100px;
    max-width: 100px;
    object-fit: cover;
    background-color: #042331;
   

}
.followers{
    color: #042331;
    text-align: center;
}
.followers ul li{
float: left;
margin-left: 20px;
list-style: none;
}
.camerap{
    margin-top: -20px;
    margin-left: 50px;
    cursor: pointer;
  
}
</style>
</head>
<body>
<div class="card">
<h3 class="name">Full name</h3>
<p class="username">@username</p>

    <div class="profileImg">
  <img src="img/Men-Profile-Image.png" alt="profilephoto" style="width:100%">
  <ul class="camerap">
      <a><i class="fas fa-camera"></i></a>
</ul>
</div>
  
  <div class="followers">
  <ul>
  <li><h4>Followering</h4></li>
  <li><h4>Followers</h4></li>
  <li><h4>Likes</h4></li>
</ul>
  </div>
  <p>Location:</p>

</div>
</body>
</html>