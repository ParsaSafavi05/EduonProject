<?php

namespace App\Console;

use App\Http\Config;

class ControllerGenerator
{
    public static function create($controllerName)
    {
        // Define the directory where controllers are stored
        if (!file_exists(Config::CONTROLLER_DIR)) {
            mkdir(Config::CONTROLLER_DIR, 0777, true);
        }
        $controllerName = ucfirst($controllerName) . "Controller";

        $controllerFile = Config::CONTROLLER_DIR . $controllerName . '.php';

        if (file_exists($controllerFile)) {
            echo "Controller $controllerName already exists at " . Config::CONTROLLER_DIR . "\n";
            return;
        }

        // Define the template for the controller
        $controllerTemplate = <<<EOT
<?php

namespace App\Http\Controllers;

use App\Http\BaseController;
use App\Models\DB;
use App\Utilities\Session;

class $controllerName
{
    public function index()
    {
        
    }
}

EOT;

        // Create the controller file
        if (file_put_contents($controllerFile, $controllerTemplate) !== false) {
            echo "Controller $controllerName created successfully at " . Config::CONTROLLER_DIR . "\n";
        } else {
            echo "Failed to create controller $controllerName.\n";
        }

        // Create a folder in resources with the name of the controller and an index.php file inside it
        $resourceDir = __DIR__ . '/../../resources/' . strtolower(str_replace('Controller', '', $controllerName));

        if (!file_exists($resourceDir)) {
            mkdir($resourceDir, 0777, true);
        }

        $indexFile = $resourceDir . '/index.php';
        $indexTemplate = <<<EOT
<?php
\$content = "

<h1>Welcome to $controllerName index page</h1>
<p>This is the default view for the $controllerName.</p>

";

\$this->layout(\$content);
EOT;

        if (file_put_contents($indexFile, $indexTemplate) !== false) {
            echo "Resource folder and index.php file created successfully at $resourceDir\n";
        } else {
            echo "Failed to create resource folder or index.php file.\n";
        }
    }
}
