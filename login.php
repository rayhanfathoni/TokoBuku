<html>
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
body {
background: url(download.jpg) no-repeat fixed;
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 

}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}

    from {transform: scale(0)} 
    to {transform: scale(1)}
}


    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>
<body>
  
  <form class="modal-content animate" action="proseslogin.php" method="POST">
    <div class="imgcontainer">
      <img src="login.png" alt="Login" class="Login" width="20%" height="20%"> 
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Masukan Username" name="username">

      <label><b>Password</b></label>
      <input type="password" placeholder="Masukan Password" name="password">
        
      <button type="submit">Masuk</button>
	   </form> 
	  <form method="text" action="index.php">
			<button type="submit" >Batal</button>
		</form>
    </div>
	


  
</div>

</body>
</html>
