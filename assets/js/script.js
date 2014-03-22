// Write your javascripts here.

$(document).ready(function(){
    // PJAX Hooks(You can do more here).
    $(document).pjax('a:not([data-no-pjax])', '#container');

    // Check if jsminify is working?
    console.log('Hello world!')
})
