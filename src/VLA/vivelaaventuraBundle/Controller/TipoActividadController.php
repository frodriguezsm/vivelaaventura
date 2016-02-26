<?php

namespace VLA\vivelaaventuraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TipoActividadController extends Controller
{
    public function newActividadAction()
    {
        return $this->render('vivelaaventuraBundle:TipoActividad:new_actividad.html.twig', array(
            // ...
        ));
    }

    public function createActividadAction()
    {
        return $this->render('vivelaaventuraBundle:TipoActividad:create_actividad.html.twig', array(
            // ...
        ));
    }

    public function editActividadAction()
    {
        return $this->render('vivelaaventuraBundle:TipoActividad:edit_actividad.html.twig', array(
            // ...
        ));
    }

    public function updateActividadAction()
    {
        return $this->render('vivelaaventuraBundle:TipoActividad:update_actividad.html.twig', array(
            // ...
        ));
    }

    public function deleteActividadAction()
    {
        return $this->render('vivelaaventuraBundle:TipoActividad:delete_actividad.html.twig', array(
            // ...
        ));
    }

    public function listActividadAction()
    {
        return $this->render('vivelaaventuraBundle:TipoActividad:list_actividad.html.twig', array(
            // ...
        ));
    }

}
