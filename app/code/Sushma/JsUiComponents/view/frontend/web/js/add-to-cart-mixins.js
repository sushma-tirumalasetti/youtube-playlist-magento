define(['jquery'],function($){
    'use strict';

    return function(catalogAddToCart ){
        $.widget('mage.catalogAddToCart',catalogAddToCart,{
            //submit form is the method that i want to override
            submitForm: function (form){
                console.log('Add to cart successfully intercepted');
                console.log(form);
                //we use super method to call the parent method 
                return this._super(form);
            }
        });
        //returining the refrence to  constructor function that we are over riding 
        return $.mage.catalogAddToCart;
    };
});