<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Models\Member;
use Illuminate\Http\JsonResponse;

class MemberController extends Controller
{
    public function store(StoreMemberRequest $request): JsonResponse
    {
        // Retrieve the 'members' array from the request
        $members = $request->input('members');

        // Check if $members is an array
        if (!is_array($members)) {
            return response()->json([
                'message' => 'Invalid data format. Expected an array of members.',
            ], 422);
        }

        $createdMembers = [];

        // Iterate over the members array and create records
        foreach ($members as $memberData) {
            $createdMembers[] = Member::create($memberData);
        }

        return response()->json([
            'message' => 'Members created successfully!',
            'members' => $createdMembers,
        ], 201);
    }

    public function index(): JsonResponse
    {
        $members = Member::all();

        return response()->json([
            'message' => 'All members retrieved successfully!',
            'members' => $members,
        ]);
    }
}
