<h1>Listar Usuários</h1>
<?php
    $sql = 'SELECT * FROM usuarios';

    $res= $conn->query($sql);
    //quantidade de resultados
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover  table-bordered'>";
            print "<tr>";
            print "<th style='background-color: #ADD8E6'>#</th>";
            print "<th style='background-color: #ADD8E6'>Nome</th>";
            print "<th style='background-color: #ADD8E6'>E-mail</th>";
            print "<th style='background-color: #ADD8E6'>Data de Nascimento</th>";
            print "<th style='background-color: #ADD8E6'>Ações</th>";
            print "<tr>";
        while($row = $res->fetch_object()){ //as linhas ficarão armazenadas em row, como um array
            print "<tr>";
            print "<td>" .$row->id. "</td>";
            print "<td>" .$row->nome. "</td>";
            print "<td>" .$row->email. "</td>";
            print "<td>" .$row->data_nasc. "</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Apagar</button>
                  </td>";
            print "<tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>