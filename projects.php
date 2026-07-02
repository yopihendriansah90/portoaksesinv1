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
    'tech' => ['Laravel', 'MySQL', 'Stripe', 'WhatsApp API', 'Chart.js'],
    'gallery' => [
      '../ipn/index.png',
      '../ipn/program.png',
      '../ipn/detailprogram.png',
      '../ipn/payment.png',

    ],
  ],
  [
    'slug' => 'lms-elearning',
    'title' => 'Learning Management System (LMS)',
    'category' => 'EdTech',
    'short_desc' => 'Platform e-learning siap pakai, manajemen kursus, kuis, dan tracking progres siswa.',
    'description' => 'Solusi LMS lengkap untuk institusi pendidikan, universitas, atau training center. Platform ini mendukung pembelajaran hybrid dengan manajemen kursus yang mudah, sistem kuis interaktif, dan tracking progres siswa secara real-time.',
    'features' => [
      'Kурс management: buat, edit, dan publish kursus',
      'Sistem kuis dan assignment dengan auto-grading',
      'Tracking progres siswa dan analytics pembelajaran',
      'Video streaming dengan proteksi content',
      'Sertifikat otomatis setelahCompletion kursus',
      'Forum diskusi per pertemuan',
    ],
    'tech' => ['Laravel', 'Vue.js', 'MySQL', 'AWS S3','Tailwind CSS'],
    'gallery' => [
      '../geo/siswa.png',
      '../geo/login.png',
      '../geo/materisiswa.png',
      '../geo/quis.png',
      '../geo/riwayatquis.png',
      '../geo/profilesiswa.png',
      '../geo/guru.png',
      '../geo/materi.png',
      '../geo/essay.png',



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
    'tech' => ['Next.js', 'Tailwind CSS', 'MySQL', 'Vercel', 'Google Analytics'],
    'gallery' => [
      'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80',
      'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80',
      'https://images.unsplash.com/photo-1556761175-5973dc0f32e4?w=800&q=80',
    ],
  ],
];
