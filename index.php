<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
</head>
<body>
    <form method="post">
        <select name="opCambio" id="op">
            <option>Selecione uma opção</option>
            <option value="moedaRPG">Moeda RPG para dólar</option>
            <option value="dolar">Dólar para moeda RPG</option>
        </select>

        <div id="conteudo-dinamico">
        <div id="cambio">
        </div>
    </div>

    <script>
    document.getElementById('op').addEventListener('change', function() {
    var selectOp = this.value;
    var divConteudo = document.getElementById('conteudo-dinamico');
    var divResult = document.getElementById('cambio');
    var mostrarResult = document.getElementById('resultado');
    var divBase = document.getElementById('divBase'); // Adicione um ID a divBase
    var conteudo = '';

    // Verifica se divBase já existe, se sim, remove
    if (divBase) {
        divBase.remove();
    }

    divBase = document.createElement('div');
    divBase.setAttribute('id', 'divBase'); // Defina um ID para o novo divBase

    switch (selectOp) {
        case 'moedaRPG':
            divBase.innerHTML = `
                <select name="moeda" id="moeda">
                    <option value="zigus">Zigus</option>
                    <option value="lear">Lear</option>
                    <option value="atla">Atla</option>
                    <option value="borul">Borul</option>
                    <option value="kraken">Kraken</option>
                    <option value="lovincii">Lovincii</option>
                </select>
                <input type="number" id="valor" name="num"/>
                <button>Enviar</button>
            `;

            document.querySelector('#cambio').appendChild(divBase);
            conteudo = divBase;
            break;

        case 'dolar':
            divBase.innerHTML = `
                <select name="moeda" id="moeda">
                    <option value="zigus">Zigus</option>
                    <option value="lear">Lear</option>
                    <option value="atla">Atla</option>
                    <option value="borul">Borul</option>
                    <option value="kraken">Kraken</option>
                    <option value="lovincii">Lovincii</option>
                </select>
                <input type="number" id="valor" name="num"/>
                <button>Enviar</button>
            `;

            document.querySelector('#cambio').appendChild(divBase);
            conteudo = divBase;
            break;

        default:
            break;
        }

    });
    </script>
    </form>

    

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $opCambio = $_POST['opCambio'];
            $moeda = $_POST['moeda'];
            $num = $_POST['num'];

                if ($opCambio == 'moedaRPG'){
                    switch ($moeda) {
                    case 'zigus':
                        $baseResult = $num / 6.25;
                        $result = number_format($baseResult, 2);
                        echo $result;
                        break;

                    case 'lear':
                        $baseResult = $num / 0.125;
                        $result = number_format($baseResult, 2);
                        echo $result;
                        break;

                    case 'atla':
                        $baseResult = $num / 0.03125;
                        $result = number_format($baseResult, 2);
                        echo $result;
                        break;

                    case 'borul':
                        $baseResult = $num / 3.125;
                        $result = number_format($baseResult, 2);
                        echo $result;
                        break;

                    case 'kraken':
                         $baseResult = $num / 0.625;
                         $result = number_format($baseResult, 2);
                         echo $result;
                        break;

                    case 'lovincii':
                        $baseResult = $num / 0.25;
                        $result = number_format($baseResult, 2);
                        echo $result;
                        break;
                    
                    default:
                        break;
                }
            } else{
                switch ($moeda) {
                    case 'zigus':
                        $baseResult = $num * 6.25;
                        $result = number_format($baseResult, 2);
                        echo $result;
                        break;

                    case 'lear':
                        $baseResult = ($num / 50) * 6.25;
                        $result = number_format($baseResult, 2);
                        echo $result;
                        break;

                    case 'atla':
                        $baseResult = ($num / 200) * 6.25;
                        $result = number_format($baseResult, 2);
                        echo $result;
                        break;

                    case 'borul':
                        $baseResult = ($num / 2) * 6.25;
                        $result = number_format($baseResult, 2);
                        echo $result;
                        break;

                    case 'kraken':
                         $baseResult = ($num / 10) * 6.25;
                         $result = number_format($baseResult, 2);
                         echo $result;
                        break;

                    case 'lovincii':
                        $baseResult = ($num / 25) * 6.25;
                        $result = number_format($baseResult, 2);
                        echo $result;
                        break;
                    
                    default:
                        break;
            }
                
        }
        
    }
    ?>
    
</body>
</html>
