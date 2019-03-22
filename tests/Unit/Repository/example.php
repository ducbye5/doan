<?php

// namespace tests\Unit\Services\Report;

// use App\Services\Report\ReportCorpCommissionService;

// use App\Repositories\Eloquent\DemandInfoRepository;
// use App\Repositories\Eloquent\MCorpSubRepository;
// use App\Repositories\Eloquent\CommissionInfoRepository;
// use Illuminate\Pagination\Paginator;
// use App\Models\DemandInfo;
// use App\Models\MCorpSub;
// use App\Models\CommissionInfo;
// use DB;
// use tests\DataTesting\ReportCorpCommissionService\Data_getCorpSelectionPaginationCondition as dataImport;

// use tests\TestCase;
// use Mockery;

class ReportCorpCommissionServiceTest extends TestCase
{

	private $reportCorpCommissionService;
	private $mockReportCorpCommissionService;
	private $demandInfoRepository;
	private $mCorpSubsRepository;
	private $commissionInfoRepository;

    private $modelDemandInfo;
    private $modelMCorpSub;
    private $modelCommissionInfo;
    

    public static function setUpBeforeClass(){
        // $demandInfoRepository = Mockery::mock('\App\Repositories\DemandInfoRepositoryInterface');
        // $mCorpSubsRepository = Mockery::mock('\App\Repositories\MCorpSubRepositoryInterface');
        // $commissionInfoRepository = Mockery::mock('\App\Repositories\CommissionInfoRepositoryInterface');
        parent::setUpBeforeClass();
    }

    public static function tearDownAfterClass(){
        // Mockery::close();
        parent::tearDownAfterClass();
    }

