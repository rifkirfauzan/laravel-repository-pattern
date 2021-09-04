<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

use App\Repositories\SiswaRepositoryInterface;

class SiswaController extends Controller
{
    private $siswaRepo;
    public function __construct(SiswaRepositoryInterface $siswaRepo){
        $this->siswaRepo = $siswaRepo;
    }

    public function index()
    {
        $siswa = $this->siswaRepo->getAll();
        return $siswa;
    }
}