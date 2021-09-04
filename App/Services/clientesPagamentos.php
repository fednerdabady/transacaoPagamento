<?php
        namespace App\Services;
        use App\Models\clientes;

class clientesPagamentos
{
        public function get( $id = null)
        {
            if($id){
                return clientes::select($id);
            }else{
                return clientes::selectAll();
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

