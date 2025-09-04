<?php include 'components/header.php'; ?>
<style>
  :root {
    --shimmer-color: #ffffff;
    --shimmer-size: 0.05em;
    --shimmer-speed: 5s;
    --radius: 100px;
    --bg: rgba(0, 0, 0, 1);
    --spread: 90deg;
  }

  .shimmer-button {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0.75rem 1.5rem; /* px-6 py-3 */
    color: white;
    background: var(--bg);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: var(--radius);
    cursor: pointer;
    overflow: hidden;
    white-space: nowrap;
    font-weight: 500;
    transition: transform 0.3s ease-in-out;
  }

  .shimmer-button:active {
    transform: translateY(1px);
  }

  .shimmer-text {
    position: relative;
    z-index: 10;
    text-align: center;
    font-size: 0.875rem; /* lg: 1rem optional */
    font-weight: 500;
  }

  .shimmer-spark-container {
    position: absolute;
    inset: 0;
    overflow: visible;
    z-index: 0;
    filter: blur(2px);
  }

  .shimmer-spark {
    position: absolute;
    inset: 0;
    width: 100%;
    aspect-ratio: 1 / 1;
    animation: shimmer-slide var(--shimmer-speed) linear infinite;
  }

  .shimmer-spin {
    position: absolute;
    inset: -100%;
    background: conic-gradient(
      from calc(270deg - (var(--spread) * 1)),
      transparent 0,
      var(--shimmer-color) var(--spread),
      transparent var(--spread)
    );
    animation: spin-around var(--shimmer-speed) linear infinite;
  }

  .shimmer-highlight {
    position: absolute;
    inset: 0;
    border-radius: 1.5rem;
    padding: 0.375rem 1rem;
    box-shadow: inset 0 -8px 10px rgba(255,255,255,0.12);
    transition: all 0.3s ease-in-out;
  }

  .shimmer-button:hover .shimmer-highlight {
    box-shadow: inset 0 -6px 10px rgba(255,255,255,0.25);
  }

  .shimmer-button:active .shimmer-highlight {
    box-shadow: inset 0 -10px 10px rgba(255,255,255,0.25);
  }

  .shimmer-backdrop {
    position: absolute;
    inset: var(--shimmer-size);
    border-radius: var(--radius);
    background: var(--bg);
    z-index: 1;
  }

  /* Animations */
  @keyframes shimmer-slide {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
  }

  @keyframes spin-around {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
</style>
<main>
  <section class="industry-solution-section pt-8" id="industrysolution">
    <div class="container-fluid">
      <div class="industry-solution-container">
        <div class="industry-solution-wrapper mt-5">
          <div class="industry-solution-card" data-aos="fade-right" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="shades bottom"></div>
            <div class="content">
              <h4>
              Blockchain Solutions
              </h4>
              <p>
              Secure, Transparent, and Efficient Blockchain Solutions for Wide-Ranging Applications
              </p>
            </div>
          </div>
          <div class="ms-auto industry-solution-card" data-aos="fade-left" data-aos-duration="1500">
            <div class="shades left"></div>
            <div class="shades right-bottom "></div>
            <div class="content">
              <h4>
              Leverage the Power of Blockchain
              </h4>
              <p>
              We offer comprehensive blockchain solutions that emphasize security, transparency, and efficiency. Smart contracts, decentralized solutions, and other cutting-edge blockchain technologies from Genosis are tailor-made to meet the needs of your organization
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="engagement-modals-section pt-0">
    <div class="container-fluid">
      <div class="engagement-modals-container">
        <div class="section--title section--title__center">
          <button class="shimmer-button">
            <span class="shimmer-text">Solution Details</span>
            <div class="shimmer-spark-container">
              <div class="shimmer-spark">
                <div class="shimmer-spin"></div>
              </div>
            </div>
            <div class="shimmer-highlight"></div>
            <div class="shimmer-backdrop"></div>
          </button>
        </div>
        <div class="engagement-modals-card-wrapper">
          <div class="engagement-modals-card" data-aos="fade-left" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75h-9a2.25 2.25 0 00-2.25 2.25v12a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-12A2.25 2.25 0 0016.5 3.75z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 9h6m-6 3h3" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 9h6m-6 3h3" />
              </svg>

            </div>
            <div class="content">
              <h6>
              Smart Contracts
              </h6>
              <p>
              Automate the contract execution process and ensure compliance during complex transactions
              </p>
            </div>
          </div>
          <div class="engagement-modals-card" data-aos="zoom-in" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-8.25-4.5-8.25 4.5m16.5 0v9l-8.25 4.5m8.25-13.5l-8.25 4.5m-8.25-4.5v9l8.25 4.5m-8.25-13.5l8.25 4.5m0 9v-9" />
              </svg>
            </div>
            <div class="content">
              <h6>
              Supply Chain Transparency
              </h6>
              <p>
              Improve supply chain transparency and traceability
              </p>
            </div>
          </div>
          <div class="engagement-modals-card" data-aos="fade-right" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  width="20" height="20">
                <rect x="6" y="2" width="12" height="20" rx="2" ry="2"></rect>
                <line x1="12" y1="18" x2="12" y2="18"></line>
              </svg>
            </div>
            <div class="content">
              <h6>
              Decentralized Applications (DApps)
              </h6>
              <p>
              Develop secure and scalable Decentralized Applications to streamline decision-making, maximize efficiency, and improve the security of your data
              </p>
            </div>
          </div>
          <div class="engagement-modals-card" data-aos="fade-left" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="icon">

              <!-- Cryptocurrency SVG -->
              <svg xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6">
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"></circle>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M10 8h4a2 2 0 010 4h-4m2 0h2a2 2 0 010 4h-4" />
              </svg>

            </div>
            <div class="content">
              <h6>
              Cryptocurrency Integration
              </h6>
              <p>
              Leverage cryptocurrency solutions to bring your organization into the modern era of decentralized technology
              </p>
            </div>
          </div>
          <div class="engagement-modals-card" data-aos="zoom-in" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l2.25 2.25L15 10.5m-7.5-6h9a2.25 2.25 0 012.25 2.25v11.25A2.25 2.25 0 0116.5 20.25h-9a2.25 2.25 0 01-2.25-2.25V6.75A2.25 2.25 0 016.75 4.5z" />
              </svg>
            </div>
            <div class="content">
              <h6>
              Voting and Polling Systems
              </h6>
              <p>
              Implement secure, transparent voting and polling systems to streamline democratic decision-making and improve operational integrity and trust
              </p>
            </div>
          </div>
          <div class="engagement-modals-card" data-aos="fade-right" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="icon">
              <!-- Decentralized Finance (DeFi) SVG -->
              <svg xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6">
                <!-- Outer decentralized network -->
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"></circle>

                <!-- Dollar sign in the center -->
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 7v10m0 0c-1.5 0-2.5-.8-2.5-2s1-2 2.5-2 2.5-.8 2.5-2-1-2-2.5-2" />
              </svg>
            </div>
            <div class="content">
              <h6>
              Decentralized Finance (DeFi)
              </h6>
              <p>
              Deploy complex DeFi platforms to execute financial services without intermediaries, enhancing efficiency, accessibility, and trust.
              </p>
            </div>
          </div>
          <div class="engagement-modals-card" data-aos="fade-up" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" stroke-width="1.5" class="size-6">
                <!-- Badge circle -->
                <circle cx="12" cy="12" r="7.5"/>
                <!-- Ribbon tails -->
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 18l-1.5 3 3-1.5M15 18l1.5 3-3-1.5"/>
                <!-- Star (unique/rarity) -->
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 8l1.2 2.4 2.6.4-1.9 1.9.5 2.7L12 14.6 9.6 15.4l.5-2.7-1.9-1.9 2.6-.4L12 8z"/>
              </svg>
            </div>

            <div class="content">
              <h6>
              Non-Fungible Tokens (NFTs)
              </h6>
              <p>
              Create and manage NFTs for both real-world and digital products, ensuring authenticity and ownership verification in nearly every sector
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'components/footer.php'; ?>
