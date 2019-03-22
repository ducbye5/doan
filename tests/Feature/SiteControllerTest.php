<?php

namespace Tests\Feature;
use Tests\TestCase;


/**
*	@author ducdo
*	@group SiteControllerTest
*/

class SiteControllerTest extends Testcase
{

	public function setUp() {
		$listTable = [
			0 => 'news_infos',
			1 => 'news_details'
		];
		parent::setUp();
		$this->truncate_tables_in_database(null,$listTable);
	}

	public function tearDown() {
        parent::tearDown(); 
    }

	private function fake_Data($total_number_of_records = 10,$diffirent_data = []) {
        if($diffirent_data == []){
            factory(\App\Models\News_infos::class,$total_number_of_records)->create();
        }else{
            for($i = 0 ;$i < count($diffirent_data);$i++){
                factory(\App\Models\News_infos::class,$total_number_of_records)->create($diffirent_data[$i]);
            }
        }
    }

	/** 
	*	@group index1
	*	@test
	*	@dataProvider data_for_test_paginate_page_index
	*	@return
	*/
	public function index ($url, $expected_result) {
		$this->fake_data(20);
		$reponse = $this->get($url);
		$result = $this->getResponseViewContent($reponse,'results');
		$number_items = count($result->items());
		dd($number_items);
		$this->assertEquals($number_items, $expected_result);
	}

	public function data_for_test_paginate_page_index () {
		return [
			[
				'url' => '/index?page=1',
				'expected_result' => 15
			],
			[
				'url' => '/index?page=2',
				'expected_result' => 5
			],
			[
				'url' => '/index?page=3',
				'expected_result' => 0
			],
		];
	}
}