<?php
namespace App\Services;
use App\Models\pedidos;

class pedidosPagamentos
{
    public function get( $id_pedido = null)
    {
        if($id_pedido){
            return pedidos::select($id_pedido);
        }else{
            return pedidos::selectAll();
        }

    }

    public function post()
    {
        
    }
    public function update()
    {
        
    }
    public function delete()
    {
        
    }


}