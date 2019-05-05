<?php

namespace App\Controller\Rest;

use App\Services\EventService;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Event;
use FOS\RestBundle\View\View;
use App\DTO\Event\EventDTO;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class EventController extends FOSRestController {


    /**
     * @var EventService
     */
    private $eventService;

    /**
     * EventController constructor.
     * @param EventService $eventService
     */
    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }


    //Test via Browser-URL:
    // http://rest-tutorial.test/api/events/list

    /**
     * Retrieves a collection of Event resource
     * @Rest\Get("/events/list")
     * @return view
     */
    public function getEvens(): View
    {
        $events = $this->eventService->getAll();
        return View::create($events, Response::HTTP_OK);
    }

    /**
     * Creates new event resource in database
     * @Rest\Post("/events")
     * @ParamConverter("eventDTO", converter="fos_rest.request_body")
     * @param EventDTO $eventDTO
     * @return view
     */
    public function addEvent (EventDTO $eventDTO){}

    /**
     * updates a events resource
     * @Rest\Put("/events/{eventsID}")
     * @ParamConverter("eventDTO", converter="fos_rest.request_body")
     * @param EventDTO $eventDTO
     * @throws \Doctrine\ORM\EntityNotFoundException
     * @return view
     */
    public function updateEvent(EventDTO $eventDTO, int $eventID){}

    /**
     * updates a event resource
     * @Rest\Delete("/events/{eventID}")
     * @throws \Doctrine\ORM\EntityNotFoundException
     * @return view
     */
    public function deleteEvent(int $eventID){}

    /**
     * empty implementation for the OPTIONS STUFF
     * @Rest\Options("/events")
     */
    public function options(){}

}
