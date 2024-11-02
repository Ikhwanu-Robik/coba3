<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function start(Request $request)
    {
        $validated = $request->validate([
            "name" => "required"
        ]);

        $rng = rand(0, 100);

        $player = new Player;
        $player->name = $validated["name"];
        $player->score = 0;
        $player->answer = $rng;
        $player->save();

        return redirect()->route("home", ["player_id" => $player]);
    }

    public function win()
    {
        $players = Player::orderBy("score", "ASC")->get();

        return view("leaderboard", compact("players"));
    }

    public function check(Request $request)
    {
        $player = Player::findOrFail($request->player_id);

        if ($request->guess < $player->answer) {
            $player->score += 5;
            $player->save();

            return back()->with("msg", "too small");
        } else if ($request->guess > $player->answer) {
            $player->score += 5;
            $player->save();

            return back()->with("msg", "too big");
        }

        return redirect()->route("leaderboard");
    }
}
