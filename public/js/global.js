jQuery(document).ready(function($) {
    // Set the Options for "Bloodhound" suggestion engine
    var issued = new Bloodhound({
       prefetch: '/search/',
    remote: {
        url: '/search?issued=%QUERY',
        wildcard: '%QUERY'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

     issued.initialize();
	$('#issued').typeahead({
		hint:true,
		highlight:true,
		minLength: 1
    }, 
    {
        source: issued.ttAdapter(),
	// This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
        name: 'inventory',
        displayKey:'name',

        // the key from the array we want to display (name,id,email,etc...)
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">no result found.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<a href="' + data.name + '" class="list-group-item">' + data.name + '- @' + data.specification + '</a>'
      }
        }
    });
});
