<?php

namespace PM\TPBundle\Controller;

use PM\TPBundle\Entity\Article;
use PM\TPBundle\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    public function indexAction($page)
    {
		$em = $this->getDoctrine()->getManager();
		$listArticles =$em->getRepository('PMTPBundle:Article')->findAll();
        return $this->render('PMTPBundle:Default:index.html.twig', array('listArticles' => $listArticles));
    }
	
	public function viewAction($id)
    {
		$em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('PMTPBundle:Article')->find($id);

		if (null == $article) {
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}
		
        return $this->render('PMTPBundle:Default:view.html.twig', array('article' => $article));
    }
	
	public function addAction(Request $request)
    {
     	$article = new Article();

		$formBuilder = $this->get('form.factory')->createBuilder('form', $article);

		$formBuilder
		->add('date',      'date')
		->add('title',     'text')
		->add('content',   'textarea')
		->add('author',    'text')
		->add('save',      'submit')
		;
		
		$form = $formBuilder->getForm();
		$form->handleRequest($request);

		if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$em->persist($article);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      		return $this->redirect($this->generateUrl('pm_tp_view', array('id' => $article->getId())));
		}

		return $this->render('PMTPBundle:Default:add.html.twig', array(
		'form' => $form->createView(),
		));
    }
	
	public function editAction(Request $request, $id)
    {
		$article = $this->getDoctrine()->getManager()->getRepository('PMTPBundle:Article')->find($id);
		$formBuilder = $this->get('form.factory')->createBuilder('form', $article);
        
		$formBuilder
		->add('date',      'date')
		->add('title',     'text')
		->add('content',   'textarea')
		->add('author',    'text')
		->add('save',      'submit')
		;
		
		$form = $formBuilder->getForm();
		$form->handleRequest($request);

		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
			$em->flush();
			
      		return $this->redirect($this->generateUrl('pm_tp_view', array('id' => $article->getId())));
		}

		return $this->render('PMTPBundle:Default:edit.html.twig', array(
		'form' => $form->createView(), 'id' => $article->getId()
		));
    }
	
	public function deletAction($id)
    {
        return $this->render('PMTPBundle:Default:delete.html.twig');
    }
}
