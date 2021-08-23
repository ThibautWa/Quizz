<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class QuizController extends AbstractController
{
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/quiz", name="quiz")
     */
    public function index(): Response
    {
        $category = $this->getDoctrine()->getRepository(Categorie::class)->findAll();

        return $this->render('quiz/index.html.twig', [
            'category' => $category
        ]);
    }

    /**
     * @Route("/quiz/categorie", name="categoryChoose")
     */
    public function categoryChoose()
    {
        $content = $this->getDoctrine()->getRepository(Question::class)->findBy(['idCategorie' => $_GET['id']]);

        return $this->render('quiz/categoryChoose.html.twig', [
            'title' => $_GET['categoryName'],
            'content' => $content,
        ]);
    }

    /**
     * @Route("/quiz/categorie/score", name="score")
     */
    public function Score()
    {
        $i = 0;
        foreach($_POST as $value)
        {
            if ($value == 1)
                $i++;
        }
        return $this->render('quiz/score.html.twig', [
            'score' => $i
        ]);
    }
}
