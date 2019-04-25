// (function() {
//     var t, e, r, i, h, n, o, c, u;
//     o = function(t, e) {
//         return t.style.width = e[0] + "px", t.style.height = e[1] + "px"
//     }, n = function(t, e) {
//         return t.style.left = e[0] + "px", t.style.top = e[1] + "px"
//     }, t = document.querySelector("#homepage-hero"), e = {
//         select: document.querySelector("#homepage-hero > .background"),
//         current: {
//             width: 0,
//             height: 0
//         },
//         width: 3934,
//         height: 1780,
//         ratio: 2.21011235955056
//     }, h = {
//         select: document.querySelector("#homepage-hero > a.hit.-mac"),
//         width: 1498,
//         height: 876,
//         ratio: 1.7100456621,
//         left: 700,
//         top: 800
//     }, i = {
//         select: document.querySelector("#homepage-hero > a.hit.-iphone"),
//         width: 269,
//         height: 524,
//         ratio: .513358778626,
//         left: 2465,
//         top: 1150
//     }, r = {
//         select: document.querySelector("#homepage-hero > a.hit.-ipad"),
//         width: 869,
//         height: 592,
//         ratio: 1.46790540540541,
//         left: 2200,
//         top: 500
//     }, e.updateCurrent = function() {
//         return this.current.width = e.select.offsetWidth, this.current.height = e.select.offsetHeight
//     }, e.middle = function() {
//         return e.select.style.marginLeft = -this.current.width / 2 + "px"
//     }, u = function() {
//         var c, u, l, d;
//         return c = t.offsetHeight, u = c * e.ratio, o(e.select, [u, c]), l = (window.innerWidth - u) / 2, d = function(t) {
//             var r, i, h;
//             return r = t.height / e.height * c, o(t.select, [r * t.ratio, r]), i = t.left / e.width * u, h = t.top / e.height * c, n(t.select, [i + l, h])
//         }, d(h), d(i), d(r)
//     }, c = function() {
//         return u(), e.updateCurrent(), e.middle()
//     }, window.addEventListener("resize", c), c()
// }).call(this);