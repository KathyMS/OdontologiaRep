<?php

namespace AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function inicioAction()
    {
        return $this->render('AdministradorBundle:Default:index.html.twig');
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
               $session->set("user",$user->getNombreUsuario());
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
}
