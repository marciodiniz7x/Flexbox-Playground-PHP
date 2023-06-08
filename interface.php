<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">

    <title>FlexGround</title>
</head>
<body>

    <div class="interface">

        <h1 class="title">FlexGround</h1>
        <span class="subtitle" style="font-size: 18px;">Crie e manipule blocos em uma flexbox</span>

        <div class="commands">
            <div class="buttons">

                <span style="font-size: 20px; font-weight: 500;">Blocos</span>

                <div class="create-remove">
                    <input class="btn add-block" type="button" value="Adicionar">
                    <input class="btn remove-block" type="button" value="Remover">
                </div>

            </div>

            <div class="change-flex change-direction">

                <span style="font-size: 20px; font-weight: 500;">Direção</span>

                <div class="radio-container radio-direction">
                    <form>
                        <label>
                            <input type="radio" name="radio" checked="">
                            <span>Row</span>
                        </label>
                        <label>
                            <input type="radio" name="radio">
                            <span>Column</span>
                        </label> 
                    </form>
                </div>

            </div>
            
            <div class="change-flex change-position">

                <span style="font-size: 20px; font-weight: 500;">Posicionamento</span>

                <div class="radio-container radio-position">
                    <form>
                        <label>
                            <input type="radio" name="radio" checked="">
                            <span>Flex-start</span>
                        </label>
                        <label>
                            <input type="radio" name="radio">
                            <span>Flex-end</span>
                        </label>
                        <label>
                            <input type="radio" name="radio">
                            <span>Center</span>
                        </label>
                        <label>
                            <input type="radio" name="radio">
                            <span>Space-between</span>
                        </label>
                        <label>
                            <input type="radio" name="radio">
                            <span>Space-around</span>
                        </label>
                        <label>
                            <input type="radio" name="radio" checked="">
                            <span>Space-evenly</span>
                        </label>
                    </form>
                </div>

            </div>

        </div>
    </div>

    <style>
        
        body {

            background: #e8e8e8;
            text-align: center;
            color: #414181;
            font-family: 'Rubik', sans-serif;
            overflow-x: hidden;

        }

        .interface {

            display: flex;
            flex-direction: column;
            width: 850px;
            justify-content: center;
            margin-left: 50%;
            transform: translateX(-50%);
        }

        .commands {
            
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 50px;
            width: 850px;
            margin-top: 60px;
            margin-left: 50%;
            transform: translateX(-50%);
            padding: 10px;

        }

        .buttons {

            display: flex;
            flex-direction: column;
            gap: 30px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 1px 1px 10px 1px #414181b7;

        }

        .create-remove {

            width: 200px;
            display: flex;
            flex-direction: column;
            gap: 20px;
    
        }

        .btn {
            
            padding: 12px 0px 12px 0px;
            border-radius: 20px;
            font-size: 1em;
            font-family: "Rubik";
            cursor: pointer;
            transition: 400ms;
            border: none;
            background-color: #414181;

            color: white;
            font-weight: 500;
        }

        .btn:hover {
            background-color: #fff;
            box-shadow: 1px 1px 10px 1px #4141817a;
            color: #00005c;
        }

        .container {
            
            display: flex;
            flex-direction: wrap;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;

            padding: 20px;
            border-radius: 10px;
            box-shadow: 1px 1px 10px 1px #414181b7;
            margin: 40px;
            width: 810px;
            height: 400px;
            margin-left: 50%;
            transform: translateX(-50%);
            transition: 400ms;

        }

        .child {

            min-width: 150px;
            width: 150px;
            height: 150px;
            border-radius: 10px;
            background-color: #414181;
            box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.466);
            transition: 400ms;
            opacity: 1;

        }

        .change-flex {
            
            display: flex;
            flex-direction: column;
            gap: 30px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 1px 1px 10px 1px #414181b7;
            
        }

        .radio-container form {

            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            height: 150px;
            
        }

        .radio-position form  {

            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            height: 150px;
            width: 300px;

        }

        .radio-container label {

            display: flex;
            cursor: pointer;
            font-weight: 500;
            position: relative;
            overflow: hidden;
            margin-bottom: 0.375em;

        }

        .radio-container label input {
            position: absolute;
            left: -9999px;
        }

        .radio-container label input:checked + span {
            background-color: #414181;
            color: white;
        }

        .radio-container label input:checked + span:before {
            box-shadow: inset 0 0 0 0.4375em #00005c;
        }

        .radio-container label span {

            display: flex;
            align-items: center;
            padding: 0.375em 0.75em 0.375em 0.375em;
            border-radius: 99em;
            transition: 0.25s ease;
            color: #414181;

        }

        .radio-container label span:hover {
            background-color: #d6d6e5;
        }

        .radio-container label span:before {

            display: flex;
            flex-shrink: 0;
            content: "";
            background-color: #fff;
            width: 1.5em;
            height: 1.5em;
            border-radius: 50%;
            margin-right: 0.375em;
            transition: 0.25s ease;
            box-shadow: inset 0 0 0 0.125em #00005c;

        }

        .radio-position {
            display: flex;
            flex-direction: column;
        }

        .warning {

            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 500px;
            height: 200px;
            background-color: #e8e8e8;
            top: 50%;
            margin-left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 1px 1px 20px 1px #414181f3;
            z-index: 1;

        }

        /* Responsividade */
        @media (max-width: 600px) {

            .interface {
                width: 90vw;
            }

            .title {
                margin: 5px;
            }

            .subtitle {
                margin-top: 10px;
            }

            .commands {  
                flex-direction: wrap;
                justify-content: center;
                gap: 30px;
                width: 100vw;
                margin-top: 30px;
            }

            .buttons {
                gap: 15px;
                height: 170px;
            }
            .create-remove {
                width: 120px;
            }

            .change-position {
                gap: 15px;
                height: 170px;
            }

            .change-direction {
                gap: 15px;
                height: 170px;
            }

            .container {
                width: 300px;
                height: 180px;
                margin-top: 20px;
            }

            .child {
                width: 50px;
                height: 50px;
                min-width: 50px;
            }

            .btn:hover {
                background-color: #414181;
                box-shadow: none;
                color: #fff;
            }

            .warning {
                width: 380px;
                left: 0;
            }

        }

    </style>

    <!-- JavaScript -->
    <script>

        // Seleciona body
        const body = document.querySelector('body');
        const interface = document.querySelector('.interface');

        // Cria container
        const container = document.createElement('div');
        container.classList.add('container');
        interface.appendChild(container);
        
        // Cria children
        let blocksNumber = 2;

        const addBlock = document.querySelector('.add-block');
        const removeBlock = document.querySelector('.remove-block');

        addBlock.addEventListener('click', () => {

            if (blocksNumber < 10) {
                blocksNumber++
                updateBlocks();
            } else {
                
            }

        });

        removeBlock.addEventListener('click', () => {

            if (blocksNumber > 1) {
                blocksNumber--
                updateBlocks();
            }

        });


        function updateBlocks() {

            container.innerHTML = '';
            for (let i = 0; i < blocksNumber; i++) {

                const child = document.createElement('div');
                child.classList.add('child');
                container.appendChild(child);
                child.style.opacity = '0'
                setTimeout(() => {
                    child.style.opacity = '1';
                }, 10);

            }

        }

        updateBlocks();

        // Botões de Direction da Flexbox
        const radioButtonsDirection = document.querySelectorAll('.radio-direction input[type="radio"]');

        radioButtonsDirection.forEach(radioButton => {
        radioButton.addEventListener('change', () => {

                if (radioButton.checked) {
                
                    const spanTextDirection = radioButton.nextElementSibling.textContent.toLowerCase();
                    container.style.flexDirection = `${spanTextDirection}`;

                }

            });
        });

        // Botões de Position da Flexbox
        const radioButtonsPosition = document.querySelectorAll('.radio-position input[type="radio"]');

        radioButtonsPosition.forEach(radioButton => {
        radioButton.addEventListener('change', () => {

                if (radioButton.checked) {
                
                    const spanTextPosition = radioButton.nextElementSibling.textContent.toLowerCase();
                    container.style.justifyContent = `${spanTextPosition}`;
                    
                }
                
            });
        });


    </script>

</body>
</html>