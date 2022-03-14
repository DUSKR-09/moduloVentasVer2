<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContratosRequest;
use App\Http\Requests\UpdateContratosRequest;
use App\Repositories\ContratosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\User;
/* use Flash; */
use Laracasts\Flash\Flash;
use App\Models\Producto;
use App\Models\Contratos;
use Response;

class ContratosController extends AppBaseController
{
    /** @var ContratosRepository $contratosRepository*/
    private $contratosRepository;

    public function __construct(ContratosRepository $contratosRepo)
    {
        $this->contratosRepository = $contratosRepo;
    }

    /**
     * Display a listing of the Contratos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $prueba = [];
        $producto = [];
        $cliente = [];

        $contratos=Contratos::all();
        /* $contratos = $this->contratosRepository->all(); */

        for($i=0; $i<sizeof($contratos); $i++){
            $prueba[$i] = User::findOrFail($contratos[$i]->usuario);
        }

        for($i=0; $i<sizeof($contratos); $i++){
            $cliente[$i] = Clientes::findOrFail($contratos[$i]->idCliente);
        }
        
        /* $producto = Producto::find($contratos->idProducto); */
        for($i=0; $i<sizeof($contratos); $i++){
            $producto[$i] = Producto::findOrFail($contratos[$i]->idProducto);
        }

        /* return view('contratos.index')
            ->with('contratos', $contratos); */

        return view('contratos.index', compact('producto', 'cliente', 'prueba', 'contratos'));
    }

    /**
     * Show the form for creating a new Contratos.
     *
     * @return Response
     */
    public function create()
    {
        $edit = 0;

        $cliente = Clientes::all();
        $cli = Clientes::all();

        $producto = Producto::all();
        $prod = Producto::all();

        /* return view('contratos.create'); */
        return view('contratos.create', compact('prod', 'producto','cliente', 'edit', 'cli'));
    }

    /**
     * Store a newly created Contratos in storage.
     *
     * @param CreateContratosRequest $request
     *
     * @return Response
     */
    public function store(CreateContratosRequest $request)
    {
        $input = $request->all();

        $contratos = $this->contratosRepository->create($input);

        Flash::success('Contratos saved successfully.');

        return redirect(route('contratos.index'));
    }

    /**
     * Display the specified Contratos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /* $contratos = Contratos::all(); */
        $contratos = $this->contratosRepository->find($id);
        $usuario = User::find($contratos->usuario);
        $cliente = Clientes::find($contratos->idCliente);
        $producto = Producto::find($contratos->idProducto);
        
        /* $contratos = $this->contratosRepository->find($id); */

        if (empty($contratos)) {
            Flash::error('Contratos not found');

            return redirect(route('contratos.index'));
        }

        /* return view('contratos.show')->with('contratos', $contratos); */
        return view('contratos.show', compact('producto', 'cliente', 'usuario', 'contratos'));
    }

    /**
     * Show the form for editing the specified Contratos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /* $contratos = $this->contratosRepository->find($id); */
        $contratos = Contratos::findOrFail($id);
        $contrato = 1;

        $cli = Clientes::findOrFail($contratos->idCliente);
        $cliente = Clientes::all();

        $prod = Producto::findOrFail($contratos->idProducto);
        $producto = Producto::all();

        $edit = 1;


        if (empty($contratos)) {
            Flash::error('Contratos not found');

            return redirect(route('contratos.index'));
        }

        /* return view('contratos.edit')->with('contratos', $contratos); */
        return view('contratos.edit', compact('edit', 'prod', 'producto', 'cli', 'cliente', 'contrato', 'contratos'));
    }

    /**
     * Update the specified Contratos in storage.
     *
     * @param int $id
     * @param UpdateContratosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContratosRequest $request)
    {
        $contratos = $this->contratosRepository->find($id);

        if (empty($contratos)) {
            Flash::error('Contratos not found');

            return redirect(route('contratos.index'));
        }

        $contratos = $this->contratosRepository->update($request->all(), $id);

        Flash::success('Contratos updated successfully.');

        return redirect(route('contratos.index'));
    }

    /**
     * Remove the specified Contratos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contratos = $this->contratosRepository->find($id);

        if (empty($contratos)) {
            Flash::error('Contratos not found');

            return redirect(route('contratos.index'));
        }

        $this->contratosRepository->delete($id);

        Flash::success('Contratos deleted successfully.');

        return redirect(route('contratos.index'));
    }
}
