import "./bootstrap";

// Starfield Background

const canvas = document.getElementById("starfield");
const ctx = canvas.getContext("2d");
let stars = [];
const STAR_COUNT = 2000;
let shootingStars = [];
let starTime = 0;
let lastFrame = performance.now();
function resize() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
function createStars() {
    stars = [];
    for (let i = 0; i < STAR_COUNT; i++) {
        const x = Math.random() * canvas.width;
        const y = Math.random() * canvas.height;
        const r = Math.random() * 1.2 + 0.3;
        const baseAlpha = Math.random() * 0.5 + 0.3;
        const twinkleSpeed = Math.random() * 1.5 + 0.5;
        const twinklePhase = Math.random() * Math.PI * 2;
        stars.push({ x, y, r, baseAlpha, twinkleSpeed, twinklePhase });
    }
}
function spawnShootingStar() {
    const angle = Math.random() * (Math.PI / 4) + Math.PI * 0.75;
    const speed = Math.random() * 8 + 10;
    const length = Math.random() * 100 + 200;
    const x = Math.random() * canvas.width * 0.7 + canvas.width * 0.15;
    const y = Math.random() * canvas.height * 0.5;
    shootingStars.push({
        x,
        y,
        dx: Math.cos(angle) * speed,
        dy: Math.sin(angle) * speed,
        length,
        progress: 0,
        alpha: 1,
    });
    setTimeout(spawnShootingStar, Math.random() * 4000 + 3000);
}
function drawShootingStars() {
    for (let i = shootingStars.length - 1; i >= 0; i--) {
        const s = shootingStars[i];
        ctx.save();
        ctx.globalAlpha = s.alpha;
        ctx.strokeStyle = "#fff";
        ctx.lineWidth = 2;
        ctx.beginPath();
        ctx.moveTo(s.x, s.y);
        ctx.lineTo(
            s.x - s.dx * (s.progress / s.length),
            s.y - s.dy * (s.progress / s.length)
        );
        ctx.stroke();
        ctx.restore();
        s.x += s.dx;
        s.y += s.dy;
        s.progress += Math.sqrt(s.dx * s.dx + s.dy * s.dy);
        s.alpha *= 0.96;
        if (
            s.progress > s.length ||
            s.alpha < 0.05 ||
            s.x < 0 ||
            s.y < 0 ||
            s.x > canvas.width ||
            s.y > canvas.height
        ) {
            shootingStars.splice(i, 1);
        }
    }
}
function drawStars(time) {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for (const star of stars) {
        const twinkle =
            0.55 +
            0.25 *
                Math.sin(time * 0.001 * star.twinkleSpeed + star.twinklePhase);
        ctx.globalAlpha = star.baseAlpha * twinkle;
        ctx.beginPath();
        ctx.arc(star.x, star.y, star.r, 0, Math.PI * 2);
        ctx.fillStyle = "#fff";
        ctx.fill();
    }
    ctx.globalAlpha = 1;
    drawShootingStars();
}
function animate(now) {
    const delta = now - lastFrame;
    lastFrame = now;
    starTime += delta;
    drawStars(starTime);
    requestAnimationFrame(animate);
}
resize();
createStars();
spawnShootingStar();
window.addEventListener("resize", () => {
    resize();
    createStars();
});
requestAnimationFrame(animate);

// Copy to clipboard

window.copyToClipboard = function (elementId) {
    const text = document.getElementById(elementId).textContent;
    const button = document.querySelector(`[data-copy-target="${elementId}"]`);
    const icon = button.querySelector(".material-symbols-rounded");

    navigator.clipboard
        .writeText(text)
        .then(() => {
            icon.textContent = "check";
            icon.classList.add("text-green-500");

            setTimeout(() => {
                icon.textContent = "content_copy";
                icon.classList.remove("text-green-500");
            }, 2000);
        })
        .catch(() => {
            icon.textContent = "error";
            icon.classList.add("text-red-500");

            setTimeout(() => {
                icon.textContent = "content_copy";
                icon.classList.remove("text-red-500");
            }, 2000);
        });
};

