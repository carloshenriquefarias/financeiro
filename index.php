<?php     
    include("./templates/header.php");    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Diario</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="conteudo-cabecalho">
        <div class="cabecalho-centro">
            <img src="./assets/logo.svg" alt="">
            
            <form action="cadastro.php" method="post">
                <button class="btn">
                    Nova Transação                
                </button>
            </form>
        </div>   
    </div>
    <div class="principal" >
        <div class="secundaria" >
            <div class="item-card">
                <div>
                    <p>Entradas</p>
                    <img src="./assets/income.svg" alt="">
                </div>
                <strong>R$ 1000,00</strong>
            </div>
            <div class="item-card">
                <div>
                    <p>Saída</p>
                    <img src="./assets/outcome.svg" alt="">
                </div>
                <strong>R$ 1000,00</strong>
            </div>
            <div class="item-card colortotal">
                <div>
                    <p>Total</p>
                    <img src="./assets/total.svg" alt="">
                </div>
                <strong>R$ 1000,00</strong>
            </div>
        </div>
        <div class="conteudo-tabela">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Data da Movimentação</th>
                        <th>Débito</th>
                        <th>Valor do Débito</th>
                        <th>Crédito</th>
                        <th>Valor do Crédito</th>
                        <th>Histórico</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>10/05/2022</td>
                        <td>Caixa</td>
                        <td class="cor-entrada">1000</td>
                        <td>Salário</td>
                        <td class="cor-saida">-500</td>
                        <td>Valor referente a salário do mês</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>12/05/2022</td>
                        <td>Compras e Supermercado</td>
                        <td class="cor-entrada">50</td>
                        <td>Caixa</td>
                        <td class="cor-saida">-50</td>
                        <td>Valor referente a compra de queijo e presunto</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>15/05/2022</td>
                        <td>Cabelereiro</td>
                        <td class="cor-entrada">20</td>
                        <td>Caixa</td>
                        <td class="cor-saida">-20</td>
                        <td>Valor referente a corte de cabelo </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>17/05/2022</td>
                        <td>Brincadeiras e Festas</td>
                        <td class="cor-entrada">100</td>
                        <td>Caixa</td>
                        <td class="cor-saida">-100</td>
                        <td>Valor referente a pizza com a familia</td>
                    </tr>
                </tbody>
              </table>
        </div>
    </div>   
</body>
</html>

