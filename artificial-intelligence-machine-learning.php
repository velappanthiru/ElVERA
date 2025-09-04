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
              Artificial Intelligence & Machine learning
              </h4>
              <p>
                Automate processes, gain insights, and enhance your decision-making process using cutting-edge Artificial Intelligence and Machine Learning technologies from Genosis.
              </p>
              <div class="steps-wrapper">
                <div class="animated-gradient"></div>
                <div class="overlay"></div>
                <p>Learn more</p>
              </div>
            </div>
          </div>
          <div class="ms-auto industry-solution-card" data-aos="fade-left" data-aos-duration="1500">
            <div class="shades left"></div>
            <div class="shades right-bottom "></div>
            <div class="content">
              <h4>
              Harness the Power of Artificial Intelligence and Machine Learning
              </h4>
              <p>
              AI and ML are the future of technology. Genosis information engineers implement complex AI and ML solutions designed to help you automate processes, gain valuable insights, and make better decisions about the future of your organization. Leverage the power of artificial intelligence to drive innovation – and to stay ahead of your competitors in an ever-changing landscape
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
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3v1.5M14.25 3v1.5m4.5 3H21M3 7.5h2.25m1.5 0h10.5M12 12v.008h.008V12H12zm-9 9h18V9H3v12z" />
              </svg>
            </div>
            <div class="content">
              <h6>
              Process Automation
              </h6>
              <p>
              Automate repetitive tasks to improve efficiency and reduce costs
              </p>
            </div>
          </div>
          <div class="engagement-modals-card" data-aos="zoom-in" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 17l6-6 4 4 8-8" />
              </svg>
            </div>
            <div class="content">
              <h6>
              Predictive Analytics
              </h6>
              <p>
              Use machine learning to anticipate trends and make data-driven decisions
              </p>
            </div>
          </div>
          <div class="engagement-modals-card engagement-card-full" data-aos="fade-right" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3h6m2.25 6.75H6.75A2.25 2.25 0 014.5 15V6.75A2.25 2.25 0 016.75 4.5h10.5A2.25 2.25 0 0119.5 6.75V15a2.25 2.25 0 01-2.25 2.25z" />
              </svg>
            </div>
            <div class="content">
              <h6>
              Natural Language Processing
              </h6>
              <p>
              Enhance customer interactions with advanced NLP technologies
              </p>
            </div>
          </div>
          <div class="engagement-modals-card card-full" data-aos="fade-left" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5A2.25 2.25 0 006.75 19.5h6.75a2.25 2.25 0 002.25-2.25v-3.75l5.25 3V7.5l-5.25 3z" />
              </svg>
            </div>
            <div class="content">
              <h6>
              Image and Video Analysis
              </h6>
              <p>
              Leverage AI to analyze images and videos for various applications
              </p>
            </div>
          </div>
          <div class="engagement-modals-card card-full" data-aos="fade-right" data-aos-duration="1500">
            <div class="shades"></div>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 9h6v6H9z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h1.5M18 12h1.5M12 4.5v1.5M12 18v1.5M6.75 6.75l1.06 1.06M16.19 16.19l1.06 1.06M6.75 17.25l1.06-1.06M16.19 7.81l1.06-1.06" />
              </svg>
            </div>
            <div class="content">
              <h6>
              Customized AI Solutions
              </h6>
              <p>
              Tailored AI solutions to meet your specific organizational needs.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'components/footer.php'; ?>
