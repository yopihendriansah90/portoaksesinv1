<?php $c = require __DIR__ . '/../config.php'; ?>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10">
          <!-- Brand + Micro CTA -->
          <div class="md:col-span-4">
            <a href="<?php echo $base; ?>/index.php" class="inline-block mb-4">
              <img src="<?php echo $base; ?>/aksesniditigal.png" alt="<?php echo $c['site_name']; ?>" class="h-12 w-auto">
            </a>
            <p class="text-sm text-gray-400 mb-4">
              Membangun sistem web yang solid, efisien, dan siap berkembang bersama pertumbuhan bisnis Anda.
            </p>
            <p class="text-sm text-gray-300">
              Siap menskalakan bisnis IT Anda? <a href="mailto:<?php echo $c['email']; ?>" class="text-white font-semibold underline underline-offset-2 hover:text-brand-100 transition-colors">Konsultasi Gratis</a>
            </p>
          </div>

          <!-- Quick Links -->
          <div class="md:col-span-2">
            <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Navigasi</h4>
            <ul class="space-y-3">
              <li><a href="<?php echo $base; ?>/#layanan" class="text-sm text-gray-400 hover:text-white transition-colors">Layanan</a></li>
              <li><a href="<?php echo $base; ?>/#portofolio" class="text-sm text-gray-400 hover:text-white transition-colors">Portofolio</a></li>
              <li><a href="<?php echo $base; ?>/#kontak" class="text-sm text-gray-400 hover:text-white transition-colors">Kontak</a></li>
            </ul>
          </div>

          <!-- Legal -->
          <div class="md:col-span-2">
            <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Legal</h4>
            <ul class="space-y-3">
              <li><a href="<?php echo $base; ?>/privacy-policy.php" class="text-sm text-gray-400 hover:text-white transition-colors">Privacy Policy</a></li>
              <li><a href="<?php echo $base; ?>/terms-of-service.php" class="text-sm text-gray-400 hover:text-white transition-colors">Terms of Service</a></li>
            </ul>
          </div>

          <!-- Contact -->
          <div class="md:col-span-4">
            <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Kontak</h4>
            <ul class="space-y-3 text-sm text-gray-400">
              <li class="flex items-start">
                <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <a href="mailto:<?php echo $c['email']; ?>" class="hover:text-white transition-colors"><?php echo $c['email']; ?></a>
              </li>
              <li class="flex items-start">
                <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <a href="https://wa.me/<?php echo $c['whatsapp']; ?>" class="hover:text-white transition-colors" target="_blank" rel="noopener"><?php echo $c['whatsapp_display']; ?></a>
              </li>
              <li class="flex items-start">
                <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span><?php echo $c['address']; ?></span>
              </li>
            </ul>

            <!-- Social -->
            <div class="flex items-center space-x-5 mt-6">
              <a href="<?php echo $c['instagram']; ?>" class="inline-flex items-center space-x-2 text-gray-400 hover:text-white transition-colors duration-200" target="_blank" rel="noopener" aria-label="Instagram">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
                <span class="text-sm font-medium">Instagram</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
          <p class="text-sm text-gray-500">
            &copy; <?php echo date('Y'); ?> <?php echo $c['site_name']; ?>. All rights reserved.
          </p>
          <div class="flex items-center space-x-6">
            <a href="<?php echo $base; ?>/privacy-policy.php" class="text-sm text-gray-500 hover:text-gray-300 transition-colors">Privacy Policy</a>
            <a href="<?php echo $base; ?>/terms-of-service.php" class="text-sm text-gray-500 hover:text-gray-300 transition-colors">Terms of Service</a>
          </div>
        </div>
      </div>

  <script>
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    
    mobileMenuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
          mobileMenu.classList.add("hidden");
          target.scrollIntoView({
            behavior: "smooth",
            block: "start"
          });
        }
      });
    });
  </script>

</body>
</html>
