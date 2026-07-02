/* ============================================================
   Ribbon Plumbing & Gas Heating — app.js
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {
  initStickyNav();
  initMobileMenu();
  initHeroTabs();
  initHeroForm();
  initQuoteForm();
  initAnalytics();
  initCardStack();
});

/* ============================================================
   CARD STACK — buried "Why Us" cards scale down as they're covered
   (enhancement only; if it doesn't run, cards simply stay full size)
   ============================================================ */
function initCardStack() {
  const cards = Array.from(document.querySelectorAll('.whyus-card'));
  if (cards.length < 2) return;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  cards.forEach((c) => { c.style.transformOrigin = 'center top'; });

  let ticking = false;
  function update() {
    for (let i = 0; i < cards.length - 1; i++) {
      const cur = cards[i].getBoundingClientRect();
      const next = cards[i + 1].getBoundingClientRect();
      const full = cur.height || 1;
      let p = 1 - (next.top - cur.top - 16) / full; // 0 = uncovered, 1 = fully covered
      p = Math.max(0, Math.min(1, p));
      cards[i].style.transform = `scale(${(1 - p * 0.05).toFixed(4)})`;
      cards[i].style.opacity = (1 - p * 0.4).toFixed(3);
    }
    const last = cards[cards.length - 1];
    last.style.transform = 'scale(1)';
    last.style.opacity = '1';
  }
  function onScroll() {
    if (!ticking) {
      requestAnimationFrame(() => { update(); ticking = false; });
      ticking = true;
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onScroll, { passive: true });
  update();
}

/* ============================================================
   STICKY NAV + SCROLL PROGRESS
   ============================================================ */
function initStickyNav() {
  const header = document.getElementById('site-header');
  const progress = document.getElementById('scroll-progress');
  if (!header) return;

  let ticking = false;

  function onScroll() {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        const scrollY = window.scrollY;
        const docH = document.documentElement.scrollHeight - window.innerHeight;

        // Toggle scrolled/top class
        if (scrollY > 64) {
          header.classList.add('site-header--scrolled');
          header.classList.remove('site-header--top');
        } else {
          header.classList.remove('site-header--scrolled');
          header.classList.add('site-header--top');
        }

        // Update progress bar
        if (progress && docH > 0) {
          progress.style.width = `${(scrollY / docH) * 100}%`;
        }

        ticking = false;
      });
      ticking = true;
    }
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll(); // run once on load
}

/* ============================================================
   MOBILE MENU
   ============================================================ */
function initMobileMenu() {
  const toggle = document.getElementById('nav-toggle');
  const menu = document.getElementById('mobile-menu');
  const overlay = document.getElementById('mobile-menu-overlay');
  const closeBtn = document.getElementById('mobile-menu-close');
  const navLinks = document.querySelectorAll('.mobile-nav-link');

  if (!toggle || !menu) return;

  function openMenu() {
    menu.classList.add('is-open');
    overlay.classList.add('is-active');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
    // Trap focus: set focus to close button
    closeBtn?.focus();
  }

  function closeMenu() {
    menu.classList.remove('is-open');
    overlay.classList.remove('is-active');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
    toggle.focus();
  }

  toggle.addEventListener('click', openMenu);
  closeBtn?.addEventListener('click', closeMenu);
  overlay.addEventListener('click', closeMenu);

  // Close on nav link click
  navLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  // Close on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && menu.classList.contains('is-open')) {
      closeMenu();
    }
  });
}

/* ============================================================
   QUOTE FORM
   ============================================================ */
