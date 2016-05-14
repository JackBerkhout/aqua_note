<?php
/**
 * Created by PhpStorm.
 * User: jacksoft
 * Date: 5/4/16
 * Time: 2:27 PM
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class GenusController
 * @package AppBundle\Controller
 */
class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
//        Use templating service
//        $templating = $this->container->get('templating');
//        $html = $templating->render('genus/show.html.twig', [
//            'name' => $genusName,
//        ]);
//        return new Response($html);

//        Shortcut since this is common:
//        return $this->render('genus/show.html.twig', [
//            'name' => $genusName,
//        ]);

        $notes = [
            'Octopus asked me a riddle, outsmarted me',
            'I counted 8 legs... as they wrapped around me',
            'Inked!'
        ];

        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
            'notes' => $notes,
        ]);
    }

    /**
     * @Route("/genus/{genusName}/notes")
     * @Method("GET")
     */
    public function getNotesAction()
    {
        $notes = [
            ['id' => 1, 'username' => 'Jack', 'email' => 'jack@jacksoft.eu'],
            ['id' => 2, 'username' => 'Leo', 'email' => 'leo@jacksoft.eu'],
            ['id' => 3, 'username' => 'Vasinee', 'email' => 'vasinee@jacksoft.eu'],
        ];

        $data = [
            'notes' => $notes,
        ];

//        return new Response(json_encode($data));
        return new JsonResponse($data);

    }
}