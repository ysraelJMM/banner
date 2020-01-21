<script src="../libs/jquery/dist/jquery.min.js"></script>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1400 1000">
  <style>
    :root {
      --bola-cx: 180px;
      --bola-cy: 180px;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
      background-color: #666;
    }

    .dog {
      cursor: pointer;
      fill: #ff3300;
      stroke: #ff3300;
    }

    .cat {
      cursor: pointer;
      fill: #C28348;
      stroke: #C28348;
    }

    .fish {
      cursor: pointer;
      fill: #3399ff;
      stroke: #3399ff;
    }

    .goat {
      cursor: pointer;
      fill: #944ddb;
      stroke: #944ddb;
    }

    .sheep {
      cursor: pointer;
      fill: #7c98a1;
      stroke: #7c98a1;
    }

    .cow {
      cursor: pointer;
      fill: #513f3f;
      stroke: #513f3f;
    }

    .parrot {
      cursor: pointer;
      fill: #99cc00;
      stroke: #99cc00;
    }

    .buffalo {
      cursor: pointer;
      fill: #112448;
      stroke: #112448;
    }

    .pig {
      cursor: pointer;
      fill: #d46ac7;
      stroke: #d46ac7;
    }

    .rabbit {
      cursor: pointer;
      fill: #ffb83b;
      stroke: #ffb83b;
    }

    .subdistrict use {
      display: none;
      cursor: pointer
    }

    .subdistrict>path {
      transition: fill 0.3s ease;
    }

    .subdistrict:hover use,

    .subdistrict:hover text,
    .hover text {
      fill: #fff;
      opacity: 0.2;
    }

    .hover circle {
      stroke: #fff;
    }

    .subdistrict:hover>path,
    .hover>path {
      fill: gray;
    }

    .reload:hover {
      fill: #00ff00;
    }

    .point {
      cursor: pointer;
      transition: fill-opacity 0.5s ease, r 0.5s ease, fill 0.3s ease;
      stroke-width: 2px;
      stroke-opacity: 1;
      fill-opacity: 0.5;
    }

    .point:hover {
      stroke: #ffffff;
      fill-opacity: 1;
    }

    .label {
      font-size: 20px;
      fill: black;
      opacity: 0;
    }

    .point:hover+text {
      opacity: 1;
    }

    .leyenda:hover circle {
      r: 12px;
    }

    .leyenda circle {
      transition: cy 0.5s ease;
    }

    .leyenda text {
      transition: y 0.5s ease;
    }

    .leyenda:hover text {
      font-weight: bold;
      text-decoration: underline;
    }

    .leyenda:hover path {
      stroke-width: 12px;
    }

    .leyenda path {
      transition: d 0.5s ease;
    }

    .apuntador {
      display:none;
      stroke-width: 2px;
      stroke-linecap: round;
      stroke-dasharray: 0 6;
      transition: d 0.5s ease;
      marker-start: url(#markerCircle);
      marker-end: url(#markerArrow);
    }

    .apuntador2 {
      stroke-width: 2px;
      stroke-linecap: round;
      stroke-dasharray: 0 6;
      transition: d 0.5s ease;
      marker-start: url(#markerCircle);
      marker-mid: url(#markerCircle);
      marker-end: url(#markerCircle);
    }

    #animalsGender path {
      transition: d 0.5s ease;
    }

    #animalsGender text {
      font-size: 12px;
    }

    #info-box {
      display: none;
      position: absolute;
      top: 0px;
      left: 0px;
      z-index: 1;
      padding: 0;
    }

    #donut_donutC use {
      transition: stroke-dasharray 0.6s ease, stroke-dashoffset 0.6s ease;
    }

    #donut_donutC text {
      transition: transform 0.6s ease;
    }

    #p_bola:hover .label_dona,
    #p_donutC:hover .label_dona {
      opacity: 0.75;
    }

    #p_bola .label_dona:hover,
    #p_donutC .label_dona:hover {
      opacity: 1;
    }

    .label_dona line {
      stroke-width: 1px;
      stroke-dasharray: 300;
    }

    .label_dona:hover rect {
      stroke-width: 1px;
      stroke: #000;
    }

    .label_dona:hover line {
      stroke: black;
      marker-start: url(#markerCircle);
      -webkit-animation: animacion 0.3s forwards;
      -webkit-animation-timing-function: ease-in-out;
      -moz-animation: animacion 0.3s forwards;
      -o-animation: animacion 0.3s forwards;
      animation: animacion 0.3s forwards;
      animation-timing-function: ease-in-out;
    }

    @keyframes animacion {
      from {
        stroke-dashoffset: 300;
      }

      to {
        stroke-dashoffset: 0;
        marker-end: url(#markerArrow);
      }
    }

    .label_dona:hover use {
      animation-duration: 0.3s;
      animation-iteration-count: 1;
      animation-fill-mode: forwards;
      animation-name: buttonTransition;
      transform-origin: var(--bola-cx) var(--bola-cy);
    }

    @keyframes buttonTransition {
      from {
        transform: scale(1);
      }

      to {
        transform: scale(1.025);
      }
    }

    .label_dona:hover>text {
      display: block;
      font-weight: bold;
    }

    .labelDONA {
      fill: #fff;
      pointer-events: none;
      text-anchor: middle;
      alignment-baseline: middle;
      font-size: 16px;
    }
  </style>
  <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop id="top" offset="0%" stop-color="rgb(255,250,0)" stop-opacity="1"></stop>
      <stop id="bot" offset="100%" stop-color="rgb(255,127,0)" stop-opacity="1"></stop>
    </linearGradient>
    <marker id="markerCircle" markerWidth="6" markerHeight="6" refX="3" refY="3">
      <circle cx="3" cy="3" r="2"></circle>
    </marker>
    <marker id="markerArrow" markerWidth="13" markerHeight="13" refX="10" refY="6" orient="auto">
      <path d="M2,2 L2,11 L10,6 L2,2"></path>
    </marker>
    <circle id="donutC" r="100" cx="180" cy="180" fill="none" transform="rotate(-90 180 180)" stroke-width="60"></circle>
    <symbol id="reload">
      <rect x="0.2" y="0.8" height="19" ry=".933" width="19" opacity="0"></rect>
      <path
        d="m9.22 0c-.07-.01-.13 0-.2.01-2.08.28-4.16.54-6.23.83-.47.05-.77.64-.53 1.05.27.45.65.81.96 1.22-2.54 2.27-3.75 5.93-2.98 9.26.53 2.56 2.19 4.86 4.43 6.2.93.57 1.96.98 3.03 1.2l1.25-3.64c-1.29-.16-2.52-.76-3.42-1.68-1.15-1.14-1.78-2.77-1.71-4.39.06-1.5.72-2.99 1.83-4.01.29.39.6.76.92 1.13.26.34.83.33 1.09.01.24-.32.31-.71.44-1.08.6-1.69 1.17-3.4 1.76-5.09.2-.45-.16-.97-.62-1.01zm2.44.84-1.25 3.64c1.29.16 2.52.76 3.42 1.68 1.15 1.14 1.78 2.77 1.71 4.39-.06 1.5-.72 2.99-1.83 4.01-.29-.39-.6-.76-.92-1.13-.26-.34-.83-.33-1.09-.01-.24.32-.31.71-.44 1.08-.6 1.69-1.17 3.4-1.76 5.09-.23.51.28 1.12.82 1 2.08-.28 4.16-.54 6.23-.83.47-.05.77-.64.53-1.05-.27-.45-.65-.81-.96-1.22 2.54-2.27 3.75-5.93 2.98-9.26-.53-2.56-2.19-4.86-4.43-6.2-.93-.57-1.96-.98-3.03-1.2z">
      </path>
    </symbol>
  </defs>
  <g>
    <rect fill="#ffffff" height="1000" ry=".933" width="1400"></rect>
    <g id="district">
      <g class="subdistrict" id="Harinakundu">
        <path
          d="m630.29 41.93-7.28 4.15-1.15-.99-.23-.19-4 1.75-3.64 9.2-1.45-1.28-.95-.81-.35 1.85-.48 3.09 3.05 5.84-3.27 3.6 8.2 7.56-.23 1.05 1.11 3.11 3.77 1.07-2.71.59 1.64 1.88 1.36-.15-2.51 2.91 4.01 3.92.08 6.08 10.15 6.93 7.09.72 1.87 6.07-3.45 7.73-6.92 1.07-4.16 5.99-7-.57-2 2.29-1.85-1.03-.36-.09-5.57-2.96-6.27-1.61-1.56-4.99-.01-.35-2.6-2.96-.29-1.36-9.39 1.08-7.88 8.44 8.4.79 1.24 2.55 9.89 3.43 5.93 5.81-4.47 5.79-7.85 13.55-3.19 5.6v.08l-12.43 10.91-25.13-17.13-.08-.13-4.37-8.85-6.55 3.43-4.13 8.91.03.15-2.25 16.27-.15.24 1.57 4.44-.03.05-1.01 11.53 1.24 4.52.04.16-3.27 10.6-.08.07 3.64 15.88v.21l7.11 14.36-6.91 13.28.92 7.89-5.67 3.47 5.68 14.49.03.04-.61 12.44-.32.49-3.75 3.8-.92.27-.75 10.51-.55 1.52-.05.15-4.31 18.68-8.05 10.65-10.81 6.39-4.24 6.61-.48.76-6.95 15.87.04.2 1.35 4.76 4.79 1.17.99-3.61 1.05-1.48 6.15-4.05.07-.03 16.45-3.07.43.59 11.09 18.36.53.28 7.43-.72.77.04 3.72 1.47.57-.08 2.43.24 2.68.92 7.89 1.21.81-4.16.01-.85-.44-8.52.03-.17-.45-4.2.21-.36 8.4-12.2.52-.77 6.24-8.08 1.15-1.43 3.72-4.32 10.92-.16-3.28 5.17-.87 1.09-16.32 20.59 3.11 2.57 2.32.13.44.11 12.19 7.05.64.55 5.11-.85.08-.65 1.83-14.15v-.04l1.07-3.31.11-.15 9.09-8.43.49-.2 2.36.08.69.29 3.43-1.63h.17l12.96-.23 1.15.83 18.45 17.6 1.84 1.4 1.64 1.75.76 1.29 2.85.11.75.09 13.55-8.61-8 14.91 2.2 5.31 18.96-4.21 2.25 6.88-8.03 6.48.33 1.65 4.65 4.04 1.27 1.11 2.81 3v.17l-1.72 9.4-.09.52 5.17 5.01.4-.05 3.52 1.19.09-.03 9.2-.92h.45l2.05-3.61.03-3.65-.17-1.28 1.28-8.21-.01-.09-.12-2.49.03-1.85 4.28.68-.21.87 1.65 4.04 1.08 1.88.68.81 6.91 4.44 10.16-4.48.85-.96 13.92-17.11.56-.64-3.39-2.47-.57-2.05-.01-.04-1.17-7.45-.04-1.21 3.08-5.01 2.27 1.03.93.43 3.04-6.95-.15-1.52.09-2.32 2.08-7.13.53-1.23 7.85-.09.43-.01 2.21.47 1.16.69 15.56 10.55-.69 7.13.01.16-.21 2.59-.08.36 1.15 4.29 4.47 1.52h.07l2.97-.47 1.64-.72.05-.05 3.84-8.15.08-.17.15-3.75 1.08-.69 1.21-3.28.67-.84-2.65-4.43-.12-.03-9.04-3.61-9.57-14.33 6.03-10.03-2.51-2.12-.27-.09-8.04-1.35h-1.27l-2.72-3-.09-1.03 1.4-3.41.23-.51-2.72-1.45-8.19 3.04-.21-11.6v-.07l.19-4.11-.04-.08-2-4.21-8.97-7.33-.31-.38-4.36-6.21-.24-1.72-.03-.2 2.45-8 .21-.2 2.67-7.44.2-.61 4.91-11.56-7.81 2-6.01-.49h-.12l-18.16-6.84-1.61-1.29-.57-.44-10.21-16.99-3.89-1.87-.2-.03-16.79-12.07 10.49-15.19 11.71-7.28.43-8.01-7.49-8.37-6.67-13.19 2.12-3.96-4.16-8.89.04-.49 3.01-2.52v-.19l.01-10.15 6.49-5.33-.81-4.19-.2-1.28-.15-1.19 3.92-4.99-4.47-12.31-3.83.05h-.19l-6 .36-.96 7.52-4.33 2.36-1.56 5.09-7.04-.04-.32-.09-6.84-1.67 2.17-7.27-.91-10.91-5.03-4.09-3.03-6.33-4.55 2.57.28-.55-.45-.01-10.25-11.43 2.72 1.36-1.03-2.15.99-3.91.87.13 3.43.25-.45-.29-10.25-5.79-3.93 4.43-10.16-2.17-.4-.05-3.07-.13 4.53-7.43.31-4.75-.39-.44-1.24-1.48 2.77-4.84.07-4.11-3.51-1.25-.71-.04-.57.55z"
          fill="#f9c3ff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
        <g fill="#f00">
          <circle class="point" cx="643.72" cy="145.53" r="6"></circle>
          <circle class="point" cx="704.48" cy="254.26" r="6"></circle>
          <circle class="point" cx="716.34" cy="356.97" r="6"></circle>
          <circle class="point" cx="605.69" cy="301.10" r="6"></circle>
          <circle class="point" cx="585.40" cy="220.89" r="6"></circle>
        </g>
        <text x="651.126" y="255.75" fill="#000" text-anchor="middle" alignment-baseline="middle" font-size="25" opacity="0.75" pointer-events="none">Harinakundu</text>
        <use class="reload" href="#reload" x="639.126" y="243.75" fill="#a5a7fe">
          <title>Reload data</title>
        </use>
      </g>
      <g class="subdistrict" id="Jhenaidah_Sadar">
        <path
          d="m823.4 330.81-.72.23-1.64 2-.88 9.15-.08.24 7.67 12-5.63 1.85-6.96-7.37-.05-.84-2.25-.13-.68-.07-7.83 3.03-.67.84-1.21 3.28-1.08.69-.15 3.75-.08.17.69 2.45-4.53 5.69-.05.05-4.62 1.19h-.07l-5.61-5.81.08-.36.21-2.59-.01-.16-.72-5.72-14.15-11.96-1.16-.69-2.21-.47-.43.01-5.24.73-2.97 2.67-.17-2.08-2.08 7.13-.09 2.32.15 1.52-3.04 6.95-.93-.43-5.35 3.99.04 1.21 1.17 7.45.01.04 6.25 4.28-2.29.24-.56.64-14.03 18.79.11-1.68-.85.96-1.29 2.31-7.51 4.33-8.27-6.6-.68-.81-2.73-5.92.21-.87-4.28-.68-.03 1.85.12 2.49.01.09.77 5.35.56 4.33-2.61-1.47.3 3.95-2.21 4.58h-.45l-9.2.92-.09.03-3.52-1.19-.4.05-5.17-5.01.09-.52 1.72-9.4v-.17l-2.81-3-1.27-1.11.44 1.87-7.48-7.43 8.53-6.92-1.13-5.07-18.37 3.86-3.07-7.56 5.23-10.56-10.07 5.37-.75-.09-2.85-.11-.76-1.29-1.64-1.75-1.84-1.4-9.4-8.33-9.05-9.27-1.15-.83.59 1.69-3.17-1.49-10.38.03h-.17l-3.43 1.63-.69-.29-2.36-.08-.49.2-9.09 8.43-.11.15-1.07 3.31v.04l-1.83 14.15-.08.65-5.11.85-.64-.55-4.41-3.79-7.77-3.27-.44-.11-2.51.87.19-1-3.11-2.57-1.92-1.31 17.97-20.83.27 1.55.87-1.09.05-5.64-12.03 6.69.61-1.75-1.15 1.43-6.24 8.08-.52.77 1.4.25-9.8 11.95-.21.36.45 4.2-.03.17.44 8.52-.01.85-1.87 5.81-8.56-2.01 1.72-.85-2.68-.92-2.43-.24-.57.08-3.72-1.47-.77-.04-7.43.72-.53-.28-10.27-16.84-.83-1.52-.43-.59-14.68 3.27-1.77-.2-.07.03-6.15 4.05-1.05 1.48.08 3.92-5.32.09-2.6 6.04-5.04 2.71-.07.36-2.17 9.68-5.28 3.03.68-2.48-2.29 2.33-1.12 3.04.12.32 3.19 7.84-1 3.19-.13.44 2.03 2.83.04.36-2.13 5.51-3.95-1.07-7.97-6.89-12.87-1.97-2.29-1.54-5.48.75-.13.01-1.57.25-2.88-.25-6 .08-1.15 3.17-6.04 3.59-3.09 10.05 4.17 2.8 10.33-7.55-.85 2.99 1.68-.43 2.92 2.07.08.56 10.07 5.8 1.33 1.6 1.08 1.43 1.04.43 1.41 1.61 3.99-.87 3.11 2.48.32.23 5.75 19.39-.03.12.72 5.59 9.29 13.11-.08.61.17 2.67-.33.27-.4 4.4.13.23 5.43 5.91 5.28-12.96 12.83 7.16 3.28-.48.95-.8 6.12-3 2.91 6.38.36.87 5.67 3.79.65.03 8.07 5.92 11.11 16.51.08.44 1.21 3.11.19.25 6.64 6.6.47-.39 4.19-.08.15.08 15.15-1.22 7.51 3.76-7.01-2.45 4.83 6.33.89 1 11.77 9.83.64 1.61.24.16-.49 3.87-.45.4 3.68 10.25 5.43 4.28.55-.03 19.55-3.4 1.35.77.37.23 7.28 7.24 13.72 12.49 10.28 10.83.65.96 5.96-3.45 5.08-1.11-.71 2.05 2.49 3.67.25.4 3.64 4.51 1.19.04 2.56-.11.49-.09 4.37.84.49.11 2.56-4.51 13.64-10.09.03-.17-1.37-1.11 1.08-6.48-1.69-.84-2.4-1.09 5.09-5.25 1.24-3.52-.07-.6-.35-1.51.93-3.63 7.28-3.09-.68-1.29-1.83-.77 3.47-1.59.29.51 4.03.4.45-.43 2.21-2.2 10.13 13.16-.89 1.56-.27.37-.6 4.08.08.12 10.75 15.09-1.68 3.77 6.6 1.92.09.03 6.36 2.4h.68l3.69-1.01.52-.2 3.32-1.73.08.05 2.87.6 7.23 5.68 8.53.57h.35l11.71 8.12 3.64-3.15 12.83 7.32 6.89-.61.77.43 3.25 1.29h.11l5.97-.51 5.48-1.53 8.23-1.67 4.49 5.41 6.16-9.21 8.11 2.31 13.4-5.12 14.71-15.43 1.56 5.71 14.28 3.67.8 15.69 8.69 6.03.8-.17 1.24-.24 6.01 1.13 5.89-7.83-.08-2.77v-.08l-.53-8.52 9.88 1.43.19.01 16.95 6.01 3.43.12 1.71-3.97 4.93 2.08.43-1.87 3.95.97 2.59-3.47.43-.83.53-1.03 1.11-1.69 2.13-2.95 4.05-3.72 8.96-1.68-2.63-2.12 6.92-7.4.31-4.52 5.11 1.96 3.25-3.49-.13-.11-1.64-10.69-.03-.05 5.97-11.51.08-.04 1-17.19-.11.01-1.81-.08 2.25-3.69-.53-.6-3.89-10.41-1.17-5.96v-1.23l-5.09-.72-1.84-2.65-.83-1.2-.11 1.6-1.49-.12 4.61-8.72.05-.04-.11-.29-.71-1.99 10.03.89 2.24-7.95.55-.61-8.8-7.11-.29-.45-.44-.67 6.01-12.29.04-.4-5.09-4.16-.73-6.52 5.41-17.56-1.56-6.73 6.05.77.36.05 3.6-2.63-.48-.64-1.6-2.15 6.68-3.57-.73-1.12-2.23-10.93 6.64-4.11 3.43-8.53 1.69-1.15.59-.4-4.17-3.96-8.85-13.04-6.81.89-7.2-8.16-6.41-.08 1.61-13.89-.84.43-4.17.11h-.13l-11.49-1.44-3.64-6.07-5.29-.49-1.96-.25-.16-.03-12.15-4.19-.07 3.84-4.99 1.57-.88-.07-4.24 7.04 1.08.81 1.2.93.69 7.61-11.75 3.17-7.24 7.05-16.97-1.05-.19-.04-4.24 5.05-1.17-.71-.99-.59-8.19.09-.43.4-4.28.05-.25.17-1.32.68-6.53-5.71-.32-2.68-.08-.64 3.17-6.83-.03-.15-.73-4.65-2.65-1.53-11.09-6.57-3.13.73-.04-3.23 2.73-1.57 1.31-.64-.47.11-10.28.43-.13-.01-2.8 2.63-1.03-.04-3.61 1.36-.65-.08-3.16 1.03-.91.8-1.01.88-2.56-6.44-1.67.07-3.12-2.76-.61-1.31-3.16-2.8-1.09.03-2.85-2.71-1.11-.13-3.24-2.97-.92.37-.99.39z"
          fill="#d1d2fe" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
        <g fill="#f00">
          <circle class="point" cx="622.03" cy="401.86" r="6"></circle>
          <circle class="point" cx="803.60" cy="411.35" r="6"></circle>
          <circle class="point" cx="907.49" cy="515.50" r="6"></circle>
          <circle class="point" cx="750.83" cy="534.42" r="6"></circle>
          <circle class="point" cx="644.24" cy="501.67" r="6"></circle>
        </g>
        <text x="745.638" y="472.96" fill="#000" text-anchor="middle" alignment-baseline="middle" font-size="25" opacity="0.75" pointer-events="none">Jhenaidah Sadar</text>
        <use class="reload" href="#reload" x="733.638" y="460.96" fill="#a5a7fe">
          <title>Reload data</title>
        </use>
      </g>
      <g class="subdistrict" id="Kaliganj">
        <path
          d="m714.32 546.02-2.54 1.82 1.58 1.83-.14 1.28-6.38 2.63-1.28 4.91-3.93 9.87 1.69.84 1.36 1.45-1.07 6.13-.03.17-.43 2.8-11.52 7.56-1.32 5.03-2.93-.79-.49-.11-4.37-.84-.49.09-2.56.11-1.19-.04-3.64-4.51-.25-.4-7.69-3.4-2.41 3.44-7.09 11.79v.2l-.08 1.99-.15 2.55-2.8 7.19-18.31-7.01 2.32 13.59 8.28 7.59.07.01 1.79.12 6.23 4.95-4.56 4.95-.32.19-4.25-.83-.13.05-9.54 1.83-4.8 3.85-.16.15-3.12 3.75 5.16 8.79-2.95 4.92-4.68-5.64-7.12-.88 1.09 2.71-2.6 9.79-3.83 4.85-2.63-1.79-5.29 1.09-4.12 2.97 3.04 10.85 1.24-.84 1.35-.99-9.77 19.4-2.45-.27.15 4.81-3.8 2.11-.31.51 4.77 4.41-1.08 7.51-.03.11-2.96 4.49 2.89 7.49 1-.51 5.03 1.33.37-.04 8.73 1.27 4.11-2.39 8.64-.39 1.49-1.72.21.6.25.57 7.09-2.92 2.53 7.39 4.47 1.88 2.56 4.33-4.39 6.05-2.23 7.01-5.28 1.15-.16.01-13.37 7.73-.08.21-1.75 9.8 6.76 7.8 7.52 7.87.03.2 1.05 4.47-.12.28 3.59 16.27-12.73 9.93-.09.07-9.36 8.48.01 2.21-8.45 7.2 5.68 6.56 7.13-11.27 17.93-12.43.21-.12 7.65-3.89 14.96.29.07.01 23.53 13.51 8.6 9.11 3.08 1.13 2.25-2.64 4.13-.19-.12 14.57-.05.11.99 4.63 5.44 5.08 23.72 11.35 3.2-1.33 1.73-5.95 18.53 7.25 3.4-14.57.01-.12.31-3.36 3.25-2.6 6.71 2.77 10.41 2.79 3.07-1.4 1.88-.16.85-.08 8.09-.47-.95-8.33 9.76-1.79.15-.23 3.75-.03.71-.25 12.12-.77h.41l20.2-2.37 4.33-9.97.09-.4.41-1.96 5.59-3.93 1.36-5.51.03-.15-4.01-7.6 1.37-12.27.11-.33 4.2-12.79 6.4 5.08 4.08 5.23 3-3.4 5.96-1.76 1.69-4.37 2.93-.28.47-.03 3.15-.24.2-3.55 7.16 4.97 13.79-8.33 6.88-12.39.13-.52-2.92-2.11-.2-.04-10.75-10.64 7.31-.67 2.63 3.17 9.92-1.6h.15l4.84-.07.85-8-2.57-7.89.11-2.03-.05-3.15-.67-.97-1.37-2.03 4.6-7.29 1.92-4.43.04-.11 6.13-10.31-6.04-5.48-5.83.75-3.8-1.75-.93-4.88 6.04-3.21 2.08-3.89-.99-5.39-2.16-2.48-.61-1.63-.17-.51 8.28-9.49 1.56-3.6.12-.25-5.59-5.36 2.85-6.04 14.19-8.76-7.25-3.53-1.27-4.39 12.73-11.88-1.6-.67 9.57-5.27 3.56-6.08-10.47-.83-.09-5.31.03-.83-9.76-2.31-3.29 2.48-7.85 5.59-5.55-3.21-.8.17-10.05-6.03-1.31-16.08-15.77-5.79-12.87 12.65-14.45 6.54-5.11-3.43-7.64 10.05-6.49-5.95-2.37 2.05-7.03-.61-1.8 2.19-6.99-.95h-.11l-3.25-1.29-.77-.43-4.35 2.11-16.07-7.05-1.87 5.27-8.91-10.07-3.88-1.93h-.35l-4.23.91-14.4-7.76-.08-.05-3.32 1.73-.52.2-3.69 1.01h-.68l-6.36-2.4-.09-.03-7.28-.03-3.36-5.81 4.17.72-5.45-8.03-2.17-1.59-1.57-6.05-.08-.12.6-4.08.27-.37-9.48-13.15-2.43 1.05-4.03-.4z"
          fill="#f8a5ff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
        <g fill="#f00">
          <circle class="point" cx="705.76" cy="642.03" r="6"></circle>
          <circle class="point" cx="855.25" cy="656.27" r="6"></circle>
          <circle class="point" cx="828.81" cy="773.22" r="6"></circle>
          <circle class="point" cx="732.20" cy="808.81" r="6"></circle>
          <circle class="point" cx="679.32" cy="739.66" r="6"></circle>
        </g>
        <text x="760.268" y="723.998" fill="#000" text-anchor="middle" alignment-baseline="middle" font-size="25" opacity="0.75" pointer-events="none">Kaliganj</text>
        <use class="reload" href="#reload" x="748.268" y="711.998" fill="#a5a7fe">
          <title>Reload data</title>
        </use>
      </g>
      <g class="subdistrict" id="Kotchandpur">
        <path
          d="m471.03 430.39-3.2.8-1.48.36-4.73 1.16 4.24 5.85-6.29 8.11-.19 1.19-.64 3.96-2.79-.13-14.87 8.13 3 10.15-2.87 11.61-1.05 10.04.08 1.16.03.21-1.25 10.54v.15l-.69 4.33 3.21 9.6-16.75 24 2.87 13.39-3.79.99-8.56-1.51-1.03 6.45-.01.09 3.67 5.01-2.13 6.71-.04.11 2.24 3.85-13.25 6.2-6.63 9.23 5.64-1.56.41-.28 31.37-3.23 3.09 16.64-6.09 3.41-9.25-4.99-1.12 4.05.69 9.61 1.12 11.57-.08.2-1.75 3.89 12.48 16.73 1.68 1.52 1.84 5.4 6.68 3.12.99.09 12.04-3.13 1.16 7.04.15.31 11.21 6 .41-.33 3.87.01.11.16 3.45-1.01.55.07 14.97-5.91.25-.07 3.43-1.93.13.04 11.07 4.23-3.92 12.49-1.37 1.81-.21.27-1.23 3.11-.04.43-.55 6.9 9.47 5.16 3.15-8.75.17-.61 7.19-20-1.07-8.48 15.44-7.6.43.15.28.39.59.77.87 1.08-.21 1.33-.03.2-.96 14.07.01.28 2.81 6.75.44 1.23.69 8.23-.11.63 1.56 5.87 1.04.19 2.87 2.57.45.01 10.72 5.71.17.41 1.61 4.29 1.3-1.08 1.84-1.53 7.4-1.81 3.72 1.44 10.4 4.2 3.87.17 4.16-.56 1.49-5.64 9.39-8.4 2.52-9.83-1.24.84-1.35.91-1.39-14.43 6.31-2.13 1.99-1.99 3.83 2.51 2.47-4.59.68-9.07-2.39-2.48 10.49-.6 6.55 5.91-4.89-10.87 4.75-4.59.16-.15 3.25-5.56 11.08-.12.13-.05 4.25.83.32-.19 3.01-4.83-6.47-5.19-.07-.01-8.52-6.11-3.67-16.17 9.55 4.8 10.88 1.31 2.49-9.71v-.2l.12-2.49 4.56-5.56-.31-4.93-.65-.96-20.52-20.69-3.32-.43-7.44-9.44-.37-.23-20.89 2.63-.55.03-5.87-3.43-3.24-11.11.45-.4.49-3.87-.24-.16-5.95-6.41-6.47-5.03-.89-1-6.1-5.8-14.38-.62-.15-.08-4.19.08-.47.39-1.49.96-5.15-7.56-.19-.25-1.21-3.11-.08-.44-19.17-22.43-.65-.03-5.67-3.79-.36-.87-4.48-5.36-4.55 1.99-.95.8-10.31-3.79-4.24-1.81-4.85 12.59-7.41-6.61-.13-.23.4-4.4.33-.27-.17-2.67.08-.61-3.24-8.45-7.65-3.72.88-6.52.03-.12-.88-9.92-4.87-9.47-.32-.23z"
          fill="#68fed1" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
        <g fill="#f00">
          <circle class="point" cx="473.90" cy="499.66" r="6"></circle>
          <circle class="point" cx="580.68" cy="556.61" r="6"></circle>
          <circle class="point" cx="586.78" cy="659.32" r="6"></circle>
          <circle class="point" cx="496.27" cy="637.97" r="6"></circle>
          <circle class="point" cx="451.52" cy="585.09" r="6"></circle>
        </g>
        <text x="517.83" y="587.73" fill="#000" text-anchor="middle" alignment-baseline="middle" font-size="25" opacity="0.75" pointer-events="none">Kotchandpur</text>
        <use class="reload" href="#reload" x="505.83" y="575.73" fill="#a5a7fe">
          <title>Reload data</title>
        </use>
      </g>
      <g class="subdistrict" id="Maheshpur">
        <path
          d="m393.56 619.39-.13.04-6.91 1.97 5.41 3.88.19.09 2.13-2.41 8.12 10.03.05 7.47-4.87.56-.12.01-16.33 2.8-.04-.01-6.83-6.79-4.93-1.05-.08.01-7.16 1.55-1.61 5.59-3.89-1.88-3.92 4.97-11.43-2.12-5.37 6.48-2.05 11.23-2.88 3.79 2.2 6.33-6.61 7.49-3.87-.89-.12 6.27-4.67-3.07-4.55 6.95-2.08 5.92-4.96-1.91-4.15 2.69-1.31-5.28.12-.28 2.59-6.05-5.35.91-.04.29-.89 6.99-11.37-7.56-4.4.88-12.48-12.47-4.09 2.05.07.43-1.93 7.45.55 6.77-2.4.61-11.52-9.44-7.57-6.37-5.87.92-2.51 1.65-1.67-.6-.79-.29-6.48 11.93-11.25 6.73-.29.04-.12.17-1.29 1.71-9.27-1.17-1.93-8.33-10.19.08.45 2-3.16-.29-2.55 3.88-.13.32-7.25 12.83-1.71.53-.13.04-.25 1.33-.31 1.51-3.24 2.8-1.51-5.08 6.97-12.88-16.55 7.24-.91 3.13 1.37 4.53 1.36 3.29-6.83 3.51-.41.08-1.83 4.63-.63 1.43-8.09-1.29-3.12-2.51-8.17-2.67 2.93 5.71 4.43 7.28 4.8-.88 4.51 6.81-.67-.72-.69-.75-1.35 2.6-.61-2.73-6.43-.4-5.92-3.07-.46-.24-2.69 1.12-4.49 1.51.75 3.67.59 2.64-.97-.03-5.17-.36-3.57 1.03-3.29-1.72-1.08-1.11-1.45-2.4-3.75-1.09.25 5.17 5.07 4.67 2.4 5.11.44 1.32-.25 7.72-1.87 3.81-4.76 8.43 2.09 4.64 8.07 2.49 2.4.53 1.54-3.04 6.41 4.28-1.03 3.04.45.64 4.99 9.05-.04 4.23-.17 1.64-4.4 4.04-2.03 7.48-3.2 3.4-10.08 4.68 1.12-3.39-8.15-4.73-3.6-.84 2.63-8.63 1.77-3.77-3.04-3.03-3.45-.17-1.59 4.11-.19 9.39-.29 4.32 2.64 8.56.64 1.33-.41 2.49-1.32 3.12-5.64-1.63-5.24.27-2.63-1.73-.05-4.63-3.93-3.04-4.03-1.56-6.07 5-1.54-.64-4.8-2.57 8.47-6.89-.07-3.2-8.89 2.4-2.72 1.47-6.01 8.32-3.87 2.24-1.2 4.29 2.52 4.4.69 1.19-.49 2.27-.95 4.51 2.09 2.73 3.13-2.41 8.96 1.13-.05 1.29 2.79 2.72 7.28 5.07-.69 3.41-2.33 8.13.15 2.72 2.2.08 2.45.05 4.67 4.97 1.38 2.04 1.8.2 7.04 2.08-.52 2.29-.79 2.99.37.64v9.2l-4.41 1.8-.12.6-2.09 8.95 4.84 2.08 8.8-2.44 2.15 3.2 1.81 4.07 4.27 2.88 4.24-.99 8.11 4.95 3.08.96 9.84 1 1.32 2.93 4.68 4.75 7.37-.08 2.47-.53 6.09-7.51 4.71.08 2.97.08 5.17 2.75.67.75 2.52 2.95 4.23 1.8-.48 4.19 5.16 4.41 1.47 1.27-3.53 2.13-1.65 2.4-2.24 2.51-1.12 9.05 3.36 1.15 6.12 6.97.76 1.11 5.08-4.75 6.47 1.73 4.92 5.38 2.87-1.01 9.68 1.09 4.65 1.16 9.63-.87 4.05-2.47-2.93-8.49.44-3.83-3.56-8.13-.29-5.25.07-8.6 1.91-4.4 3.31-6.39-.25-5.15 5.01-9.6 2.13 8.61 2.91 1.13 8.8 4.51 3.93 1.88 3.71 1.15.55 6.23-.67 1.11-3.07 3.05-6.2 6.47-.76 1.85 2.03-.41 7.79-2.87 1.51-.24 2.44-.28.45-.47 5.08-5.79 4.12-4.79 2.03-1 .84 8.49.72 2.24 6.88 3.15 3.39 5.11 2.03 4.53 4.19 1.24 2.67-2.67 5.25-7.01 4.16 2.69.41-.17 8.01.47 4.19 1.32 9.88-.57 4.12.08 1.13.37 5.23 4.24 4.92 1.41 5.91 4.99-.03-5.59 5.4-1.99.11-3.04v-.17l1.67-12.51-2.48-5.04 4.01-4.24 3.52 1.97.61.39 3.21-1.95.33.09 4.52.56 2.47-.77 4.44 2.01.09.04 4.8-2.05 7.35-6.29-5.97-8.27-3.28.2h-.15l-4.16.31 2.88-6.27 1.68-6.04 4.65 3.59 4.17-7.07 5.25 2.08-1.19-2.08 2.8-9.35-6.21-2.72-.28-1.91-.04-.35-4.84-3.96-.92-.4-1.46-.31-3.96-6.84 13.88.72.24.09 12 3.47 6.23-5.75 8.61-2.68 2.31-9.08 6.63 3.64.08.01 15.93 1.32h.2l4.21-.36.67 4.13 3.09 1.54.24-1.08 1.48-6.39 3.4 1.57 5.4-1.2 5.72-5.27 2.56 2.51 1.2-6.88.21-5.53.11-1.55-5.31-10.55-3.84.27 10.35-11.61-.31-4.05-2.32-10.29-.03-.2-1.48-4.48-5.19-9.07 1.33-1 1.55-1.08-2.44.09 6.45-4.84 11.36-8.35 2.53-3.96 8.88-7.63h.48l24.64 2.8 5.01-4.33 3.73-.32 1.63 3.17 7.28 3.85 1.6-2.84 12.07-7.24 11.77-6.83.15-.05 15.57-3.08 2.91-3.15.67-.73-11.81-4.71-7.09-11.85-4.29-1.52-.23-.03-10.99-3.01-.52-.76-1.55-2.35 3.93-4.63 10.07-.68-.69-6.85-.17-.41-10.72-5.71-.45-.01-2.87-2.57-1.04-.19-1.56-5.87.11-.63-.69-8.23-.44-1.23-2.81-6.75-.01-.28.96-14.07.03-.2-.65-2.41-.59-.77-.71-.53-15.44 7.6 1.07 8.48-7.19 20-.17.61-2.57 10.01-10.8-5.79 1.31-7.53.04-.43 1.23-3.11.21-.27 3.23-13.87-9-4.67-.13-.04-3.43 1.93-.25.07-14.97 5.91-.55-.07-3.45 1.01-.11-.16-3.87-.01-.41.33-1.68 1-9.53-7-.15-.31-2.48-4.67-10.72.76-.99-.09-1.49-.16-5.8-2.85-3.69-7.83-11.72-14.11-5.91-2.38-1.35-.68z"
          fill="#a5a7fe" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
        <g fill="#f00">
          <circle class="point" cx="210.51" cy="761.02" r="6"></circle>
          <circle class="point" cx="352.88" cy="712.20" r="6"></circle>
          <circle class="point" cx="409.83" cy="809.83" r="6"></circle>
          <circle class="point" cx="285.76" cy="860.68" r="6"></circle>
          <circle class="point" cx="175.93" cy="854.58" r="6"></circle>
        </g>
        <text x="286.982" y="799.662" fill="#000" text-anchor="middle" alignment-baseline="middle" font-size="25" opacity="0.75" pointer-events="none">Maheshpur</text>
        <use class="reload" href="#reload" x="274.982" y="787.662" fill="#a5a7fe">
          <title>Reload data</title>
        </use>
      </g>
      <g class="subdistrict" id="Shailkupa">
        <path
          d="m904.07 55.39.33 4.61-1.28-.29-.57-.09-1.81.12-2.03 2.4-6.45-1.19-6.52 8.2-16.72-7.6-7.92 1.53-3.49 4.31-.01.32-7.48 6.17-11.76 11.16-8.35 2.72-15.51-5.37-5.31-3.03h-.16l-3.09-.09-8.93 1.12-.08.09-3.11 10.72-4.25.19-.13.01-2.77.31-2.69 1.45.59 5.41-10.15 1.79-1.15 4.47v.03l-1.45 16.11-.09.41-.87 3.88-20.4-1.89-1.28-4.46-6.63-1.67-3.64 6.04-9.55-.05h-.08l-11.77-.49-1.43-.75-7-2.95.81 4.19.2 1.28-3.91 3.87-2.8 10.33v.19l-3.01 2.52-.04.49 3.96 12.87 6.77 14.97 5.97-2.57-2.61 4.04 2.41 13.25-13.52 10.23-8.16 14.75 6.6 8.91 8.93.52.2.03 9.23 7.25 4.88 11.6.57.44 19.77 8.13h.12l11.68-2.65 3.73 2.77-6.49 9.93-.2.61-2.67 7.44-.21.2-2.45 8 .03.2 4.6 7.93.31.38 10.97 11.54.04.08-.19 4.11v.07l.67 9.77 11.16-1.45-.71 1.69-.23.51-1.4 3.41.09 1.03 2.72 3h1.27l8.04 1.35.27.09 3.93 2.91-6.11 10.43 9.79 12.54 7.48 4.21 2.64 3.08 7.6-2.82 1.04 1.23 2.25.13.05.84 5.8 5.64 5.59-1-6.93-9.29.47-1.83.08-.24 1.79-4.75-2.63-5.29 3.36-1.11.72-.23.99-.32 1.55 1.6.92-.37 1.67-.67 1.57 3.64 1.11.13 2.85 2.71 1.09-.03 3.16 2.8.61 1.31 3.12 2.76 1.67-.07h1.64l1.93 5.56.91-.8 3.16-1.03.65.08 3.61-1.36 1.03.04 2.8-2.63.13.01 10.28-.43.91-.33.17.51-3.97 2.99 6.4 3.57 10.07 4.39.49 6.24.03.15.15 1.03-3.32 5.8.08.64 8.17 7.71.25-.17 4.28-.05.43-.4 8.19-.09.99.59 5.41-4.35.19.04 5.25.88 10.36-.83 8.64-7.44 10.23-2.99-.41-7.35-1.08-.81-2.05-1.48 6.29-5.56.88.07 6.03-6.69 11.17 5.47.16.03 6.96-1.32 4.68 6.4 10.75 3.17h.13l4.17-.11.84-.43 1.39-.68-1.87 13.37 6.63-.17 1.07 4.35 6.63 4.29 6.81-1.32 8.92 14.55 5.52.15h.05l16.12-6.01 5.32 2.36-.35-6.88 9.67-11.99-.01-.12-.43-10.56-6.93-4.32 5.75-14.57 3.15-2.09.67-12.61.01-.11 2.12-13.41 3.95.08 3.56-5.8.13-4.4 5.84-19.83-1.65-8.53-.39-.64 2.01-1.69.44.69 6.87-10.21-.51-2.21 4.53-1.97 3.36 1.61 6.05-13.57 8.17-12.37-2.43-4.72-4.08-.83-.84.24-7.03 1.28-2.44-7.52-9.95-4.25h-.05l-11.19 2.47-2.65-6.11v-.03l2-11.6-7.88-7.65-23.35-18.71.44-2.37-7.33-5.07-4.75-9.36.2-1.29.04-.19.96-11.44-.72-.61-1.61-2.49-.41-.07-12.31-6 2.37-13.8.05-.09-13.05-11.93-14.36-1.97h-.03l-12.13.07-.09-.01-8.08-.28-11.45-8.31-12.76-2.47-8.79-13.36-6.55-12.41-10-10.92-.72.08z"
          fill="#68fefd" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
        <g fill="#f00">
          <circle class="point" cx="835.00" cy="122.52" r="6"></circle>
          <circle class="point" cx="990.68" cy="179.47" r="6"></circle>
          <circle class="point" cx="1012.60" cy="318.14" r="6"></circle>
          <circle class="point" cx="896.21" cy="291.03" r="6"></circle>
          <circle class="point" cx="814.07" cy="222.33" r="6"></circle>
        </g>
        <text x="909.712" y="226.698" fill="#000" text-anchor="middle" alignment-baseline="middle" font-size="25" opacity="0.75" pointer-events="none">Shailkupa</text>
        <use class="reload" href="#reload" x="897.712" y="214.698" fill="#a5a7fe">
          <title>Reload data</title>
        </use>
      </g>
    </g>
    <g id="hecho">
      <g class="leyenda dog">
        <title>120</title>
        <circle cx="1100" cy="860" r="10" class="dog" onmouseover="fg_1c(this)" onmouseleave="fg_1d(this)"></circle>
        <text x="1130" y="860" alignment-baseline="middle" pointer-events="none">DOG</text>
        <path d="M1206 860 h1" stroke="#ff3300" stroke-width="8" stroke-linecap="round"></path>
      </g>
      <g class="leyenda cat">
        <title>113</title>
        <circle cx="1100" cy="860" r="10" class="cat" onmouseover="fg_1c(this)" onmouseleave="fg_1d(this)"></circle>
        <text x="1130" y="860" alignment-baseline="middle" pointer-events="none">CAT</text>
        <path d="M1206 860 h1" stroke="#C28348" stroke-width="8" stroke-linecap="round"></path>
      </g>
      <g class="leyenda fish">
        <title>101</title>
        <circle cx="1100" cy="860" r="10" class="fish" onmouseover="fg_1c(this)" onmouseleave="fg_1d(this)"></circle>
        <text x="1130" y="860" alignment-baseline="middle" pointer-events="none">FISH</text>
        <path d="M1206 860 h1" stroke="#3399ff" stroke-width="8" stroke-linecap="round"></path>
      </g>
      <g class="leyenda goat">
        <title>101</title>
        <circle cx="1100" cy="860" r="10" class="goat" onmouseover="fg_1c(this)" onmouseleave="fg_1d(this)"></circle>
        <text x="1130" y="860" alignment-baseline="middle" pointer-events="none">GOAT</text>
        <path d="M1206 860 h1" stroke="#944ddb" stroke-width="8" stroke-linecap="round"></path>
      </g>
      <g class="leyenda sheep">
        <title>99</title>
        <circle cx="1100" cy="860" r="10" class="sheep" onmouseover="fg_1c(this)" onmouseleave="fg_1d(this)"></circle>
        <text x="1130" y="860" alignment-baseline="middle" pointer-events="none">SHEEP</text>
        <path d="M1206 860 h1" stroke="#7c98a1" stroke-width="8" stroke-linecap="round"></path>
      </g>
      <g class="leyenda cow">
        <title>97</title>
        <circle cx="1100" cy="860" r="10" class="cow" onmouseover="fg_1c(this)" onmouseleave="fg_1d(this)"></circle>
        <text x="1130" y="860" alignment-baseline="middle" pointer-events="none">COW</text>
        <path d="M1206 860 h1" stroke="#513f3f" stroke-width="8" stroke-linecap="round"></path>
      </g>
      <g class="leyenda parrot">
        <title>97</title>
        <circle cx="1100" cy="860" r="10" class="parrot" onmouseover="fg_1c(this)" onmouseleave="fg_1d(this)"></circle>
        <text x="1130" y="860" alignment-baseline="middle" pointer-events="none">PARROT</text>
        <path d="M1206 860 h1" stroke="#99cc00" stroke-width="8" stroke-linecap="round"></path>
      </g>
      <g class="leyenda buffalo">
        <title>93</title>
        <circle cx="1100" cy="860" r="10" class="buffalo" onmouseover="fg_1c(this)" onmouseleave="fg_1d(this)"></circle>
        <text x="1130" y="860" alignment-baseline="middle" pointer-ev860ents="none">BUFFALO</text>
        <path d="M1206 860 h1" stroke="#112448" stroke-width="8" stroke-linecap="round"></path>
      </g>
      <g class="leyenda pig">
        <title>91</title>
        <circle cx="1100" cy="860" r="10" class="pig" onmouseover="fg_1c(this)" onmouseleave="fg_1d(this)"></circle>
        <text x="1130" y="860" alignment-baseline="middle" pointer-events="none">PIG</text>
        <path d="M1206 860 h1" stroke="#d46ac7" stroke-width="8" stroke-linecap="round"></path>
      </g>
      <g class="leyenda rabbit">
        <title>90</title>
        <circle cx="1100" cy="860" r="10" class="rabbit" onmouseover="fg_1c(this)" onmouseleave="fg_1d(this)"></circle>
        <text x="1130" y="860" alignment-baseline="middle" pointer-events="none">RABBIT</text>
        <path d="M1206 860 h1" stroke="#ffb83b" stroke-width="8" stroke-linecap="round"></path>
      </g>
    </g>
  </g>
  <g id="donut_donutC">
    <text id="title_donutC" x="180" y="32" text-anchor="middle" font-size="20" font-weight="bold">Sub District</text>
    <use id="fondo_donutC" href="#donutC" stroke="#ccc"></use>
    <g id="p_donutC">
      <g id="donutC_label_0" class="label_dona">
        <use id="donutC_sector_0" href="#donutC" class="dona" stroke="#ccc" stroke-dasharray="0 360" stroke-dashoffset="360"></use>
        <line id="linea0" x1="230" y1="93.39745962155612" x2="330" y2="50" class="flecha"></line>
        <text id="der0" x="355" y="50" fill="#000" text-anchor="rigth" alignment-baseline="middle" font-size="16"></text>
        <rect id="point0" x="335" y="44" width="12" height="12" ry="2" fill="#ccc"></rect>
        <text id="label_0" x="180" y="180" transform="translate(0 0)" class="labelDONA"></text>
      </g>
      <g id="donutC_label_1" class="label_dona">
        <use id="donutC_sector_1" href="#donutC" class="dona" stroke="#ccc" stroke-dasharray="0 360" stroke-dashoffset="360"></use>
        <line id="linea1" x1="275.55728057861404" y1="150.52448255890957" x2="330" y2="74" class="flecha"></line>
        <text id="der1" x="355" y="74" fill="#000" text-anchor="rigth" alignment-baseline="middle" font-size="16"></text>
        <rect id="point1" x="335" y="68" width="12" height="12" ry="2" fill="#ccc"></rect>
        <text id="label_1" x="180" y="180" transform="translate(0 0)" class="labelDONA"></text>
      </g>
      <g id="donutC_label_2" class="label_dona">
        <use id="donutC_sector_2" href="#donutC" class="dona" stroke="#ccc" stroke-dasharray="0 360" stroke-dashoffset="360"></use>
        <line id="linea2" x1="266.60254037844385" y1="230.00000000000003" x2="330" y2="98" class="flecha"></line>
        <text id="der2" x="355" y="98" fill="#000" text-anchor="rigth" alignment-baseline="middle" font-size="16"></text>
        <rect id="point2" x="335" y="92" width="12" height="12" ry="2" fill="#ccc"></rect>
        <text id="label_2" x="180" y="180" transform="translate(0 0)" class="labelDONA"></text>
      </g>
      <g id="donutC_label_3" class="label_dona">
        <use id="donutC_sector_3" href="#donutC" class="dona" stroke="#ccc" stroke-dasharray="0 360" stroke-dashoffset="360"></use>
        <line id="linea3" x1="144.86251759186575" y1="273.6234870639737" x2="330" y2="122" class="flecha"></line>
        <text id="der3" x="355" y="122" fill="#000" text-anchor="rigth" alignment-baseline="middle" font-size="16"></text>
        <rect id="point3" x="335" y="116" width="12" height="12" ry="2" fill="#ccc"></rect>
        <text id="label_3" x="180" y="180" transform="translate(0 0)" class="labelDONA"></text>
      </g>
      <g id="donutC_label_4" class="label_dona">
        <use id="donutC_sector_4" href="#donutC" class="dona" stroke="#ccc" stroke-dasharray="0 360" stroke-dashoffset="360"></use>
        <line id="linea4" x1="96.54267462786973" y1="124.91030185478976" x2="330" y2="146" class="flecha"></line>
        <text id="der4" x="355" y="146" fill="#000" text-anchor="rigth" alignment-baseline="middle" font-size="16"></text>
        <rect id="point4" x="335" y="140" width="12" height="12" ry="2" fill="#ccc"></rect>
        <text id="label_4" x="180" y="180" transform="translate(0 0)" class="labelDONA"></text>
      </g>
      <g class="label_dona">
        <text x="355" y="170" fill="#777" text-anchor="rigth" alignment-baseline="middle" font-size="16"></text>
        <rect x="335" y="164" width="12" height="12" ry="2" fill="#ccc"></rect>
      </g>
      <text x="330" y="200" fill="#000" text-anchor="rigth" alignment-baseline="middle" font-size="16" pointer-events="none" style="font-weight: bold">TOTAL:</text>
      <path d="" stroke="black" fill="none" class="apuntador" pointer-events="none"></path>
    </g>
  </g>
  <g id="destino" pointer-events="none"></g>
</svg>
<div id="info-box" style="top: 424px; left: 1015px; display: none;"></div>

<script>
function fg_c1() {
  $(function() {
    var t = new FormData;
    t.append("consulta", "subdistrict");
    $.ajax({
      url: "mapCharYJMM/Map.json",
      type: "POST",
      data: t,
      contentType: !1,
      processData: !1,
      success: function(t) {
        gf_c1(t)
      }
    })
  })
}

function gf_c1(t) {
  let e = "";
  Object.keys(t).forEach(function(o) {
    let a = t[o];
    let n = document.querySelector("#" + o);
    e = n;
    let s = document.querySelector("#hecho").value;
    n.value = a.total, n.dataset.total = n.value, n.dataset.others = a.resto;
    let r = n.getElementsByTagName("circle");
    Array.from(r).forEach(function(t, e) {
      t.setAttribute("class", "point " + a[e].animal_type), t.setAttribute("r", Math.sqrt(a[e].total) * s), t.setAttribute("data-f", a[e].female), t.setAttribute("data-m", a[e].male), t.setAttribute("data-total", a[e].total)
    })
  }), setTimeout(function(t) {
    gf_1c(e)
  }, 500)
}

function gf_1c(t) {
  let e = t.getBBox().x + t.getBBox().width / 2,
    o = t.getBBox().y + t.getBBox().height / 2;
  document.querySelector(".apuntador").setAttribute("d", "M304 290 L" + e + " " + o);
  let a = document.querySelector("#donut_donutC"),
    n = a.getElementsByTagName("use"),
    s = a.getElementsByTagName("text"),
    r = a.getElementsByTagName("rect"),
    i = a.getElementsByTagName("line"),
    l = 2 * Math.PI,
    c = 100 * l,
    u = t.value,
    d = 0,
    f = t.getElementsByClassName("point");
  s[0].innerHTML = t.querySelector("text").innerHTML, s[11].innerHTML = "OTHERS: " + t.dataset.others, s[12].innerHTML = "TOTAL: " + t.dataset.total;
  for (var h = 1; h < 6; h++) {
    let t = f[h - 1],
      e = t.classList[1],
      o = parseInt(t.dataset.total),
      a = o / u,
      m = d / u;
    d += o, n[h].setAttribute("class", e), r[h - 1].setAttribute("class", e), n[h].setAttribute("stroke-dasharray", a * c + " " + 100 * c), n[h].setAttribute("stroke-dashoffset", "-" + m * c);
    let p = 2 * h;
    s[2 * h - 1].innerHTML = e.toUpperCase() + ":  " + o, s[p].innerHTML = Math.round(100 * a) + "%";
    let y = 100 * Math.sin((m + a / 2) * l),
      g = 100 * -Math.cos((m + a / 2) * l);
    s[p].setAttribute("transform", "translate(" + y + " " + g + ")"), i[h - 1].setAttribute("x1", 180 + y), i[h - 1].setAttribute("y1", 180 + g)
  }
}
var infoBox = $("#info-box"),
  iH = infoBox.height(),
  iW = infoBox.width();

function fg_1c(t) {
  var e = t.cx.baseVal.value,
    o = t.cy.baseVal.value,
    a = document.querySelector("#district"),
    n = document.querySelector("#destino"),
    s = "";
  Array.from(a.getElementsByClassName(t.getAttribute("class"))).forEach(function(t) {
    s += " M" + e + " " + o + "L" + t.cx.baseVal.value + " " + t.cy.baseVal.value
  }), n.innerHTML = '<path d="' + s + '" stroke="black" class="apuntador2"></path>'
}

function fg_1d() {
  document.querySelector("#destino").innerHTML = ""
}
$(".point").hover(function(t) {
  let e = t.target,
    o = e.classList[1].toUpperCase(),
    a = parseInt(e.dataset.f),
    n = parseInt(e.dataset.m),
    s = n + a,
    r = '<svg viewBox="-1 -1 182 82" width="182" height="82" id="animalsGender" pointer-events="none">    <rect x="0" y="0" width="180" height="80" ry="40" rx="40" fill="#fff" stroke="silver" stroke-width="2"></rect>    <text x="90" y="20" text-anchor="middle" font-weight="bold">' + o + ' GENDERS</text>    <text x="90" y="74" text-anchor="middle" font-weight="bold">' + s + '</text>    <text x="30" y="38" text-anchor="middle">' + a + '</text>    <text x="150" y="38" text-anchor="middle">' + n + '</text>    <path d="m 90,41 v 17.67767 m 67.63225,-9.727922 v 16.617009 h -31.8198 M 22.367754,51.941379 v 16.617009 h 24.041631" stroke="black" fill="none" />    <path d="M10 50 h ' + a / s * 160 + '" style="stroke:#f54394;stroke-width:8" stroke-linecap="round" opacity="0.7"/>    <path d="M170 50 h -' + n / s * 160 + '" style="stroke:#448bff;stroke-width:8" stroke-linecap="round" opacity="0.7"/></svg>';
  infoBox.css("display", "block"), infoBox.html(r)
}), $(".point").mouseleave(function(t) {
  infoBox.css("display", "none")
}), $(document).mousemove(function(t) {
  let e = t.pageY > iH ? -1 : 1;
  infoBox.css("top", t.pageY + e * (infoBox.height() - 20 * e)), infoBox.css("left", t.pageX - infoBox.width() / 2)
}).mouseover(), $(".subdistrict").hover(function(t) {
  mover && (this.value || (this.value = parseInt(this.dataset.total)), gf_1c(this))
});
var mover = !0;

function gf_1d() {
  let t = document.querySelector("#hecho");
  $(function() {
    var e = new FormData;
    e.append("consulta", "totalesMap");
    $.ajax({
      url: "mapCharYJMM/map2.json",
      type: "POST",
      data: e,
      contentType: !1,
      processData: !1,
      success: function(e) {
        let o = e;
        o.forEach(function(e) {
          t.value = 40 / Math.sqrt(o[0].total);
          let a = t.querySelector("." + e.animal_type);
          a.querySelector("circle").setAttribute("cy", e.y), a.querySelector("text").setAttribute("y", e.y), a.querySelector("path").setAttribute("d", "M1206 " + e.y + " h" + e.h)
        })
      }
    })
  })
}

function reloadMap() {
  gf_1d(), setTimeout(function() {
    fg_c1()
  }, 200)
}
$(".reload").click(function(t) {
  $(this.parentNode).addClass("hover"), mover = !mover
}), window.onload = function() {
  reloadMap()
};

</script>
