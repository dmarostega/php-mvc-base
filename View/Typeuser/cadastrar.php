<?php 



?>



<!doctype html>
<html lang="pt-br">
    <head>
        <title> Sys Market  </title>
        <meta charset="utf-8">
        <meta name="author" content="Diogo Marostega de Oliveira   ">
        <meta name="description" content="Sistema para mercados">
        <meta name="keywords" content="mercado, sistema, vendas de User">
        <link  rel="stylesheet" type="text/css"  href="../view/css/personalite.css">
        <style>
            main{
                width: 90%;
                margin:auto;
            }
            form{
                width: 90%;
                margin: auto;
                padding: 15px;
            }
            
            label,div,input,select{
                display:block;
                width: 50%;
                margin: auto;
            }
        </style>

    </head>
    <body>
           <nav>
                 <ul>
                    <li class="drop-down">
                        <a href="#">Cadastros</a>
                        <ul>
                            <li>
                                <a href="/<?php echo DOMAIN;?>/sysuser/cadastrar">Usuário</a>
                            </li>
                            <li>
                                <a href="/<?php echo DOMAIN;?>/typeuser/cadastrar">Tipos de usuário</a>
                            </li>                            
                        </ul>
                    </li>
                    
                    <li  class="drop-down">
                        <a href="#">Listagens</a>
                        <ul>
                            <li>
                                <a href="/<?php echo DOMAIN;?>/sysuser/listar">Usuários</a>
                            </li>
                            <li>
                                <a href="/<?php echo DOMAIN;?>/typeuser/listar">Tipos de Usuário</a>
                            </li>
                        </ul>                       
                    </li> 
                  <li  class="drop-down">
                        <a href="/<?php echo DOMAIN;?>">Inicio</a>  
                    </li> 
                </ul>
            </nav>          
        <main>
            <form action="save" method="POST">
                
                <div class="row">
                    <div class="col col-2">
                        <label for="id">Código</label>
                        <input type="text" id="id" name="id" value="" readonly>
                
                        <label for="name">Nome:</label>
                        <input type="text" id="name" name="name" value="" placeholder="Nome" required>
                    </div>
                    <div class="col col-2">
                        <label for="description">Description</label>
                        <input type="text" id="description" name="description" value="" placeholder="Descrição do Tipo">
                        
                        <!-- <label for="quantity">Password</label>
                        <input type="text" id="quantity" name="quantity" value="" placeholder="Repita a senha" required>-->
                    </div>
                </div>
                
                <div class="buttons-box">
                    <button class="btn btn-save" type="submit" >Salvar</button>
                    <button class="btn btn-cancel" onclick="window.location.href='/<?php echo DOMAIN; ?>/sysuser/listar'" type="button" >Cancelar</button>                
                </div>
            </form>            
        </main>
        <footer>
            <p>Copyright &copy; Diogo Marostega de Oliveira - 2019</p>
        </footer>
    </body>
</html>