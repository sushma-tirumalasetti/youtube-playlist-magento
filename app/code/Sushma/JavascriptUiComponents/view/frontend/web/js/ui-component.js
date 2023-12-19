define(['uiComponent'], function(Component){
    'use strict';
    return Component.extend({
        defaults:{
            label:'Observables, now with property getters and setters',
            additional_charge:2,
            items:[
                {name:'Suprize Box',qty:5,  price:1.5},
                {name:'Chunck of Goo',qty:1,price:7.5}
            ],
            tracks:{
                additional_charge: true,
                items: true,
            }
        },
        rowTotal : item=>item.qty *item.price,
        total: function (){
            const sum= this.items.map(this.rowTotal)
            .reduce((acc,total)=>acc+total);
            return sum+this.additional_charge;
        }
    });
});