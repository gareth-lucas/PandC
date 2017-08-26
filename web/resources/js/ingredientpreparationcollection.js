var $collectionHolder;

//setup an "add an IP" link
var $addIPLink = $('<a href="#" class="add_IP_link">Add an IP</a>');
var $newLinkDiv = $('<div></div>').append($addIPLink);

jQuery(document).ready(function() {
	 // Get the ul that holds the collection of tags
 $collectionHolder = $('#appbundle_recipe_ingredientpreparationcollection_ingredientpreparation');

 // add the "add a tag" anchor and li to the tags ul
 $collectionHolder.append($newLinkDiv);

 // count the current form inputs we have (e.g. 2), use that as the new
 // index when inserting a new item (e.g. 2)
 $collectionHolder.data('index', $collectionHolder.find(':input').length);

 $addIPLink.on('click', function(e) {
     // prevent the link from creating a "#" on the URL
     e.preventDefault();

     // add a new tag form (see next code block)
     addIPForm($collectionHolder, $newLinkDiv);
     
 });
});

function addIPForm($collectionHolder, $newLinkDiv) {
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
