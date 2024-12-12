# Laravel API Response

A wrapper around Laravel response function that returns a consistent API response on failure or success.

## Installation

```bash
composer require bestiony/laravel-api-response
```

## Usage

In your controller or in the main Laravel controller, use the trait `HasApiResponse`:

```php
namespace App\Http\Controllers;

use Bestiony\LaravelApiResponse\Traits\HasApiResponse;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    use HasApiResponse;

    public function index(Request $request)
    {
        $data = ['key' => 'value'];
        return $this->success(message:'Data retrieved successfully',data: $data);
    }

    public function errorExample(Request $request)
    {
        return $this->error(message:'An error occurred', code: 500);
    }
}
```

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).
