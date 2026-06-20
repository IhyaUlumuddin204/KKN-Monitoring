// GANTI DATA MONITORING DI SINI
// Ubah nilai pada array ini sesuai hasil pengamatan lapangan.
const monitoringData = [
  {
    tanggal: "2026-07-01",
    minggu: 1,
    tinggi: 12,
    daun: 3,
    kondisiAir: "Jernih",
    belutHidup: 50,
    belutMati: 0,
    catatan: "Adaptasi awal setelah penanaman dan pengisian air."
  },
  {
    tanggal: "2026-07-08",
    minggu: 2,
    tinggi: 18,
    daun: 5,
    kondisiAir: "Agak keruh",
    belutHidup: 49,
    belutMati: 1,
    catatan: "Air mulai stabil, dilakukan pengecekan saluran."
  },
  {
    tanggal: "2026-07-15",
    minggu: 3,
    tinggi: 26,
    daun: 7,
    kondisiAir: "Jernih",
    belutHidup: 49,
    belutMati: 0,
    catatan: "Pertumbuhan padi terlihat merata."
  },
  {
    tanggal: "2026-07-22",
    minggu: 4,
    tinggi: 34,
    daun: 9,
    kondisiAir: "Jernih",
    belutHidup: 48,
    belutMati: 1,
    catatan: "Ditambahkan pupuk organik cair dosis ringan."
  },
  {
    tanggal: "2026-07-29",
    minggu: 5,
    tinggi: 43,
    daun: 11,
    kondisiAir: "Stabil",
    belutHidup: 48,
    belutMati: 0,
    catatan: "Tanaman lebih rimbun, air dijaga tidak terlalu tinggi."
  }
];

// GANTI ISI POPUP ARTIKEL DI SINI
// Data ini dipakai saat user klik "Baca ringkasan" di halaman artikel.
const articleSummaries = {
  hidroganik: {
    title: "Apa itu Padi Hidroganik?",
    date: "10 Juli 2026",
    image: "assets/img/placeholder-hidroganik.svg",
    alt: "Ilustrasi padi hidroganik",
    paragraphs: [
      "Padi hidroganik adalah konsep budidaya padi yang menggabungkan media tanam organik, pengelolaan air, dan pencatatan perkembangan tanaman secara berkala.",
      "Pada program KKN ini, sistem hidroganik dipakai sebagai demplot edukasi agar masyarakat dapat melihat proses pertumbuhan padi dengan pendekatan yang lebih hemat lahan dan mudah dimonitor."
    ],
    points: [
      "Media tanam dapat diperkaya dengan bahan organik dari sekitar desa.",
      "Kondisi air dipantau agar tetap mendukung tanaman dan budidaya belut.",
      "Perkembangan padi dicatat melalui tinggi tanaman dan jumlah daun."
    ]
  },
  pupuk: {
    title: "Manfaat Pupuk Organik dari Rumput",
    date: "12 Juli 2026",
    image: "assets/img/placeholder-pupuk.svg",
    alt: "Ilustrasi pupuk organik dari rumput",
    paragraphs: [
      "Rumput yang tersedia di sekitar desa dapat dimanfaatkan sebagai bahan pupuk organik sederhana. Bahan ini membantu mengurangi limbah hijau sekaligus memperkenalkan praktik pertanian yang lebih ramah lingkungan.",
      "Isi artikel asli nantinya bisa menjelaskan bahan, alat, waktu pengolahan, dan cara aplikasi pupuk pada demplot padi hidroganik."
    ],
    points: [
      "Bahan mudah ditemukan di lingkungan sekitar.",
      "Dapat menjadi media edukasi pengolahan limbah organik.",
      "Mendukung nutrisi tanaman secara bertahap."
    ]
  },
  integrasi: {
    title: "Konsep Integrasi Padi dan Budidaya Belut",
    date: "15 Juli 2026",
    image: "assets/img/placeholder-integrasi.svg",
    alt: "Ilustrasi integrasi padi dan budidaya belut",
    paragraphs: [
      "Integrasi padi dan belut memanfaatkan genangan air di bawah media tanam sebagai ruang hidup belut. Dengan begitu, satu area demplot dapat digunakan untuk pembelajaran tanaman dan perikanan sederhana.",
      "Bagian ini bisa kamu kembangkan dengan kondisi asli di desa, seperti ukuran wadah, tinggi air, jumlah belut awal, dan kendala yang muncul selama program."
    ],
    points: [
      "Memanfaatkan air demplot agar punya fungsi tambahan.",
      "Memberi contoh diversifikasi hasil dari satu area budidaya.",
      "Mendorong pencatatan kondisi air secara rutin."
    ]
  },
  perawatan: {
    title: "Cara Perawatan Demplot Padi-Belut",
    date: "18 Juli 2026",
    image: "assets/img/placeholder-perawatan.svg",
    alt: "Ilustrasi perawatan demplot padi-belut",
    paragraphs: [
      "Perawatan demplot dilakukan dengan mengecek tanaman, air, dan kondisi belut secara berkala. Data tersebut kemudian dimasukkan ke halaman monitoring agar perkembangan program lebih mudah dibaca.",
      "Artikel asli dapat berisi jadwal perawatan, siapa yang bertugas, serta langkah yang dilakukan saat air keruh, tanaman kurang subur, atau ada belut yang mati."
    ],
    points: [
      "Catat tinggi padi dan jumlah daun setiap minggu.",
      "Periksa kondisi air agar tidak terlalu keruh atau berbau.",
      "Hitung jumlah belut hidup dan mati sebagai bahan evaluasi."
    ]
  }
};

