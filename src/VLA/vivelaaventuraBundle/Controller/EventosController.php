<?php

namespace VLA\vivelaaventuraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VLA\vivelaaventuraBundle\Form\EventosType;
use VLA\vivelaaventuraBundle\Entity\TipoActividad;
use VLA\vivelaaventuraBundle\Entity\Eventos;

class EventosController extends Controller
{
    public function newEventoAction()
    {
    	
    	$eventos = new Eventos();
		$form = $this-> createForm(new EventosType, $eventos);//No sé si tendré qu epnerle todo el Bundle completo.
        return $this->render('vivelaaventuraBundle:Eventos:new_evento.html.twig', 
        array('form' => $form-> createView(),
		'action' => $this-> generateUrl('crete_evento'), 
		'mathod' => 'post'
        ));
    }

    public function creteEventoAction()
    {
        $request = $this-> getRequest();
		$eventos = new Eventos();
		$form = $this-> createForm(new EventosType, $eventos);//No sé si tendré qu epnerle todo el Bundle completo.
		$form-> bind($request);//Vinculamos los datos del request al formulario
		if($form-> isValid())//Empezamos con las comprobaciones del formulario y le decimos que si el formulario es válido, hacemos lo que hay abajo
		{
			$em = $this-> getDoctrine()-> getManager(); 
			$em-> persist($eventos);
			$em-> flush();
		}
		return $this-> redirect($this-> generateUrl('listar_evento'));
    }

    public function editEventoAction($id)
    {
        return $this->render('vivelaaventuraBundle:Eventos:edit_evento.html.twig', array(
            // ...
        ));
    }

    public function updateEventoAction($id)
    {
        return $this->render('vivelaaventuraBundle:Eventos:update_evento.html.twig', array(
            // ...
        ));
    }

    public function deleteEventoAction($id)
    {
        return $this->render('vivelaaventuraBundle:Eventos:delete_evento.html.twig', array(
            // ...
        ));
    }

    public function listarEventoAction()
    {
        $em = $this-> getDoctrine() -> getManager();
    	$repo = $em -> getRepository('vivelaaventuraBundle:Eventos');
    	$eventos = $repo -> findall();
        return $this->render('vivelaaventuraBundle:Eventos:listar_evento.html.twig', array(
            'eventos' => $eventos));
    }

}
