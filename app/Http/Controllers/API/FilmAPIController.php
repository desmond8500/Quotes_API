<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFilmAPIRequest;
use App\Http\Requests\API\UpdateFilmAPIRequest;
use App\Models\Film;
use App\Repositories\FilmRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class FilmController
 * @package App\Http\Controllers\API
 */

class FilmAPIController extends AppBaseController
{
    /** @var  FilmRepository */
    private $filmRepository;

    public function __construct(FilmRepository $filmRepo)
    {
        $this->filmRepository = $filmRepo;
    }

    /**
     * Display a listing of the Film.
     * GET|HEAD /films
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $films = $this->filmRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($films->toArray(), 'Films retrieved successfully');
    }

    /**
     * Store a newly created Film in storage.
     * POST /films
     *
     * @param CreateFilmAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFilmAPIRequest $request)
    {
        $input = $request->all();

        $film = $this->filmRepository->create($input);

        return $this->sendResponse($film->toArray(), 'Film saved successfully');
    }

    /**
     * Display the specified Film.
     * GET|HEAD /films/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Film $film */
        $film = $this->filmRepository->find($id);

        if (empty($film)) {
            return $this->sendError('Film not found');
        }

        return $this->sendResponse($film->toArray(), 'Film retrieved successfully');
    }

    /**
     * Update the specified Film in storage.
     * PUT/PATCH /films/{id}
     *
     * @param int $id
     * @param UpdateFilmAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFilmAPIRequest $request)
    {
        $input = $request->all();

        /** @var Film $film */
        $film = $this->filmRepository->find($id);

        if (empty($film)) {
            return $this->sendError('Film not found');
        }

        $film = $this->filmRepository->update($input, $id);

        return $this->sendResponse($film->toArray(), 'Film updated successfully');
    }

    /**
     * Remove the specified Film from storage.
     * DELETE /films/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Film $film */
        $film = $this->filmRepository->find($id);

        if (empty($film)) {
            return $this->sendError('Film not found');
        }

        $film->delete();

        return $this->sendSuccess('Film deleted successfully');
    }
}
