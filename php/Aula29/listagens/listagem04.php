<?php
  require_once(__DIR__ . "/../common/cabecalho.php");
  require_once(__DIR__ . "/../common/conexaobd.php");
  //Aqui colocarei o corpo se precisar
  $sql ="select it.pedido_id as numero_pedido,
  p.data as data_pedido,
  p.cliente_id as codigo_cliente,
  c.nome as nome_cliente,
  it.pizza_id as pizza_id,
  pi.nome as pizza_nome,
  it.quantidade * it.valor as total_item
  from pedido_item as it
  inner join pedido p on p.pedido_id=it.pedido_id
  inner join cliente c on c.cliente_id=p.cliente_id
  inner join pizza pi on pi.pizza_id=it.pizza_id
  order by it.pedido_id, it.pizza_id, c.nome
  limit 10";
  $stmt = $conn->prepare($sql);
  $result = $stmt->execute();
?>
  <div class="conteudo">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Número do Pedido</th>
          <th>Data do Pedido</th>
          <th>Código do Cliente</th>
          <th>Nome do cliente</th>
          <th>Código da Pizza</th>
          <th>Nome da Pizza</th>
          <th>Total do Item</th>
        </tr>
      </thead>
      <tbody>
<?php
  if ($result){
    while($pedido = $stmt->fetch(PDO::FETCH_OBJ)){
      echo "<tr>";
      echo "  <td class='al-dir'>". $pedido->numero_pedido. "</td>";

      $data = date_create($pedido->data_pedido);
      echo "<td> " . date_format($data, "d/m/Y H:i:s") . "</td>";

    
      echo "  <td class='al-dir'>".$pedido->codigo_cliente."</td>";
      echo "  <td>".$pedido->nome_cliente."</td>";
      echo "  <td class='al-dir'>".$pedido->pizza_id."</td>";
      echo "  <td>".$pedido->pizza_nome."</td>";
      echo "  <td class='al-dir'>".number_format($pedido->total_item,2,",",".")."</td>";
      echo "</tr>";
    }
  }
?>
      </tbody>
    </table>
  </div>
<?php
  require_once(__DIR__ . "/../common/rodape.php");