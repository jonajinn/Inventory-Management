<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
  </head>

    <style>
        .{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
          background-image: url(/background.png);
          background-size: cover;
            
        }
        .row{
            background: white;
            box-shadow: 21px 20px 4px rgba(0, 0, 0, 0.25);
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            font-family: 'Barlow', sans-serif;
           

        }
        .col-lg-5{
          background: #043E9F;
          border-top-left-radius: 8px;
          border-bottom-left-radius: 8px;
          border-radius: 40px;
          text-align: center;
          font-family: 'Barlow', sans-serif;
        
        }
        .col-lg-5 h3{
          color: white;
          letter-spacing: -0.02em;
        }
        .col-lg-5 img{
          width: 70%;
          
        }
        
        .container{
            align-items: center;
        }
        .col-lg-7 img{
            display: center;
            width: 70%;
            height: 70%;
            
        }
        .btn1{
            
            border: none;
            outline: none;
            background: #678CE8;
            box-shadow: 11px 12px 4px rgba(0, 0, 0, 0.25);
            border-radius: 15px;
            color: white;
            font-family: 'Barlow', sans-serif;
            font-style: normal;
            font-size: 25px;
            letter-spacing: -0.02em;
            width: 150px;
            height: 50px;

        }
        .btn1:hover{
            background-color: #043E9F;
            transition: .4s;
        }
        
        
        
    </style>

  <body>
    <section class="Form my-5 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5 ">
                  <h3 class="my-4 p-4">Inventory Management</h1>
                  <img src="/11065.png" alt="IMS">
                </div>
                <div class="col-lg-7 my-3 p-4">
                    <h1><img src="/logo2.png" alt="ccc-logo"></h1>
                    <br>
                    <h4>Sign into your Account</h4>
                    <form>
                        <div class="form-row">
                            <div class="col-lg-7">
                              <input type="Email" placeholder = "Email Address" class="form-control my-3 p-4">  
                            </div>
                            <div class="col-lg-7">
                              <input type="Password" placeholder = "******" class="form-control my-3 p-4">  
                            </div>
                            <div class="col-lg-7">
                              <button type="button" class="btn1  ">Login</button>
                            </div>
                            <div class="col-lg-7 my-3 p-2">
                            <a href ="#">Forgot Password</a>
                            <p>Don't have an account?<a href="#">Register here</a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>