document.addEventListener("DOMContentLoaded", () => {
  setupNavigation();
  setupHomeHeroSlider();
  setupArticleModal();
  setupGalleryPage();
  setupContactPage();
  setupMonitoringPage();
});

function setupNavigation() {
  const toggle = document.querySelector(".nav-toggle");
  const links = document.querySelector(".nav-links");
  const currentFile = window.location.pathname.split("/").pop() || "index.html";

  document.querySelectorAll(".nav-links a").forEach((link) => {
    const href = link.getAttribute("href");
    if (href === currentFile) {
      link.classList.add("active");
    }
  });

  if (!toggle || !links) {
    return;
  }

  toggle.addEventListener("click", () => {
    const isOpen = links.classList.toggle("open");
    toggle.setAttribute("aria-expanded", String(isOpen));
  });

  links.addEventListener("click", (event) => {
    if (event.target.tagName === "A") {
      links.classList.remove("open");
      toggle.setAttribute("aria-expanded", "false");
    }
  });
}

function setupHomeHeroSlider() {
  const slides = document.querySelectorAll(".hero-bg-slide");
  const dots = document.querySelectorAll(".hero-slide-dots span");
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (slides.length < 2 || reduceMotion) {
    return;
  }

  let activeIndex = 0;

  window.setInterval(() => {
    const nextIndex = (activeIndex + 1) % slides.length;

    slides[activeIndex].classList.remove("is-active");
    dots[activeIndex]?.classList.remove("is-active");

    slides[nextIndex].classList.add("is-active");
    dots[nextIndex]?.classList.add("is-active");

    activeIndex = nextIndex;
  }, 5200);
}

function setupArticleModal() {
  const modal = document.querySelector("#article-modal");
  const title = document.querySelector("#modal-title");
  const date = document.querySelector("#modal-date");
  const image = document.querySelector("#modal-image");
  const copy = document.querySelector("#modal-copy");
  const links = document.querySelectorAll(".article-summary-link");

  if (!modal || !title || !date || !image || !copy || !links.length) {
    return;
  }

  links.forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault();
      const articleKey = link.dataset.article;
      const article = articleSummaries[articleKey];

      if (!article) {
        return;
      }

      openArticleModal(modal, title, date, image, copy, article);
    });
  });

  modal.querySelectorAll("[data-modal-close]").forEach((button) => {
    button.addEventListener("click", () => closeArticleModal(modal));
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && !modal.hidden) {
      closeArticleModal(modal);
    }
  });
}

function openArticleModal(modal, title, date, image, copy, article) {
  title.textContent = article.title;
  date.textContent = article.date;
  image.src = article.image;
  image.alt = article.alt;
  copy.innerHTML = createArticleCopy(article);
  modal.hidden = false;
  document.body.classList.add("article-modal-open");

  const closeButton = modal.querySelector(".modal-close");
  if (closeButton) {
    closeButton.focus();
  }
}

function closeArticleModal(modal) {
  modal.hidden = true;
  document.body.classList.remove("article-modal-open");
}

function createArticleCopy(article) {
  const paragraphs = article.paragraphs.map((paragraph) => `<p>${paragraph}</p>`).join("");
  const points = article.points.map((point) => `<li>${point}</li>`).join("");

  return `
    ${paragraphs}
    <ul>${points}</ul>
  `;
}

function setupGalleryPage() {
  const filters = document.querySelectorAll(".gallery-filter");
  const items = document.querySelectorAll(".gallery-item");
  const previews = document.querySelectorAll(".gallery-preview");
  const modal = document.querySelector("#gallery-modal");

  if (!filters.length || !items.length) {
    return;
  }

  filters.forEach((filterButton) => {
    filterButton.addEventListener("click", () => {
      const selectedCategory = filterButton.dataset.filter;

      filters.forEach((button) => button.classList.remove("active"));
      filterButton.classList.add("active");

      items.forEach((item) => {
        const shouldShow = selectedCategory === "all" || item.dataset.category === selectedCategory;
        item.classList.toggle("is-hidden", !shouldShow);
      });
    });
  });

  if (!modal || !previews.length) {
    return;
  }

  previews.forEach((preview) => {
    preview.addEventListener("click", () => openGalleryModal(modal, preview));
  });

  modal.querySelectorAll("[data-gallery-close]").forEach((button) => {
    button.addEventListener("click", () => closeGalleryModal(modal));
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && !modal.hidden) {
      closeGalleryModal(modal);
    }
  });
}

