<?php

namespace App\Http\Controllers;

use App\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index()
    {
        return view('conversation.index', [
            'conversations' => Conversation::all(),
        ]);
    }

    public function show(Conversation $conversation)
    {

        return view('conversation.show', compact('conversation'));
    }
}
