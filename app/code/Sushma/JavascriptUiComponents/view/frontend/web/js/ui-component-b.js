define(['uiComponent'],function(Component){
    'use strict';
    return Component.extend({
        defaults:{
            title:'Component B',
            value: 5.5,
            tracks:{
                value:true,
            },
            // onRecieveExport: function (value){
            //     console.log("recieved export",value);
            // }
        }
    })
})