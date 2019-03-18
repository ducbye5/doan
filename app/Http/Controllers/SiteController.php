<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\S_IndexService;

class SiteController extends Controller
{
	private $s_IndexService;

    public function __construct(
    	S_IndexService $S_IndexService
    )
    {
        $this->s_IndexService = $S_IndexService;
    }

	public function index()
	{
		$result = $this->s_IndexService->index();
		$view = $result['view'];
		$data = $result['data'];
        return view($view,['list_data' => $data]);
	}

	public function indexMap()
	{
		$view = $this->s_IndexService->indexMap();
        return view($view);
	}

	public function searchProperties(Request $request){
        $data_input = $request->all()['search'];
        $result = $this->s_IndexService->searchProperties($data_input);
        $view = $result['view'];
        $data = $result['data'];

        return view($view,['list_data' => $data,'old_data_input' => $data_input]);
    }
}