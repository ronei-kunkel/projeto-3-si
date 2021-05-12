<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Contato - Sanctus Grano</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" puqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="carrinho.css" rel="stylesheet" media="all" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Detalhes dos itens</title>
</head>
<body>
    <section>
        <div class="container">   
            <header class="header">
                <a class="sg">Sanctus Grano</a>
                <nav>
                    <ul class="menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="cafes.php">Cafes</a></li>
                        <li><a href="sobre.html">Sobre</a></li>
                        <li><a href="carrinho.php">Carrinho</a></li>
                    </ul>
                </nav>
            </header>  

            <div class="content">

                    <div class="user">
                        <i class="fas fa-user" style="font-size:300px; color:#ddcdbf;"></i>
                        <h3>User Anônimo</h3>
                        <button class="button1" onclick="window.location.href='login.html'">Sair</button>
                    </div>

                    <div class="carrinho">
                        <div class="produto">                        
                            <div>
                                <h1>Acaiá</h1>
                            </div>
                            
                            <div>
                                <p>Quantidade</p>
                                <form action="/action_page.php">
                                    <label for="quantity"></label>
                                    <input type="number" id="quantity" name="quantity" min="1" max="10">
                                </form>                                                              
                            </div>
                                
                            <div>
                                <p>Preço</p>
                                <p>R$ 15.00</p>
                            </div>

                            <div class="lixo">
                                <i class="fas fa-trash" style="font-size:40px; color:#ddcdbf;"></i>
                            </div>

                        </div>

                        <div class="add">
                            <button class="button2" onclick="Enviar(event);">Adicionar mais itens</button>
                        </div>

                        <div class="total">
                            <p>Total:</p>
                        </div>

                        <div class="finalizar"><button class="button2" onclick="window.location.href='index.html'">Finalizar compra</button></div>
                    </div>
            </div>

                 
       
        </div>
         
                
    </section>
</body>
</html>