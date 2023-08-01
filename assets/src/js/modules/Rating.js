// Inspired by https://codepen.io/davatron5000/pen/jzMmME

class Rating {
  constructor() {
    this.meters = [...document.querySelectorAll('svg[data-value] .meter')];
    this.drawRating()
  }

  drawRating() {
    this.meters.forEach((path) => {
      // Get the length of the path
      let length = path.getTotalLength();

      // console.log(length);

      // Just need to set this once manually on the .meter element and then can be commented out
      // path.style.strokeDashoffset = length;
      // path.style.strokeDasharray = length;

      // Get the value of the meter
      let value = parseInt(path.parentNode.getAttribute('data-value'));
      // Calculate the percentage of the total length
      let to = length * ((100 - value) / 100);
      // Trigger Layout in Safari hack https://jakearchibald.com/2013/animated-line-drawing-svg/
      path.getBoundingClientRect();
      // Set the Offset
      path.style.strokeDashoffset = Math.max(2, to);
      path.nextElementSibling.textContent = `${value / 10}`;
    });
  }
}
export default Rating;
