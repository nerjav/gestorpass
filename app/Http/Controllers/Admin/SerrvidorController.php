<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Serrvidor\BulkDestroySerrvidor;
use App\Http\Requests\Admin\Serrvidor\DestroySerrvidor;
use App\Http\Requests\Admin\Serrvidor\IndexSerrvidor;
use App\Http\Requests\Admin\Serrvidor\StoreSerrvidor;
use App\Http\Requests\Admin\Serrvidor\UpdateSerrvidor;
use App\Models\Serrvidor;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SerrvidorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSerrvidor $request
     * @return array|Factory|View
     */
    public function index(IndexSerrvidor $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Serrvidor::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            [''],

            // set columns to searchIn
            ['']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.serrvidor.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.serrvidor.create');

        return view('admin.serrvidor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSerrvidor $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSerrvidor $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Serrvidor
        $serrvidor = Serrvidor::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/serrvidors'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/serrvidors');
    }

    /**
     * Display the specified resource.
     *
     * @param Serrvidor $serrvidor
     * @throws AuthorizationException
     * @return void
     */
    public function show(Serrvidor $serrvidor)
    {
        $this->authorize('admin.serrvidor.show', $serrvidor);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Serrvidor $serrvidor
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Serrvidor $serrvidor)
    {
        $this->authorize('admin.serrvidor.edit', $serrvidor);


        return view('admin.serrvidor.edit', [
            'serrvidor' => $serrvidor,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSerrvidor $request
     * @param Serrvidor $serrvidor
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSerrvidor $request, Serrvidor $serrvidor)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Serrvidor
        $serrvidor->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/serrvidors'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/serrvidors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySerrvidor $request
     * @param Serrvidor $serrvidor
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySerrvidor $request, Serrvidor $serrvidor)
    {
        $serrvidor->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySerrvidor $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySerrvidor $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Serrvidor::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
