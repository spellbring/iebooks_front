<?php
$this->load->view('plantillas/cuento/_Header', $plantilla);
$this->load->view('plantillas/cuento/_LeftSidebar');
$datos_plantilla['_NavBar'] = 'plantillas/cuento/_NavBar';
$this->load->view('back_end/' . $plantilla['vista'], $datos_plantilla);
$this->load->view('plantillas/cuento/_Footer');