<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fmovies</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="/Style.CSS">
</head>
<body>
    
    <header>
        <div class="logo">
            <img id="logo" src="https://fmovies.app/images/group_17/theme_1/logo-light.png" alt="Logo">
            
        </div>
        <nav>
            <ul class="navbar">
                <li><a href="###">Home</a></li>
                <li><a href="###">Genre</a></li>
                <li><a href="###">Country</a></li>
                <li><a href="###">Movies</a></li>
                <li><a href="###">Tv Shows</a></li>
                <li><a href="###">Top IMDb</a></li>
                <li><a href="###">Android App</a></li>

            </ul>
        </nav>
        <div class="search">
            <span id="s-icon" class="material-symbols-outlined">
                search
                </span>
            <input id="seatchbtn" type="text" placeholder="Enter keywords...">
        </div>
        <div class="login">
            <i class="fas fa-user-circle"></i>
            <p><a href="">Login</a></p>
        </div>
    </header>
    <main>
       sup
       <article>
        <img id="midimg" src="https://fmovies.app/images/group_17/theme_1/logo-light.png" alt="Logo">
        <h2>Watch Online Movies For Free</h2>
        <p id="para">FMovies is one of the best site to watch movies online for free. We give full access to a database of over 20000 movies and 5000 Tv series in high quality for free streaming, with no registration required. Fmovies updates new content on a daily basis and with our huge database, you can find all your favorite movies and shows easily.

            Please support us by sharing fmovies site with your friends and family. Thanks!</p>
        <p id="para2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ab necessitatibus eos officia odio est temporibus consequuntur, corporis ipsam, maiores quasi aperiam, repellendus animi cumque accusamus magnam veritatis sint. Provident delectus expedita itaque vero voluptas amet aliquam assumenda nisi corrupti veniam molestias illo minima suscipit odio dolorum est, esse libero nemo ex beatae aut? Voluptas doloribus, omnis facere animi ab corporis necessitatibus, deleniti eos dolorem ratione illum voluptate iusto nihil?</p>
        <form action="logout.php">
            <input class="hbutton" type="Submit" value="Homepage">
            
            <button class="hbutton">
                Go to HomePage
            </button>
            
        </form>
    </article>
    
    </main>
    <style>
        *{
            margin: 0px;
            padding: 0;
            box-sizing: border-box;
        }
        body{
        background-color: #111;
        font-family: 'Nunito Sans', sans-serif;
        }
        header{
        height: 88px;
         margin-bottom: 20px;
         position: relative;
          z-index: 90;
          background: #090909;
          display: flex;
          justify-content: space-around;
          align-items: center;
          
        }
        #logo{
        margin-top: 10px;
        height: 30%;
        width: 140px;
        position: relative;
        left: 52px;
        }
        
        ul{
        display: flex;
        list-style: none;
        
        }
        ul li a{
        text-decoration: none;
        margin: 4px 4px;
        padding: 2px 15px;
        color: white;
        position: relative;
        right: 45px;
        /* text-transform: uppercase; */
        font-size: 18px;
        overflow: hidden;
        transition: 0.4s;
        }
        
        ul li a:hover{
        color: cyan;
        
        transition: 1s;
        box-shadow: 0 0 10px cyan, 0 0 40px cyan, 0 0 80px cyan;
        
        
        }
        .search{
            position: relative;
            right:400px;
            color: white;
        }
        #seatchbtn{
            color: white;
            background: rgba(255,255,255,.2);
            height: 44px;
            padding-left: 23px;
            border-radius: 30px;
            width: 400px;
            position: relative;
            left: 314px;
            font-size: 16px;
            border: none;
            font-weight: 400;
            outline: none;
            text-indent: 24px;
            padding-top: 3px;
        }
        
        .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48
        }
        #s-icon{
        position: relative;
        left: 359px;
        top: 10px;
        font-size: 30px;
        font-weight: bold;
        }
        ::placeholder{
        color: white; 
        position: relative;
        
        }
        .login{
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: white;
        font-size: 28px;
        }
        p a{
        position: relative;
        left: 10px;
        font-size: 22px;
        text-decoration: none;
        color: white;
        }
        p a:hover{
        color: cyan;
        transition: 1s;
        box-shadow: 0 0 10px cyan,0 0 40px cyan,0 0 80px cyan;
        }
        main{
        /* border: 2px solid red; */
        height: calc(100vh - 110px);
        width: 60%;
        margin-left:400px ;
        }
        article{
        display: block;
        color: white;
        text-align: center;
        margin: 20px 20px;
        padding: 23px 2px;
        }
        #midimg{
        position: relative;
        bottom: 10px;
        display: block;
        height: 90px;
        width: auto;
        margin: 2px auto;
        }
        h2{
        position: relative;
        top: 34px;
        
        }
        #para{
        position: relative;
        top: 50px;
        
        }
        #para2{
        position: relative;
        top: 100px;
        
        }
        .hbutton{
        position: relative;
        top: 300px;
        height: 100px;
        width: 33%;
        color: rgb(255, 255, 255);
        background-color: cyan;
        padding: 23px 23px;
        font-size: 35px;
        border-radius: 40px;
        }
        
        .hbutton:hover{
        box-shadow: 0 0 10px cyan,0 0 40px cyan,0 0 80px cyan;
        color: rgb(255, 255, 255);
        transition: 1s;
        background-color: cyan;
        
        }
    </style>
    <?php


    ?>
</body>
</html>