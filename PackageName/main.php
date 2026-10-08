<?php

use runtime\api\RuntimeLinkerAPI;

final class PackageName extends RuntimeLinkerAPI
{
    public function main(): void
    {
        $this->createLink("PackageNameControllerAPI", "/controllers/PackageNameControllerAPI.php");
        $this->createLink("PackageNameRouter", "/routes/PackageNameRouter.php");
    }
}
