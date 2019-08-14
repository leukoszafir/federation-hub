<?php

declare(strict_types=1);

namespace App\Controller\Authentication;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/login", name="authentication.login")
 */
final class LoginController extends AbstractController
{
    private $authenticationUtils;

    public function __construct(AuthenticationUtils $authenticationUtils)
    {
        $this->authenticationUtils = $authenticationUtils;
    }

    public function __invoke(): Response
    {
        return $this->render('authentication/login.html.twig', [
            'last_username' => null,
            'error' => 'To continue, you need to sign in.',
            'login_url' => $this->generateUrl('authentication.login'),
        ]);
    }
}
