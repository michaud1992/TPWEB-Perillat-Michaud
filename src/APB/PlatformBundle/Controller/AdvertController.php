<?php

// src/APB/PlatformBundle/Controller/AdvertController.php

namespace APB\PlatformBundle\Controller;

use APB\PlatformBundle\Entity\Advert;
use APB\PlatformBundle\Entity\Image;
use APB\PlatformBundle\Entity\Application;
use APB\PlatformBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends controller
{
    public function indexAction($page) {
        if ($page < 1) 
			throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
		
		$listAdverts = array(
      array(
        'title'   => 'Recherche développpeur Symfony2',
        'id'      => 1,
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Mission de webmaster',
        'id'      => 2,
        'author'  => 'Hugo',
        'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Offre de stage webdesigner',
        'id'      => 3,
        'author'  => 'Mathieu',
        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
        'date'    => new \Datetime())
    );
		
		return $this->render('APBPlatformBundle:Advert:index.html.twig', array('listAdverts' => $listAdverts));
	}
	
	public function viewAction($id) {
		$em = $this->getDoctrine()->getManager();
		$advert = $em->getRepository('APBPlatformBundle:Advert')->find($id);

		if (null == $advert) {
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}

		$listApplications = $em->getRepository('APBPlatformBundle:Application')->findBy(array('advert' => $advert));
		
		return $this->render('APBPlatformBundle:Advert:view.html.twig', array('advert' => $advert, 
																			  'listApplications' => $listApplications));
	}

	public function addAction(Request $request) {
		$advert = new Advert();
		$advert->setTitle('Recherche développeur Symfony2.');
		$advert->setAuthor('Alexandre');
		$advert->setContent("Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…");

		$image = new Image();
		$image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
		$image->setAlt('Job de rêve');
		$advert->setImage($image);
		
		$application1 = new Application();
		$application1->setAuthor('Marine');
		$application1->setContent("J'ai toutes les qualités requises.");

        $application2 = new Application();
		$application2->setAuthor('Pierre');
		$application2->setContent("Je suis très motivé.");
		
		$application1->setAdvert($advert);
		$application2->setAdvert($advert);
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($advert);
		$em->persist($application1);
		$em->persist($application2);
		$em->flush();

		if ($request->isMethod('POST')) {
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
			return $this->redirect($this->generateUrl('apb_platform_view', array('id' => $advert->getId())));
		}

		return $this->render('APBPlatformBundle:Advert:add.html.twig');
	
	}

	public function editAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();

		$advert = $em->getRepository('APBPlatformBundle:Advert')->find($id);

		if (null === $advert) {
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}

        $listCategories = $em->getRepository('APBPlatformBundle:Category')->findAll();

        foreach ($listCategories as $category) {
			$advert->addCategory($category);
		}

		$em->flush();

		return $this->render('APBPlatformBundle:Advert:edit.html.twig', array('advert' => $advert));
	}
	
	public function deleteAction($id) {
		$em = $this->getDoctrine()->getManager();

        $advert = $em->getRepository('APBPlatformBundle:Advert')->find($id);

		if (null === $advert) {
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}

        foreach ($advert->getCategories() as $category) {
			$advert->removeCategory($category);
		}

        $em->flush();
		
		return new response("Delete");
	}
	
	public function menuAction() {
    $listAdverts = array(
      array('id' => 2, 'title' => 'Recherche développeur Symfony2'),
      array('id' => 5, 'title' => 'Mission de webmaster'),
      array('id' => 9, 'title' => 'Offre de stage webdesigner')
    );

    return $this->render('APBPlatformBundle:Advert:menu.html.twig', array(
      'listAdverts' => $listAdverts
    ));
  }
}