<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'test::index');

$routes->get('/test', function(){
    $timer = new \CodeIgniter\Debug\Timer();

    // Memulai timer
    $timer->start('nama_timer');

    // Lakukan tugas atau proses yang ingin Anda ukur waktunya
    // Misalnya:
    // $this->yourModel->doSomething();
    echo "test";
    
    // Menghentikan timer
    $timer->stop('nama_timer');

    // Mendapatkan waktu yang telah berlalu
    $Timers = $timer->getTimers();

    // Output elapsed time
    header('Content-Type: application/json');
    echo json_encode(['elapsed_time' => $Timers['nama_timer']]);
});

use App\Controllers\Blog;

$routes->get('blog', [Blog::class, 'index']);

use App\Controllers\News; // Add this line

$routes->get('news', [News::class, 'index']);           // Add this line
$routes->get('news/(:segment)', [News::class, 'show']); // Add this line
