<!doctype html>
<html lang="pt-br">
    <head>
        <title> Sys Market  </title>
        <meta charset="utf-8">
        <meta name="author" content="Diogo Marostega de Oliveira   ">
        <meta name="description" content="Sistema para mercados">
        <meta name="keywords" content="mercado, sistema, vendas de produtos">
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
                                <a href="/<?php echo DOMAIN;?>/typeuser/listar">Tipos de Usuários</a>
                            </li>
                        </ul>                       
                    </li> 
                  <li  class="drop-down">
                        <a href="/<?php echo DOMAIN;?>">Inicio</a>  
                    </li> 
                </ul>
            </nav>          
        <main>
            <?php ?>
            <table class="table">
                <thead></thead>
                <tfoot>                                                  
                </tfoot>
                <tbody>
                   <?php foreach($data as $k => $typeuser){ ?>
                        <tr id="edit_<?php echo $typeuser->id?>">                       
                            <td><?php echo $typeuser->id?></td>
                            <td><?php echo $typeuser->name?></td>
                            <td><?php echo $typeuser->description?></td>                           
                            <td>
                                <a class="btn btn-save" href="editar?id=<?php echo $typeuser->id; ?>" ><span>Editar</span>
</a>
                                <a class="btn btn-cancel" href="delete?id=<?php echo $typeuser->id; ?>"  ><span>Excluir</span></a>                                
                            </td>
                        </tr>
                    <?php   }   ?>   
                </tbody>
            </table>           
        </main>
        <footer>
            <p>Copyright &copy; Diogo Marostega de Oliveira - 2019</p>
        </footer>
    </body>
</html>