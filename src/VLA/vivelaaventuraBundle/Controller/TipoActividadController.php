<?php

namespace VLA\vivelaaventuraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VLA\vivelaaventuraBundle\Form\TipoActividadType;
use VLA\vivelaaventuraBundle\Entity\TipoActividad;
use VLA\vivelaaventuraBundle\Entity\Eventos;
class TipoActividadController extends Controller
{
    public function newActividadAction()
    {
	    $tipoActividad = new tipoActividad();
		$form = $this-> createForm(new TipoActividadType, $tipoActividad);//No sé si tendré que pnerle todo el Bundle completo.
		
		return $this-> render('vivelaaventuraBundle:TipoActividad:new_actividad.html.twig', 
		array('form' => $form-> createView(),
		'action' => $this-> generateUrl('create_actividad'), 
		'mathod' => 'post'));
    }

    public function createActividadAction()
    {
	    $request = $this-> getRequest();
		$tipoActividad = new TipoActividad();
		$form = $this-> createForm(new TipoActividadType, $tipoActividad);//No sé si tendré qu epnerle todo el Bundle completo.
		$form-> bind($request);//Vinculamos los datos del request al formulario
		if($form-> isValid())//Empezamos con las comprobaciones del formulario y le decimos que si el formulario es válido, hacemos lo que hay abajo
		{
			$em = $this-> getDoctrine()-> getManager();
			$em-> persist($tipoActividad);
			$em-> flush();
		}
		return $this-> redirect($this-> generateUrl('list_actividad'));
        
    }

    public function editActividadAction($id)
    {
	    $repo = $this->getDoctrine()->getRepository('vivelaaventuraBundle:TipoActividad');
		$tipoActividad = $repo->find($id);
		$form = $this->createForm(new TipoActividadType, $tipoActividad);//No sé si tendré qu epnerle todo el Bundle completo.
		
		return $this->render('vivelaaventuraBundle:TipoActividad:edit_actividad.html.twig', 
		array('form' => $form->createView(),
		'action' => $this->generateUrl('update_actividad', array('id' => $id)), 
		'mathod' => 'post'));
    }

    public function updateActividadAction($id)
    {
	    $request = $this->getRequest();
		$repo = $this->getDoctrine()->getRepository('vivelaaventuraBundle:TipoActividad');
		$tipoActividad = $repo->find($id);
		$form = $this->createForm(new TipoActividadType, $tipoActividad);//No sé si tendré qu epnerle todo el Bundle completo.
		$form->bind($request);//Vinculamos los datos del request al formulario
		if($form->isValid())//Empezamos con las comprobaciones del formulario y le decimos que si el formulario es válido, hacemos lo que hay abajo
		{
			$em = $this->getDoctrine()->getManager();
			$em->persist($tipoActividad);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('list_actividad'));
    }

    public function deleteActividadAction($id)
    {
	    $repo = $this-> getDoctrine()-> getRepository('vivelaaventuraBundle:TipoActividad');
		$tipoActividad = $repo->find($id);
		$em = $this->getDoctrine()->getManager(); 
		$em->remove($tipoActividad);
		$em->flush();
	
		return $this->redirect($this->generateUrl('list_actividad'));
    }

    public function listActividadAction()
    {
    	$em = $this-> getDoctrine() -> getManager();
    	$repo = $em -> getRepository('vivelaaventuraBundle:TipoActividad');
    	$actividades = $repo -> findall();
        return $this->render('vivelaaventuraBundle:TipoActividad:list_actividad.html.twig', array(
            'actividades' => $actividades));
    }

}
