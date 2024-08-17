export default function initMovingSection() {
  const movingSection = document.querySelector('.moving-section');

  if (!movingSection) {
    return;
  }

  const movingPlace = document.querySelector('.moving-place ul');

  if (!movingPlace) {
    return;
  }

  const listItems = movingPlace.querySelectorAll('li');

  if (listItems.length >= 10) {
    const tenthItem = listItems[9];

    tenthItem.insertAdjacentElement('afterend', movingSection);
  }

  console.log(movingPlace, movingSection);
}
