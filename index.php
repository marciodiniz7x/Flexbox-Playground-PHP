<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexGround</title>
</head>
<body>

    <h1>FlexGround: O seu playground de flexboxes!</h1>
    <h3>Crie e manipule flexboxes de forma dinâmica</h3>
    <div class="commands">
        <div class="create-remove">
            <input class="btn add-block" type="button" value="Adicionar Bloco">
            <input class="btn remove-block" type="button" value="Remover Bloco">
        </div>
        <div class="flex-props"></div>
    </div>
    <!-- Aqui vai um container gerado dinamicamente -->

    <style>
        
        @font-face {
            font-family: 'RobotoMono';
            src: url(fonts/RobotoMono-Thin.ttf);
        }

        body {

            background: linear-gradient(to right, rgb(83,105,118), rgb(41, 46,73));
            text-align: center;
            color: white;
            font-family: 'RobotoMono', cursive;

        }

        .commands {
            display: flex;
            width: 800px;
            margin-top: 100px;
            margin-left: 50%;
            transform: translateX(-50%);
        }

            .create-remove {
                width: 200px;
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

                .btn {
                    background-color: #fff;
                    padding: 10px;
                    border-radius: 5px;
                    font-size: 1.2em;
                    cursor: pointer;
                    transition: 400ms;
                    border: none;
                }
                .btn:hover {
                    background-color: orange;
                }

        .container {
            
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            gap: 10px;
            margin-top: 100px;
            border: 1px solid;
            padding: 10px;
            border-radius: 10px;
            margin: 50px;
            width: 80vw;
            margin-left: 50%;
            transform: translateX(-50%);
        }

            .child {

                flex: 1;
                width: 200px;
                height: 200px;
                border-radius: 10px;
                background-color: #277ae6;
                box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.466);
                
            }

    </style>

    <!-- JavaScript -->
    <script>

        // Seleciona body
        const body = document.querySelector('body');

        // Cria container
        const container = document.createElement('div');
        container.classList.add('container');
        body.appendChild(container);
        
        // Cria children
        let blocksNumber = 1;

        const addBlock = document.querySelector('.add-block');
        const removeBlock = document.querySelector('.remove-block');

        addBlock.addEventListener('click', () => {

            blocksNumber++
            updateBlocks();

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

            }

        }

        updateBlocks();

    </script>

</body>
</html>