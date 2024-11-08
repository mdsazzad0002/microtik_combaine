<?php

namespace App\Http\Controllers\admin;

use RouterOS\Query;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Services\RouterClient;


class HomeController extends Controller
{
    public $ip = '192.168.1.12';
    public $user = 'admin';
    public $password = 'admin';
    public $port = 8728;
    public $client;


    public function __construct(){
        $config = new \RouterOS\Config([
            'host' => $this->ip,
            'user' => $this->user,
            'pass' => $this->password,
            'port' => $this->port,
        ]);

        $this->client = new \RouterOS\Client($config);
    }
    public function index(){
        return view('admin.home.index');
    }














    // ================================ Hostspot user ================================

    public function hotspot_users(){

         $users = $this->client->query('/ip/hotspot/user/print')->read();
        return view('admin.hostspot.index', compact('users'));

    }


    public function hotspot_add_new_users(){

        $this->client->query([
            '/ip/hotspot/user/add',
            '=name=name-'.rand(1,1000),
            '=password=password-'.rand(1,1000)
            ])->read();

        return redirect()->route('admin.hotspot.users');
    }

    public function hotspot_remove_users(Request $request, $id){

        $this->client->query(['/ip/hotspot/user/remove', '=.id='.$id])->read();
        return redirect()->route('admin.hotspot.users');
    }


    public function hotspot_profile_users(Request $request){
        $query ='/ip/hotspot/user/profile/print';
         $users = $this->client->query($query)->read();
        return view('admin.hostspot.index', compact('users'));
    }

    public function hotspot_profile_users_active(Request $request){
         $query ='/ip/hotspot/active/print';
         $users = $this->client->query($query)->read();
        return view('admin.hostspot.index', compact('users'));
    }

    // ================== end Hostpot user ==================================


    // ==================== System info =========================
    public function system_info(Request $request){

         $resource = $this->client->query('/system/resource/print')->read();
        return view('admin.system.index', compact('resource'));

    }
    // ==================== System info =========================
    public function interface_info(Request $request){


          $resource = $this->client->query('/interface/getall')->read();
        return view('admin.system.index', compact('resource'));

    }
    public function interface_w_r_t(Request $request){



         $resource = $this->client->query([
            '/interface/wireless/registration-table/print',
            ".proplist"=> ".id",
            // "?mac-address" => "00:0E:BB:DD:FF:FF",
         ])->read();
        return view('admin.system.index', compact('resource'));

    }







    // ========================== PPP secreat Info=========================
    public function ppp_secret_create(Request $request){

        $this->client->query([
            '/ppp/secret/add',
            '=name=name-'.rand(1,1000),
            '=password=password-'.rand(1,1000),
            '=comment=comment-'.rand(1,1000),
            '=service=pptp',
            ])->read();

            return redirect()->route('admin.ppp.secret');


    }



    public function ppp_secret(Request $request){

        $resource =$this->client->query('/ppp/secret/print')->read();

         return view('admin.system.index', compact('resource'));

    }



    public function ppp_secret_remove(Request $request, $id){

        $this->client->query(['/ppp/secret/remove', '=.id='.$id])->read();
        return redirect()->route('admin.ppp.secret');

    }

    // ================== End PPP info ===================


    // ==================  Dhcp info ===================

    public function dhcp_server(Request $request){

        $resource = $this->client->query('/ip/dhcp-server/lease/print')->read();
        return view('admin.system.index', compact('resource'));

    }


    public function dhcp_server_create(Request $request){

        $resource = $this->client->query([
          '/ip/dhcp-server/lease/add',
            '=address=192.168.1.'.rand(5,255),      // IP Address to assign
            '=mac-address=00:11:22:33:44:'.rand(0,99),  // Client's MAC Address
            // '=server=dhcp1',
            '=client-id='. rand(5,5000),          // DHCP server (optional if only one DHCP server is available),
          //  '=ease-time=1d',               // Lease time (optional, default is 3d or configure in server)
            '=comment=New lease for client' // Optional comment
        ])->read();

        return redirect()->route('admin.dhcp.server');

    }



    public function dhcp_server_remove(Request $request, $id){

        $this->client->query(['/ip/dhcp-server/lease/remove', '=.id='.$id])->read();
        return redirect()->route('admin.dhcp.server');

    }

    // ================== End Dhcp info ===================



    // ================== End IP DNS info ===================

    public function ip_dns_static(Request $request){

        $resource = $this->client->query('/ip/dns/static/print')->read();
        return view('admin.system.index', compact('resource'));

    }


    public function ip_dns_static_create(Request $request){

        $resource = $this->client->query([
          '/ip/dns/static/add',
            '=name=safsd'.rand(5,255)     // IP Address to assign
            // '=type=name'.rand(5,255),      // IP Address to assign
        ])->read();

        return redirect()->route('admin.ip-dns.static');

    }



    public function ip_dns_static_remove(Request $request, $id){

        $this->client->query(['/ip/dns/static/remove', '=.id='.$id])->read();
        return redirect()->route('admin.ip-dns.static');

    }

    // ================== End IP DNS info ===================
}
