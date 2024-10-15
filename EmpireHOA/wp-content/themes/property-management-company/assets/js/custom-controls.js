(function(api) {

    api.sectionConstructor['property-management-company-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

    const property_management_company_section_lists = ['banner', 'service'];
    property_management_company_section_lists.forEach(property_management_company_homepage_scroll);

    function property_management_company_homepage_scroll(item, index) {
        item = item.replace(/-/g, '_');
        wp.customize.section('property_management_company_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
})(wp.customize);