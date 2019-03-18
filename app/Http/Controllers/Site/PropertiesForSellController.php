<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\S_PropertiesService;

class PropertiesForSellController extends Controller
{

    private $s_PropertiesService;

    public function __construct(
        S_PropertiesService $S_PropertiesService
    ){
        $this->s_PropertiesService = $S_PropertiesService;
    }

    public function index($type)
    {
        $result = $this->s_PropertiesService->index($type);
        $view = $result['view'];
        $data = $result['data'];
    	return view($view,['list_data' => $data,'type' => $type]);
    }

    public function searchProperties(Request $request){
        $data_input = $request->all()['search'];
        $result = $this->s_PropertiesService->searchProperties($data_input);
        $view = $result['view'];
        $data = $result['data'];
        $type = $result['type'];

        return view($view,['list_data' => $data,'type' => $type]);
    }

    public function detail($id)
    {
    	$result = $this->s_PropertiesService->detail($id);
        $view = $result['view'];
        $data_property = $result['property_detail'];
        $listPropertyInTheSameCity = $result['property_in_the_same_city'];
        return view($view,['property' => $data_property,'listPropertyInTheSameCity' => $listPropertyInTheSameCity]);
    }
}
