<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon-16x16.png">

    <title>Royal Car</title>
</head>
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
    
    </style>
<body class="main">
    <h1 class="text">Agradeço por escolher trabalhar com a gente.</h1>
    <p class="paragrafo">Aguarde que entraremos em contato pelo seu contato para finalizarmos o aluguel</p>
    <a href="home.php" class="btn">Home</a>

</body>
</html>