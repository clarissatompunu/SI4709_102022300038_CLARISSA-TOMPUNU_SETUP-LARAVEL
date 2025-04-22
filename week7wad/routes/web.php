<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdentitasMahasiswaController;

Route::get('/identitasmahasiswanew', [IdentitasMahasiswaController::class, 'index']);
