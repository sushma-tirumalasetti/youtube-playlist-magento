define(['uiComponent'],function(Component){
    "use strict";
    return Component.extend({
        defaults:{
            label:'ComponentA',
            amount:11,
            tracks:{
                amount: true,
            },
            imports:{
                amount: 'component-b:value'
            }
        }
    });
});