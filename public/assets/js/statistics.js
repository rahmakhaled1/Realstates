let statType = document.querySelectorAll(".lks a");

statType.forEach((e) => {
  e.addEventListener("click", () => {
    statType.forEach((e) => {
      e.classList.remove("active");
    });
    e.classList.add("active");
  });
});

const xValues = [
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
  "Sunday",
];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [
      {
        data: [9, 7, 3, 1, 9, 8, 1],
        borderColor: "#0057C2",
        fill: false,
        label: "Post Action",
        backgroundColor: "#0057C2",
        borderColor: ["#0057C2"],
        borderWidth: 4,
        pointRadius: 5,
        shadowColor: "rgba(0,0,0,0.2)",
        shadowBlur: 10,
        shadowOffsetX: 5,
        shadowOffsetY: 5,
      },
      {
        data: [10, 20, 5, 2, 13, 10, 3],
        borderColor: "#0097D8",
        fill: false,
        label: "Post View",
        backgroundColor: "#0097D8",
        borderColor: ["#0097D8"],
        borderWidth: 4,
        pointRadius: 5,
      },
    ],
  },
  options: {
    legend: { display: true },
    scales: {
      xAxes: [
        {
          gridLines: {
            borderDash: [8, 4],
            color: "#EDF2F6",
          },
        },
      ],
      yAxes: [
        {
          gridLines: {
            borderDash: [8, 4],
            color: "#EDF2F6",
          },
        },
      ],
    },
  },
});

const xValues2 = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];

new Chart("myChart2", {
  type: "bar",
  data: {
    labels: xValues2,
    datasets: [
      {
        data: [900, 700, 1700, 1000, 900, 700, 800],
        borderColor: "#0097D8",
        fill: false,
        label: "Posts Views",
        backgroundColor: "#0097D8",
      },
    ],
  },
  options: {
    legend: { display: false },
    scales: {
      xAxes: [
        {
          gridLines: {
            drawBorder: false,
            color: "transparent",
          },
        },
      ],
      yAxes: [
        {
          display: false,
          gridLines: {
            drawOnChartArea: false,
            drawBorder: false,
            color: "transparent",
            lineWidth: 0,
          },
        },
      ],
    },
  },
});

const xValues3 = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];

new Chart("myChart3", {
  type: "bar",
  data: {
    labels: xValues3,
    datasets: [
      {
        data: [900, 710, 1000, 720, 900, 721, 601],
        borderColor: "#0097D8",
        fill: false,
        label: "Actions",
        backgroundColor: "#0097D8",
      },
    ],
  },
  options: {
    legend: { display: false },
    scales: {
      xAxes: [
        {
          gridLines: {
            drawBorder: false,
            color: "transparent",
          },
        },
      ],
      yAxes: [
        {
          display: false,
          gridLines: {
            drawOnChartArea: false,
            drawBorder: false,
            color: "transparent",
            lineWidth: 0,
          },
        },
      ],
    },
  },
});
