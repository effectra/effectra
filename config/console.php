<?php

return [
    'disable' => false,
    'commands' => [
        \Effectra\Core\Cmd\Scan::class,
        \Effectra\Core\Cmd\Serve::class,
        /** Router */
        \Effectra\Core\Cmd\Router\Routes::class,
        /** View */
        \Effectra\Core\Cmd\View\Views::class,
        \Effectra\Core\Cmd\View\GenerateView::class,
        \Effectra\Core\Cmd\View\DeleteView::class,
        /** Console */
        \Effectra\Core\Cmd\Console\GenerateCommand::class,
        \Effectra\Core\Cmd\Console\DeleteCommand::class,
        /** Middleware */
        \Effectra\Core\Cmd\Middleware\GenerateMiddleware::class,
        \Effectra\Core\Cmd\Middleware\DeleteMiddleware::class,
        /** Controller */
        \Effectra\Core\Cmd\Controller\GenerateController::class,
        \Effectra\Core\Cmd\Controller\DeleteController::class,
        /** Config */
        \Effectra\Core\Cmd\Config\GenerateConfigFile::class,
        \Effectra\Core\Cmd\Config\DeleteConfigFile::class,
        /** Model */
        \Effectra\Core\Cmd\Model\GenerateModel::class,
        \Effectra\Core\Cmd\Model\DeleteModel::class,
        /** Migration */
        \Effectra\Core\Cmd\Migration\GenerateMigration::class,
        \Effectra\Core\Cmd\Migration\DeleteMigration::class,
        \Effectra\Core\Cmd\Migration\DropMigration::class,
        \Effectra\Core\Cmd\Migration\ClearMigrations::class,
        \Effectra\Core\Cmd\Migration\EmptyMigration::class,
        \Effectra\Core\Cmd\Migration\Migrate::class,
        /** Database */
        \Effectra\Core\Cmd\Database\DropTable::class,
        \Effectra\Core\Cmd\Database\CreateDatabase::class,
        /** Provider */
        \Effectra\Core\Cmd\Provider\GenerateProvider::class,
        \Effectra\Core\Cmd\Provider\DeleteProvider::class,
        /** Cache */
        \Effectra\Core\Cmd\Cache\ClearCache::class,
        /** Test */
        \Effectra\Core\Cmd\Test\RunTest::class,

    ]
];
