<?php

/**
 * Description of clases_model
 *
 * @author Jaime
 */
class Clases_model extends CI_Model{
    
     public function __construct() {
        parent::__construct();
    }
    
    public function insert($id_usuario, $descripcion, $max_alumnos){
          $data = array(
            'usuario_idusuario' => $id_usuario,
            'max_cant_alumn' => $max_alumnos,
            'cant_alum' => 0,
            'descripcion' => $descripcion
          );
          $this->db->insert('clase', $data);
        return true;
    }
    
    public function getClasesIns($id_institucion, $user){
        $this->db->select('a.idusuario'
        		. ', a.usuario'
                . ', c.idclase'
                . ', c.descripcion as descripcionclase'
                . ', c.max_cant_alumn'
                . ', c.cant_alum'
                . ', a.nombre_p'
                . ', a.apellido_p'
                . ', i.descripcion as descripcionins')
                ->from('clase c')
                ->join('usuario a', 'a.idusuario = c.usuario_idusuario','INNER')
                ->join('institucion i','i.idinstitucion = a.institucion_idinstitucion','INNER')
                ->where('i.idinstitucion',$id_institucion)
                ->where('a.usuario',$user);
        return $this->db->get()->result();
    }
    
     public function getMaterial(){
        $consulta = $this->db->get('material_interactivo');
        return $consulta->result();
    }
    
    public function asign_clase_materal($id_clase, $id_material){
        $data = array(
            'clase_idclase' => $id_clase,
            'material_interactivo_idmaterial_interactivo' => $id_material,
            'estado' => 'disponible'
          );
          $this->db->insert('clase_material', $data);
          return true;
    }
    public function get_clase_material($id_clase){
           $this->db->select('b.clase_idclase, b.estado, b.material_interactivo_idmaterial_interactivo, a.nombre_material, u.idusuario')
                  ->from('clase_material b')   
                   ->join('material_interactivo a','a.idmaterial_interactivo = b.material_interactivo_idmaterial_interactivo')
                   ->join('clase c', 'b.clase_idclase = c.idclase')
                   ->join('usuario u', 'c.usuario_idusuario = u.idusuario')
                   ->where('b.clase_idclase',$id_clase);
            $consulta = $this->db->get();        
        return $consulta->result();
    }
    public function get_cantidad_material($idmaterial, $idclase){
         $this->db->select('count(*) as cantidad')
                  ->from('clase_material')
                 ->where('material_interactivo_idmaterial_interactivo', $idmaterial)
                 ->where('clase_idclase', $idclase);
         $consulta = $this->db->get();
         return $consulta->result();
         
    }
    
    
}
