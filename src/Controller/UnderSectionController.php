<?php

    namespace App\Controller;

    use App\Entity\Article;
    use App\Entity\UnderSection;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class UnderSectionController extends Controller {

        public function showSections($id) {

            $qb = $this
                -> getDoctrine()
                -> getManager();

            $articleRepository = $qb
                -> getRepository(Article::class);

            $articles = $articleRepository
                -> findBy(array('underSection' => $id));

            $underSectionRepository = $qb
                -> getRepository(UnderSection::class);

            $underSection = $underSectionRepository
                -> findOneBy(array('id' => $id));

            return $this -> render('underSections.html.twig', array(
                'articles' => $articles,
                'id' => $id,
                'underSection' => $underSection
            ));

        }

    }