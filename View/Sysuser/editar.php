<!doctype html>
<html lang="pt-br">
    <head>
        <title> Sys Market  </title>
        <meta charset="utf-8">
        <meta name="author" content="Diogo Marostega de Oliveira   ">
        <meta name="description" content="Base sistemas MVC PHP">
        <meta name="keywords" content="php, mvc, base, sistema web">
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
            <form action="save?id=<?php echo $data->id; ?>" method="POST">                
               <div class="row">
                    <div class="col col-2">
                        <label for="id">Código</label>
                        <input type="text" id="id" name="id" value="<?php echo $data->id; ?>" readonly>
                
                        <label for="name">Nome:</label>
                        <input type="text" id="name" name="name" value="<?php echo $data->id; ?>" placeholder="Nome" required>
                    </div>
                    <div class="col col-2">
                        <label for="username">Usename</label>
                        <input type="text" id="username" name="username" value="<?php echo $data->id; ?>" placeholder="Nome de  usuário">

                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" value="<?php echo $data->id; ?>" password="Valor" placeholder="Senha do usuário" required>
                
                    </div>
                </div>

                      
                <div class="row">
                    <div class="col col-2">
                        <label for="typeuser">Categoria</label>
                        <select id="typeuser" name="idtypeuser" required>                    
                            <option value="0">Selecione</option>
                            <?php foreach(DB::results("SELECT * FROM public.typeuser ORDER BY id ASC ") as $v){ ?>
                             <option value="<?php echo $v->id; ?>" 
                                        <?php echo ($data->idtypeuser == $v->id ? " selected " : ""); ?>      >
                                                <?php echo $v->name; ?>
                            </option>                    
                            <?php } ?>
                        </select>                                
                    </div>
                </div>
                
                <div class="buttons-box">
                    <button class="btn btn-save" type="submit" >Salvar</button>
    <!--                <button class="btn btn-reset" type="reset" >Limpar</button>-->
                    <button class="btn btn-cancel" onclick="window.location.href='/<?php echo DOMAIN; ?>/sysuser/listar'" type="button" >Cancelar</button>                
                </div>
            </form>            
        </main>
        <footer>
            <p>Copyright &copy; Diogo Marostega de Oliveira - 2019</p>
        </footer>
    </body>
</html>