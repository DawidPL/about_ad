const hotspots = document.querySelectorAll('.hotspots__hotspot');
const hotspotText = document.getElementById('hotspots__hotspot-text');
const heading = hotspotText.querySelector('.hotspots__heading');
const description = hotspotText.querySelector('.hotspots__description');
let currentIndex = 0;

function initHotspots(index) {
    
  hotspots.forEach(hotspot => hotspot.classList.remove('active'));
  
  const activeHotspot = hotspots[index];
  activeHotspot.classList.add('active');

  heading.textContent = activeHotspot.dataset.heading;
  description.textContent = activeHotspot.dataset.description;

  const containerRect = document.querySelector('.hotspots').getBoundingClientRect();
  const hotspotRect = activeHotspot.getBoundingClientRect();

  const top = hotspotRect.top - containerRect.top;
  const left = hotspotRect.left - containerRect.left;

  hotspotText.style.top = `${top}px`;
  hotspotText.style.left = `${left}px`;

  hotspotText.classList.add('active');
}

initHotspots(currentIndex);

setInterval(() => {
  currentIndex++;
  if (currentIndex >= hotspots.length) {
    currentIndex = 0;
  }
  initHotspots(currentIndex);
}, 3000);

export default initHotspots;