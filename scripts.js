(function() {
  'use strict';

  var c = document.getElementsByTagName('canvas')[0],
  x = c.getContext('2d'),
  pr = window.devicePixelRatio || 1,
  w = window.innerWidth,
  h = window.innerHeight,
  f = w,
  q,
  m = Math,
  r = 1,
  u = m.random,
  v = m.random,
  z = m.random;
  c.width = w*pr;
  c.height = h*pr;
  x.scale(pr, pr);
  x.globalAlpha = 0.2;

  function init() {
    x.clearRect(0,0,w,h);
    q=[{x:0,y:h*.5+f},{x:0,y:h*.5-f}];
    while(q[1].x<w+f) d(q[0], q[1]);
  }

  function d(init,j) {
    x.beginPath();
    x.moveTo(init.x, init.y);
    x.lineTo(j.x, j.y);
    var k = j.x + (z()*2-0.25)*f,
    n = y(j.y);
    x.lineTo(k, n);
    x.closePath();
    r-=u/-50;
    x.fillStyle = '#'+(v(r)*128+127<<16 | v(r+u/3)*128+127<<8 | v(r+u/3*2)*128+127).toString(16);
    x.fill();
    q[0] = q[1];
    q[1] = {x:k,y:n};
  }

  function y(p) {
    var t = p + (z()*2-1.1)*f;
    return (t>h||t<0) ? y(p) : t;
  }

  document.onclick = init;
  document.ontouchstart = init;

  init();
})();
