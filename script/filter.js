jQuery(document).ready(function ($) {
    function debounce(func, wait) {
        let timeout;
        return function (...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), wait);
        };
    }

    function updateFiltersInURL(postType, category, searchTerm) {
        const params = new URLSearchParams(window.location.search);

        params.delete('post_types');
        if (postType) params.set('post_types', postType);

        params.delete('categories');
        if (category) params.set('categories', category);

        if (searchTerm) {
            params.set('search', searchTerm);
        } else {
            params.delete('search');
        }

        const newURL = `${window.location.pathname}${params.toString() ? '?' + params.toString() : ''}`;
        window.history.replaceState({}, '', newURL);
    }

    function updateChips(postType, category, searchTerm) {
        const chipsContainer = $('#chips-container');
        chipsContainer.empty();

        if (postType) {
            const postTypeName = $('#post-type-filter option[value="' + postType + '"]').text();
            chipsContainer.append('<div class="chip">' + postTypeName + '<span class="remove-chip" data-type="posttype" data-value="' + postType + '">×</span></div>');
        }

        if (category) {
            const categoryName = $('#category-filter option[value="' + category + '"]').text();
            chipsContainer.append('<div class="chip capitalize">' + categoryName + '<span class="remove-chip capitalize" data-type="category" data-value="' + category + '">×</span></div>');
        }

        if (searchTerm) {
            chipsContainer.append('<div class="chip">' + searchTerm + '<span class="remove-chip" data-type="search" data-value="' + searchTerm + '">×</span></div>');
        }
    }

    function filterResults() {
        const postType = $('#post-type-filter').val();
        const category = $('#category-filter').val();
        const searchTerm = $('#search-input').val();

        const postTypesParam = postType ? postType : ''; // Leeg betekent alle posttypes
        const categoryParam = category ? category : ''; // Leeg betekent geen filter voor categorie

        console.log('Filter values:', {
            postType: postTypesParam,  // Log post type
            category: category,  // Log category
            searchTerm: searchTerm  // Log search term
        });

        updateFiltersInURL(postTypesParam, categoryParam, searchTerm);

        $.ajax({
            url: ajaxData.ajax_url,
            type: 'POST',
            data: {
                action: 'filter_posts',
                post_types: postTypesParam,
                categories: categoryParam || '',
                search_term: searchTerm || '',
            },
            beforeSend: function () {
                $('#loading-indicator').show();
            },
            success: function (data) {
                console.log('Server Response:', data);  // Log server response
                $('#results').html(data);
            },
            error: function () {
                alert('Er ging iets mis.');
            },
            complete: function () {
                $('#loading-indicator').hide();
            },
        });

        updateChips(postType, category, searchTerm);
    }



    function initializeFiltersFromURL() {
        const params = new URLSearchParams(window.location.search);

        const postType = params.get('post_types');
        if (postType) {
            $('#post-type-filter').val(postType).trigger('change');
        }

        const category = params.get('categories');
        if (category) {
            $('#category-filter').val(category).trigger('change');
        }

        const searchTerm = params.get('search') || '';
        $('#search-input').val(searchTerm);
    }

    initializeFiltersFromURL();

    $(document).on('click', '.remove-chip', function () {
        const type = $(this).data('type');
        const value = $(this).data('value');

        $(this).parent().remove();

        if (type === 'posttype') {
            $('#post-type-filter').val('').trigger('change');
        } else if (type === 'category') {
            $('#category-filter').val('').trigger('change');
        } else if (type === 'search') {
            $('#search-input').val('');
            filterResults();
        }

        filterResults();
    });

    const debouncedFilterResults = debounce(filterResults, 10);
    $('#post-type-filter, #category-filter, #filter-button').on('change click', debouncedFilterResults);

    // Event listener voor "Enter" in zoekveld
    $('#search-input').on('keydown', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Voorkom standaard gedrag van Enter (zoals een form submit)
            debouncedFilterResults(); // Roep de filterfunctie aan
        }
    });


    filterResults();
});





