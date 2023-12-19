define (['ko','jquery'],function(ko,$){
    'use strict';
    return function(config){
        //it won't work
        // return{
        //     label:ko.observable('Currency Info'),
        //     output:ko.computed(function (){
        //         return this.label()+':';
        //     })
        // };
        let currencyInfo = ko.observable();
        $.getJSON(config.base_url + "rest/V1/directory/currency",currencyInfo);
        
        const viewModel = {
            label: ko.observable('currency-info')
        };
        viewModel.output = ko.computed(function(){
            if(currencyInfo()){
                 return this.label()+":"+JSON.stringify(currencyInfo(),null,2);

            }
            return "......loading";
        }.bind(viewModel));
        return viewModel;
    }
    // return function (config){
        
    //         const title  = ko.observable("this a very little title for a simple but good view model!");
    //         title.subscribe(function(newValue){
    //             console.log("Changed to",newValue);
    //         });
    //     title.subscribe(function(oldValue){
    //         console.log("Will be changed from",oldValue);
    //     },this,'beforeChange');
    //     return{
    //         title: title,
    //     }

    // }
});