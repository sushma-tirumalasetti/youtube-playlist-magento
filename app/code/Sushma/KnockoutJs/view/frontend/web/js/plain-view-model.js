define ([],function(){
    'use strict';
    return function (config){
        return {
            title :"this a very little title for a simple but good view model!",
            ccc : config,
            getTitle: function(){
                return this.title;
            }
        }
    }
});