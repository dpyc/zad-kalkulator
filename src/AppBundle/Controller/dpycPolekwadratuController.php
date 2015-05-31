<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\dpycPolekwadratuType;
use dpyc\Tools\Polekwadratu;
class dpycPolekwadratuController extends Controller
{
    /**
     * @Route("/dpyc/polekwadratu/show/form", name="dpyc_polekwadratu_show_form")
     */
    public function showFormAction()
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);
        return $this->render(
            'AppBundle:dpycPolekwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/dpyc/polekwadratu/calc", name="dpyc_polekwadratu_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:dpycPolekwadratu:wynik.html.twig',
                array('wynik' => $polekwadratu->polekwadratu())
            );
        }
        return $this->render(
            'AppBundle:dpycPolekwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Polekwadratu $polekwadratu The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Polekwadratu $polekwadratu)
    {
        $form = $this->createForm(new dpycPolekwadratuType(), $polekwadratu, array(
            'action' => $this->generateUrl('dpyc_polekwadratu_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
}