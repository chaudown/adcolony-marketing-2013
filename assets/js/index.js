
// ============ adapt.js ============ //

var ADAPT_CONFIG = {
  // Where is your CSS?
  path: '/assets/css/',

  // false = Only run once, when page first loads.
  // true = Change on window resize and page tilt.
  dynamic: true,

  // First range entry is the minimum.
  // Last range entry is the maximum.
  // Separate ranges by "to" keyword.
  range: [
    // '0px    to 760px  = mobile.css',
    // '760px  to 980px  = 720.css',
    // '980px  to 1280px = 980.css',
//    '0px    to 1280ox = 980.css',
//    '1280px           = 1020.css'
    // '1280px to 1600px = 1020.css',
    // '1600px to 1940px = 1560.css',
    // '1940px to 2540px = 1920.css',
    // '2540px           = 2520.css'
    
'0px to 3000px = 980.css',
'3000px = 980.css'
  ]
};

// ============ adapt.js ============ //
(function(a,b,c,d){function e(){clearTimeout(i);for(var c=a.innerWidth||b.documentElement.clientWidth||b.body.clientWidth||0,e,f,o,p,q=m,u=m-1;q--;){g="",e=l[q].split("="),f=e[0],p=e[1]?e[1].replace(/\s/g,""):d,e=(o=f.match("to"))?parseInt(f.split("to")[0],10):parseInt(f,10),f=o?parseInt(f.split("to")[1],10):d;if(!f&&q===u&&c>e||c>e&&c<=f){p&&(g=k+p);break}}h?h!==g&&(h=n.href=g,j&&j(q,c)):(h=n.href=g,j&&j(q,c),k&&(b.head||b.getElementsByTagName("head")[0]).appendChild(n))}function f(){clearTimeout(i),i=setTimeout(e,16)}if(c){var g,h,i,j=typeof c.callback=="function"?c.callback:d,k=c.path?c.path:"",l=c.range,m=l.length,n=b.createElement("link");n.rel="stylesheet",n.media="screen",e(),c.dynamic&&(a.addEventListener?a.addEventListener("resize",f,!1):a.attachEvent?a.attachEvent("onresize",f):a.onresize=f)}})(this,this.document,ADAPT_CONFIG)
