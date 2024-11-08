<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// routes/web.php

Route::prefix('admin')->name('admin.')->group( function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');  // This should work fine


    // Hostspot user
    Route::get('hotpot/users/create', [HomeController::class, 'hotspot_add_new_users'])->name('hotspot.create');
    Route::get('hotpot/users', [HomeController::class, 'hotspot_users'])->name('hotspot.users');
    Route::get('hotpot/users/{id}/remove', [HomeController::class, 'hotspot_remove_users'])->name('hotspot.users.remove');
    Route::get('hotpot/users/profile', [HomeController::class, 'hotspot_profile_users'])->name('hotspot.profile');
    Route::get('hotpot/users/active', [HomeController::class, 'hotspot_profile_users_active'])->name('hotspot.active');

    // end Hostspot user


    // System info
    Route::get('system/info', [HomeController::class, 'system_info'])->name('system.info');
    Route::get('interface/info', [HomeController::class, 'interface_info'])->name('interface.info');
    Route::get('interface/wireless/registration-table', [HomeController::class, 'interface_w_r_t'])->name('interface.wireless.registration-table');

    // end system info


    // ppp secreat
    Route::get('ppp/secret', [HomeController::class, 'ppp_secret'])->name('ppp.secret');
    Route::get('ppp/secret/create', [HomeController::class, 'ppp_secret_create'])->name('ppp.secret.create');
    Route::get('ppp/secret/{id}/remove', [HomeController::class, 'ppp_secret_remove'])->name('ppp.secret.remove');


    //  dhcp lease
    Route::get('dhcp-server', [HomeController::class, 'dhcp_server'])->name('dhcp.server');
    Route::get('dhcp-server/dhcp_server_add', [HomeController::class, 'dhcp_server_create'])->name('ppp.dhcp.server.create');
    Route::get('dhcp-server/{id}/dhcp_server_remove', [HomeController::class, 'dhcp_server_remove'])->name('ppp.dhcp.server.remove');
    // emd dhcp lease

    
    //  dhcp dns
    Route::get('ip-dns/static', [HomeController::class, 'ip_dns_static'])->name('ip-dns.static');
    Route::get('ip-dns/static/add', [HomeController::class, 'ip_dns_static_create'])->name('ip-dns.static.create');
    Route::get('ip-dns/static{id}/remove', [HomeController::class, 'ip_dns_static_remove'])->name('ip-dns.static.remove');
    // emd dns lease




});
