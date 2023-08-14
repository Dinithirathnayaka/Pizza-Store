    Route::get('/rider', [RiderController::class, 'index'])->name('admin.riders');
    Route::get('/riders/create', [RiderController::class, 'create'])->name('admin.riders.create');
    Route::get('/riders/{rider}/edit', [RiderController::class, 'edit'])->name('admin.rider.edit');
    Route::patch('/riders/{rider}', [RiderController::class, 'update'])->name('admin.rider.update');
    Route::post('/riders', [RiderController::class, 'store'])->name('admin.riders.store');
    Route::delete('/rider/delete/{id}', [RiderController::class, 'destroy'])->name('admin.rider.delete');
