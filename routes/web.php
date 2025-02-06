    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ContactController;
    use App\Http\Controllers\StudentController;
    use App\Http\Controllers\GradeController;
    use App\Http\Controllers\DepartmentController;
    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\GradeAdminController;
    use App\Http\Controllers\StudentAdminController;
    use App\Http\Controllers\DepartmentAdminController;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/contact', [ContactController::class, 'data']);
    Route::get('/students', [StudentController::class, 'index']);
    Route::get('/grade', [GradeController::class, 'index']);
    Route::get('/department', [DepartmentController::class, 'index']);

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'store']);
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::middleware(['auth'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index']);



    Route::prefix('admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index']);

        Route::prefix('students')->group(function () {
            Route::get('/student-admin', [\App\Http\Controllers\Admin\StudentAdminController::class, 'index']);
            Route::get('/create', [\App\Http\Controllers\Admin\StudentAdminController::class, 'create']);
            Route::post('/store', [\App\Http\Controllers\Admin\StudentAdminController::class, 'store']);
            Route::get('/edit/{student}', [\App\Http\Controllers\Admin\StudentAdminController::class, 'edit']);
            Route::put('/update/{student}', [\App\Http\Controllers\Admin\StudentAdminController::class, 'update'])->name('admin.students.update');
            Route::delete('/delete/{student}', [\App\Http\Controllers\Admin\StudentAdminController::class, 'destroy']);
        });

        Route::prefix('grades')->group(function () {
            Route::get('/grade-admin', [\App\Http\Controllers\Admin\GradeAdminController::class, 'index']);
            Route::get('/create', [\App\Http\Controllers\Admin\GradeAdminController::class, 'create']);
            Route::get('/edit/{student}', [\App\Http\Controllers\Admin\GradeAdminController::class, 'edit']);
            Route::put('/update/{student}', [\App\Http\Controllers\Admin\GradeAdminController::class, 'update']);
            Route::delete('/delete/{student}', [\App\Http\Controllers\Admin\GradeAdminController::class, 'destroy']);
        });

        Route::prefix('departments')->group(function () {
            Route::get('/department-admin', [\App\Http\Controllers\Admin\DepartmentAdminController::class, 'index'])->middleware('auth');
            Route::get('/create', [\App\Http\Controllers\Admin\DepartmentAdminController::class, 'create']);
            Route::post('/store', [\App\Http\Controllers\Admin\DepartmentAdminController::class, 'store']);
            Route::get('/edit/{student}', [\App\Http\Controllers\Admin\DepartmentAdminController::class, 'edit']);
            Route::put('/update/{student}', [\App\Http\Controllers\Admin\DepartmentAdminController::class, 'update']);
            Route::delete('/delete/{student}', [\App\Http\Controllers\Admin\DepartmentAdminController::class, 'destroy']);
        });
    });


    });
