// ******************************************************
// ** YOU MUST NOT CHANGE ANY OF THE CODE IN THIS FILE **
// ** UNLESS AUTHORISED TO DO SO BY THE MODULE LEADER  **
// ******************************************************

var productsDomTree;
var homepageProductsDomTree;
var searchResultsDomTree;
var $products = null;
var $homepage = null;
var $sResults = null;
var vars = [], hash;
var q = document.URL.split('?')[1];
var productURL = "products.php";

//  Check if we have a Query String
if (q != undefined)
{	
	// Break up the Query String into the variable:value pairs
	var qs = q.split('&');
	for (var i = 0; i < qs.length; i++)
	{
		hash = qs[i].split('=');
		vars.push(hash[1]);
		vars[hash[0]] = hash[1];
	}
	
	// Check if we need to get search engine results
	if (vars["searchTerm"] != undefined)
	{
		// Need to get the search results products
		$.get(productURL + "?" + q, function( s_data )
		{
			searchResultsDomTree = $.parseXML( s_data );
			$sResults = $( searchResultsDomTree );
		});
	}
}
else
{
	// Need to get the homepage products
	$.get(productURL + "?homepage=1", function( c_data )
	{
		homepageProductsDomTree = $.parseXML( c_data );
		$homepage = $( homepageProductsDomTree );
		
		var i = 1;
		$homepage.find("prodID").each(function() {
			vars.push($(this).text());
			vars["prod" + i] = $(this).text();
			i++;
		});
	});
}
		

// Load XML as an XML DOM tree
$.get(productURL, function( data )
{
	//alert("Success :" + data);
	productsDomTree = $.parseXML( data );
	$products = $( productsDomTree );
});


function populateNav(theClass)
{
	//For each product in the XML tree
	$products.find("product").each(function() {
	
		// Get the top-level and sub-level category from the product attributes
		var top = $(this).attr("top-level-category");
		var sub = $(this).attr("sub-level-category");
		
		// Get the product title and id
		var title = $(this).find('title').text();
		var id = $(this).find('id').text();
		
		// Check if top level category list item exists
		if ($("." + theClass).find("li:contains('"+ top + "')").length == 0)
		{
			// top level category does not exist, so create it
			$("." + theClass).append("<li class='navmenuItem menuItem'>" + top + "<ul class='subMenu'></ul></li>");
		}
		
		
		// Check if sub level category list item exists
		if ($("." + theClass).find("li:contains('"+ top + "')").find("ul:first").first().find("li:contains('" + sub + "')").length == 0)
		{
			// sub level category does not exist, so create it
			$("." + theClass).find("li:contains('"+ top + "')").find("ul:first").first().append("<li class='menuItem'>" + sub + "<ul class='subMenu subsubMenu'></ul></li>");
		}
		
		// Add the product as a anchored list item in the sub menu
		$("." + theClass).find("li:contains('"+ top + "')").find("ul:first").find("li:contains('" + sub + "')").find("ul:first")
			.append("<li class='menuItem submenuItem'><a href='product.html?id=" + id + "'>" + title + "</a></li>");
		
	});
	
	// Sort out hovers
	$("." + theClass).find("li:has('ul')").hover(function() {
		$(this).find('ul:first').first().addClass("menuItemHover");
		$(this).addClass("chosenItem");
	}, function() {
		$(this).find('ul:first').first().removeClass("menuItemHover");
		$(this).removeClass("chosenItem");
	});
	
	// Sort out anchor tag styling
	$("." + theClass + " a").addClass("anchorMenuItem");
}