function openGalleryModal(modal, preview) {
  const previewImage = preview.querySelector("img");
  const modalImage = modal.querySelector("#gallery-modal-image");
  const modalMeta = modal.querySelector("#gallery-modal-meta");
  const modalTitle = modal.querySelector("#gallery-modal-title");
  const modalCopy = modal.querySelector("#gallery-modal-copy");
  const title = preview.dataset.title || "Foto kegiatan";
  const date = preview.dataset.date || "Tanggal kegiatan";
  const category = preview.dataset.categoryLabel || "Galeri";
  const caption = preview.dataset.caption || "Dokumentasi kegiatan KKN.";

  if (!previewImage || !modalImage || !modalMeta || !modalTitle || !modalCopy) {
    return;
  }

  modalImage.src = previewImage.src;
  modalImage.alt = previewImage.alt;
  modalMeta.textContent = `${category} - ${date}`;
  modalTitle.textContent = title;
  modalCopy.textContent = caption;
  modal.hidden = false;
  document.body.classList.add("gallery-modal-open");

  const closeButton = modal.querySelector(".modal-close");
  if (closeButton) {
    closeButton.focus();
  }
}

function closeGalleryModal(modal) {
  modal.hidden = true;
  document.body.classList.remove("gallery-modal-open");
}

function setupContactPage() {
  const copyButtons = document.querySelectorAll("[data-copy]");
  const toast = document.querySelector("#copy-toast");

  if (!copyButtons.length) {
    return;
  }

  copyButtons.forEach((button) => {
    button.addEventListener("click", async () => {
      const value = button.dataset.copy || "";

      if (!value) {
        return;
      }

      const copied = await copyText(value);
      const message = copied ? "Berhasil disalin" : "Teks siap disalin manual";

      button.classList.add("is-copied");
      showCopyToast(toast, message);

      window.setTimeout(() => {
        button.classList.remove("is-copied");
      }, 1200);
    });
  });
}

async function copyText(value) {
  if (navigator.clipboard && window.isSecureContext) {
    try {
      await navigator.clipboard.writeText(value);
      return true;
    } catch (error) {
      return fallbackCopyText(value);
    }
  }

  return fallbackCopyText(value);
}

function fallbackCopyText(value) {
  const input = document.createElement("textarea");
  input.value = value;
  input.setAttribute("readonly", "");
  input.style.position = "fixed";
  input.style.left = "-9999px";
  document.body.appendChild(input);
  input.select();

  let copied = false;
  try {
    copied = document.execCommand("copy");
  } catch (error) {
    copied = false;
  }

  document.body.removeChild(input);
  return copied;
}

function showCopyToast(toast, message) {
  if (!toast) {
    return;
  }

  toast.textContent = message;
  toast.classList.add("show");
  window.clearTimeout(showCopyToast.timer);
  showCopyToast.timer = window.setTimeout(() => {
    toast.classList.remove("show");
  }, 1800);
}

function setupMonitoringPage() {
  const tableBody = document.querySelector("#monitoring-table-body");
  const canvas = document.querySelector("#growthChart");

  if (!tableBody || !canvas) {
    return;
  }

  renderMonitoringTable(tableBody);
  renderMonitoringSummary();
  drawGrowthChart(canvas);

  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => drawGrowthChart(canvas), 150);
  });
}

function renderMonitoringTable(tableBody) {
  if (!monitoringData.length) {
    tableBody.innerHTML = '<tr><td colspan="8">Belum ada data monitoring.</td></tr>';
    return;
  }

  tableBody.innerHTML = monitoringData.map((item) => `
    <tr>
      <td>${formatDate(item.tanggal)}</td>
      <td>${item.minggu}</td>
      <td>${item.tinggi} cm</td>
      <td>${item.daun}</td>
      <td>${item.kondisiAir}</td>
      <td>${item.belutHidup}</td>
      <td>${item.belutMati}</td>
      <td>${item.catatan}</td>
    </tr>
  `).join("");
}

function renderMonitoringSummary() {
  const latest = monitoringData[monitoringData.length - 1];

  if (!latest) {
    return;
  }

  setText("#latest-height", `${latest.tinggi} cm`);
  setText("#latest-leaves", `${latest.daun} daun`);
  setText("#latest-eels", `${latest.belutHidup} ekor`);
  setText("#total-records", `${monitoringData.length} minggu`);
}

