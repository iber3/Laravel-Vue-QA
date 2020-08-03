<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AcceptAnswerController extends Controller
{
    public function __invoke(Answer $answer){
        $this->authorize('acceptVote', $answer);
        
        $answer->question->acceptBestAnswer($answer);
        return back();
    }
}
