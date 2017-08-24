webpackJsonp([4],{

/***/ "./assets/js/imagecollection.js":
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($, jQuery) {var $collectionHolder;

//setup an "add an image" link
var $addImageLink = $('<a href="#" class="add_image_link">Add an image</a>');
var $newLinkDiv = $('<div></div>').append($addImageLink);

jQuery(document).ready(function () {
    // Get the ul that holds the collection of tags
    $collectionHolder = $('#appbundle_imagecollection_images');

    // add the "add a tag" anchor and li to the tags ul
    $collectionHolder.append($newLinkDiv);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addImageLink.on('click', function (e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addImageForm($collectionHolder, $newLinkDiv);
    });

    $addImageLink.click();
});

function addImageForm($collectionHolder, $newLinkDiv) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormDiv = $('<div></div>').append(newForm);
    $newLinkDiv.before($newFormDiv);
}
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__("./node_modules/jquery/dist/jquery.js"), __webpack_require__("./node_modules/jquery/dist/jquery.js")))

/***/ })

},["./assets/js/imagecollection.js"]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvaW1hZ2Vjb2xsZWN0aW9uLmpzIl0sIm5hbWVzIjpbIiRjb2xsZWN0aW9uSG9sZGVyIiwiJGFkZEltYWdlTGluayIsIiQiLCIkbmV3TGlua0RpdiIsImFwcGVuZCIsImpRdWVyeSIsImRvY3VtZW50IiwicmVhZHkiLCJkYXRhIiwiZmluZCIsImxlbmd0aCIsIm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwiYWRkSW1hZ2VGb3JtIiwiY2xpY2siLCJwcm90b3R5cGUiLCJpbmRleCIsIm5ld0Zvcm0iLCJyZXBsYWNlIiwiJG5ld0Zvcm1EaXYiLCJiZWZvcmUiXSwibWFwcGluZ3MiOiI7Ozs7O0FBQUEscURBQUlBLGlCQUFKOztBQUVBO0FBQ0EsSUFBSUMsZ0JBQWdCQyxFQUFFLHFEQUFGLENBQXBCO0FBQ0EsSUFBSUMsY0FBY0QsRUFBRSxhQUFGLEVBQWlCRSxNQUFqQixDQUF3QkgsYUFBeEIsQ0FBbEI7O0FBRUFJLE9BQU9DLFFBQVAsRUFBaUJDLEtBQWpCLENBQXVCLFlBQVc7QUFDaEM7QUFDRFAsd0JBQW9CRSxFQUFFLG1DQUFGLENBQXBCOztBQUVBO0FBQ0FGLHNCQUFrQkksTUFBbEIsQ0FBeUJELFdBQXpCOztBQUVBO0FBQ0E7QUFDQUgsc0JBQWtCUSxJQUFsQixDQUF1QixPQUF2QixFQUFnQ1Isa0JBQWtCUyxJQUFsQixDQUF1QixRQUF2QixFQUFpQ0MsTUFBakU7O0FBRUFULGtCQUFjVSxFQUFkLENBQWlCLE9BQWpCLEVBQTBCLFVBQVNDLENBQVQsRUFBWTtBQUNsQztBQUNBQSxVQUFFQyxjQUFGOztBQUVBO0FBQ0FDLHFCQUFhZCxpQkFBYixFQUFnQ0csV0FBaEM7QUFDSCxLQU5EOztBQVFBRixrQkFBY2MsS0FBZDtBQUNBLENBcEJEOztBQXNCQSxTQUFTRCxZQUFULENBQXNCZCxpQkFBdEIsRUFBeUNHLFdBQXpDLEVBQXNEO0FBQ2xEO0FBQ0EsUUFBSWEsWUFBWWhCLGtCQUFrQlEsSUFBbEIsQ0FBdUIsV0FBdkIsQ0FBaEI7O0FBRUE7QUFDQSxRQUFJUyxRQUFRakIsa0JBQWtCUSxJQUFsQixDQUF1QixPQUF2QixDQUFaOztBQUVBO0FBQ0E7QUFDQSxRQUFJVSxVQUFVRixVQUFVRyxPQUFWLENBQWtCLFdBQWxCLEVBQStCRixLQUEvQixDQUFkOztBQUVBO0FBQ0FqQixzQkFBa0JRLElBQWxCLENBQXVCLE9BQXZCLEVBQWdDUyxRQUFRLENBQXhDOztBQUVBO0FBQ0EsUUFBSUcsY0FBY2xCLEVBQUUsYUFBRixFQUFpQkUsTUFBakIsQ0FBd0JjLE9BQXhCLENBQWxCO0FBQ0FmLGdCQUFZa0IsTUFBWixDQUFtQkQsV0FBbkI7QUFDSCxDIiwiZmlsZSI6ImltYWdlY29sbGVjdGlvbi5qcyIsInNvdXJjZXNDb250ZW50IjpbInZhciAkY29sbGVjdGlvbkhvbGRlcjtcblxuLy9zZXR1cCBhbiBcImFkZCBhbiBpbWFnZVwiIGxpbmtcbnZhciAkYWRkSW1hZ2VMaW5rID0gJCgnPGEgaHJlZj1cIiNcIiBjbGFzcz1cImFkZF9pbWFnZV9saW5rXCI+QWRkIGFuIGltYWdlPC9hPicpO1xudmFyICRuZXdMaW5rRGl2ID0gJCgnPGRpdj48L2Rpdj4nKS5hcHBlbmQoJGFkZEltYWdlTGluayk7XG5cbmpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG5cdCAvLyBHZXQgdGhlIHVsIHRoYXQgaG9sZHMgdGhlIGNvbGxlY3Rpb24gb2YgdGFnc1xuICRjb2xsZWN0aW9uSG9sZGVyID0gJCgnI2FwcGJ1bmRsZV9pbWFnZWNvbGxlY3Rpb25faW1hZ2VzJyk7XG5cbiAvLyBhZGQgdGhlIFwiYWRkIGEgdGFnXCIgYW5jaG9yIGFuZCBsaSB0byB0aGUgdGFncyB1bFxuICRjb2xsZWN0aW9uSG9sZGVyLmFwcGVuZCgkbmV3TGlua0Rpdik7XG5cbiAvLyBjb3VudCB0aGUgY3VycmVudCBmb3JtIGlucHV0cyB3ZSBoYXZlIChlLmcuIDIpLCB1c2UgdGhhdCBhcyB0aGUgbmV3XG4gLy8gaW5kZXggd2hlbiBpbnNlcnRpbmcgYSBuZXcgaXRlbSAoZS5nLiAyKVxuICRjb2xsZWN0aW9uSG9sZGVyLmRhdGEoJ2luZGV4JywgJGNvbGxlY3Rpb25Ib2xkZXIuZmluZCgnOmlucHV0JykubGVuZ3RoKTtcblxuICRhZGRJbWFnZUxpbmsub24oJ2NsaWNrJywgZnVuY3Rpb24oZSkge1xuICAgICAvLyBwcmV2ZW50IHRoZSBsaW5rIGZyb20gY3JlYXRpbmcgYSBcIiNcIiBvbiB0aGUgVVJMXG4gICAgIGUucHJldmVudERlZmF1bHQoKTtcblxuICAgICAvLyBhZGQgYSBuZXcgdGFnIGZvcm0gKHNlZSBuZXh0IGNvZGUgYmxvY2spXG4gICAgIGFkZEltYWdlRm9ybSgkY29sbGVjdGlvbkhvbGRlciwgJG5ld0xpbmtEaXYpO1xuIH0pO1xuIFxuICRhZGRJbWFnZUxpbmsuY2xpY2soKTtcbn0pO1xuXG5mdW5jdGlvbiBhZGRJbWFnZUZvcm0oJGNvbGxlY3Rpb25Ib2xkZXIsICRuZXdMaW5rRGl2KSB7XG4gICAgLy8gR2V0IHRoZSBkYXRhLXByb3RvdHlwZSBleHBsYWluZWQgZWFybGllclxuICAgIHZhciBwcm90b3R5cGUgPSAkY29sbGVjdGlvbkhvbGRlci5kYXRhKCdwcm90b3R5cGUnKTtcblxuICAgIC8vIGdldCB0aGUgbmV3IGluZGV4XG4gICAgdmFyIGluZGV4ID0gJGNvbGxlY3Rpb25Ib2xkZXIuZGF0YSgnaW5kZXgnKTtcblxuICAgIC8vIFJlcGxhY2UgJ19fbmFtZV9fJyBpbiB0aGUgcHJvdG90eXBlJ3MgSFRNTCB0b1xuICAgIC8vIGluc3RlYWQgYmUgYSBudW1iZXIgYmFzZWQgb24gaG93IG1hbnkgaXRlbXMgd2UgaGF2ZVxuICAgIHZhciBuZXdGb3JtID0gcHJvdG90eXBlLnJlcGxhY2UoL19fbmFtZV9fL2csIGluZGV4KTtcblxuICAgIC8vIGluY3JlYXNlIHRoZSBpbmRleCB3aXRoIG9uZSBmb3IgdGhlIG5leHQgaXRlbVxuICAgICRjb2xsZWN0aW9uSG9sZGVyLmRhdGEoJ2luZGV4JywgaW5kZXggKyAxKTtcblxuICAgIC8vIERpc3BsYXkgdGhlIGZvcm0gaW4gdGhlIHBhZ2UgaW4gYW4gbGksIGJlZm9yZSB0aGUgXCJBZGQgYSB0YWdcIiBsaW5rIGxpXG4gICAgdmFyICRuZXdGb3JtRGl2ID0gJCgnPGRpdj48L2Rpdj4nKS5hcHBlbmQobmV3Rm9ybSk7XG4gICAgJG5ld0xpbmtEaXYuYmVmb3JlKCRuZXdGb3JtRGl2KTtcbn1cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi9hc3NldHMvanMvaW1hZ2Vjb2xsZWN0aW9uLmpzIl0sInNvdXJjZVJvb3QiOiIifQ==