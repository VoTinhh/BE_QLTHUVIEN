<?php


use App\Http\Controllers\PhieuMuonController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\LichSuMuonController;
use App\Http\Controllers\ThanhToanController;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\NhaXuatBanController;
use App\Http\Controllers\PhanLoaiController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\TacGiaController;
use App\Http\Controllers\ViTriController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'phieu-muon'], function () {
    Route::get('/', [PhieuMuonController::class, 'getData']);
    Route::post('/', [PhieuMuonController::class, 'create']);
    Route::put('/{id}', [PhieuMuonController::class, 'update']);
    Route::delete('/{id}', [PhieuMuonController::class, 'delete']);
    Route::post('/tim-kiem', [PhieuMuonController::class, 'search']);
});

Route::group(['prefix' => 'hoa-don'], function () {
    Route::get('/', [HoaDonController::class, 'getData']);
    Route::post('/', [HoaDonController::class, 'create']);
    Route::put('/{id}', [HoaDonController::class, 'update']);
    Route::delete('/{id}', [HoaDonController::class, 'delete']);
});

Route::group(['prefix' => 'lich-su-muon'], function () {
    Route::get('/', [LichSuMuonController::class, 'getData']);
    Route::post('/', [LichSuMuonController::class, 'create']);
    Route::put('/{id}', [LichSuMuonController::class, 'update']);
    Route::delete('/{id}', [LichSuMuonController::class, 'delete']);
    Route::get('/phieu-muon/{id_phieu_muon}', [LichSuMuonController::class, 'getDataByPhieuMuon']);
});


Route::group(['prefix' => 'thanh-toan'], function () {
    Route::get('/', [ThanhToanController::class, 'getData']);
    Route::post('/', [ThanhToanController::class, 'create']);
    Route::put('/{id}', [ThanhToanController::class, 'update']);
    Route::delete('/{id}', [ThanhToanController::class, 'delete']);
});

Route::group(['prefix' => 'nguoi-dung'], function () {
    Route::get('/', [NguoiDungController::class, 'getData']);
    Route::post('/', [NguoiDungController::class, 'store']);
    Route::put('/{id}', [NguoiDungController::class, 'update']);
    Route::delete('/{id}', [NguoiDungController::class, 'delete']);
});

Route::group(['prefix' => 'sach'], function () {
    Route::get('/', [SachController::class, 'getData']);
    Route::post('/', [SachController::class, 'store']);
    Route::get('/{id_sach}', [SachController::class, 'show']);
    Route::put('/{id_sach}', [SachController::class, 'update']);
    Route::delete('/{id_sach}', [SachController::class, 'delete']);
});

Route::group(['prefix' => 'vi-tri'], function () {
    Route::get('/', [ViTriController::class, 'getData']);
    Route::post('/', [ViTriController::class, 'store']);
    Route::put('/{id}', [ViTriController::class, 'update']);
    Route::delete('/{id}', [ViTriController::class, 'destroy']);
});

Route::group(['prefix' => 'phan-loai'], function () {
    Route::get('/', [PhanLoaiController::class, 'getData']);
    Route::post('/', [PhanLoaiController::class, 'store']);
    Route::put('/{id}', [PhanLoaiController::class, 'update']);
    Route::delete('/{id}', [PhanLoaiController::class, 'destroy']);
});

Route::group(['prefix' => 'nha-xuat-ban'], function () {
    Route::get('/', [NhaXuatBanController::class, 'getData']);
    Route::post('/', [NhaXuatBanController::class, 'store']);
    Route::put('/{id}', [NhaXuatBanController::class, 'update']);
    Route::delete('/{id}', [NhaXuatBanController::class, 'destroy']);
});

Route::group(['prefix' => 'tac-gia'], function () {
    Route::get('/', [TacGiaController::class, 'getData']);
    Route::post('/', [TacGiaController::class, 'store']);
    Route::put('/{id}', [TacGiaController::class, 'update']);
    Route::delete('/{id}', [TacGiaController::class, 'destroy']);
});
