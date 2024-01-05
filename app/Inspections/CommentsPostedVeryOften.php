<?php

namespace App\Inspections;

use App\Models\User;
use Carbon\Carbon;
use Exception;

class CommentsPostedVeryOften
{
    /**
     * Detect spam
     *
     * @param  string $body
     * @throws \Exception
     */
    public function detect($body)
    {
        $user = User::find(auth()->id());

        $latestComment = $user->getLatestCommentByUser();

        if ($latestComment) {
            $data = $this->prepareCommonData($latestComment);

            if ($user->canUserPostComment($data)) {
                throw new Exception("You can post only once in {$data["userCommentFrequency"]} minutes.");
            }
        }
    }

    /**
     * Prepare common data
     *
     * @param  Collection $latestComment
     * @return array
     */
    public function prepareCommonData($latestComment)
    {
        return [
            'latestCommentCreated' => new Carbon($latestComment->created_at),
            'userCommentFrequency' => config('app.spam_detection.user_can_comment_once_in'),
        ];
    }
}