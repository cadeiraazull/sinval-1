<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            background-image: linear-gradient(to right, rgb(10, 113, 231), rgb(17, 54, 71));
        }
        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 17px;
            width: 30%;
        }
        fieldset {
            border: 3px solid dodgerblue;
            padding: 20px; 
        }
        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 9px;
        }
        .inputBox {
            position: relative;
            margin-bottom: 20px; 
        }
        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput {
            position: absolute;
            top: 0;
            left: 0;
            pointer-events: none;
            transition: 0.5s; 
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento {
            border: none;
            padding: 9px;
            border-radius: 11px;
            outline: none;
            font-size: 17px;
        }
        #submit {
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 17px;
            cursor: pointer;
            border-radius: 11px; 
        }
        #submit:hover {
            background-image: linear-gradient(to right, rgb(57, 20, 220), rgb(27, 17, 71));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend>Formulário de Clientes</legend>
                <div class="inputBox">
                    <input type="text" name="Nome" id="Nome" class="inputUser" required>
                    <label for="Nome" class="labelInput">Nome Completo</label>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required> 
                    <label for="email" class="labelInput">Email</label>
                </div> 
                <div class="inputBox">
                    <input type="tel" name="Telefone" id="Telefone" class="inputUser" required>
                    <label for="Telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo</p>
                <div class="inputBox"> 
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label><br>
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label><br>
                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label>
                </div>
                <div class="inputBox">
                     <label for="data_nascimento"><b>Ano de Nascimento</b></label>
                     <input type="date" name="data_nascimento" id="data_nascimento" required>  
                </div>
                <div class="inputBox">
                    <input type="text" name="Cidade" id="Cidade" class="inputUser" required>
                    <label for="Cidade" class="labelInput">Cidade</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>