<?php

use App\Controllers\ProfileController;

return [
    "/profile" => [ProfileController::class, 'index'],
    "/profile/edit" => [ProfileController::class, 'edit']
];