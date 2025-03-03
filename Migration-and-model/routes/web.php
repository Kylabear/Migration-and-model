use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Ensure this matches your Blade file name
});
