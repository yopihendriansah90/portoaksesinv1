<?php $c = require __DIR__ . '/../config.php'; $base = rtrim($c['base_path'], '/'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title><?php echo $c['site_name']; ?> - Arsitektur Bisnis IT yang Solid</title>
  <meta name="description" content="Kami membantu perusahaan dan agensi membangun sistem web terintegrasi yang skalabel, efisien, dan aman.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $base; ?>/public/css/style.css">
</head>
<body class="bg-white text-gray-900">
  <a href="#layanan" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-[60] focus:px-4 focus:py-2 focus:bg-brand-600 focus:text-white focus:rounded-lg">Skip to content</a>

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/<?php echo $c['whatsapp']; ?>?text=Halo%20Aksesin%20Digital%2C%20saya%20ingin%20konsultasi%20gratis%20tentang%20project%2Farsitektur%20sistem%20IT."
     target="_blank"
     rel="noopener noreferrer"
     class="fixed bottom-6 right-6 z-50 w-16 h-16 rounded-full bg-white shadow-2xl border-2 border-green-500 flex items-center justify-center hover:scale-110 hover:shadow-green-500/50 transition-all duration-300 group"
     aria-label="Chat WhatsApp">
    <img src="<?php echo $base; ?>/assets/wahstapp.webp" alt="WhatsApp" class="w-9 h-9 object-contain">
    <span class="absolute inset-0 rounded-full border-2 border-green-500 opacity-0 group-hover:opacity-100 group-hover:scale-125 transition-all duration-500 animate-ping"></span>
  </a>

  <!-- Navbar -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        <!-- Logo -->
        <a href="<?php echo $base; ?>/index.php" class="flex-shrink-0">
          <img src="<?php echo $base; ?>/logo.png" alt="<?php echo $c['site_name']; ?>" class="h-9 w-auto">
        </a>
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8">
          <a href="<?php echo $base; ?>/#layanan" class="nav-link text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors duration-200">Layanan</a>
          <a href="<?php echo $base; ?>/#portofolio" class="nav-link text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors duration-200">Portofolio</a>
          <a href="<?php echo $base; ?>/#kontak" class="nav-link text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors duration-200">Kontak</a>
          <a href="<?php echo $base; ?>/#kontak" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white bg-brand-600 rounded-lg hover:bg-brand-700 active:scale-95 transition-all duration-200 shadow-sm hover:shadow-md">
            Konsultasi Sistem
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="flex md:hidden">
          <button id="mobile-menu-btn" class="p-3 min-w-[44px] min-h-[44px] flex items-center justify-center text-gray-600 hover:text-gray-900" aria-label="Menu" aria-expanded="false" aria-controls="mobile-menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu Panel -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-100">
      <div class="px-4 py-6 space-y-2">
        <a href="<?php echo $base; ?>/#layanan" class="block px-4 py-3 text-base font-medium text-gray-600 hover:text-brand-600 rounded-lg hover:bg-gray-50 min-h-[44px] flex items-center">Layanan</a>
        <a href="<?php echo $base; ?>/#portofolio" class="block px-4 py-3 text-base font-medium text-gray-600 hover:text-brand-600 rounded-lg hover:bg-gray-50 min-h-[44px] flex items-center">Portofolio</a>
        <a href="<?php echo $base; ?>/#kontak" class="block px-4 py-3 text-base font-medium text-gray-600 hover:text-brand-600 rounded-lg hover:bg-gray-50 min-h-[44px] flex items-center">Kontak</a>
        <a href="<?php echo $base; ?>/#kontak" class="block w-full px-5 py-3 text-base font-semibold text-white bg-brand-600 rounded-lg text-center min-h-[44px] flex items-center justify-center">Konsultasi Sistem</a>
      </div>
    </div>
  </nav>
