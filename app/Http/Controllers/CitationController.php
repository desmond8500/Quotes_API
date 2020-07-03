<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCitationRequest;
use App\Http\Requests\UpdateCitationRequest;
use App\Repositories\CitationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CitationController extends AppBaseController
{
    /** @var  CitationRepository */
    private $citationRepository;

    public function __construct(CitationRepository $citationRepo)
    {
        $this->citationRepository = $citationRepo;
    }

    /**
     * Display a listing of the Citation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $citations = $this->citationRepository->paginate(10);

        return view('citations.index')
            ->with('citations', $citations);
    }

    /**
     * Show the form for creating a new Citation.
     *
     * @return Response
     */
    public function create()
    {
        return view('citations.create');
    }

    /**
     * Store a newly created Citation in storage.
     *
     * @param CreateCitationRequest $request
     *
     * @return Response
     */
    public function store(CreateCitationRequest $request)
    {
        $request->tag = json_encode($request->tag);
        $input = $request->all();

        $citation = $this->citationRepository->create($input);

        Flash::success('Citation saved successfully.');

        return redirect()->back();
    }

    /**
     * Display the specified Citation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            Flash::error('Citation not found');

            return redirect(route('citations.index'));
        }

        return view('citations.show')->with('citation', $citation);
    }

    /**
     * Show the form for editing the specified Citation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            Flash::error('Citation not found');

            return redirect(route('citations.index'));
        }

        return view('citations.edit')->with('citation', $citation);
    }

    /**
     * Update the specified Citation in storage.
     *
     * @param int $id
     * @param UpdateCitationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCitationRequest $request)
    {
        $request->tag = json_encode($request->tag);
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            Flash::error('Citation not found');

            return redirect(route('citations.index'));
        }

        $citation = $this->citationRepository->update($request->all(), $id);

        Flash::success('Citation updated successfully.');

        return redirect()->back();
    }

    /**
     * Remove the specified Citation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            Flash::error('Citation not found');

            return redirect(route('citations.index'));
        }

        $this->citationRepository->delete($id);

        Flash::success('Citation deleted successfully.');

        return redirect()->back();
    }
}
