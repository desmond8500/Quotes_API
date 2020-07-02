<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCitationAPIRequest;
use App\Http\Requests\API\UpdateCitationAPIRequest;
use App\Models\Citation;
use App\Repositories\CitationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CitationController
 * @package App\Http\Controllers\API
 */

class CitationAPIController extends AppBaseController
{
    /** @var  CitationRepository */
    private $citationRepository;

    public function __construct(CitationRepository $citationRepo)
    {
        $this->citationRepository = $citationRepo;
    }

    /**
     * Display a listing of the Citation.
     * GET|HEAD /citations
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $citations = $this->citationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($citations->toArray(), 'Citations retrieved successfully');
    }

    /**
     * Store a newly created Citation in storage.
     * POST /citations
     *
     * @param CreateCitationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCitationAPIRequest $request)
    {
        $input = $request->all();

        $citation = $this->citationRepository->create($input);

        return $this->sendResponse($citation->toArray(), 'Citation saved successfully');
    }

    /**
     * Display the specified Citation.
     * GET|HEAD /citations/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Citation $citation */
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            return $this->sendError('Citation not found');
        }

        return $this->sendResponse($citation->toArray(), 'Citation retrieved successfully');
    }

    /**
     * Update the specified Citation in storage.
     * PUT/PATCH /citations/{id}
     *
     * @param int $id
     * @param UpdateCitationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCitationAPIRequest $request)
    {
        $input = $request->all();

        /** @var Citation $citation */
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            return $this->sendError('Citation not found');
        }

        $citation = $this->citationRepository->update($input, $id);

        return $this->sendResponse($citation->toArray(), 'Citation updated successfully');
    }

    /**
     * Remove the specified Citation from storage.
     * DELETE /citations/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Citation $citation */
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            return $this->sendError('Citation not found');
        }

        $citation->delete();

        return $this->sendSuccess('Citation deleted successfully');
    }
}
