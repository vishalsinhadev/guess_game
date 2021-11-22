<?php
namespace App\Http\Controllers;

use App\Service\GameService;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{

    //
    public $service;

    public function __construct(GameService $gameService)
    {
        $this->service = $gameService;
    }

    public function index(Request $request)
    {
        return view('welcome');
    }

    public function game(Request $request)
    {
        $result = $this->service->handleRandomNumber($request);

        return response()->json([
            'data' => $result,
            'error' => false
        ]);
    }

    public function history(Request $request)
    {
        $models = $this->service->getLists($request);
        if ($request->ajax()){
            return Datatables::of($models)->make(true);
        }
        
        return view('history', compact('models'));
    }
}
