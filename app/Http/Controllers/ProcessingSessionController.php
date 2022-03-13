<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProcessingSessionRequest;
use App\Http\Requests\UpdateProcessingSessionRequest;
use App\Repositories\ProcessingSessionRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Models\User;
/* use Flash; */
use App\Models\ProcessingSession;
use Laracasts\Flash\Flash;
use Response;
use Illuminate\Support\Facades\Auth;

class ProcessingSessionController extends AppBaseController
{
    /** @var ProcessingSessionRepository $processingSessionRepository*/
    private $processingSessionRepository;

    public function __construct(ProcessingSessionRepository $processingSessionRepo)
    {
        $this->processingSessionRepository = $processingSessionRepo;
    }

    /**
     * Display a listing of the ProcessingSession.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /* $processingSessions = $this->processingSessionRepository->all(); */
/*         $prueba = User::findOrFail($processingSessions->usuario);
        $prueba->usuario; */

        /* $processingSessions = $this->processingSessionRepository->all(); */
        $processingSessions=ProcessingSession::all();
        /* $usuario = $request->user()->name; */
        /* $prueba=array(); */
        for($i=0; $i<sizeof($processingSessions); $i++){
            $prueba[$i] = User::findOrFail($processingSessions[$i]->usuario);
            /* $prueba->usuario; */
        }
        for($i=0; $i<sizeof($processingSessions); $i++){
            $cliente[$i] = Clientes::findOrFail($processingSessions[$i]->idCliente);
            /* $prueba->usuario; */
        }

/*         $ProcessingSession = $this->processingSessionRepository->all();
        $usr = $ProcessingSession->usuario;
        $usuario = User::find($usr); */
        /* $usuario = Auth::user()*/
        /* $usuario = User::select('name')->where('id','=', $usr); */
        

/*         return view('processing_sessions.index')
            ->with('processingSessions', $processingSessions); */
        return view('processing_sessions.index', compact('cliente', 'prueba', 'processingSessions'));
    }

    /**
     * Show the form for creating a new ProcessingSession.
     *
     * @return Response
     */
    public function create()
    {
        $cliente = Clientes::all();
        /* $cli = $cliente->nombres; */
        /* $cliente = $this->processingSessionRepository->find(2); */
        /* return view('processing_sessions.create'); */
        /* return view('processing_sessions.fields', compact('cliente')); */
        $edit = 0;
        /* $cli = 0; */
        $cli = Clientes::all();
        /* return view('processing_sessions.create')->with('cliente', $cliente); */
        return view('processing_sessions.create', compact('cliente', 'edit', 'cli'));
    }

    /**
     * Store a newly created ProcessingSession in storage.
     *
     * @param CreateProcessingSessionRequest $request
     *
     * @return Response
     */
    public function store(CreateProcessingSessionRequest $request)
    {
        $input = $request->all();
        
        $processingSession = $this->processingSessionRepository->create($input);

        Flash::success('Processing Session saved successfully.');

        return redirect(route('processingSessions.index'));
        
    }

    /**
     * Display the specified ProcessingSession.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $processingSessions=ProcessingSession::all();
        $processingSession = $this->processingSessionRepository->find($id);
        $usuario = User::find($processingSession->usuario);
        $cliente = Clientes::find($processingSession->idCliente);
        
        if (empty($processingSession)) {
            Flash::error('Processing Session not found');

            return redirect(route('processingSessions.index'));
         }
/*        for($i=0; $i<sizeof($processingSessions); $i++){
            $prueba[$i] = User::findOrFail($processingSessions[$i]->usuario);
        } */

        /* return view('processing_sessions.show')->with('processingSession', $processingSession, 'usuario', $usuario); */
        /* return view('processing_sessions.show', compact('usuario', 'processingSession')); */
        return view('processing_sessions.show', compact('cliente', 'usuario', 'processingSession', 'processingSessions'));
    }

    /**
     * Show the form for editing the specified ProcessingSession.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $processingSession = $this->processingSessionRepository->find($id);
        $ofertas = 1;
        /* $cliente = Clientes::all(); */
        $cli = Clientes::findOrFail($processingSession->idCliente);
        /* $cli->id; */
        $cliente = Clientes::all();
        $edit = 1;
        /* return view('processing_sessions.create')->with('cliente', $cliente); */

        if (empty($processingSession)) {
            Flash::error('Processing Session not found');

            return redirect(route('processingSessions.index'));
        }

        /* return view('processing_sessions.edit')->with('processingSession', $processingSession); */
        return view('processing_sessions.edit', compact('edit', 'cli', 'cliente', 'processingSession', 'ofertas'));
    }

    /**
     * Update the specified ProcessingSession in storage.
     *
     * @param int $id
     * @param UpdateProcessingSessionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProcessingSessionRequest $request)
    {
        $processingSession = $this->processingSessionRepository->find($id);

        if (empty($processingSession)) {
            Flash::error('Processing Session not found');

            return redirect(route('processingSessions.index'));
        }

        $processingSession = $this->processingSessionRepository->update($request->all(), $id);

        Flash::success('Processing Session updated successfully.');

        return redirect(route('processingSessions.index'));
    }

    /**
     * Remove the specified ProcessingSession from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $processingSession = $this->processingSessionRepository->find($id);

        if (empty($processingSession)) {
            Flash::error('Processing Session not found');

            return redirect(route('processingSessions.index'));
        }

        $this->processingSessionRepository->delete($id);

        Flash::success('Processing Session deleted successfully.');

        return redirect(route('processingSessions.index'));
    }
}
