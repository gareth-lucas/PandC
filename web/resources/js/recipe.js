var $collectionHolderIP;
var $collectionHolderRS;
var $collectionHolderRSImage;

//setup an "add an IP" link
var $addIPLink = $('<a href="#" class="add_IP_link">Add an Ingredient</a>');
var $newIPLinkDiv = $('<div></div>').append($addIPLink);

//setup an "add RS" link
var $addRSLink = $('<a href="#" class="add_RS_link">Add a Recipe Step</a>');
var $newRSLinkDiv = $('<div></div>').append($addRSLink);

//setup an "add RS Image" link
var $addRSImageLink = $('<a href="#" class="add_RS_image_link">Add a Recipe Step Image</a>');
var $newRSImageLinkDiv = $('<div></div>').append($addRSImageLink);

jQuery(document).ready(function() {
	 // Get the ul that holds the collection of tags
 $collectionHolderIP = $('#appbundle_recipe_ingredientpreparationcollection_ingredientpreparation');

 // add the "add a tag" anchor and li to the tags ul
 $collectionHolderIP.append($newIPLinkDiv);

 // count the current form inputs we have (e.g. 2), use that as the new
 // index when inserting a new item (e.g. 2)
 $collectionHolderIP.data('index', $collectionHolderIP.find(':input').length);

 $addIPLink.on('click', function(e) {
     // prevent the link from creating a "#" on the URL
     e.preventDefault();

     // add a new tag form (see next code block)
     addIPForm($collectionHolderIP, $newIPLinkDiv);
     
 });
 
 $collectionHolderRS = $('#appbundle_recipe_recipestepcollection_recipestep');

 // add the "add a tag" anchor and li to the tags ul
 $collectionHolderRS.append($newRSLinkDiv);

 // count the current form inputs we have (e.g. 2), use that as the new
 // index when inserting a new item (e.g. 2)
 $collectionHolderRS.data('index', $collectionHolderRS.find(':input').length);

 $addRSLink.on('click', function(e) {
     // prevent the link from creating a "#" on the URL
     e.preventDefault();

     // add a new tag form (see next code block)
     addRecipeStepForm($collectionHolderRS, $newRSLinkDiv);
     
 }); 
 
 $collectionHolderRSImage = $('#appbundle_recipe_recipeStepCollection_recipeStep_imageCollection_images');

 // add the "add a tag" anchor and li to the tags ul
 $collectionHolderRSImage.append($newRSImageLinkDiv);

 // count the current form inputs we have (e.g. 2), use that as the new
 // index when inserting a new item (e.g. 2)
 $collectionHolderRSImage.data('index', $collectionHolderRS.find(':input').length);

 $addRSImageLink.on('click', function(e) {
     // prevent the link from creating a "#" on the URL
     e.preventDefault();

     // add a new tag form (see next code block)
     addRecipeStepImageForm($collectionHolderRSImage, $newRSImageLinkDiv);
     
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

function addRecipeStepForm($collectionHolder, $newLinkDiv) {
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

function addRecipeStepImageForm($collectionHolder, $newLinkDiv) {
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
