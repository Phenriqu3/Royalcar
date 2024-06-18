<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon-16x16.png">

    <title>Formulário</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #7D8085;
    }
    section{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 10px 45px;
        background-color: #ccc;
        width: 500px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;      
    }
    section h2{
        color: #f5f5f5;
        font-size: 2.5rem;
        margin: 2rem;
    }
    section form {
        display: flex;
        flex-direction: column;
        width: 100%;
    }
    form label{
        color: #f5f5f5;
        font-size: 17px;
        margin-bottom: 4x;
    }
    form input{
        padding: 15px;
        outline: none;
        border: 0;
        margin-bottom: 20px;
        font-size: 15px;
        transition: all 0.5s;
    }
    form input:focus{
        border-radius: 16px;
    }
    form button{
        padding: 15px;
        cursor: pointer;
        font-size: 16px;
        background: transparent;
        border: 2px solid #f5f5f5;
        color:#f5f5f5;
        transition: all 1s;
        margin-bottom: 20px;
    }
    form button:hover{
        background: #f5f5f5;
        color: #101026;
        border-radius: 16px;
    }
    
    form input[type="text"], form input[type="email"] {
        padding: 15px;
        outline: none;
        border: 0;
        margin-bottom: 20px;
        font-size: 15px;
        transition: all 0.5s;
        border-bottom: 2px solid #ccc;
    }

    form input[type="text"]:focus, form input[type="email"]:focus {
        border-bottom: 2px solid #f5f5f5;
        border-radius: 16px;
    }
    form select {
        padding: 15px;
        outline: none;
        border: 0;
        margin-bottom: 20px;
        font-size: 15px;
        transition: all 0.5s;
        border-bottom: 2px solid #ccc;
        width: 100%;
    }

    form select:focus {
        border-bottom: 2px solid #f5f5f5;
        border-radius: 16px;
    }
    .main{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #101026;
        flex-direction: column;
    }
    .text{
        font-size: 45px;
        color: #f5f5f5;
        margin-bottom: 30px;
    }
    .paragrafo{
        color: f5f5f5;
        margin-bottom: 50px;
    }
    .btn{
        padding: 15px 55px;
        background: #f5f5f5;
        text-decoration: none;
        color: #101026;
        font-size: 18px;
        transition: all 0.5s;
    }
    .btn:hover{
        border-radius: 16px;
    }
    body.main {
            background-image: url('img/Carros Classicos/ferrari-sf90-stradale/main.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center; 
            color: white; 
            text-align: center; 
            height: 100vh; 
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
            margin: 0; 
        }
        
    </style>
</head>
<body>
    <section>
        <h2>Aluga-se</h2>
        <form action="https://api.staticforms.xyz/submit" method="post">
            <label>Nome</label>
            <input type="text" name="name" aria-placeholder="Digite seu nome" autocomplete="off" required>
            <label>Email</label>
            <input type="email" name="email" aria-placeholder="Digite seu email" autocomplete="off" required>
            <label>Telefone</label>
            <input type="text" name="Telefone" aria-placeholder="Digite seu Telefone" autocomplete="off" required>
            <label for="model">Modelo do Carro</label>
                <select name="model" id="model" required>
                    <option value="">Selecione um modelo</option>
                    <option value="Ferrari SF90">Ferrari 296 GTS</option>
                    <option value="Bmw 320i">BMW 320I E30</option>
                    <option value="Porsche 911">Porsche 911</option>
                    <option value="Aston">Aston Martin Vantage</option>
                    <option value="Audi Q3">Audi RS Q3</option>
                    <option value="Bmw 325i">BMW 325i E30</option>
                    <option value="Bmw x6">BMW X6 M Competition</option>
                    <option value="Cadillac">Cadillac Eldorado Conversível</option>
                    <option value="Corvette">Chevrolet Corvette Stingray 1LT Targa</option>
                    <option value="Dodge"> Dodge Charger V8 383</option>
                    <option value="Dodgecharllenger"> Dodge Challenger SRT Hellcart</option>
                    <option value="Fusca">Volksvagen Fusca 1600</option>
                    <option value="Gol Gts">Volksvagen Gol GTS</option>
                    <option value="Maverick">Ford Maverick Super V8</option>
                    <option value="Mustang">Ford Mustang Hardtop</option>
                    <option value="Mustang Shelbi">Ford Mustang Shelbi GT500</option>
                    <option value="Opala">Chevrolet Opala Diplomata</option>
                    <option value="Porsche Panamera">Porsche Panamera 4 e-hybrid</option>
                </select>
            <a href="aviso.php">
            <button type="submit">Enviar</button>
            </a>
            <input type="hidden" name="accessKey" value="ded1c9ee-9c38-419a-aae2-79d26679f0d6">
            <input type="hidden" name="redirectTo" value="http://localhost/template181-Original/car-rental-website-template/aviso.php">
        </form>
     </section>
</body>
</html>
