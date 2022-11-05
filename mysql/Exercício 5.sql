select pedido_id as numero_pedido,
sum(quantidade * valor) as total_pedido
from pedido_item
group by pedido_id
having sum(quantidade * valor) > 200.00
order by 2 desc
limit 10