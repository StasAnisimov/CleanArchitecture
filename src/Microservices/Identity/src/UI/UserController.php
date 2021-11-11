<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/register', methods: 'POST')]
    public function registerUser(Request $request)
    {

    }

    #[Route('/login', methods: 'POST')]
    public function loginUser(Request $request)
    {

    }
}