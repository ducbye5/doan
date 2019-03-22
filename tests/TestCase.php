<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\TestResponse;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function LoginAdmin($role = 'adminstrator'){
        if($role = 'adminstrator') {
            $data = [
                'role' => 'administrator',
            ];
        } elseif($role = 'admin') {
            $data = [
                'role' => 'admin',
            ];
        } 
    	
    	$admin = factory(\App\User::class)->create($data);
    	$this->actingAs($admin);
        return $this;
    }

    public function LoginCustomer(){
    	$data = [];
    	$customer = factory(\App\Models\Customers::class)->create($data);
    	$this->actingAs($customer);
        return $this;
    }

    public function getResponseViewContent(TestResponse $response, $key)
    {
        // $org_content = $response->baseResponse->content();
        $org_content = $response->baseResponse->getOriginalContent();
        $value = $org_content->getData()[$key];
        return $value;
    }

    public function truncate_tables_in_database($table_name = '',$array_table = null){
        if($array_table == null){
            //  postgre
            // $query_string = 'TRUNCATE TABLE '.$table_name.' RESTART IDENTITY CASCADE;'; 
            //  phpadmin
            \DB::statement("SET FOREIGN_KEY_CHECKS = 0;"); 
            \DB::statement("DELETE FROM ".$table_name.";");
            \DB::statement("ALTER TABLE ".$table_name." AUTO_INCREMENT = 1;");    
            \DB::statement("SET FOREIGN_KEY_CHECKS = 1;"); 
        }else{
            \DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
            for($i = 0 ;$i < count($array_table);$i++){
                //  postgre
                // $query_string = 'TRUNCATE TABLE '.$array_table[$i].' RESTART IDENTITY CASCADE;';
                //  phpadmin   
                // $query_string = "DELETE FROM ".$array_table[$i]." ; "."ALTER TABLE ".$array_table[$i]." AUTO_INCREMENT = 1;";
                // \DB::statement($query_string);   
                \DB::statement("DELETE FROM ".$array_table[$i].";");
                \DB::statement("ALTER TABLE ".$array_table[$i]." AUTO_INCREMENT = 1;");    
            }
            \DB::statement("SET FOREIGN_KEY_CHECKS = 1;");
        }    
    }
}
