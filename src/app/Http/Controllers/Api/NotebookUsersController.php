<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NotebookUser;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\NotebookUserStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class NotebookUsersController extends Controller
{
    /**
     *  @OA\Get(
     *     path="/notebookusers",
     *     operationId="notebookusersAll",
     *     tags={"NotebookUser"},
     *     summary="Display a listing of the resource",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="Номер страницы",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Все хорошо",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/NotebookUserShowRequest"),
     *             )
     *         )
     *     ),
     * )
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = NotebookUser::query()->paginate(2);
        return response()->json($model);
    }

    /**
     * @OA\Post(
     *     path="/notebookusers",
     *     operationId="notebookusersCreate",
     *     tags={"NotebookUser"},
     *     summary="Create yet another example record",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine",
     *         @OA\JsonContent(ref="#/components/schemas/NotebookUserShowRequest")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/NotebookUserStoreRequest")
     *     ),
     * )
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotebookUserStoreRequest $request): JsonResponse
    {
        $model = new NotebookUser();
        $model->fill($request->all());
        $model->save();

        return response()->json($model);

    }

    /**
     * @OA\Get(
     *     path="/notebookusers/{id}",
     *     operationId="notebookusersGet",
     *     tags={"NotebookUser"},
     *     summary="Get NotebookUser by ID",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="The ID of NotebookUser",
     *         required=true,
     *         example="1",
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine",
     *         @OA\JsonContent(ref="#/components/schemas/NotebookUserShowRequest")
     *     ),
     * )
     *
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id): JsonResponse
    {
        $model = NotebookUser::query()->findOrFail($id);
        return response()->json($model);
        //
    }

    /**
     * @OA\Put(
     *     path="/notebookusers/{id}",
     *     operationId="notebookusersUpdate",
     *     tags={"NotebookUser"},
     *     summary="Update NotebookUser by ID",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="The ID of NotebookUser",
     *         required=true,
     *         example="1",
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine",
     *         @OA\JsonContent(ref="#/components/schemas/NotebookUserShowRequest")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/NotebookUserStoreRequest")
     *     ),
     * )
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $params = $request->all();
        $model  = NotebookUser::query()->findOrFail($id);
        $model->fill($params);
        $model->save();

        return response()->json($model);
    }

    /**
     * @OA\Delete(
     *     path="/notebookusers/{id}",
     *     operationId="notebookusersDelete",
     *     tags={"NotebookUser"},
     *     summary="Delete NotebookUser by ID",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="The ID of NotebookUser",
     *         required=true,
     *         example="1",
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Response(
     *         response="202",
     *         description="Deleted",
     *     ),
     * )
     *
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id): Response
    {
        $model = NotebookUser::query()->findOrFail($id);
        $model->delete();

        return response(null, HttpResponse::HTTP_ACCEPTED);
    }
}
