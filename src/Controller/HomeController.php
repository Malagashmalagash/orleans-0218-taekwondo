<?php
/**
 * Created by PhpStorm.
 * User: sapuraizu
 * Date: 28/03/18
 * Time: 11:01
 */

namespace Controller;

class HomeController extends AbstractController
{
    public function index(): string
    {
        $event = [
            'title' => 'Titre exemple',
            'date' => time(),
            'description' => 'Description des activités de l\'event',
            'image' => 'assets/images/flyers.jpg'
        ];

        return $this->twig->render('Home/index.html.twig', [
            'events' => [ $event, $event, $event ],
            'map_access_token' => MAP_ACCESS_TOKEN,
            'training_rooms' => [
                [
                    'id' => 'uniq_room_first',
                    'name' => 'Salle d\'entraînement #1',
                    'address' => '27 rue non nommée',
                    'lat' => 47.89455472852978,
                    'lng' => 1.8482355333803753,
                    'infos' => 'Desservi par les lignes de bus 12 et 13.'
                ],
                [
                    'id' => 'uniq_room_second',
                    'name' => 'Salle d\'entraînement #2',
                    'address' => '72 rue non nommée',
                    'lat' => 47.87134566839059,
                    'lng' => 1.9567255236147503,
                    'infos' => 'Desservie par les lignes de bus 13 et 11.'
                ]
            ]
        ]);
    }
}