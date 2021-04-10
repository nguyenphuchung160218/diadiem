<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use Illuminate\Support\Str;
use App\Models\Post;

class StoreCrawler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:store';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $client = new Client();
        // $crawler = $client->request('GET', 'https://diadiemdanang.vn/goc-an-uong/quan-nhau/');
        // $tins=$crawler->filter('.no-gutters .col-md-3 .bg-white .item')->each(function ($node) {
        //     $name=$node->filter('.info a')->text();
        //     $address=$node->filter('.info span')->text();
        //     $avatar=$node->filter('a img')->attr('src');
        //     $data=[
        //         'sto_name'=>$name,
        //         'sto_slug'=>Str::slug($name),
        //         'sto_title'=>$name,
        //         'sto_description'=>$name,
        //         'sto_content'=>$name,
        //         'sto_category_id'=>12,
        //         'sto_area_id'=>1,
        //         'sto_address'=>$address,
        //         'sto_avatar'=>$avatar,
        //         'sto_price'=>'30.000->50.000Đ',             
        //     ];
        //     print_r('-----lay du lieu thanh cong-----'.PHP_EOL);
                  
        //     Post::insert($data);
        // });
        $client = new Client();
        $crawler = $client->request('GET', 'http://www.giaythethao.cf/');
        $tins=$crawler->filter('.row-item')->each(function ($node) {
            $name=$node->filter('.row-view-right .result-name .resname h2 a')->text();
            
            // $address=$node->filter('.info span')->text();
            $avatar=$node->filter('.result-image a img')->attr('src');
            // dd($avatar);
            // $data=[
            //     'sto_name'=>$name,
            //     'sto_slug'=>Str::slug($name),
            //     'sto_title'=>$name,
            //     'sto_description'=>$name,
            //     'sto_content'=>$name,
            //     'sto_category_id'=>12,
            //     'sto_area_id'=>1,
            //     'sto_address'=>$address,
            //     'sto_avatar'=>$avatar,
            //     'sto_price'=>'30.000->50.000Đ',             
            // ];
            // print_r('-----lay du lieu thanh cong-----'.PHP_EOL);
                  
            // Post::insert($data);
        });
        dd($avatar);
        
    }
}
