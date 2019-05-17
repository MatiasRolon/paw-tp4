<?php

namespace App\Models;

use App\Core\Model;

class Turnos extends Model
{
    protected $table = 'turnos';

    public function get()
    {
        return $this->db->selectAll($this->table);
    }
    
    public function getAllDiagnosticos()
    {
        $atribute = 'diagnostico';
        return $this->db->selectAtributeForAll($atribute, $this->table);
    }
    
    
    public function insert(array $turno)
    {
        $this->db->insert($this->table, $turno);
    }
    
}