	public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown(); 
    }


    private function truncate_tables_in_database(){
        \Schema::disableForeignKeyConstraints();
        DB::statement("TRUNCATE TABLE demand_infos RESTART IDENTITY CASCADE;");
        DB::statement("TRUNCATE TABLE visit_times RESTART IDENTITY CASCADE;");
        \Schema::enableForeignKeyConstraints();
    }

    
    private function fake_Data($total_number_of_records = 10){
        factory(\App\Models\VisitTime::class,$total_number_of_records)->create();
    }

    private function import_Data($data){
        for($i = 0 ;$i < count($data['table_name']); $i++){
            for($j = 0; $j < $data['total_record_insert'] ;$j++){
                DB::table($data['table_name'][$i])->insert($data['data'][$i][$j]);
            }
        }
        
    }

    private function class_Initialization(){
        $this->mCorpSubsRepository = new MCorpSubRepository(
            $this->modelMCorpSub = new MCorpSub()
        );
        $this->commissionInfoRepository = new CommissionInfoRepository(
            $this->modelCommissionInfo = new CommissionInfo()
        );
        $this->demandInfoRepository = new DemandInfoRepository(
            $this->modelDemandInfo = new DemandInfo(),
            $this->commissionInfoRepository
        );
    }
    private function current_Page_To_Test($currentPage = 1){
        Paginator::currentPageResolver(function () use ($currentPage) {            
            return $currentPage;        
        });
    }
    /**
     * @group getCorpSelectionPaginationCondition
     * @param $total_record_on_page = 4 , $sort = prefecture , $direction = desc
     * @return TRUE.Record on page is 4
     * @test
     * total record = 10 
     */
    public function GIVEN_data_input_WHEN_process_pagination_THEN_return_4_record_on_page(){
        $total_record = 10;
        $currentPage = 1;
        $total_record_on_page = 4;
        $sort = 'prefecture';
        $direction = 'desc';
        $this->truncate_tables_in_database();
        $this->class_Initialization();
        $this->fake_Data($total_record);
        $this->current_Page_To_Test($currentPage);
        $this->reportCorpCommissionService = new ReportCorpCommissionService(
            $this->demandInfoRepository,
            $this->mCorpSubsRepository,
            $this->commissionInfoRepository
        );
        $result = $this->reportCorpCommissionService->getCorpSelectionPaginationCondition($total_record_on_page, $sort, $direction);
        $result_to_test = count($result->items());
        $expected_result = $total_record_on_page;
        $this->assertEquals($expected_result,$result_to_test);
    }
    

    /**
     * @group getCorpSelectionPaginationCondition
     * @param $total_record_on_page = 4 , $sort = prefecture , $direction = desc
     * @return TRUE.Record on last page is 2
     * @test
     * total record = 10 
     */
    public function GIVEN_data_input_WHEN_process_pagination_THEN_return_2_record_on_last_page(){
        $total_record = 10;
        $currentPage = 3;
        $total_record_on_page = 4;
        $sort = 'prefecture';
        $direction = 'desc';
        $this->truncate_tables_in_database();
        $this->class_Initialization();
        $this->fake_Data($total_record);
        $this->current_Page_To_Test($currentPage);
        $this->reportCorpCommissionService = new ReportCorpCommissionService(
            $this->demandInfoRepository,
            $this->mCorpSubsRepository,
            $this->commissionInfoRepository
        );
        $result = $this->reportCorpCommissionService->getCorpSelectionPaginationCondition($total_record_on_page, $sort, $direction);
        $result_to_test = count($result->items());
        $expected_result = $total_record % $total_record_on_page;
        $this->assertEquals($expected_result,$result_to_test);
    }

    /**
     * @group getCorpSelectionPaginationCondition
     * @param array condition and expected result
     * @return TRUE.Records are ordered with condition  
     * @dataProvider data_input_to_test_sort
     * @test
     * total record = 10 
     */
    public function GIVEN_data_input_WHEN_process_pagination_THEN_return_records_are_ordered($data_input,$expected_result){
        $data_import = new dataImport();
        $data_demand_infos = $data_import->data_import_demand_infos();
        $data_visit_times = $data_import->data_import_visit_times();
        $data_record = [
            'total_record_insert' => 10,
            'table_name' => [
                0 => 'demand_infos',
                1 => 'visit_times'
            ],
            'data' => [
                0 => $data_demand_infos,
                1 => $data_visit_times
            ]
        ];
        $total_record = 10;
        $currentPage = 1;
        $total_record_on_page = 4;
        $sort = $data_input['sort'];
        $direction = $data_input['direction'];
        $this->truncate_tables_in_database();
        $this->import_Data($data_record);
        $this->class_Initialization();
        $this->current_Page_To_Test($currentPage);
        $this->reportCorpCommissionService = new ReportCorpCommissionService(
            $this->demandInfoRepository,
            $this->mCorpSubsRepository,
            $this->commissionInfoRepository
        );
        $result = $this->reportCorpCommissionService->getCorpSelectionPaginationCondition($total_record_on_page, $sort, $direction);
        if($sort == 'prefecture'){
            $sort = 'address1';
        }elseif($sort == 'detect_contact_desired_time'){
            $sort = 'contact_desired_time_from';
        }elseif($sort == null){
            $sort = 'visit_time';
        }
        $actual_results = [
            'first' => $result->items()[0]->$sort,
            'second' => $result->items()[1]->$sort,
            'third' => $result->items()[2]->$sort,
            'last' => $result->items()[3]->$sort,
        ];
        $this->assertEquals($expected_result,$actual_results);
    }


    public function data_input_to_test_sort(){

        return [
            [
                ['sort' => 'prefecture','direction' => 'desc'],
                ['first' => 7,'second' => 4,'third' => 3,'last' => 2]
            ],
            [
                ['sort' => null,'direction' => null],
                ['first' => '2018-12-17 00:00:00','second' => '2018-12-18 00:00:00','third' => '2018-12-19 00:00:00','last' => '2018-12-20 00:00:00']
            ],
            [
                ['sort' => 'id','direction' => 'desc'],
                ['first' => 10,'second' => 7,'third' => 4,'last' => 3]
            ],
            [
                ['sort' => 'commission_rank','direction' => 'desc'],
                ['first' => null,'second' => 6,'third' => 5,'last' => 4]
            ],
            [
                ['sort' => 'nighttime_takeover','direction' => 'desc'],
                ['first' => 10,'second' => 7,'third' => 4,'last' => 3]
            ],
            [
                ['sort' => 'receive_datetime','direction' => 'desc'],
                ['first' => '2018-12-17 11:29:14','second' => '2018-12-17 11:29:14','third' => '2018-12-17 11:29:14','last' => '2018-12-17 11:29:14']
            ],
            [
                ['sort' => 'customer_name','direction' => 'desc'],
                ['first' => 'I','second' => 'G','third' => 'D','last' => 'C']
            ],
            [
                ['sort' => 'detect_contact_desired_time','direction' => 'desc'],
                ['first' => '2018-10-27 00:00:00','second' => '2018-10-17 00:00:00','third' => '2018-10-10 00:00:00','last' => '2018-10-08 00:00:00']
            ],
            [
                ['sort' => 'visit_time','direction' => 'desc'],
                ['first' => '2018-12-29 00:00:00','second' => '2018-12-25 00:00:00','third' => '2018-12-20 00:00:00','last' => '2018-12-19 00:00:00']
            ],
            [
                ['sort' => 'site_name','direction' => 'desc'],
                ['first' => 'アップセル案件','second' => '952_新すまいRoom保険','third' => '739_重機買取査定君','last' => '518_防音業者比較君(SP)']
            ],
            [
                ['sort' => 'category_id','direction' => 'desc'],
                ['first' => 333,'second' => 323,'third' => 197,'last' => 34]
            ],
            [
                ['sort' => 'address1','direction' => 'desc'],
                ['first' => 7,'second' => 4,'third' => 3,'last' => 2]
            ],
            [
                ['sort' => 'auction','direction' => 'desc'],
                ['first' => null,'second' => null,'third' => 1,'last' => 1]
            ],
            [
                ['sort' => 'prefecture','direction' => 'asc'],
                ['first' => 1,'second' => 10,'third' => 2,'last' => 3]
            ],
            [
                ['sort' => 'id','direction' => 'asc'],
                ['first' => 1,'second' => 2,'third' => 3,'last' => 4]
            ],
            [
                ['sort' => 'commission_rank','direction' => 'asc'],
                ['first' => 2,'second' => 3,'third' => 4,'last' => 5]
            ],
            [
                ['sort' => 'nighttime_takeover','direction' => 'asc'],
                ['first' => 1,'second' => 2,'third' => 3,'last' => 4]
            ],
            [
                ['sort' => 'receive_datetime','direction' => 'asc'],
                ['first' => '2017-01-30 11:29:14','second' => '2017-01-30 11:29:14','third' => '2018-12-17 11:29:14','last' => '2018-12-17 11:29:14']
            ],
            [
                ['sort' => 'customer_name','direction' => 'asc'],
                ['first' => 'A','second' => 'B','third' => 'C','last' => 'D']
            ],
            [
                ['sort' => 'detect_contact_desired_time','direction' => 'asc'],
                ['first' => '2018-10-02 00:00:00','second' => '2018-10-03 00:00:00','third' => '2018-10-08 00:00:00','last' => '2018-10-10 00:00:00']
            ],
            [
                ['sort' => 'visit_time','direction' => 'asc'],
                ['first' => '2018-12-17 00:00:00','second' => '2018-12-18 00:00:00','third' => '2018-12-19 00:00:00','last' => '2018-12-20 00:00:00']
            ],
            [
                ['sort' => 'site_name','direction' => 'asc'],
                ['first' => '000_生活110番','second' => '418_電動シャッター110番(SP)','third' => '518_防音業者比較君(SP)','last' => '739_重機買取査定君']
            ],
            [
                ['sort' => 'category_id','direction' => 'asc'],
                ['first' => 2,'second' => 18,'third' => 34,'last' => 197]
            ],
            [
                ['sort' => 'address1','direction' => 'asc'],
                ['first' => 1,'second' => 10,'third' => 2,'last' => 3]
            ],
            [
                ['sort' => 'auction','direction' => 'asc'],
                ['first' => 0,'second' => 0,'third' => 1,'last' => 1]
            ],
        ];
    }
    
}