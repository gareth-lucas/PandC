var $collectionHolderIP;
var $collectionHolderRS;
var $collectionHolderRSImage;
var $collectionHolderImage;

//setup an "add an IP" link
var $addIPLink = $('<a href="#" class="add_IP_link">Add an Ingredient</a>');
var $newIPLinkDiv = $('<div></div>').append($addIPLink);

//setup an "add RS" link
var $addRSLink = $('<a href="#" class="add_RS_link">Add a Recipe Step</a>');
var $newRSLinkDiv = $('<div></div>').append($addRSLink);

//setup an "add RS Image" link
var $addRSImageLink = $('<a href="#" class="add_RS_image_link">Add a Recipe Step Image</a>');
var $newRSImageLinkDiv = $('<div></div>').append($addRSImageLink);

//setup an "add an Image" link
var $addImageLink = $('<a href="#" class="add_image_link">Add an Image</a>');
var $newImageLinkDiv = $('<div></div>').append($addImageLink);

jQuery(document).ready(function() {
	 // Get the ul that holds the collection of tags
 $collectionHolderIP = $('#appbundle_recipe_ingredientpreparationcollection_ingredientpreparations');

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
 
 // Get the ul that holds the collection of tags
 $collectionHolderImage = $('#appbundle_recipe_imagecollection_images');

 // add the "add a tag" anchor and li to the tags ul
 $collectionHolderImage.append($newImageLinkDiv);

 // count the current form inputs we have (e.g. 2), use that as the new
 // index when inserting a new item (e.g. 2)
 $collectionHolderImage.data('index', $collectionHolderImage.find(':input').length);

 $addImageLink.on('click', function(e) {
     // prevent the link from creating a "#" on the URL
     e.preventDefault();

     // add a new tag form (see next code block)
     addImageForm($collectionHolderImage, $newImageLinkDiv);
     
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

    var id = "#appbundle_recipe_ingredientPreparationCollection_ingredientPreparations_" + index + "_ingredient";
    
    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormDiv = $('<div></div>').append(newForm);
    $newLinkDiv.before($newFormDiv);
    
    addAutocomplete(id);
}

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
    
    
    $collectionHolderRSImage = $('.appbundle_recipe_recipeStepCollection_recipeStep_imageCollection_images');

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

function remove(element) {
	$me = $(element);
	$me.closest(".well").remove();
}

  function log( message ) {
    $( "<div>" ).text( message ).prependTo( "#log" );
    $( "#log" ).scrollTop( 0 );
  }

  function addAutocomplete(id) {
	  $( id ).autocomplete({
    source: auto_complete_source,
    minLength: 2,
    create: function () {
        $(this).data('ui-autocomplete')._renderItem = function (div, item) {
            return $('<div class="ui-autocomplete-div">')
                .append('<a>' + item.value + '</a>')
                .appendTo(div);
        };
    }
   });
  }
