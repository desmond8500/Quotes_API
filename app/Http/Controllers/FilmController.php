<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Repositories\FilmRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FilmController extends AppBaseController
{

    /** @var  FilmRepository */
    private $filmRepository;

    public function __construct(FilmRepository $filmRepo)
    {
        $this->filmRepository = $filmRepo;
    }

    /**
     * Display a listing of the Film.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $films = $this->filmRepository->paginate(10);

        return view('films.index')
            ->with('films', $films);
    }

    /**
     * Show the form for creating a new Film.
     *
     * @return Response
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created Film in storage.
     *
     * @param CreateFilmRequest $request
     *
     * @return Response
     */
    public function store(CreateFilmRequest $request)
    {
        $input = $request->all();

        $film = $this->filmRepository->create($input);

        Flash::success('Film saved successfully.');

        return redirect(route('films.index'));
    }

    /**
     * Display the specified Film.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $film = $this->filmRepository->find($id);

        if (empty($film)) {
            Flash::error('Film not found');

            return redirect(route('films.index'));
        }

        return view('films.show')->with('film', $film);
    }

    /**
     * Show the form for editing the specified Film.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $film = $this->filmRepository->find($id);

        if (empty($film)) {
            Flash::error('Film not found');

            return redirect(route('films.index'));
        }

        return view('films.edit')->with('film', $film);
    }

    /**
     * Update the specified Film in storage.
     *
     * @param int $id
     * @param UpdateFilmRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFilmRequest $request)
    {
        $film = $this->filmRepository->find($id);

        if (empty($film)) {
            Flash::error('Film not found');

            return redirect(route('films.index'));
        }

        $film = $this->filmRepository->update($request->all(), $id);

        Flash::success('Film updated successfully.');

        return redirect(route('films.index'));
    }

    /**
     * Remove the specified Film from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $film = $this->filmRepository->find($id);

        if (empty($film)) {
            Flash::error('Film not found');

            return redirect(route('films.index'));
        }

        $this->filmRepository->delete($id);

        Flash::success('Film deleted successfully.');

        return redirect(route('films.index'));
    }
}
