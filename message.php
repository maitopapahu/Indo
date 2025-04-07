<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    body{
      background: black;
    }
    .container{
      max-width: 400px;
      height: 100vh;
      margin: 0 auto;
      border: 1px solid aqua;
      box-shadow: 2px 2px 31px aqua;
    }
    form{
      position: relative;
      top: 50%;
      left: 50%;
      display: flex;
      justify-content: center;
      transform: translate(-50% , -50%);
    }

    #txt{
      outline: none;
      border: 1px solid  aqua;
      box-shadow: 2px 2px 32px aqua;
      text-align:  center;
      font-weight: bold;
      font-family: sans-serif;
      animation: shadow 1s infinite linear;
    }

h1{
  position: relative;
  top: 30%;
  color: white;
  display: block;
  text-align: center;
  font-weight: bold;
      font-family: sans-serif;
}

#send{
  padding: 10px 20px;      box-shadow: 2px 2px 32px aqua;
  background-color: chartreuse;
  animation: shadow 1s infinite linear;

}
    @keyframes shadow {
        0%{
          box-shadow: 2px 2px 21px aqua;
        }
        10%{
          box-shadow: 2px 2px 21px rgb(0, 255, 68);
        }
        20%{
          box-shadow: 2px 2px 21px rgb(0, 217, 255);
        }
        30%{
          box-shadow: 2px 2px 21px rgb(255, 0, 38);
        }
        40%{
          box-shadow: 2px 2px 21px rgb(204, 255, 0);
        }
        50%{
          box-shadow: 2px 2px 21px rgb(255, 251, 0);
        }
    }
  </style>
</head>
<body>
    <div class="container">
      <h1>SEND MESSAGE TO ALL BOT USERS</h1>
        <form action="send.php" method = "post">
            <textarea name="msg" id="txt" cols="35" placeholder="ENTER MESSAGE" rows="4"></textarea>
            <button id="send">SEND</button>
        </form>
    </div>
</body>
</html>