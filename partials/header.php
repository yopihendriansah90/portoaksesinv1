<?php $c = require __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $c['site_name']; ?> - Arsitektur Bisnis IT yang Solid</title>
  <meta name="description" content="Kami membantu perusahaan dan agensi membangun sistem web terintegrasi yang skalabel, efisien, dan aman.">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Plus Jakarta Sans', 'Inter', 'system-ui', 'sans-serif'],
          },
          colors: {
            brand: {
              50: '#eff6ff',
              100: '#dbeafe',
              500: '#3b82f6',
              600: '#0056b3',
              700: '#004085',
              900: '#1e3a8a',
            }
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer base {
      body {
        @apply text-gray-900 antialiased;
        font-family: 'Plus Jakarta Sans', Inter, system-ui, sans-serif;
      }
      h1, h2, h3, h4, h5, h6 {
        @apply font-semibold tracking-tight;
      }
    }
    @layer utilities {
      .text-balance {
        text-wrap: balance;
      }
      .gradient-mesh {
        background-color: #ffffff;
        background-image: radial-gradient(at 40% 20%, rgba(0,86,179,0.08) 0px, transparent 50%),
                          radial-gradient(at 80% 0%, rgba(0,86,179,0.05) 0px, transparent 50%),
                          radial-gradient(at 0% 50%, rgba(0,86,179,0.05) 0px, transparent 50%);
      }
    }
  </style>
</head>
<body class="bg-white text-gray-900">

  <!-- Navbar -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        <!-- Logo -->
        <a href="index.php" class="flex-shrink-0">
          <img src="aksesniditigal.png" alt="<?php echo $c['site_name']; ?>" class="h-12 w-auto">
        </a>
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8">
          <a href="#layanan" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors duration-200">Layanan</a>
          <a href="#portofolio" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors duration-200">Portofolio</a>
          <a href="#kontak" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors duration-200">Kontak</a>
          <a href="#kontak" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white bg-brand-600 rounded-lg hover:bg-brand-700 active:scale-95 transition-all duration-200 shadow-sm hover:shadow-md">
            Konsultasi Sistem
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="flex md:hidden">
          <button id="mobile-menu-btn" class="p-2 text-gray-600 hover:text-gray-900" aria-label="Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu Panel -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-100">
      <div class="px-4 py-6 space-y-4">
        <a href="#layanan" class="block text-base font-medium text-gray-600 hover:text-brand-600">Layanan</a>
        <a href="#portofolio" class="block text-base font-medium text-gray-600 hover:text-brand-600">Portofolio</a>
        <a href="#kontak" class="block text-base font-medium text-gray-600 hover:text-brand-600">Kontak</a>
        <a href="#kontak" class="block text-center w-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-600 rounded-lg">Konsultasi Sistem</a>
      </div>
    </div>
  </nav>
