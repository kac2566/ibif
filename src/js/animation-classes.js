export default function initAnimation() {
  const leftAnimations = document.querySelectorAll('.fade-left');
  const rightAnimations = document.querySelectorAll('.fade-right');
  const upAnimations = document.querySelectorAll('.fade-up');
  const zoomOuts = document.querySelectorAll('.zoom-out');

  leftAnimations.forEach((element) => {
    element.setAttribute('data-aos', 'fade-left');
  });

  rightAnimations.forEach((element) => {
    element.setAttribute('data-aos', 'fade-right');
  });

  upAnimations.forEach((element) => {
    element.setAttribute('data-aos', 'fade-up');
  });

  zoomOuts.forEach((element) => {
    element.setAttribute('data-aos', 'zoom-out');
  });
}
