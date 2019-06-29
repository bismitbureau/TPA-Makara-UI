<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {
        return view('pages.index');
    }

    public function success() {
        return view('pages.success');
    }

    public function liststudentkb() {
        return view('pages.liststudentkb');
    }

    public function bukupenghubungkb() {
        return view('pages.bukupenghubungkb');
    }

    public function bukupenghubungdc() {
        return view('pages.bukupenghubungdc');
    }

    public function formDailyBook($student_id) {
        return view('pages.createbukupenghubungdc', ['student_id' => $student_id]);
    }

    public function successdc() {
        return view('pages.successdc');
    }

    public function komentar() {
        return view('pages.komentar');
    }

    public function tambahkomentar() {
        return view('pages.tambahkomentar');
    }

}