function initQuoteForm() {
  const form = document.getElementById('quote-form');
  if (!form) return;

  const successMsg = document.getElementById('form-success');
  const submitBtn = form.querySelector('[data-submit-btn]');
  const submitBtnText = submitBtn?.querySelector('[data-btn-text]');
  const submitBtnLoader = submitBtn?.querySelector('[data-btn-loader]');

  const rules = {
    name:    { required: true, minLength: 2 },
    phone:   { required: true, pattern: /^[0-9+\s\-()]{8,}$/ },
    email:   { required: false, pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/ },
    service: { required: true },
  };

  function getField(name) {
    return form.querySelector(`[name="${name}"]`);
  }

  function getError(name) {
    return form.querySelector(`[data-error="${name}"]`);
  }

  function setError(name, message) {
    const field = getField(name);
    const error = getError(name);
    field?.classList.add('form-input--error');
    if (error) {
      error.textContent = message;
      error.classList.add('is-visible');
    }
    // Shake animation
    field?.classList.remove('form-input--shake');
    void field?.offsetWidth; // reflow
    field?.classList.add('form-input--shake');
  }

  function clearError(name) {
    const field = getField(name);
    const error = getError(name);
    field?.classList.remove('form-input--error', 'form-input--shake');
    error?.classList.remove('is-visible');
  }

  function validateForm() {
    let valid = true;

    // Name
    const name = getField('name')?.value.trim() ?? '';
    clearError('name');
    if (!name) {
      setError('name', 'Your name is required.');
      valid = false;
    } else if (name.length < rules.name.minLength) {
      setError('name', 'Please enter your full name.');
      valid = false;
    }

    // Phone
    const phone = getField('phone')?.value.trim() ?? '';
    clearError('phone');
    if (!phone) {
      setError('phone', 'A contact number is required.');
      valid = false;
    } else if (!rules.phone.pattern.test(phone)) {
      setError('phone', 'Enter a valid phone number.');
      valid = false;
    }

    // Email (optional)
    const email = getField('email')?.value.trim() ?? '';
    clearError('email');
    if (email && !rules.email.pattern.test(email)) {
      setError('email', 'Enter a valid email address.');
      valid = false;
    }

    // Service
    const service = getField('service')?.value ?? '';
    clearError('service');
    if (!service) {
      setError('service', 'Please select a service type.');
      valid = false;
    }

    return valid;
  }

  // Live clear on input
  form.querySelectorAll('.form-input').forEach(input => {
    input.addEventListener('input', () => clearError(input.name));
    input.addEventListener('change', () => clearError(input.name));
  });

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    if (!validateForm()) return;

    // Loading state
    submitBtn?.setAttribute('disabled', 'true');
    if (submitBtnText) submitBtnText.textContent = 'Sending…';
    if (submitBtnLoader) submitBtnLoader.style.display = 'inline-block';

    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content ?? '';
    const formData = new FormData(form);

    try {
      const response = await fetch('/contact', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': csrfToken,
          'Accept': 'application/json',
          'X-Requested-With': 'XMLHttpRequest',
        },
        body: formData,
      });

      const data = await response.json();

      if (response.ok && data.success) {
        form.style.display = 'none';
        if (successMsg) successMsg.classList.add('is-visible');
        trackEvent('form_submit', { form_name: 'quote_request', service: formData.get('service') });
      } else {
        // Server validation errors
        if (data.errors) {
          Object.entries(data.errors).forEach(([field, messages]) => {
            setError(field, Array.isArray(messages) ? messages[0] : messages);
          });
        }
        resetSubmitBtn();
      }
    } catch (err) {
      // Network error fallback
      const errorDiv = document.getElementById('form-network-error');
      if (errorDiv) errorDiv.style.display = 'block';
      resetSubmitBtn();
    }
  });

  function resetSubmitBtn() {
    submitBtn?.removeAttribute('disabled');
    if (submitBtnText) submitBtnText.textContent = 'Get My Free Quote';
    if (submitBtnLoader) submitBtnLoader.style.display = 'none';
  }
}

/* ============================================================
   HERO TABS
   ============================================================ */
function initHeroTabs() {
  const tabs = document.querySelectorAll('.hero-card-tab');
  const propertyInput = document.getElementById('f-hero-property-type');
  if (!tabs.length) return;

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => {
        t.classList.remove('is-active');
        t.setAttribute('aria-selected', 'false');
      });
      tab.classList.add('is-active');
      tab.setAttribute('aria-selected', 'true');
      if (propertyInput) propertyInput.value = tab.dataset.heroTab ?? '';
    });
  });
}

/* ============================================================
   HERO FORM
   ============================================================ */
function initHeroForm() {
  const form = document.getElementById('hero-quote-form');
  if (!form) return;

  const successPanel = document.getElementById('hero-card-success');
  const tabPanel = document.getElementById('hero-tab-panel');
  const submitBtn = form.querySelector('.hero-card-submit');

  const phonePattern = /^[0-9+\s\-()]{8,}$/;

  function getVal(name) {
    return form.querySelector(`[name="${name}"]`)?.value.trim() ?? '';
  }

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const name = getVal('name');
    const phone = getVal('phone');
    const service = getVal('service');

    if (!name || !phone || !phonePattern.test(phone) || !service) {
      // Brief visual shake on first invalid field
      const firstEmpty = ['name', 'phone', 'service'].find(f => !getVal(f));
      const el = form.querySelector(`[name="${firstEmpty}"]`);
      if (el) {
        el.style.borderColor = '#ef4444';
        el.focus();
        setTimeout(() => { el.style.borderColor = ''; }, 2000);
      }
      return;
    }

    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending…';
    }

    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content ?? '';

    try {
      const res = await fetch('/contact', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': csrfToken,
          'Accept': 'application/json',
          'X-Requested-With': 'XMLHttpRequest',
        },
        body: new FormData(form),
      });

      const data = await res.json();

      if (res.ok && data.success) {
        if (tabPanel) tabPanel.style.display = 'none';
        if (successPanel) successPanel.classList.add('is-visible');
        trackEvent('form_submit', { form_name: 'hero_quote', service: getVal('service') });
      } else {
        resetHeroBtn();
      }
    } catch (_) {
      resetHeroBtn();
    }
  });

  function resetHeroBtn() {
    if (submitBtn) {
      submitBtn.disabled = false;
      submitBtn.textContent = 'Get My Free Quote';
    }
  }
}

/* ============================================================
   ANALYTICS — GA4 event stubs
   ============================================================ */
function initAnalytics() {
  // Phone CTA clicks
  document.querySelectorAll('a[href^="tel:"]').forEach(link => {
    link.addEventListener('click', () => {
      trackEvent('phone_click', { link_location: link.dataset.location ?? 'unknown' });
    });
  });

  // WhatsApp clicks
  document.querySelectorAll('a[href*="wa.me"]').forEach(link => {
    link.addEventListener('click', () => {
      trackEvent('whatsapp_click', { link_location: link.dataset.location ?? 'unknown' });
    });
  });
}

function trackEvent(name, params = {}) {
  if (typeof gtag === 'function') {
    gtag('event', name, params);
  }
}
