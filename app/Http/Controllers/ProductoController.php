<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Repositories\ProductoRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\TipoProducto;
use Illuminate\Http\Request;
/* use Flash; */
use Laracasts\Flash\Flash;
use App\Models\Producto;
use Response;

class ProductoController extends AppBaseController
{
    /** @var ProductoRepository $productoRepository*/
    private $productoRepository;

    public function __construct(ProductoRepository $productoRepo)
    {
        $this->productoRepository = $productoRepo;
    }

    /**
     * Display a listing of the Producto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $prueba = [];
        $productos = $this->productoRepository->all();

        for($i=0; $i<sizeof($productos); $i++){
            $prueba[$i] = TipoProducto::findOrFail($productos[$i]->tipoProd);
            /* $prueba->usuario; */
        }

/*         return view('productos.index')
            ->with('productos', $productos); */
        return view('productos.index', compact('prueba', 'productos'));
    }

    /**
     * Show the form for creating a new Producto.
     *
     * @return Response
     */
    public function create()
    {
        $tipoProd = TipoProducto::all();
        $edit = 0;

        $tprod = TipoProducto::all();
        return view('productos.create', compact('tipoProd', 'edit', 'tprod'));
        /* return view('productos.create'); */
    }

    /**
     * Store a newly created Producto in storage.
     *
     * @param CreateProductoRequest $request
     *
     * @return Response
     */
    public function store(CreateProductoRequest $request)
    {
        $input = $request->all();

        $producto = $this->productoRepository->create($input);

        Flash::success('Producto saved successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Display the specified Producto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /* $productos = Producto::all(); */
        $producto = $this->productoRepository->find($id);
        $tProd = TipoProducto::find($producto->tipoProd);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        /* return view('productos.show')->with('producto', $producto); */
        return view('productos.show', compact('producto', 'tProd'));
    }

    /**
     * Show the form for editing the specified Producto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $producto = $this->productoRepository->find($id);
        $productos = 1;
        $tprod = TipoProducto::findOrFail($producto->tipoProd);
        $tipoProd = TipoProducto::all();
        $edit = 1;

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        /* return view('productos.edit')->with('producto', $producto); */
        return view('productos.edit', compact('edit', 'tprod', 'tipoProd', 'producto', 'productos'));
    }

    /**
     * Update the specified Producto in storage.
     *
     * @param int $id
     * @param UpdateProductoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductoRequest $request)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        $producto = $this->productoRepository->update($request->all(), $id);

        Flash::success('Producto updated successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified Producto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        $this->productoRepository->delete($id);

        Flash::success('Producto deleted successfully.');

        return redirect(route('productos.index'));
    }
}
