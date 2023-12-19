define(['uiComponent'],function(Component){
    "use strict";
    return Component.extend({
        defaults:{
            label:'ComponentA',
            amount:11,
            links:{
                amount: 'component-b:value',
            },
            tracks:{
                amount: true,
            }
            // exports:{
            //     // amount:'component-b:value'
            //     amount: 'component-b:onRecieveExport',
            // }
            // tracks:{
            //     amount: true,
            // },
            // imports:{
            //     amount: 'component-b:value'
            // }
        }
    });
});