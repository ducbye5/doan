<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\S_IndexService;

class SiteController extends Controller
{
	private $s_IndexService;
    public function __construct(S_IndexService $S_IndexService)
    {
        $this->s_IndexService = $S_IndexService;
    }

	public function index()
	{
		$view = $this->s_IndexService->index();
        return view($view);
	}

	public function indexMap()
	{
		$view = $this->s_IndexService->indexMap();
        return view($view);
	}
}