/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/blog/js/most-popular.js":
/*!*******************************************!*\
  !*** ./resources/blog/js/most-popular.js ***!
  \*******************************************/
/***/ (() => {

var popularArticleTemplate = document.querySelector('[popular-article-template]');
var listOfArticles = document.querySelector('[articles-list]');
axios.get('/api/articles/most-popular').then(function (_ref) {
  var data = _ref.data;
  data.forEach(function (articleItem) {
    console.log(articleItem);
    var article = popularArticleTemplate.content.cloneNode(true).children[0];
    var articleTitle = article.querySelector('[data-title]');
    var titleLink = document.createElement('a');
    titleLink.href = "/blog/article/".concat(articleItem.id);
    titleLink.textContent = articleItem.title;
    articleTitle.append(titleLink);
    article.querySelector('[data-image]').style.backgroundImage = "url(".concat(articleItem.image_url, ")"); // article.querySelector('[data-image]').innerHTML = `url(${articleItem.image})`;
    // article.querySelector('[data-excerpt]').textContent = articleItem.excerpt;

    var counterElement = article.querySelector('[data-views-counter]');
    counterElement.innerHTML = "\n            ".concat(articleItem.view_count, "\n            <span class=\"visually-hidden\">unread messages</span>\n        ");

    if (!articleItem.view_count) {
      counterElement.hidden = true;
    }

    listOfArticles.append(article);
  });
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!***********************************!*\
  !*** ./resources/blog/js/blog.js ***!
  \***********************************/
__webpack_require__(/*! ./most-popular */ "./resources/blog/js/most-popular.js");
})();

/******/ })()
;