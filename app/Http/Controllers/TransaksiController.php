<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index($idt)
    {
        return 'Halaman transaksi POS ke- '.$idt;
    }
}
