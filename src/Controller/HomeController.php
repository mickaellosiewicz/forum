<?php

    namespace App\Controller;

    use App\Entity\Section;
    use App\Entity\UnderSection;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class HomeController extends Controller {

        public function index() {

            $qb = $this
                -> getDoctrine()
                -> getManager();

            $sectionRepository = $qb
                -> getRepository(Section::class);

            $sections = $sectionRepository
                -> findAll();

            $underSectionRepository = $qb
                -> getRepository(UnderSection::class);

            $underSections = $underSectionRepository
                -> findAll();

            return $this -> render('index.html.twig', array(

                'sections' => $sections,
                'underSections' => $underSections

            ));

        }

    }