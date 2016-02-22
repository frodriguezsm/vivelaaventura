<?php

namespace VLA\vivelaaventuraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function actividadesAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$repo = $em->getRepository('vivelaaventuraBundle:TipoActividad');
    	$actividad= $repo->findall();
        return $this->render('vivelaaventuraBundle:Default:actividades.html.twig', 
        array('actividad' => $actividad));
        
    }
    
	public function actividadAction($id_actividad)
    {	
    	$actividad = $this->get('Doctrine')->getRepository('vivelaaventuraBundle:TipoActividad')->find($id_actividad);

    	//$this->mpr($actividad, 'actividad');
    	
        return $this->render('vivelaaventuraBundle:Default:actividad.html.twig', 
        					array('actividad' => $actividad));
    }
    
    public function eventoAction($id_actividad,$id_evento)
    {
    	
    	return $this->render('vivelaaventuraBundle:Default:evento.html.twig');
    }
    
	public function eventosAction($id_actividad)
    {
    	$eventos = $this->get('Doctrine')->getRepository('vivelaaventuraBundle:Eventos')->find($id_actividad);
        
    	return $this->render('vivelaaventuraBundle:Default:evento.html.twig', 
        					array('eventos' => $eventos));
    }
    
	public function quienesSomosAction()
    {
        return $this->render('vivelaaventuraBundle:Default:quienesSomos.html.twig');
    }

    public function contactoAction()
    {
        return $this->render('vivelaaventuraBundle:Default:contacto.html.twig');
    }
    
	public function loginAction()
    {
        return $this->render('vivelaaventuraBundle:Default:login.html.twig');
    }   

    public function adminAction()
    {
        return $this->render('vivelaaventuraBundle:Default:admin.html.twig');
    } 
    
    private function mpr($value,$desc=null) {
    	echo "<pre>- ".strtoupper($desc).": ";
    	print_r($value);
    	echo "</pre>";
    }
   
}
