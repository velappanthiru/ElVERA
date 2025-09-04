<footer>
    <div class="container-fluid">
      <div class="footer-container">
        <div class="logo-wrapper">
          <img src="./assets/images/icon/logo.png" alt="Logo" class="logo" />
          <!-- <p>
            Leading AI development company driving innovation through government projects, Web3 solutions, and enterprise software trusted by both innovative startups and Fortune 500 companies.
          </p> -->
        </div>
        <div class="footer-menu-wrapper">
          <div class="menus-wrapper">
            <h1 class="heading mb-3">Quick Links</h1>
            <div class="quick-links-wrapper">
              <a href="./index.php#home" class="menu-nav-link active">Home</a>
              <a href="./index.php#aboutus" class="menu-nav-link">About Us</a>
              <a href="./index.php#services" class="menu-nav-link">Services</a>
            </div>
          </div>
        </div>
        <div class="footer-menu-wrapper">
          <div class="menus-wrapper">
            <h1 class="heading mb-3">Services</h1>
            <div class="quick-links-wrapper">
              <a href="#" class="menu-nav-link active">AI Development</a>
              <a href="#" class="menu-nav-link">Web3 Development</a>
              <a href="#" class="menu-nav-link">Software Development</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-wrapper">
      <p class="copyright">© <span id="currentYear"></span> ElVERA. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- bootstrap cdn link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- jquery cdn link -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="../assets/js/script.js"></script>

  <script>
    function handleAOS() {
      if (window.innerWidth < 991) {
        AOS.refreshHard(); // Reset AOS
        document.querySelectorAll('[data-aos]').forEach(el => {
          el.removeAttribute('data-aos');
          el.removeAttribute('data-aos-delay');
          el.removeAttribute('data-aos-duration');
        });
      } else {
        AOS.init({
          duration: 800,
          once: true,
        });
      }
    }

    handleAOS();

    window.addEventListener('resize', () => {
      handleAOS();
    });
  </script>

  <script>
    (function() {
      const canvas = document.getElementById('particles-canvas');
      const container = document.getElementById('particles-container');
      const ctx = canvas.getContext('2d');

      const quantity = 100; // number of particles
      const staticity = 50;
      const ease = 50;
      const size = 1;
      const color = "#ffffff";
      const vx = 0;
      const vy = 0;
      const dpr = window.devicePixelRatio || 1;

      let mouse = { x: 0, y: 0 };
      let circles = [];
      let canvasSize = { w: 0, h: 0 };

      function hexToRgb(hex) {
        hex = hex.replace("#", "");
        if (hex.length === 3) hex = hex.split("").map(c => c+c).join("");
        const num = parseInt(hex, 16);
        return [(num >> 16) & 255, (num >> 8) & 255, num & 255];
      }

      const rgb = hexToRgb(color);

      function resizeCanvas() {
        canvasSize.w = container.offsetWidth;
        canvasSize.h = container.offsetHeight;

        canvas.width = canvasSize.w * dpr;
        canvas.height = canvasSize.h * dpr;
        canvas.style.width = canvasSize.w + "px";
        canvas.style.height = canvasSize.h + "px";
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

        circles = [];
        for (let i = 0; i < quantity; i++) {
          circles.push(createCircle());
        }
      }

      function createCircle() {
        const x = Math.random() * canvasSize.w;
        const y = Math.random() * canvasSize.h;
        const translateX = 0;
        const translateY = 0;
        const pSize = Math.random() * 2 + size;
        const alpha = 0;
        const targetAlpha = Math.random() * 0.6 + 0.1;
        const dx = (Math.random() - 0.5) * 0.1;
        const dy = (Math.random() - 0.5) * 0.1;
        const magnetism = 0.1 + Math.random() * 4;
        return { x, y, translateX, translateY, size: pSize, alpha, targetAlpha, dx, dy, magnetism };
      }

      function remapValue(value, start1, end1, start2, end2) {
        const remapped = ((value - start1) * (end2 - start2)) / (end1 - start1) + start2;
        return remapped > 0 ? remapped : 0;
      }

      function drawCircle(circle) {
        ctx.translate(circle.translateX, circle.translateY);
        ctx.beginPath();
        ctx.arc(circle.x, circle.y, circle.size, 0, 2*Math.PI);
        ctx.fillStyle = `rgba(${rgb.join(",")},${circle.alpha})`;
        ctx.fill();
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
      }

      function clearCanvas() {
        ctx.clearRect(0, 0, canvasSize.w, canvasSize.h);
      }

      function animate() {
        clearCanvas();
        circles.forEach((circle, i) => {
          const edge = [
            circle.x + circle.translateX - circle.size,
            canvasSize.w - circle.x - circle.translateX - circle.size,
            circle.y + circle.translateY - circle.size,
            canvasSize.h - circle.y - circle.translateY - circle.size
          ];
          const closestEdge = Math.min(...edge);
          const remapClosestEdge = parseFloat(remapValue(closestEdge, 0, 20, 0, 1).toFixed(2));

          circle.alpha = remapClosestEdge > 1 ? Math.min(circle.alpha + 0.02, circle.targetAlpha) : circle.targetAlpha * remapClosestEdge;

          circle.x += circle.dx + vx;
          circle.y += circle.dy + vy;
          circle.translateX += (mouse.x / (staticity / circle.magnetism) - circle.translateX) / ease;
          circle.translateY += (mouse.y / (staticity / circle.magnetism) - circle.translateY) / ease;

          drawCircle(circle);

          if (circle.x < -circle.size || circle.x > canvasSize.w + circle.size || circle.y < -circle.size || circle.y > canvasSize.h + circle.size) {
            circles[i] = createCircle();
          }
        });
        requestAnimationFrame(animate);
      }

      window.addEventListener("mousemove", (e) => {
        const rect = canvas.getBoundingClientRect();
        const x = e.clientX - rect.left - canvasSize.w / 2;
        const y = e.clientY - rect.top - canvasSize.h / 2;
        if (x > -canvasSize.w/2 && x < canvasSize.w/2 && y > -canvasSize.h/2 && y < canvasSize.h/2) {
          mouse.x = x;
          mouse.y = y;
        }
      });

      window.addEventListener("resize", () => {
        setTimeout(resizeCanvas, 200);
      });

      resizeCanvas();
      animate();

    })();
  </script>

</body>
</html>
