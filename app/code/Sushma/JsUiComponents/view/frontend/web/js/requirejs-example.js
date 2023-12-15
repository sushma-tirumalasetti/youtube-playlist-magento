// console.log('I\'m loaded by requirejs');


define (['jquery'],function($){
    'use strict';
    return function(config,element){
        $.getJSON(config.base_url+'rest/V1/directory/currency', function(result){
            element.innerText = JSON.stringify(result,null,2);
        });
        // console.log(config.base_url);
        // console.log(element);
        // console.log('I\'m a requireJS AMD module',config.base_url);
    }
});