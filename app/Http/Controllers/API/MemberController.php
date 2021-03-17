<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Member::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $member = new Member();
        $member->first_name = $request->get('firstName');
        $member->last_name = $request->get('lastName');
        $member->address = $request->get('address');
        $member->zipcode = $request->get('zipcode');
        $member->city = $request->get('city');

        $member->email = $request->get('email');
        $member->password = bcrypt($request->get('password'));

        $member->phone = $request->get('phone');

        $member->card_number = rand(10000000, 99999999);
        $member->save();

        return response()->json($member, JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        return response()->json(Member::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        return response()->json('Not implemented.', JsonResponse::HTTP_NOT_IMPLEMENTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        return response()->json('Not implemented.', JsonResponse::HTTP_NOT_IMPLEMENTED);
    }
}
