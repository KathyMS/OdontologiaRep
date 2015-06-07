<?php

namespace AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function inicioAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id")){
            return $this->render('AdministradorBundle:Default:index.html.twig');
        }else{
             $this->get('session')->getFlashBag()->add(
                   'mensaje',
                   'Debe estar logueado para ver este contenido'
           );
               return $this->redirect($this->generateUrl('login'));
        }
       
    }
    
     
    
    public function loginAction(Request $request)
    {
        if($request->getMethod()=="POST"){
            $usuario= $request->get("usuario");
            $pass= $request->get("pass");
           $user= $this->getDoctrine()->getRepository('ConnectionBDBundle:Usuarios')->findOneBy(array("user"=>$usuario,"password"=>$pass));
        
           if($user){
               $session=$request->getSession();
               $session->set("id",$user->getId());
               $session->set("user",$user->getUser());
               
               if(strcasecmp($user->getUser(),"administrador")==0 && strcasecmp($user->getPassword(),$pass)==0){
               return $this->redirect($this->generateUrl('inicio'));}
           }else{
               $this->get('session')->getFlashBag()->add(
                   'mensaje',
                   'Los datos no son validos'
           );
               return $this->redirect($this->generateUrl('login'));
           }
           
           
        }
        return $this->render('AdministradorBundle:Default:inicio_de_sesion.html.twig');
    }
    
     public function logoutAction(Request $request)
    {
        $session=$request->getSession();
        $session->clear();
       
               return $this->redirect($this->generateUrl('login'));
        
    }
    
}
