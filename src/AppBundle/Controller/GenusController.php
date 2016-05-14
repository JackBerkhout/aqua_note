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
     * @Route("/genus/{genusName}/notes", name="genus_show_notes")
     * @Method("GET")
     */
    public function getNotesAction()
    {
        $image_path = "/aqua_note/web/images/";
//        $image_path = "images/";
        $notes = [
            ['id' => 1, 'username' => 'Leanna', 'avatarUri' => $image_path.'leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'Ryan', 'avatarUri' => $image_path.'ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'Leanna', 'avatarUri' => $image_path.'leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
        ];

        $data = [
            'notes' => $notes,
            'image_path' => $image_path,
        ];

//        return new Response(json_encode($data));
        return new JsonResponse($data);

    }
}