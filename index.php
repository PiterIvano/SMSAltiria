
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Envio de sms</title>
    <style type="text/css">
        * {-webkit-box-sizing: border-box;
          box-sizing: border-box;
        }

 
    body{
        background:url(cine.jpg) no-repeat fixed;
        background-size:cover;
        background-position:50%;
        color: white;       
        }

     
     form{
color: blue;
    background: radial-gradient(ellipse at center,);
  border: 1px solid #2d416d;
  -webkit-box-shadow: 0 1px #5670A4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
          box-shadow: 0 1px #5670A4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  width: 650px;
  height: 300px;
  margin: 60px auto;
  padding: 0px 50px 30 30px;
  text-align: center;
}


input{
    margin: 12px;
    padding: 8px;
    width: 600px;
    
}

textarea{
    font-size: 15px;
    margin: 15px;
    padding: 10px;
    min-width: 600px;
    max-width: 600px;
    min-height: 100px;
    max-height: 100px;
}

.boton{
     font-size: 25px;
}


    </style>
</head>
<body>
	<div class="y">
	    <form method="post" action="testAltiriaSms.php"> 

            <input class="x" type="tel" name="phone" required placeholder="Ingrese su numero de celular sin el '+' ">
                <br>
            <textarea class="x" type="text" maxlength="159" name="mensaje" required="" placeholder="Ingrese su texto de sms  (MAXIMO DE CARACTERES 160)"></textarea>    <br>
            <input type="submit" name="">
            <h2>Created By Piter <a href="https://www.youtube.com/channel/UCSJ0FKKF-tUeu_Oa-1Z07lA" target="_black">Link Del Canal</a></h2>
         
        </form>
    </div>
</body>
</html>
