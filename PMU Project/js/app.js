const parallax_el = document.querySelectorAll(".parallax");
const container = document.querySelector(".container");
let xValue = 0,
  yValue = 0;

let rotateDegree = 0;

function update() {
  parallax_el.forEach((el) => {
    let speedx = el.dataset.speedx;
    let speedy = el.dataset.speedy;
    let rotationSpeed = el.dataset.rotation;
    el.style.transform = `rotateY(${
      rotationSpeed * rotateDegree
    }deg) translateX(calc(-50% + ${-xValue * speedx}px)) 
        translateY(calc(-50% + ${yValue * speedy}px))`;
  });
}

window.addEventListener("mousemove", function (event) {
  xValue = event.clientX - window.innerWidth / 2;
  yValue = event.clientY - window.innerHeight / 2;
  rotateDegree = (xValue / (window.innerWidth / 2)) * 20;
  // let zValue = event.clientX - parseFloat(getComputedStyle(forTest).left);

  update();
});

let timeline = gsap.timeline();

timeline.from(
  ".bg-img",
  {
    top: `${document.querySelector(".bg-img").offsetHeight / 2 - 400}px`,
    duration: 1,
  },
  "1"
);
timeline.from(
  ".chmura-3",
  {
    top: `${document.querySelector(".chmura-3").offsetWidth / 2 + 1200}px`,
    duration: 1,
  },
  "1"
);
timeline.from(
  ".warstwa-1",
  {
    top: `${document.querySelector(".warstwa-1").offsetWidth / 2 + 1100}px`,
    duration: 1,
  },
  "1"
);
// timeline.from(
//   ".chmura-1",
//   {
//     top: `${document.querySelector(".chmura-1").offsetHeight / 2 + 1200}px`,
//     duration: 1,
//   },
//   "1"
// );
timeline.from(
  ".chmura-2",
  {
    top: `${document.querySelector(".chmura-2").offsetHeight / 2 + 1400}px`,
    duration: 1,
  },
  "1"
);
timeline.from(
  ".chmura-5",
  {
    top: `${document.querySelector(".chmura-5").offsetHeight / 2 + 1700}px`,
    duration: 1,
  },
  "1"
);
timeline.from(
  ".chmura-4",
  {
    top: `${document.querySelector(".chmura-4").offsetHeight / 2 + 1600}px`,
    duration: 1,
  },
  "1"
);
timeline.from(
  ".star",
  {
    top: `${document.querySelector(".star").offsetHeight / 2 + 1500}px`,
    duration: 1,
  },
  "1"
);
timeline.from(
  ".kometa",
  {
    top: `${document.querySelector(".kometa").offsetHeight / 2 + 1800}px`,
    duration: 1,
  },
  "1"
);
timeline
  .from(
    ".text h1",
    {
      y:
        window.innerHeight -
        document.querySelector(".text h1").getBoundingClientRect().top +
        -180,
      duration: 1.2,
      opacity: 0,
    },
    "1.5"
  )
  .from(
    ".text h2",
    {
      y: -150,
      opacity: 0,
      duration: 1.5,
    },
    "1.5"
  );
// timeline.from(
//   ".container",
//   {
//     y: window.innerHeight - container.top + -180,

//     duration: 1.2,
//     delay: 0.5,
//     opacity: 0,
//   },
//   "1.5"
// );

let element = document.querySelector(".container");

gsap.set(element, { opacity: 0 });

function checkVisibility() {
  var elementRect = element.getBoundingClientRect();
  var elementOffsetTop = elementRect.top;
  var scrollPosition = window.scrollY + window.innerHeight;

  if (scrollPosition >= elementOffsetTop) {
    gsap.to(element, {
      opacity: 1,
      visibility: "visible",
      duration: 3,
    });
  } else {
    gsap.to(element, {
      opacity: 0,
      visibility: "hidden",
      duration: 2,
      y:
        window.innerHeight -
        document.querySelector(".container").getBoundingClientRect().top +
        +80,
    });
  }
}

window.addEventListener("scroll", checkVisibility);
window.addEventListener("resize", checkVisibility);
