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