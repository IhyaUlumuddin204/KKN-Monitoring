document.addEventListener("DOMContentLoaded", () => {
  setupMenu();
  setupHeroSlider();
  setupMonitoringChart();
});

function setupMenu() {
  const toggle = document.querySelector(".nav-toggle");
  const links = document.querySelector(".nav-links");

  if (!toggle || !links) {
    return;
  }

  toggle.addEventListener("click", () => {
    const isOpen = links.classList.toggle("open");
    toggle.setAttribute("aria-expanded", String(isOpen));
  });
}

function setupHeroSlider() {
  const slides = document.querySelectorAll(".hero-slide");
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (slides.length < 2 || reduceMotion) {
    return;
  }

  let active = 0;

  window.setInterval(() => {
    const next = (active + 1) % slides.length;
    slides[active].classList.remove("is-active");
    slides[next].classList.add("is-active");
    active = next;
  }, 5200);
}

function setupMonitoringChart() {
  const canvas = document.querySelector("#growthChart");
  const data = window.monitoringData || [];

  if (!canvas || !data.length) {
    return;
  }

  drawChart(canvas, data);

  let timer;
  window.addEventListener("resize", () => {
    clearTimeout(timer);
    timer = setTimeout(() => drawChart(canvas, data), 150);
  });
}

function drawChart(canvas, data) {
  const ctx = canvas.getContext("2d");
  const rect = canvas.getBoundingClientRect();
  const ratio = window.devicePixelRatio || 1;
  const width = Math.max(rect.width, 320);
  const height = parseInt(getComputedStyle(canvas).height, 10) || 360;

  canvas.width = Math.floor(width * ratio);
  canvas.height = Math.floor(height * ratio);
  ctx.setTransform(ratio, 0, 0, ratio, 0, 0);
  ctx.clearRect(0, 0, width, height);

  const padding = { top: 28, right: 28, bottom: 54, left: 54 };
  const chartWidth = width - padding.left - padding.right;
  const chartHeight = height - padding.top - padding.bottom;
  const maxValue = Math.ceil(Math.max(...data.flatMap((item) => [item.tinggi, item.daun]), 10) / 10) * 10;

  drawGrid(ctx, padding, chartWidth, chartHeight, maxValue);
  drawLine(ctx, data.map((item) => item.tinggi), padding, chartWidth, chartHeight, maxValue, "#2d9a62");
  drawLine(ctx, data.map((item) => item.daun), padding, chartWidth, chartHeight, maxValue, "#126b7d");
  drawLabels(ctx, data, padding, chartWidth, chartHeight);
  drawLegend(ctx, width);
}

function drawGrid(ctx, padding, chartWidth, chartHeight, maxValue) {
  ctx.strokeStyle = "#d8e7de";
  ctx.fillStyle = "#627268";
  ctx.lineWidth = 1;
  ctx.font = "12px Arial";

  for (let i = 0; i <= 4; i += 1) {
    const value = Math.round((maxValue / 4) * i);
    const y = padding.top + chartHeight - (chartHeight * i / 4);

    ctx.beginPath();
    ctx.moveTo(padding.left, y);
    ctx.lineTo(padding.left + chartWidth, y);
    ctx.stroke();
    ctx.fillText(String(value), 18, y + 4);
  }

  ctx.strokeStyle = "#13392b";
  ctx.beginPath();
  ctx.moveTo(padding.left, padding.top);
  ctx.lineTo(padding.left, padding.top + chartHeight);
  ctx.lineTo(padding.left + chartWidth, padding.top + chartHeight);
  ctx.stroke();
}

function drawLine(ctx, values, padding, chartWidth, chartHeight, maxValue, color) {
  const step = values.length > 1 ? chartWidth / (values.length - 1) : chartWidth;

  ctx.strokeStyle = color;
  ctx.fillStyle = color;
  ctx.lineWidth = 3;
  ctx.beginPath();

  values.forEach((value, index) => {
    const x = padding.left + step * index;
    const y = padding.top + chartHeight - (value / maxValue) * chartHeight;
    index === 0 ? ctx.moveTo(x, y) : ctx.lineTo(x, y);
  });

  ctx.stroke();

  values.forEach((value, index) => {
    const x = padding.left + step * index;
    const y = padding.top + chartHeight - (value / maxValue) * chartHeight;
    ctx.beginPath();
    ctx.arc(x, y, 5, 0, Math.PI * 2);
    ctx.fill();
  });
}

function drawLabels(ctx, data, padding, chartWidth, chartHeight) {
  const step = data.length > 1 ? chartWidth / (data.length - 1) : chartWidth;

  ctx.fillStyle = "#627268";
  ctx.font = "12px Arial";
  ctx.textAlign = "center";

  data.forEach((item, index) => {
    const x = padding.left + step * index;
    const y = padding.top + chartHeight + 26;
    ctx.fillText(`M${item.minggu}`, x, y);
  });

  ctx.textAlign = "left";
}

function drawLegend(ctx, width) {
  const startX = Math.max(width - 250, 54);
  const y = 20;

  ctx.font = "12px Arial";
  ctx.fillStyle = "#2d9a62";
  ctx.fillRect(startX, y - 8, 18, 4);
  ctx.fillText("Tinggi padi (cm)", startX + 26, y - 4);

  ctx.fillStyle = "#126b7d";
  ctx.fillRect(startX, y + 12, 18, 4);
  ctx.fillText("Jumlah daun", startX + 26, y + 16);
}
