<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

Route::get('dashboard', function (){
    return "Admin dashboard";
});


Route::prefix('san-pham')->group(function (){
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/xoa{id}', [ProductController::class, 'remove'])->name('product.remove');
    Route::get('/tao-moi',[ProductController::class, 'addFrom'])->name('product.add');
    Route::get('/sua-san-pham{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/sua{id}', [ProductController::class, 'edit']);
});

?>