function drawGrowthChart(canvas) {
  const context = canvas.getContext("2d");
  const rect = canvas.getBoundingClientRect();
  const pixelRatio = window.devicePixelRatio || 1;
  const width = Math.max(rect.width, 320);
  const height = Number.parseInt(getComputedStyle(canvas).height, 10) || 360;

  canvas.width = Math.floor(width * pixelRatio);
  canvas.height = Math.floor(height * pixelRatio);
  context.setTransform(pixelRatio, 0, 0, pixelRatio, 0, 0);
  context.clearRect(0, 0, width, height);

  if (!monitoringData.length) {
    context.fillStyle = "#627268";
    context.font = "16px Arial";
    context.fillText("Belum ada data untuk ditampilkan.", 24, 40);
    return;
  }

  const padding = {
    top: 28,
    right: 28,
    bottom: 54,
    left: 54
  };
  const chartWidth = width - padding.left - padding.right;
  const chartHeight = height - padding.top - padding.bottom;
  const maxValue = Math.max(...monitoringData.flatMap((item) => [item.tinggi, item.daun]), 10);
  const roundedMax = Math.ceil(maxValue / 10) * 10;

  drawGrid(context, padding, chartWidth, chartHeight, roundedMax);
  drawLine(context, monitoringData.map((item) => item.tinggi), padding, chartWidth, chartHeight, roundedMax, "#2f9a5f");
  drawLine(context, monitoringData.map((item) => item.daun), padding, chartWidth, chartHeight, roundedMax, "#31a6c1");
  drawLabels(context, padding, chartWidth, chartHeight);
  drawLegend(context, width);
}

function drawGrid(context, padding, chartWidth, chartHeight, maxValue) {
  context.strokeStyle = "#d9e7de";
  context.fillStyle = "#627268";
  context.lineWidth = 1;
  context.font = "12px Arial";

  for (let i = 0; i <= 4; i += 1) {
    const value = Math.round((maxValue / 4) * i);
    const y = padding.top + chartHeight - (chartHeight * i / 4);

    context.beginPath();
    context.moveTo(padding.left, y);
    context.lineTo(padding.left + chartWidth, y);
    context.stroke();
    context.fillText(String(value), 18, y + 4);
  }

  context.strokeStyle = "#143c2b";
  context.beginPath();
  context.moveTo(padding.left, padding.top);
  context.lineTo(padding.left, padding.top + chartHeight);
  context.lineTo(padding.left + chartWidth, padding.top + chartHeight);
  context.stroke();
}

function drawLine(context, values, padding, chartWidth, chartHeight, maxValue, color) {
  const step = values.length > 1 ? chartWidth / (values.length - 1) : chartWidth;

  context.strokeStyle = color;
  context.fillStyle = color;
  context.lineWidth = 3;
  context.beginPath();

  values.forEach((value, index) => {
    const x = padding.left + step * index;
    const y = padding.top + chartHeight - (value / maxValue) * chartHeight;

    if (index === 0) {
      context.moveTo(x, y);
    } else {
      context.lineTo(x, y);
    }
  });

  context.stroke();

  values.forEach((value, index) => {
    const x = padding.left + step * index;
    const y = padding.top + chartHeight - (value / maxValue) * chartHeight;

    context.beginPath();
    context.arc(x, y, 5, 0, Math.PI * 2);
    context.fill();
  });
}

function drawLabels(context, padding, chartWidth, chartHeight) {
  const step = monitoringData.length > 1 ? chartWidth / (monitoringData.length - 1) : chartWidth;

  context.fillStyle = "#627268";
  context.font = "12px Arial";
  context.textAlign = "center";

  monitoringData.forEach((item, index) => {
    const x = padding.left + step * index;
    const y = padding.top + chartHeight + 26;
    context.fillText(`M${item.minggu}`, x, y);
  });

  context.textAlign = "left";
}

function drawLegend(context, width) {
  const startX = Math.max(width - 250, 54);
  const y = 20;

  context.font = "12px Arial";
  context.fillStyle = "#2f9a5f";
  context.fillRect(startX, y - 8, 18, 4);
  context.fillText("Tinggi padi (cm)", startX + 26, y - 4);

  context.fillStyle = "#31a6c1";
  context.fillRect(startX, y + 12, 18, 4);
  context.fillText("Jumlah daun", startX + 26, y + 16);
}

function setText(selector, value) {
  const element = document.querySelector(selector);
  if (element) {
    element.textContent = value;
  }
}

function formatDate(value) {
  const date = new Date(`${value}T00:00:00`);

  if (Number.isNaN(date.getTime())) {
    return value;
  }

  return date.toLocaleDateString("id-ID", {
    day: "2-digit",
    month: "long",
    year: "numeric"
  });
}
