<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/../partials/header.php';

$projects = require __DIR__ . '/../projects.php';
$slug = $_GET['slug'] ?? '';
$project = null;
foreach ($projects as $p) {
  if ($p['slug'] === $slug) {
    $project = $p;
    break;
  }
}
if (!$project) {
  header('Location: index.php');
  exit;
}
?>

<main class="pt-24 pb-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Breadcrumb -->
    <nav class="flex items-center space-x-2 text-sm text-gray-500 mb-8">
      <a href="index.php" class="hover:text-brand-600 transition-colors">Beranda</a>
      <span>/</span>
      <a href="index.php#portofolio" class="hover:text-brand-600 transition-colors">Portofolio</a>
      <span>/</span>
      <span class="text-gray-900 font-medium"><?php echo htmlspecialchars($project['title']); ?></span>
    </nav>

    <!-- Header -->
    <div class="mb-12">
      <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold tracking-wider uppercase bg-brand-50 text-brand-600 border border-brand-100 mb-4">
        <?php echo htmlspecialchars($project['category']); ?>
      </span>
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4"><?php echo htmlspecialchars($project['title']); ?></h1>
      <p class="text-lg text-gray-600 max-w-3xl"><?php echo htmlspecialchars($project['short_desc']); ?></p>
    </div>

    <!-- Gallery -->
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-gray-900 mb-6">Galeri Screenshot</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($project['gallery'] as $img): ?>
          <div class="aspect-video bg-gray-100 rounded-2xl overflow-hidden shadow-sm">
            <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Project Info Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mb-16">
      <!-- Description -->
      <div class="lg:col-span-2">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Tentang Project</h2>
        <p class="text-gray-600 leading-relaxed mb-8"><?php echo htmlspecialchars($project['description']); ?></p>

        <h3 class="text-xl font-bold text-gray-900 mb-4">Keunggulan</h3>
        <ul class="space-y-3">
          <?php foreach ($project['features'] as $feature): ?>
            <li class="flex items-start">
              <svg class="w-5 h-5 text-brand-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span class="text-gray-600"><?php echo htmlspecialchars($feature); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Tech Stack Sidebar -->
      <div class="lg:col-span-1">
        <div class="bg-gray-50 rounded-2xl p-6 sticky top-24">
          <h3 class="text-lg font-bold text-gray-900 mb-4">Tech Stack</h3>
          <div class="flex flex-wrap gap-2 mb-8">
            <?php foreach ($project['tech'] as $tech): ?>
              <span class="inline-block px-3 py-1 bg-white border border-gray-200 rounded-lg text-sm text-gray-700"><?php echo htmlspecialchars($tech); ?></span>
            <?php endforeach; ?>
          </div>

          <a href="mailto:<?php echo $c['email']; ?>" class="block w-full text-center px-6 py-3 bg-brand-600 text-white font-semibold rounded-xl hover:bg-brand-700 active:scale-95 transition-all duration-200 shadow-md hover:shadow-lg mb-3">
            Diskusikan Project Ini
          </a>
          <a href="index.php#portofolio" class="block w-full text-center px-6 py-3 border-2 border-brand-600 text-brand-600 font-semibold rounded-xl hover:bg-brand-50 active:scale-95 transition-all duration-200">
            Kembali ke Portofolio
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
