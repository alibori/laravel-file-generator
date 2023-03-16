<?php

declare(strict_types=1);

use Alibori\LaravelFileGenerator\Commands\LaravelFileGeneratorCommand;
use Alibori\LaravelFileGenerator\Enums\FileTypesEnum;
use Illuminate\Support\Facades\File;

it('can generate a service class', function (): void {
    // destination path of the Foo class
    $fooClass = app_path('Services/MyFooClass.php');

    // make sure we're starting from a clean state
    if (File::exists($fooClass)) {
        unlink($fooClass);
    }

    $this->assertFalse(File::exists($fooClass));

    // Run the make command
    $this->artisan(LaravelFileGeneratorCommand::class, [
        'type' => FileTypesEnum::SERVICE,
        'name' => 'MyFooClass',
    ]);

    // Assert a new file is created
    $this->assertTrue(File::exists($fooClass));

    // Assert the file contains the right contents
    $expectedContents = <<<CLASS
<?php

declare(strict_types=1);

namespace App\Services;

final class MyFooClass
{
    public function __construct()
    {
        //
    }
}

CLASS;

    $this->assertEquals($expectedContents, file_get_contents($fooClass));
});
