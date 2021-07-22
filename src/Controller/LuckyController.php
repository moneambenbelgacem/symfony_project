<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number(): Response
    {
        

        return new Response(
            'Bonjour tout le monde '
        );
    }
}