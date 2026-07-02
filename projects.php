<?php
return [
  [
    'slug' => 'sistem-zakat-infaq',
    'title' => 'Sistem Manajemen Zakat & Infaq - Lazipn.org',
    'category' => 'Fintech / Social',
    'short_desc' => 'Sistem pencatatan donasi real-time, dashboard analitik, dan integrasi payment gateway.',
    'description' => 'Platform digital untuk mengelolaTransaksi zakat, infaq, dan sedekah secara real-time. Sistem ini dirancang untuk lembaga amil zakat, yayasan, dan organisasi sosial yang membutuhkan transparansi dan akuntabilitas tinggi dalam pengelolaan dana donasi.',
    'features' => [
      'Pencatatan transaksi real-time dengan audit trail lengkap',
      'Dashboard analitik dan laporan keuangan otomatis',
      'Integrasi payment gateway (Midtrans, Xendit, dan lainnya)',
      'Multi-user role: admin, bendahara, dan pelapor',
      'Export laporan PDF dan Excel',
      'Notifikasi WhatsApp untuk donatur',
    ],
    'tech' => ['Laravel', 'MySQL', 'Stripe', 'WhatsApp API', 'Chart.js','Payment Gateway Integration'],
    'gallery' => [
      '../ipn/mindex.png',
      '../ipn/mprogram.png',
      '../ipn/mdetailprogram.png',
      '../ipn/mpayment.png',

    ],
  ],
  [
    'slug' => 'lms-elearning',
    'title' => 'Learning Management System (LMS)',
    'category' => 'EdTech',
    'short_desc' => 'Platform e-learning siap pakai, manajemen kursus, kuis, dan tracking progres siswa.',
    'description' => 'Solusi LMS lengkap untuk institusi pendidikan, universitas, atau training center. Platform ini mendukung pembelajaran hybrid dengan manajemen kursus yang mudah, sistem kuis interaktif, dan tracking progres siswa secara real-time.',
    'features' => [
      'Sistem kuis dan assignment dengan auto-grading',
      'Tracking progres siswa dan analytics pembelajaran',
      'Video streaming dengan proteksi content',
      'Sertifikat otomatis setelahCompletion kursus',
      'Forum diskusi per pertemuan',
    ],
    'tech' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS'],
    'gallery' => [
      '../geo/mlogin.png',
      '../geo/msiswa.png',
      '../geo/mmaterisiswa.png',
      '../geo/mquis.png',
      '../geo/mriwayat.png',
      '../geo/mriwayatquis.png',
      


    ],
  ],
  [
    'slug' => 'corporate-profile',
    'title' => 'Corporate Company Profile',
    'category' => 'Corporate',
    'short_desc' => 'Web berkinerja tinggi, SEO-optimized, dengan UI/UX elegan untuk branding perusahaan.',
    'description' => 'Website company profile premium yang dirancang untuk menonjolkan brand dan bisnis Anda secara profesional. Dengan performa tinggi, SEO-friendly, dan UI/UX modern yang dioptimalkan untuk konversi pengunjung menjadi calon klien.',
    'features' => [
      'Performa tinggi dengan Core Web Vitals optimization',
      'SEO on-page: meta tags, schema markup, sitemap',
      'UI/UX elegan dengan animasi halus',
      'Integrasi CMS untuk update konten mandiri',
      'Responsive design untuk semua perangkat',
      'Multi-language support',
    ],
    'tech' => ['Laravel', 'Tailwind CSS', 'MySQL','Vite', 'Alpine.js'],
    'gallery' => [
      'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80',
      'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80',
     
    ],
  ],
];
