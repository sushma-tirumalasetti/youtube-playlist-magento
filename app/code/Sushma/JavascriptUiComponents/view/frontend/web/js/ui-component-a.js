define(['uiComponent'],function(Component){
    "use strict";
    return Component.extend({
        defaults:{
            label:'ComponentA',
            amount:11,
            exports:{
                // amount:'component-b:value'
                amount: 'component-b:onRecieveExport',
            }
            // tracks:{
            //     amount: true,
            // },
            // imports:{
            //     amount: 'component-b:value'
            // }
        }
    });
});