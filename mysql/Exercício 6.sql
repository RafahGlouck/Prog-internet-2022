select pedido_id as numero_pedido,
sum(quantidade) as quantidade_vendidas,
count(pizza_id) as quantidade_itens,
avg(valor) as media_preço_unitario
from pedido_item
group by pedido_id
order by 3 desc, 2 desc, 1                                                                                                      
limit 5