document.addEventListener("DOMContentLoaded", function () {
    // Mac Screenshot Animation

    const slides = document.querySelectorAll(".mac-screenshot");
    let index = 0;

    function showNext() {
        const current = slides[index];
        index = (index + 1) % slides.length;
        const next = slides[index];

        next.classList.remove("hidden");

        const Motion =
            window.Motion ||
            window.motion ||
            globalThis.Motion ||
            globalThis.motion;

        if (Motion && Motion.animate) {
            Motion.animate(
                current,
                { opacity: 0, "--scale": 0.88 },
                { duration: 0.8 }
            ).finished.then(() => current.classList.add("hidden"));

            Motion.animate(
                next,
                { opacity: 1, "--scale": 0.92 },
                { duration: 0.8 }
            );
        } else {
            current.style.opacity = "0";
            current.style.setProperty("--scale", 0.88);
            setTimeout(() => current.classList.add("hidden"), 800);

            next.style.opacity = "1";
            next.style.setProperty("--scale", 0.92);
        }
    }

    setInterval(showNext, 4000);

    // Typewriter animation for the main heading

    const typewriterHeading = document.getElementById("typewriter-heading");
    if (typewriterHeading) {
        const text = typewriterHeading.textContent;

        // Remove gradient class from parent and apply to text only
        typewriterHeading.classList.remove("gradient-text-default");
        typewriterHeading.innerHTML =
            '<span class="typewriter-text gradient-text-default"></span><span class="cursor" style="color: #8b5cf6; font-weight: bold; font-size: inherit;">_</span>';

        const textElement = typewriterHeading.querySelector(".typewriter-text");
        const cursorElement = typewriterHeading.querySelector(".cursor");

        // Force cursor visibility
        cursorElement.style.color = "#8b5cf6 !important";
        cursorElement.style.fontWeight = "bold !important";
        cursorElement.style.animation = "blink 1s infinite";

        let currentIndex = 0;
        const typeSpeed = 100;

        function typeNextChar() {
            if (currentIndex < text.length) {
                textElement.textContent += text[currentIndex];
                currentIndex++;
                setTimeout(typeNextChar, typeSpeed);
            }
        }

        // Start typing immediately
        setTimeout(typeNextChar, 100);
    }

    // Motion animation for the rocket bot

    if (
        window.matchMedia &&
        !window.matchMedia("(prefers-reduced-motion: reduce)").matches
    ) {
        const rocketBot = document.getElementById("rocket-bot");
        if (rocketBot) {
            const Motion =
                window.Motion ||
                window.motion ||
                globalThis.Motion ||
                globalThis.motion;
            if (Motion && Motion.animate) {
                Motion.animate(
                    rocketBot,
                    {
                        y: [0, -20, -40, -60, -40, -20, 0],
                        x: [0, 5, 10, 15, 10, 5, 0],
                        rotate: [15, 12, 15, 18, 15, 12, 15],
                    },
                    {
                        duration: 6,
                        easing: [0.25, 0.46, 0.45, 0.94],
                        repeat: Infinity,
                    }
                );
            }
        }

        // Scroll animation for the screenshots

        const animatedScreenshots = document.querySelectorAll(
            ".animated-screenshot"
        );

        window.addEventListener("scroll", () => {
            animatedScreenshots.forEach((screenshot, index) => {
                const rect = screenshot.getBoundingClientRect();
                const windowHeight = window.innerHeight;

                if (rect.top < windowHeight && rect.bottom > 0) {
                    const progress = Math.max(
                        0,
                        Math.min(
                            1,
                            (windowHeight - rect.top + 200) /
                                (windowHeight + rect.height - 200)
                        )
                    );
                    const rotation = -50 + progress * 50;
                    const translateX = progress * 50;
                    screenshot.style.transform = `perspective(1000px) rotateY(${rotation}deg) translateX(${translateX}px)`;
                }
            });
        });

        // Floating polygons animation

        const floatingPolygons = document.querySelectorAll(".floating-polygon");

        floatingPolygons.forEach((polygon, index) => {
            const Motion =
                window.Motion ||
                window.motion ||
                globalThis.Motion ||
                globalThis.motion;
            if (Motion && Motion.animate) {
                const delay = index * 0.8;
                const duration = 6 + Math.random() * 4; // 6-10 seconds
                const amplitude = 75 + Math.random() * 20; // 15-35px movement

                Motion.animate(
                    polygon,
                    {
                        y: [0, -amplitude / 2, -amplitude, -amplitude / 2, 0],
                        x: [0, amplitude / 4, 0, -amplitude / 4, 0],
                    },
                    {
                        duration: duration,
                        easing: [0.25, 0.46, 0.45, 0.94],
                        repeat: Infinity,
                        delay: delay,
                    }
                );
            }
        });

        // Counter animation for statistics

        function animateCounter(element, target, suffix = "") {
            const duration = 2000;
            const start = 0;
            const increment = target / (duration / 5);
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current) + suffix;
            }, 16);
        }

        const counters = document.querySelectorAll("[data-count]");
        const observerOptions = {
            threshold: 0.5,
            rootMargin: "0px 0px -100px 0px",
        };

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const target = parseInt(element.getAttribute("data-count"));
                    const suffix = element.getAttribute("data-suffix") || "";

                    animateCounter(element, target, suffix);
                    counterObserver.unobserve(element);
                }
            });
        }, observerOptions);

        counters.forEach((counter) => {
            counterObserver.observe(counter);
        });
    }
});
