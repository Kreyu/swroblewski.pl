import _sample from 'lodash.sample';

document.addEventListener('DOMContentLoaded', function () {
  // Particles
  particlesJS.load('particles-js', '/assets/particles.json');

  // Slogans
  const slogan = document.getElementById('slogan');

  if (slogan) {
    slogan.innerHTML = _sample(JSON.parse(slogan.dataset.slogans));
  }
}, false);

