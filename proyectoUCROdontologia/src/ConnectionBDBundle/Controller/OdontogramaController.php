<?php

namespace ConnectionBDBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OdontogramaController extends Controller {

    public function indexAction() {
     
        return $this->render('ConnectionBDBundle:Odontograma:index.html.twig');
    }//create
    
    public function createAction(){  
        if(isset($_POST['boton'])){
        
          for ($k = 1; $k <= 32; $k++) { //for diente
            $this->insertarDiente($k);
            for ($j = 1; $j <= 3; $j++) { //for cara
                for ($i = 1; $i <= 9; $i++) {//for posicion matriz
                    $valor = $_POST[$k . $j . $i];
                    echo $valor;
                    if ($valor == 'morado') {
                        $this->insertardienteMatriz($i, $k, $j, 4);
                    } else if ($valor == 'rojo') {
                        $this->insertardienteMatriz($i, $k, $j, 1);
                    }else if ($valor=='azul'){
                         $this->insertardienteMatriz($i, $k, $j, 2);
                    }
                    else if ($valor=='amarillo'){
                         $this->insertardienteMatriz($i, $k, $j, 5);
                    }
                    else if ($valor=='verde'){
                         $this->insertardienteMatriz($i, $k, $j, 3);
                    }else if ($valor==''){
                         $this->insertardienteMatriz($i, $k, $j, 0);
                    }
                }//for i
            }//for j
        }//for diente
        return $this->render('ConnectionBDBundle:Odontograma:index.html.twig');
        }//if request
        else{
        return $this->render('ConnectionBDBundle:Odontograma:index.html.twig');}
            
    }

    public function insertarDiente($posi) {
        $em = $this->getDoctrine()->getManager();
        $dentadura = $em->getRepository('ConnectionBDBundle:Dentadura')->find(1);
        
        $diente = new \ConnectionBDBundle\Entity\Diente();
        $diente->setNombre(''.$posi);
        $diente->setExistencia(true);
        $diente->setTipo(1);
        $diente->setIddentadura($dentadura);
        
        $em->persist($diente);
        $em->flush();
        
    }

    public function insertardienteMatriz($posicionMatriz, $idDiente, $cara, $color) {

        $em = $this->getDoctrine()->getManager();
        $diente = $em->getRepository('ConnectionBDBundle:Diente')->find($idDiente);
        
        $matriz=new \ConnectionBDBundle\Entity\DienteMatriz();
        $matriz->setIddiente($diente);
        $matriz->setPosicion($posicionMatriz);
        $matriz->setCara($cara);
        $matriz->setColor($color);
        
        $em->persist($matriz);
        $em->flush();
        
        
}

//
}

//controller

